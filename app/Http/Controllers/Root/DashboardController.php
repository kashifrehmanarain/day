<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Models\Coupons;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Title;

class DashboardController extends Controller
{
    public function __construct()
    {
        Title::prepend('Admin');
    }

    public function index()
    {
//        echo "<pre>"; print_r(Auth::user()->role); echo "</pre>";die;
        view()->share('menu_item_active', 'index');
        Title::prepend('Dashboard');

        $data = [
            'title'            => Title::renderr(' : ', true),
            'coupons_total'      => Coupons::count(),
            'coupons_active'     => Coupons::where('status', 'active')->count(),
            'coupons_draft'      => Coupons::where('status', 'draft')->count(),
            'coupons_moderation' => Coupons::where('status', 'moderation')->count(),
            'users_total'      => Users::count(),
            'users_active'     => Users::where('active', '1')->count(),
            'users_inactive'   => Users::where('active', '0')->count(),
            'latest_coupons'     => Coupons::active()->orderBy('published_at', 'desc')->limit(5)->get(),
            'popular_coupons'    => Coupons::active()->orderBy('views', 'desc')->limit(5)->get(),
        ];

        return view('root.dashboard.index', $data);
    }
}
