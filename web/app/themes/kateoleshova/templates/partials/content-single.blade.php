<article @php(post_class())>
    <header class="post-header" style="background-image: url( @php(the_post_thumbnail_url('first-post-liftup')) );">
        <div class="darken-image"></div>
        <div class="post-meta">
            <h1 class="post-title">{{ get_the_title() }}</h1>
            @include('partials/entry-meta')
        </div>
    </header>


    <div class="entry-content">

        @if($post->post_content !== '')

            @php(the_content())

        @else

            @if(have_rows('flexible_content'))

                @while(have_rows('flexible_content')) @php(the_row())

                @if( get_row_layout() == 'general_content_block' )

                    @php(the_sub_field('general_content'))

                @elseif( get_row_layout() == 'content_slideshow' )

                    @php($images = get_sub_field('slides'))

                    @if ($images)

                        <div class="post-slides">
                            <div class="pinterest-element">
                                <a data-pin-tall="true" href="https://www.pinterest.com/pin/create/button/">
                                    <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png"/>
                                </a>
                            </div>
                            <div class="slider">
                                @foreach($images as $image)

                                    <div class="post-slide">
                                        <img data-lazy="{{$image['sizes']['large']}}" alt="{{$image['alt']}}"/>
                                    </div>

                                @endforeach
                            </div>
                        </div>

                    @endif

                @endif

                @endwhile

            @endif

        @endif
    </div>
    <div class="taxonomy-section">

       @php(the_category())

    </div>

    @php(comments_template('/templates/partials/comments.blade.php'))
</article>
