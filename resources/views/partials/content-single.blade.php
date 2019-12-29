<article @php post_class() @endphp>
  <header>
    <div class="article__title-wrap">
      <h1 class="article__title left">{!! get_the_title() !!}</h1>
      <div class="article__detail_wrap">
        {{-- @include('partials/entry-meta') --}}
        <p class="article__description">{!! the_field('article_description'); !!}</p>
        @if ( get_field( 'article_responsibility' ) )
          <h3 class="article__detail">Responsibility</h3>
          <p class="article__detail_description">{!! the_field('article_responsibility') !!}</p>
        @endif
        @if ( get_field( 'article_created_with' ) )
          <h3 class="article__detail">Created with</h3>
          <p class="article__detail_description">{!! the_field('article_created_with') !!}</p>
        @endif
        @if ( get_field('article_source_url') )
          <a class="article__link" href="{!! the_field('article_source_url') !!}">See the website</a>
        @endif
      </div>
    </div>
  </header>
  <img class="article__img_xl" src="{!! the_field( 'article_eyecatch' ) !!}" />
  <div class="article__main">
    <div class="entry-content">
      @if( have_rows('article_section') )
        @while( have_rows('article_section') )
          @php
            the_row();

            // to disable <p>
            remove_filter('the_content', 'wpautop');
          @endphp
          <div class="article__main_content">
            <h2 class="article__section-title">{{ get_sub_field('article_section_title') }}</h2>
            <h2 class="article__section-subtitle">{{ get_sub_field('article_section_subtitle') }}</h2>
            {!! get_sub_field('article_section_desc') !!}
          </div>
          {!! get_sub_field('article_section_img') !!}
        @endwhile
      @endif
      {{-- extra content from editor --}}
      {{ the_content() }}
    </div>
  </div>

  <section class="related-article">
    <h2 class="related-article__title">Other Projects</h2>
    <div class="related-article__content-wrap">
    @php
      // if some of categories are set, get either one by random
      $categories = wp_get_post_categories($post -> ID, array('orderby' => 'rand'));
      // setting up element from all the articles
      if($categories) {
        $args = array(
          'category__in' => array($categories[0]), // get category by ID
          'post__not_in' => array($post -> ID), // exclude articles which is already shown
          'showposts' => 3, // numbers of articles which you want to get
          'caller_get_posts' => 1, // to show the articles from number 1
          'orderby' => 'rand' // random order
        );
      }
      $query = new WP_Query($args);
      if( $query -> have_posts() ) {
        while( $query -> have_posts() ) {
          $query -> the_post();
    @endphp
      <div class="related-article__content">
        <a href="{{ the_permalink() }}">
          {{ the_post_thumbnail('large', array('class' => 'related-article__img')) }}
          <h3 class="related-article__content-title">{{ the_title() }}</h3>
        </a>
      </div>
    @php
      }
        wp_reset_query();
      } else {
        echo 'No pages are found.';
      }
    @endphp
    </div>
    <div class="pager__wrap">
      <span class="pager__arrow-left"></span>
        <p class="pager left">{!! previous_post_link('%link', '%title', true, '') !!}</p>
        <p class="pager right">{!! next_post_link('%link', '%title', true, '') !!}</p>
      <span class="pager__arrow-right"></span>
    </div>
  </section>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
