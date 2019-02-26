@extends('layouts.app')

@section('content')
  <section>
    @include('partials.page-header')

    @if (!have_posts())
      <div class="alert alert-warning not-found__description">
        {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif
  </section>
@endsection
