@php(
    $first_post = true
)
@extends('layouts.base')

    @section('content')
        <main class="main">

            @while(have_posts()) @php(the_post())

            @if( !is_paged() && ($first_post || is_sticky()) )
                @include('partials.content-post', ['post_type' => 'first-post', 'featured_image' => 'first-post-liftup'])
                @php($first_post = false)
            @else
                @include('partials.content-post', ['post_type' => 'previous-post', 'featured_image' => 'previous-post-liftup'])
            @endif

            @endwhile

            @if(get_next_posts_link() != NULL)
                @include('partials.pagination')
            @endif

        </main>

    @endsection

