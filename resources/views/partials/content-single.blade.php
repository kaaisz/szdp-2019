<article @php post_class() @endphp>
  <header>
    <div class="article__title-wrap">
      <h1 class="article__title left">{!! get_the_title() !!}</h1>
      <div class="article__detail_wrap">
        @include('partials/entry-meta')
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
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
