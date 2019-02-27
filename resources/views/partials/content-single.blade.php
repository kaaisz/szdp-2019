<article @php post_class() @endphp>
  <header>
    <div class="article__title-wrap">
      <h1 class="article__title left">{!! get_the_title() !!}</h1>
      <div class="article__detail_wrap">
        <!-- @include('partials/entry-meta') -->
        <p class="article__description">{!! post_custom('description'); !!}</p>
        <h3 class="article__detail">Responsibility</h3>
        <p class="article__detail_description">{!! post_custom('responsibility'); !!}</p>
        <h3 class="article__detail">Created with</h3>
        <p class="article__detail_description">{!! post_custom('created_with'); !!}</p>
        <?php
          $customfield = get_post_meta($post->ID, 'website_url', true);
          if ($customfield) { ?>
            <a class="article__link" href="{!! post_custom('website_url'); !!}">See the website</a>
        <?php } ?>
      </div>
    </div>
  </header>
    @php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('large', array('class' => 'article__img_xl'));
      };
    @endphp
  <div class="article__main">
    <div class="entry-content">
      <?php
        // to disable <p>
        remove_filter('the_content', 'wpautop');
        the_content();
      ?>
    </div>
  </div>

  <div class="related-article">
    <h2 class="related-article__title">See other Projects</h2>
    <div class="related-article__content-wrap">
    <?php
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
    ?>
      <div class="related-article__content">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('large', array('class' => 'related-article__img'));?>
          <h3><?php the_title(); ?></h3>
        </a>
      </div>
        <?php 
        } 
        wp_reset_query();
      } else {
        echo 'No pages are found.';
      }
         ?>
    </div>
    <div class="pager__wrap">
      <span class="pager__arrow-left"></span>
        <p class="pager left">{!! previous_post_link('%link', '%title', true, ''); !!}</p>
        <p class="pager right">{!! next_post_link('%link', '%title', true, ''); !!}</p>
      <span class="pager__arrow-right"></span>
    </div>
  </div>
  
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
