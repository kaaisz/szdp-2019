<header id="header" class="header">
  <h1 class="header__logo">
    <a href="{{home_url('/')}}">
      <svg id="header__logo-svg" class="header__logo-svg" viewBox="0 0 225.2 270.3">
        <path transform="matrix(0.7071 0.7071 -0.7071 0.7071 128.1408 -40.7592)" class="st0 rubZJJkj_0" width="150.3" height="150.3" d="M38.1 59.1 L188.4 59.1 L188.4 209.4 L38.1 209.4 Z" />
        <path class="st0 rubZJJkj_1" d="M113.3,7.5L113.3,261.1" />
        <path class="st0 rubZJJkj_2" d="M113.3,56.9L113.3,56.9c-21.4-21.4-55.9-21.4-77.3,0s-21.4,55.9,0,77.3s55.9,21.4,77.3,0v0
	        c21.4-21.4,55.9-21.4,77.3,0c21.4,21.4,21.4,55.9,0,77.3s-55.9,21.4-77.3,0l0,0" />
      </svg>
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