@extends('layouts.app')
@section('content')
  <!-- @include('partials.page-header') -->
<section id="top" class="top">
  <div class="top__title-wrap">
    <h2 class="top__title">SZDP/Kaai Suzuki</h2>
    <h3 class="top__description">D is for Design and Development.<br>P is for Plan and Programming.</h3>
    <ul class="social">
      <a href="https://www.facebook.com/suzydp" target="_blank">
        <li><i class="fab fa-facebook-f"></i>
          <!--facebook-->
        </li>
      </a>
      <a href="https://www.linkedin.com/in/kaaisuzuki/" target="_blank">
        <li><i class="fab fa-linkedin" target="_blank"></i>
          <!--linkedin-->
        </li>
      </a>
      <a href="https://www.instagram.com/suzydp/" target="_blank">
        <li><i class="fab fa-instagram"></i>
          <!--instagram-->
        </li>
      </a>
      <a href="https://github.com/suzydp/" target="_blank">
        <li><i class="fab fa-github"></i>
          <!--github-->
        </li>
      </a>
      <a href="https://dribbble.com/suzydp" target="_blank">
        <li><i class="fab fa-dribbble"></i>
          <!--dribbble-->
        </li>
      </a>
      <a href="http://dp00.tumblr.com/" target="_blank">
        <li><i class="fab fa-tumblr"></i>
          <!--tumblr-->
        </li>
      </a>
    </ul>
  </div>
  <div class="top__img-wrap">
    <img class="top__logo" src="<?= get_template_directory_uri(); ?>/assets/svg/szdplogo-for-web_animated.svg" />
  </div>
</section>
  <div class="scroll-to-main">
    <a onclick="topFunction()" class="scroll-arrow to-works" href="#works">↓Works</a>
  </div>

  <section id="works">
    <h2>Case Study</h2>
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    <?php 
      $posts = get_posts(array(
        'posts_per_page' => 5,
        'category' => '3'
      ));
      $cnt = 0;
    while(have_posts()) : the_post(); ?>
      <div class="works__img-wrap">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('large', array('class' => 'works__img'));?>
          <div class="works__description-wrap">
            <h3 class="works__title"><?php get_template_part( 'template-parts/post/content', get_post_format() ); ?></h3>
            <p class="works__tag"><?php the_tags(); ?></p>
          </div>
        </a>
      </div>
    <?php endwhile; ?>

    <!-- <div class="viewmore"> -->
      <a class="button draw meet" href="<?php echo(get_category_link(4))?>">View More</a>
    <!-- </div> -->
  </section>

  <!-- bio/skills -->
  <section id="bio" class="bio">
    <h2 class="section__title">BIOGRAPHY</h2>
    <div class="bio__wrap">
      <div class="bio__sub left">
        <h3 class="bio__name">Kaai Suzuki,<br>UI/UX Designer, Front-end developer<br>From Tokyo to
          Vancouver and everywhere.</h3>
        <p class="bio__description">Over 3 years experienced Web designer/Front-end developer focusing on
          branding, based on the experiences of fashion design & graphic design.
          She is always into improving herself by hunting up for new design/framework/library and any other
          things.<br>
          Making good flow for users and any clients by logical expressions is her goal for design/development.
        </p>
        <ul class="bio__description_link">
          <a href="#">
            <li class="bio__description_link_list">See the Profile on LinkedIn</li>
          </a>
          <a href="assets/pdf/resume-2018.pdf">
            <li class="bio__description_link_list">Resume</li>
          </a>
        </ul>
      </div>
      <div class="bio__sub right">
        <img class="bio__img" src="<?= get_template_directory_uri(); ?>/assets/images/profile.jpg" />
        <p class="bio__caption">
          Photo by <a class="bio__caption_link" href="http://yoshiro-hayakawa.com/" target="_blank">Yoshiro
            Hayakawa</a>
        </p>
      </div>
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
              <li>Adobe Illustrator, Photoshop, indesign, XD and Sketch</li>
              <li>Developing with Bootstrap, Material Design UI</li>
              <li>Typography / ColorSheme / UX strategy</li>
            </ul>
          </div>
          <div class="skills__content">
            <h4 class="skills__head">Software/Programming language</h4>
            <ul class="skills__list">
              <li>Design and Prototyping</li>
                <p>Illustrator / Photoshop / Sketch / Figma / Indesign / XD / Invision Studio</p>
              <li>Development</li>
                <p>HTML5 / CSS3 / Sass / Git / PHP / Wordpress / React.js / Gulp / Webpack / Redux / Express(For MERN stack) / Node.js /
                MySQL / Ajax / BEM-SMACSS-OOCSS / SVG Animation / jQuery / GSAP / Firebase </p>
              <li>Other</li>
                <p>Google Apps(Docs, sheets, slides and forms including to use Google Apps Script) / Google Analytics / Google Optimize / SEO solution</p>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- {!! get_the_posts_navigation() !!} -->
@endsection
