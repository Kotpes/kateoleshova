@extends('layouts.base')

@section('content')
  @include('partials.page-header')
  <main class="main">


    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif


    @while (have_posts()) @php(the_post())
      @include('partials.content-post', ['post_type' => 'previous-post', 'featured_image' => 'previous-post-liftup'])
    @endwhile

    @if(get_next_posts_link() != NULL)
      @include('partials.pagination')
    @endif

  <main class="main">
@endsection
