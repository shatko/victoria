<header class="banner">
  <div class="container">
    <div class="viki-logo-wrapper">
      <div class="viki-logo"></div>
      <div class="viki-logo-text-wrapper">
        <span class="viki-name">Victoria Matzpohl</span>
        <span class="viki-position">Art Director</span>
      </div>
    </div>
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}
      <span>How</span>
      <div><span>2</span></div>
      <span>design</span>
    </a>
    <div class="social-icons-wrapper">
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
    </div>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
