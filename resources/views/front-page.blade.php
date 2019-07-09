<!-- front-page - when accessed suzydp.net for the first time -->
@extends('layouts.app')
@section('content')
  <!-- @include('partials.page-header') -->
<section id="top" class="top">
  <div class="top__title-wrap">
    <h2 class="top__title"><?php bloginfo( 'name' ); ?></h2>
    <h3 class="top__description"><?php bloginfo( 'description' )?></h3>
    <ul class="social">
      <a href="https://www.linkedin.com/in/kaaisuzuki/" target="_blank"><li><i class="fab fa-linkedin" target="_blank"></i><!--linkedin--></li></a>
      <a href="https://dribbble.com/suzydp" target="_blank"><li><i class="fab fa-dribbble"></i><!--dribbble--></li></a>
      <a href="https://github.com/suzydp/" target="_blank"><li><i class="fab fa-github"></i><!--github--></li></a>
      <a href="https://www.instagram.com/suzydp/" target="_blank"><li><i class="fab fa-instagram"></i><!--instagram--></li></a>
      <a href="http://dp00.tumblr.com/" target="_blank"><li><i class="fab fa-tumblr"></i><!--tumblr--></li></a>
      <a href="http://pinterest.com/suzydp" target="_blank"><li><i class="fab fa-pinterest"></i><!--pinterest--></li></a>
    </ul>
  </div>
  <div class="top__img-wrap">
    <img class="top__logo" src="<?= get_template_directory_uri(); ?>/assets/svg/szdplogo-for-web_animated.svg" />
  </div>
</section>
  <div class="scroll-to-main">
    <a id="scroll__to-works" class="scroll-arrow to-works" href="#works">Scroll Me</a>
  </div>

  <section id="works" class="works">
    <h2 class="section__title">Case Study</h2>
    <div class="works__wrap">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif
      
      <?php
        global $post;
        $args = (array(
          'posts_per_page' => 6, // numbers of pages appearing
          'category' => '4' // Cateogory ID (category_name is also available with slag)
        ));
        $posts = get_posts($args);
          foreach($posts as $post):
            setup_postdata($post); ?>
        <div class="works__img-wrap wow fadeInUp">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', array('class' => 'works__img'));?>
            <div class="works__description-wrap">
              <?php the_title('<h3 class="works__title">', '</h3>'); ?>
              <p class="works__tag"><?php the_tags('', ' / ', '');?></p>
            </div>
          </a>
        </div>
      <?php 
        endforeach;
        wp_reset_postdata(); 
      ?>
    </div>
    <a class="button draw meet" href="<?php echo(get_category_link(5))?>">View More</a>

  </section>

  <!-- bio/skills -->
  <section id="bio" class="bio">
    <div class="section__sticky-wrap">
      <h2 class="section__title_bio">BIOGRAPHY</h2>
      <div class="bio__img_wrap">
        <img class="bio__img wow fadeIn" src="<?= get_template_directory_uri(); ?>/assets/images/profile.jpg" />
        <p class="bio__caption">
          Photo by <a class="bio__caption_link" href="http://yoshiro-hayakawa.com/" target="_blank">Yoshiro
            Hayakawa</a>
        </p>
      </div>
      <div class="bio__text">
        <h3 class="bio__name"><?php echo get_field('bio_intro', '2344'); ?></h3>
        <p class="bio__description">
          <?php echo get_field('bio_txt', '2344'); ?>
        </p>
        <ul class="bio__description_link">
          <?php 
            $link_linkedin = get_field('bio_link_linkedin', '2344');
            
              $link_linkedin_url = $link_linkedin['url'];
              $link_linkedin_title = $link_linkedin['title'];
              $link_linkedin_target = $link_linkedin['target'] ? $link_linkedin['target'] : '_blank';
          ?>
            <li class="bio__description_link_list">
              <a href="<?php echo esc_url($link_linkedin_url); ?>" target="<?php esc_attr($link_linkedin_target); ?>"><?php echo esc_html($link_linkedin_title); ?></a>
            </li>
          <?php
            $link_resume = get_field('bio_link_resume', '2344');
            if($link_resume):
              $link_resume_url = $link_resume['url'];
              $link_resume_title = $link_resume['title'];
              $link_resume_target = $link_resume['target'] ? $link_resume['target'] : '_blank';
          ?>
            <li class="bio__description_link_list">
              <a href="<?php echo esc_url($link_resume_url); ?>" target="<?php esc_attr($link_resume_target); ?>"><?php echo esc_html($link_resume_title); ?></a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
      <div class="skills" id="skills">
        <div class="skills__container">
          <h2 class="section__title_skills">SKILLS</h2>
          <!-- TODO: id in parametor must be equal to PAGE ID -->
          <?php the_field( 'skills_editor', '3291' ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- {!! get_the_posts_navigation() !!} -->
@endsection
