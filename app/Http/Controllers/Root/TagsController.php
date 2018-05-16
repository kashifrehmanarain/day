<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\CouponTag;
use App\Models\Tags;
use Notifications;
use Title;

class TagsController extends Controller
{
    public function __construct()
    {
        Title::prepend('Admin');
    }

    public function index()
    {
        Title::prepend('Tags');

        $data = [
            'title' => Title::renderr(' : ', true),
            'tags'  => Tags::i()->allWithCouponsCount(),
        ];

        view()->share('menu_item_active', 'tags');

        return view('root.tags.index', $data);
    }

    public function newTag()
    {
        Title::prepend('New Tag');

        $data = [
            'title'    => Title::renderr(' : ', true),
            'tag' => null,
            'save_url' => route('root-tags-store'),
        ];

        return view('root.tags.tag', $data);
    }

    public function editTag($tag_id)
    {
        $tag = Tags::find($tag_id);

        Title::prepend('Edit Tag');
        Title::prepend($tag->title);

        $data = [
            'title'    => Title::renderr(' : ', true),
            'tag' => $tag,
            'save_url' => route('root-tags-store', ['tag_id' => $tag->id]),
        ];

        return view('root.tags.tag', $data);
    }

    public function store(Requests\StoreTagRequest $request, $tag_id = null)
    {
        $tag = Tags::findOrNew($tag_id);
        $tag->tag = strip_tags($request->get('tag'));
        $tag->save();

        Notifications::add('Tag saved', 'success');

        //return redirect()->route('root-tags-edit', ['tag_id' => $tag->id]);
        return redirect()->route('root-tags');
    }


    public function clearOrphaned()
    {
        $tags = Tags::i()->allWithCouponsCount();
        foreach ($tags as $tag) {
            if ($tag->num == 0) {
                Tags::destroy($tag->id);
            }
        }
        Notifications::add('Empty tags removed', 'success');

        return redirect()->back();
    }

    public function remove($tag_id)
    {
        Tags::destroy($tag_id);
        CouponTag::where(['tag_id' => $tag_id])->delete();

        Notifications::add('Tag removed', 'success');

        return redirect()->back();
    }
}
