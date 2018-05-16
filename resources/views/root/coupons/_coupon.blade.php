<tr class="{{ $coupon->is_pinned == '1' ? 'warning' : '' }} {{ in_array($coupon->status, ['draft', 'deleted', 'refused']) ? 'active' : '' }}">
    <td>
        <div>
            {{ $coupon->id }}
        </div>
        <div>
            <span title="Views" class="label label-{{ ($coupon->views > 0) ? 'success' : 'danger' }}">{{ $coupon->views or '0' }}</span>
        </div>
    </td>
    <td>
        <div>
            <a href="{{ route('root-coupon-edit', ['coupon_id' => $coupon->id]) }}">{!! highlight_str($coupon->title, $q) !!}</a>
            @if($coupon->status == 'draft')
                <span class="purple-text">Draft</span>
            @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="post-options">
                    <a href="{{ route('view', ['slug' => $coupon->slug]) }}" target="_blank"
                       class="brown-text">View</a>
                    <a href="{{ route('root-coupon-edit', ['coupon_id' => $coupon->id]) }}"
                       class="brown-text">Edit</a>
                    @if($coupon->status == 'active')
                        <a href="{{ route('root-coupon-to-draft', ['coupon_id' => $coupon->id]) }}"
                           class="brown-text">To Draft</a>
                    @else
                        <a href="{{ route('root-coupon-to-active', ['coupon_id' => $coupon->id]) }}"
                           class="brown-text">Publish</a>
                    @endif
                    @if($coupon->status != 'deleted')
                        <a href="{{ route('root-coupon-to-deleted', ['coupon_id' => $coupon->id]) }}"
                           class="brown-text">Delete</a>
                    @else
                        <a href="{{ route('root-coupon-to-draft', ['coupon_id' => $coupon->id]) }}"
                           class="brown-text">Recover</a>
                    @endif
                    @if($coupon->is_pinned)
                        <a href="{{ route('root-coupon-unpin', ['coupon_id' => $coupon->id]) }}"
                           class="brown-text">Unpin</a>
                    @else
                        <a href="{{ route('root-coupon-pin', ['coupon_id' => $coupon->id]) }}"
                           class="brown-text">Pin</a>
                    @endif
                </div>
            </div>
            <div class="col-md-6 text-right">
                <div class="post-category text-muted pull-right">
                    <div class="dropdown">
                        <a id="drop3" class="dropdown-toggle btn btn-xs btn-{{ ($coupon->category_id == '1' ? 'danger' : 'info') }}"
                           aria-expanded="false" aria-haspopup="true"
                           role="button" data-toggle="dropdown" href="#">
                            {{ $coupon->category->title }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            @foreach($categories as $category)
                                <?php if($category->id == $coupon->category_id) continue; ?>
                                <li><a href="{{ route('root-coupon-to-category', ['coupon_id' => $coupon->id, 'category_id' => $category->id]) }}">{{ $category->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </td>
    <td>
        <div>
            {{ date('Y.m.d H:i', strtotime($coupon->published_at)) }}
        </div>
        <div>
            <small class="text-muted">{{ hdate($coupon->published_at) }}</small>
        </div>
    </td>
</tr>
