<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Slider;
use App\Models\Coupons;
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
        $image->save();

        Notifications::add('Image saved', 'success');

        return redirect()->route('root-slider-images');
    }

    public function remove($image_id)
    {
        $image = Slider::find($image_id);
        $image->delete();
        if (request()->get('with_coupons', '0') == '1') {
            Coupons::where('image_id', $image_id)->delete();
            Notifications::success('Image removed with coupons');
        } else {
            Coupons::where('image_id', $image_id)->update(['image_id' => '1']);
            Notifications::success('Image removed. Coupons moved to Uncategorized');
        }

        return redirect()->route('root-slider');
    }
}
