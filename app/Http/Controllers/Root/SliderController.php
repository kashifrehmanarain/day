<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Slider;
use Intervention\Image\Facades\Image;
use Notifications;
use Title;

class SliderController extends Controller
{
    public function __construct()
    {
        Title::prepend('Admin');
    }

    public function index()
    {
        Title::prepend('Slider');

        $data = [
            'title'      => Title::renderr(' : ', true),
            'slider' => Slider::i()->all(),
        ];

        view()->share('menu_item_active', 'slider-images');

        return view('root.slider.index', $data);
    }

    public function newImage()
    {
        Title::prepend('New Image');

        $data = [
            'title'    => Title::renderr(' : ', true),
            'image' => null,
            'save_url' => route('root-slider-images-store'),
        ];

        return view('root.slider.image', $data);
    }

    public function editImage($image_id)
    {
        $image = Slider::find($image_id);

        Title::prepend('Edit Image');
        Title::prepend($image->title);

        $data = [
            'title'    => Title::renderr(' : ', true),
            'image' => $image,
            'save_url' => route('root-slider-images-store', ['image_id' => $image->id]),
        ];

        return view('root.slider.image', $data);
    }

    public function store(Requests\StoreSliderRequest $request, $image_id = null)
    {
        $image = Slider::findOrNew($image_id);
        $image->title = strip_tags($request->get('title'));
        $image->description = $request->get('description');
        $image->url = $request->get('url');
        $image->sort = $request->has('sort');
        if ($request->hasFile('image')) {
            $filename = $this->_uploadMiniature($request->file('image'));
            $image->image = $filename;
        }
        $image->save();

        Notifications::add('Image saved', 'success');

        return redirect()->route('root-slider-images');
    }

    public function remove($image_id)
    {
        $image = Slider::find($image_id);
        $image->delete();
        return redirect()->route('root-slider-images');
    }

    private function _uploadMiniature($file)
    {
        $path = public_path('upload');
        $thumb_path = public_path('upload/thumb');
        $filename = generate_filename($path, $file->getClientOriginalExtension());
        $file->move($path, $filename);

        $img = Image::make(sprintf($path.'/%s', $filename));

        $img->resize(800, 500);
        $img->save(sprintf($thumb_path.'/800/%s', $filename));

        $img->resize(150, 100);
        $img->save(sprintf($thumb_path.'/150/%s', $filename));

        return $filename;
    }

}
