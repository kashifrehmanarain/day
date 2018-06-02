@if($items->count() > 0)
    <div class="footer-col col-sm-6">
        <div class="footer-links">
            <h2 class="color-lighter">Quick Links</h2>
            <ul>
                @foreach($items as $item)
                    <?php
                    $uri = '/' . trim(Request::path(), '/');
                    ?>
                    <li class="{{ isset($menu_item_active) && $menu_item_active == $item->active_item ? 'active' : ($uri == $item->url) ? 'active' : '' }}">
                        <a class="" href="{{ $item->url }}" {{ $item->on_blank == 1 ? 'target="_blank"' : '' }}>
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif