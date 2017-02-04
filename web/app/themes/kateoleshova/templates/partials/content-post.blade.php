@php
    $month      = get_the_date("M");
    $date       = get_the_date("j");
    $year       = get_the_date("Y");
    $categories = get_categories();
@endphp

@if(has_post_thumbnail())
    <div class="{{$post_type}}" style="background-image: url( @php(the_post_thumbnail_url($featured_image)) );">
@else
    <div class="{{$post_type}} no-image">
@endif
    <a href="@php(the_permalink())" class="block-link">
        <div class="darken-image"></div>
        <div class="post-content">
            <div class="post-date">
                <div class="post-date__date">
                    {{ $date . ' ' . $month }}
                </div>
                <div class="post-date__year">
                    {{ $year }}
                </div>
            </div>
            <div class="post-title">
                <h2>@php(the_title())</h2>
            </div>
        </div>
        <div class="post-details">
            <div class="post-categories">
                <ul>
                    @foreach($categories as $category)
                        <li>{{$category->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </a>
</div>
