<!-- front-page - when accessed suzydp.net for the first time -->
@extends('layouts.app')
@section('content')
  <!-- @include('partials.page-header') -->
<section id="top" class="top">
  <div class="top__title-wrap">
    <h2 class="top__title"><?php bloginfo(); ?></h2>
    <h3 class="top__description">UI/UX designer, Front-end developer<br />Based in Vancouver, Canada</h3>
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
    <a id="scroll__to-works" class="scroll-arrow to-works" href="#works">↓Case Study</a>
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
          'category' => '185' // Cateogory ID (category_name is also available with slag)
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
    <a class="button draw meet" href="<?php echo(get_category_link(3))?>">View More</a>

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
          <a href="<?php echo get_field('bio_link_linkedin', '2344'); ?>">
            <li class="bio__description_link_list">See the Profile on LinkedIn</li>
          </a>
          <a href="<?php echo get_field('bio_link_resume', '2344'); ?>">
            <li class="bio__description_link_list">Resume</li>
          </a>
        </ul>
      </div>
      <div class="skills" id="skills">
        <div class="skills__container">
          <h2 class="section__title_skills">SKILLS</h2>
          <div class="skills__content">
            <h3 class="skills__head">Design</h3>
            <div class="skills__list">
              <h4>UI design and Graphic design</h4>
              <p>
                Illustrator / Photoshop / Sketch / Figma / Indesign / XD / Invision Studio
              </p>
              <h4>Prototyping</h4>
              <p>
                Figma with Principle / XD / Invision Studio
              </p>
              <h4>Typography / ColorSheme</h4>
              <h4>Digital / Analog Illustration</h4>
              <h4>Knowledge of UX strategy</h4>
            </div>
          </div>
          <div class="skills__content">
            <h3 class="skills__head">Development</h3>
            <div class="skills__list">
              <h4>Responsive Website Development</h4>
              <p>
                HTML / CSS and Sass with BEM, OOCSS or SMACSS (compile with Gulp) / Javascript / Bootstrap / jQuery / GSAP / Git
              </p>
              <h4>Wordpress Development</h4>
              <p>
                Creating Wordpress theme / Knowledge of plugins
              </p>
              <h4>Web App development</h4>
              <p>
                PHP / MySQL / React.js / Webpack / Material UI / Develop with Web API / Node.js (with Express framework) / MongoDB / Redux
              </p>
              <h4>Other</h4>
              <p>
                Google Apps(Docs, sheets, slides and forms including to use Google Apps Script) / Google Analytics / Google Optimize / SEO solution
              </p>
            </div>
          </div>
          <!-- <div class="skills__content">
            <h3 class="skills__head">Outside of work</h3>
            <div class="skills__list">
              <p>Kaai is Electronic music(Particularly Ambient Music), Yoga enthusiast and gallery-goers who really loves exploring art pieces, new music, and fashion. She is always seeking fields for challenge something to push outside her comfort zone especially about improving her creativity.</p>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- {!! get_the_posts_navigation() !!} -->
@endsection
