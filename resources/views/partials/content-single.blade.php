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
        echo '<div class="article__img_xl">';
        the_post_thumbnail();
        echo '</div>';
      };
    @endphp
  <div class="entry-content">
    <?php 
      //  disable <p> 
      remove_filter('the_content', 'wpautop');
      the_content();
    ?>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
