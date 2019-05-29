@extends('layouts.app')

<?php 
  $article_eyecatch = get_field('article_eyecatch', '3216')
?>

<div class="article__overview">
  <img class="article__eyecatch" src="<?php the_field('article_eyecatch'); ?>" />
</div>

@section('content')
  @while(have_posts()) 
    @php 
      the_post() 
    @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
