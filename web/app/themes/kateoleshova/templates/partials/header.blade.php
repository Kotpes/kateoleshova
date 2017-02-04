<header class="banner">
  <div class="container">
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      </nav>
    @endif
    <div class="site-logo">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@php(header_image())" alt="Site logo">
      </a>
    </div>
  </div>
</header>
