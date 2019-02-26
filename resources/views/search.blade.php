@extends('layouts.app')

@section('content')
  <section>
    @include('partials.page-header')

    @if (!have_posts())
      <div class="alert alert-warning not-found__description">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while(have_posts()) @php the_post() @endphp
      @include('partials.content-search')
    @endwhile

    {!! get_the_posts_navigation() !!}
@endsection
