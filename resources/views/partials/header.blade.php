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
      <a class="nav__link" href="#works"><li>CASE STUDY</li></a>
        <ul>
          <a class="nav__link" href="zmagazine.html"><li>Z Magazine</li></a>
          <a class="nav__link" href="mylocal.html"><li>MyLocal</li></a>
          <a class="nav__link" href="greentable.html"><li>Green Table</li></a>
          <a class="nav__link" href="grabbbb.html"><li>Grabbbb</li></a>
          <a class="nav__link" href="shiori.html"><li>Shiori</li></a>
          <a class="nav__link" href="tnr-acid.html"><li>Tenori Acid</li></a>
        </ul>
      </li>
      <a class="nav__link" href="#bio"><li>BIOGRAPHY</li></a>
      <a class="nav__link" href="#skills"><li>SKILL</li></a>
      <a class="nav__link" href="#contact"><li>CONTACT</li></a>
      <div class="language">
        <li>EN / <a class="lang" href="jp/index.html">JP</a></li>
      </div>
    </ul>
  </nav>
</header>