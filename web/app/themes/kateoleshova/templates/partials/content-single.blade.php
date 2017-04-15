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

        @endif

    </div>
    <div class="taxonomy-section">

       @php(the_category())

    </div>

    @php(comments_template('/templates/partials/comments.blade.php'))
</article>
