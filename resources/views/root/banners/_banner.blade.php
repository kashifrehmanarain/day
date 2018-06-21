<tr class="{{ $banner->is_pinned == '1' ? 'warning' : '' }} {{ in_array($banner->status, ['draft', 'deleted', 'refused']) ? 'active' : '' }}">
    <td>
        <div>
            {{ $banner->id }}
        </div>
        <div>
            <span title="Views" class="label label-{{ ($banner->views > 0) ? 'success' : 'danger' }}">{{ $banner->views or '0' }}</span>
        </div>
    </td>
    <td>
        <div>
            <a href="{{ route('root-banner-edit', ['banner_id' => $banner->id]) }}">{!! highlight_str($banner->title, $q) !!}</a>
            @if($banner->status == 'draft')
                <span class="purple-text">Draft</span>
            @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="post-options">
                    <a href="{{ route('view', ['slug' => $banner->slug]) }}" target="_blank"
                       class="brown-text">View</a>
                    <a href="{{ route('root-banner-edit', ['banner_id' => $banner->id]) }}"
                       class="brown-text">Edit</a>
                    @if($banner->status == 'active')
                        <a href="{{ route('root-banner-to-draft', ['banner_id' => $banner->id]) }}"
                           class="brown-text">To Draft</a>
                    @else
                        <a href="{{ route('root-banner-to-active', ['banner_id' => $banner->id]) }}"
                           class="brown-text">Publish</a>
                    @endif
                    @if($banner->status != 'deleted')
                        <a href="{{ route('root-banner-to-deleted', ['banner_id' => $banner->id]) }}"
                           class="brown-text" onclick="return confirm('Are you sure?');">Delete</a>
                    @else
                        <a href="{{ route('root-banner-to-draft', ['banner_id' => $banner->id]) }}"
                           class="brown-text">Recover</a>
                    @endif
{{--
                    @if($banner->is_pinned)
                        <a href="{{ route('root-banner-unpin', ['banner_id' => $banner->id]) }}"
                           class="brown-text">Unpin</a>
                    @else
                        <a href="{{ route('root-banner-pin', ['banner_id' => $banner->id]) }}"
                           class="brown-text">Pin</a>
                    @endif
--}}
                </div>
            </div>
        </div>
    </td>
    <td>
        <div>
            {{ date('Y.m.d H:i', strtotime($banner->published_at)) }}
        </div>
        <div>
            <small class="text-muted">{{ hdate($banner->published_at) }}</small>
        </div>
    </td>
</tr>
