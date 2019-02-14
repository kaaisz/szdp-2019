<article @php post_class() @endphp>
  <header>
    <div class="article__title-wrap">
      <h1 class="article__title left">{!! get_the_title() !!}</h1>
      <div class="article__detail_wrap">
        @include('partials/entry-meta')
      </div>
    </div>
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
