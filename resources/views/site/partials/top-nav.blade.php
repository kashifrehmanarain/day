<div class="header-menu bg-blue">
    <div class="container">
        <nav class="nav-bar">
            <div class="nav-header">
                            <span class="nav-toggle" data-toggle="#header-navbar">
		                        <i></i>
		                        <i></i>
		                        <i></i>
		                    </span>
            </div>
            <div id="header-navbar" class="nav-collapse">
                <ul class="nav-menu">
                    @foreach($items as $item)
                        <?php
                        $uri = '/' . trim(Request::path(), '/');
                        ?>
                        <li class="{{ isset($menu_item_active) && $menu_item_active == $item->active_item ? 'active' : ($uri == $item->url) ? 'active' : '' }}">
                            <a href="{{ $item->url }}" {{ $item->on_blank == 1 ? 'target="_blank"' : '' }}>
                                {{ $item->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="nav-menu nav-menu-fixed">
                <a href="/coupons">Black Friday</a>
            </div>
        </nav>
    </div>
</div>
