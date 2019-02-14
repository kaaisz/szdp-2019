<header id="header" class="header">
  <h1 class="logo header-logo">
    <a href="{{ home_url('/') }}">
      <img src="<?= get_template_directory_uri(); ?>/assets/svg/szdplogo-for-web.svg" />
    </a>
  </h1>
  <!-- //hamburger menu// -->
  <nav>
    <div id="nav__toggle" class="menu__hamburger-bar" onclick="hamburgerToggle()">
      <div id="menu__nav-menu">
      <span class="menu__bar"></span>
      <span class="menu__bar"></span>
      <span class="menu__bar"></span>
      </div>
    </button>
    <!-- //"menu__nav-list" will be a toggle class for open and close// -->
    <ul id="menu__nav-list" class="menu__nav-menu">
      <a href="#bio"><li>BIOGRAPHY</li></a>
      <a href="#works"><li>CASE STUDY</li></a>
        <ul id="menu__nav-list sub">
          <a href="zmagazine.html"><li>Z Magazine</li></a>
          <a href="mylocal.html"><li>MyLocal</li></a>
          <a href="greentable.html"><li>Green Table</li></a>
          <a href="grabbbb.html"><li>Grabbbb</li></a>
          <a href="shiori.html"><li>Shiori</li></a>
          <a href="tnr-acid.html"><li>Tenori Acid</li></a>
        </ul>
      </li>
      <li>SKILL</li>
      <li>CONTACT</li>
    </ul>
  </nav>
</header>
