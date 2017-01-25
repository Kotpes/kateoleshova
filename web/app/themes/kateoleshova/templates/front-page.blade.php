@php(
    $first_post = true
)
@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())

    @if( $first_post || is_sticky() )
        @include('partials.content-first-post')
        @php($first_post = false)
    @else
        @include('partials.content-post')
    @endif

  @endwhile
@endsection
