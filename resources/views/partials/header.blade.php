<header id="header" class="header">
  <h1 class="header__logo">
    <a href="{{ home_url('/') }}">
      <img src="<?= get_template_directory_uri(); ?>/assets/svg/szdplogo-for-web.svg" />
    </a>
  </h1>
  <!-- //hamburger menu// -->
  <nav class="nav">
    <div id="nav__toggle" class="nav__toggle">
      <span class="nav__bar"></span>
      <span class="nav__bar"></span>
      <span class="nav__bar"></span>
    </div>
    <!-- //"nav__list" will be a toggle class for open and close// -->
    <ul id="nav__list" class="nav__list">
      <a class="nav__link" href="{{ home_url('/') }}/#works"><li>Case Study</li></a>
      <a class="nav__link" href="{{ home_url('/') }}category/work"><li>Archive</li></a>
      <a class="nav__link" href="{{ home_url('/') }}/#bio"><li>Biography</li></a>
      <a class="nav__link" href="{{ home_url('/') }}/#skills"><li>Skills</li></a>
      <a class="nav__link" href="#contact"><li>Contact</li></a>
      <div class="language">
        <!-- <li>EN / <a class="lang" href="jp/index.html">JP</a></li> -->
      </div>
    </ul>
  </nav>
</header>