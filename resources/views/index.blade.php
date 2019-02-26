@extends('layouts.app')
@section('content')
  <section id="archive" class="archive">
    <h1 class="section__title">WORKS</h1>

    <div class="archive__flex-wrap">

      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif

      <?php 
        $posts = get_posts(array(
          'posts_per_page' => 10, // @todo THIS IS NOT ACTIVE
          'category' => 'personal-work'
        ));
        $cnt = 0;
        while(have_posts()) : the_post(); ?>

        <div class="archive__img-wrap">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', array('class' => 'archive__img'));?>
            <div class="archive_description-wrap">
              <h3 class="archive__title">{!! the_title(); !!}</h3>
              <div class="archive__description-wrap-child">
                <p class="archive__tag">{!! the_tags('', ' / ', ''); !!}</p>
                <p class="archive__description">This is a kind of Web magazine which curated by me, as my 2nd vision.
                  Pictures are purposely ordered arrenging random to trying
                  to keep our eyes each piece of pictures without reading.</p>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
      <div class="pager__wrap">
        <span class="pager__arrow-left"></span>
          <p class="pager left">{!! previous_posts_link( 'Newer Posts' ); !!}</p>
          <p class="pager right">{!! next_posts_link( 'Older Posts', '' ); !!}</p>
        <span class="pager__arrow-right"></span>
      </div>
    </section>
@endsection
