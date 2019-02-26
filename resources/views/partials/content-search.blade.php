<article @php post_class() @endphp>
  <header>
    <div class="search__img-wrap">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('large', array('class' => 'archive__img'));?>
        <div class="search_description-wrap"><!--mask for hover effect-->
        <h2 class="search__title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      @if (get_post_type() === 'post')
        <!-- @include('partials/entry-meta') @todo-->
        <div class="search__description-wrap-child">
          <p class="search__tag">{!! the_tags('', ' / ', ''); !!}</p>
        </div>
      @endif
  </header>
  <!-- <div class="entry-summary">
    @php the_excerpt() @endphp
  </div> @todo-->
</article>
