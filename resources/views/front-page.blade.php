<!-- front-page - when accessed suzydp.net for the first time -->
@extends('layouts.app')
@section('content')
  <!-- @include('partials.page-header') -->
<section id="top" class="top">
  <div class="top__title-wrap">
    <h2 class="top__title">SZDP/Kaai Suzuki</h2>
    <h3 class="top__description">D is for Design and Development.<br>P is for Plan and Programming.</h3>
    <ul class="social">
      <a href="https://www.facebook.com/suzydp" target="_blank">
        <li><i class="fab fa-facebook-f"></i></li><!--facebook-->
      </a>
      <a href="https://www.linkedin.com/in/kaaisuzuki/" target="_blank">
        <li><i class="fab fa-linkedin" target="_blank"></i></li><!--linkedin-->
      </a>
      <a href="https://www.instagram.com/suzydp/" target="_blank">
        <li><i class="fab fa-instagram"></i></li><!--instagram-->
      </a>
      <a href="https://github.com/suzydp/" target="_blank">
        <li><i class="fab fa-github"></i></li><!--github-->
      </a>
      <a href="https://dribbble.com/suzydp" target="_blank">
        <li><i class="fab fa-dribbble"></i></li><!--dribbble-->
      </a>
      <a href="http://dp00.tumblr.com/" target="_blank">
        <li><i class="fab fa-tumblr"></i></li><!--tumblr-->
      </a>
    </ul>
  </div>
  <div class="top__img-wrap">
    <img class="top__logo" src="<?= get_template_directory_uri(); ?>/assets/svg/szdplogo-for-web_animated.svg" />
  </div>
</section>
  <div class="scroll-to-main">
    <a id="scroll__to-works" class="scroll-arrow to-works" href="#works">↓Works</a>
  </div>

  <section id="works" class="works">
    <h2 class="section__title">Case Study</h2>
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
      
      <a class="button draw meet" href="<?php echo(get_category_link(3))?>">View More</a>

  </section>

  <!-- bio/skills -->
  <section id="bio" class="bio">
    <h2 class="section__title left">BIOGRAPHY</h2>
    <div class="bio__sub left">
      <h3 class="bio__name">Kaai Suzuki,<br>UI/UX Designer and Front-end developer</h3>
      <p class="bio__description">Web designer/front-end developer with a strong focus on branding, based on experience in fashion design and graphic design. 
        Emphasizes creating a smooth flow for users and clients logically when designing and developing websites.
        Over three years of work experience, and always striving to improve by learning about new designs, frameworks, libraries, and more. 
      </p>
      <ul class="bio__description_link">
        <a href="https://www.linkedin.com/in/suzydp/">
          <li class="bio__description_link_list">See the Profile on LinkedIn</li>
        </a>
        <a href="assets/pdf/resume-kaaisuzuki.pdf">
          <li class="bio__description_link_list">Resume</li>
        </a>
      </ul>
    </div>
    <div class="skills" id="skills">
      <div class="skills__container">
        <div class="skills__content left">
          <h2 class="section__title">SKILLS</h2>
          <div class="skills__description-wrap">
            <h4 class="skills__head">Specialities</h4>
            <ul class="skills__list">
              <li>UI design and Graphic design</li>
              <li>front-end development for building Website</li>
              <li>Understanding Typography / ColorSheme / UX strategy</li>
              <li>Digital / Analog Illustration</li>
            </ul>
          </div>
          <div class="skills__content">
            <h4 class="skills__head">Fluent in</h4>
            <ul class="skills__list">
              <li>Adobe Illustrator, Photoshop, indesign, XD, Sketch and Figma</li>
              <li>Developing with Bootstrap, Material Design UI</li>
              <li>Typography / ColorScheme / UX strategy</li>
            </ul>
          </div>
          <div class="skills__content">
            <h4 class="skills__head">Software/Programming language</h4>
            <ul class="skills__list">
              <li>Design and Prototyping</li>
                <p>Illustrator / Photoshop / Sketch / Figma / Indesign / XD / Invision Studio</p>
              <li>Development</li>
                <p>HTML5 / CSS3 / Sass / Git / PHP / Wordpress / React.js / Gulp / Webpack / Redux / Express(For MERN stack) / Node.js /
                MySQL / MongoDB / Ajax / BEM-SMACSS-OOCSS / SVG Animation / jQuery / GSAP / Firebase </p>
              <li>Other</li>
                <p>Google Apps(Docs, sheets, slides and forms including to use Google Apps Script) / Google Analytics / Google Optimize / SEO solution</p>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bio__sub right wow fadeIn">
      <img class="bio__img" src="<?= get_template_directory_uri(); ?>/assets/images/profile.jpg" />
      <p class="bio__caption">
        Photo by <a class="bio__caption_link" href="http://yoshiro-hayakawa.com/" target="_blank">Yoshiro
          Hayakawa</a>
      </p>
    </div>
  </section>

  <!-- {!! get_the_posts_navigation() !!} -->
@endsection
