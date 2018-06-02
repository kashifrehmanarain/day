<?php

namespace App\Http\Controllers;
use Title;
use Conf;

class PagesController extends Controller
{
    public function __construct()
    {
        Title::prepend(Conf::get('app.sitename'));
    }
    public function view($page_name)
    {
        if (!view()->exists('site.pages.'.$page_name)) {
            return abort(404);
        }

        return view('site.pages.'.$page_name);
    }
}
