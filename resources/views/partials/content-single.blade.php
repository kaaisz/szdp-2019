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
      @php
        // to disable <p> 
        remove_filter('the_content', 'wpautop');
        the_content();
      @endphp
    </div>
  </div>
  <div class="related-article">
    <h2 class="related-article__title">See other Projects</h2>
    <div class="related-article__content-wrap">
      <div class="related-article__content">
        <a href="zmagazine.html">
          <img class="related-article__img" src="https://dummyimage.com/800x600/000000/fff" />
          <h3>Z magazine</h3>
        </a>
      </div>
      <div class="related-article__content">
        <a href="zmagazine.html">
          <img class="related-article__img" src="https://dummyimage.com/800x600/000000/fff" />
          <h3>MyLocal</h3>
        </a>
      </div>
      <div class="related-article__content">
        <a href="zmagazine.html">
          <img class="related-article__img" src="https://dummyimage.com/800x600/000000/fff" />
          <h3>PARC website</h3>
        </a>
      </div>
    </div>
    <div class="pager__wrap">
      <span class="pager__arrow-left"></span>
        <p class="pager left">{!! previous_post('%', '', yes); !!}</p>
        <p class="pager right">{!! next_post('%', '', yes); !!}</p>
      <span class="pager__arrow-right"></span>
    </div>
  </div>
  
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
