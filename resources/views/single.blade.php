@extends('layouts.app')

<?php
  $article_description = get_field('article_description', '3216');
  $article_eyecatch = get_field('article_eyecatch', '3216');
  $article_responsibility = get_field('article_responsibility', '3216');
  $article_created_with = get_field('article_created_with', '3216');
  $article_source_url = get_field('article_source_url', '3216');
  $article_github_url = get_field('article_github_url', '3216');
?>

@section('content')
  @while(have_posts()) 
    @php 
      the_post() 
    @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
