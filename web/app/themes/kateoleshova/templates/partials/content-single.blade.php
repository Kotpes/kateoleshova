<article @php(post_class())>
    <header>
        <h1 class="entry-title">{{ get_the_title() }}</h1>
        @include('partials/entry-meta')
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
                            <div class="slider">
                                @foreach($images as $image)

                                    <div class="post-slide">
                                        <img src="{{$image['sizes']['large']}}" alt="{{$image['alt']}}" />
                                    </div>

                                @endforeach
                            </div>
                            <div class="slider-nav">
                                @foreach($images as $image)

                                    <div class="post-slide-nav">
                                        <img src="{{$image['sizes']['slider-thumb']}}" alt="{{$image['alt']}}" />
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


    <footer>
        {!! wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php(comments_template('/templates/partials/comments.blade.php'))
</article>
