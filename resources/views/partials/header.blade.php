<header class="banner">
        <nav class="navbar navbar-expand-lg" id="main-nav">
            <div class="container">
                <a class="navbar-brand col-md-3" href="#"><img src="@asset('images/logo.png')"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-md-9" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about/">ABOUT US  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services">SERVICES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="opportunities">OPPORTUNITIES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="events">EVENTS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="donate">DONATE</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact">CONTACT</a>
                    </li>
                  
                    </ul>
                </div>
            </div>
    {{-- <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a> --}}   
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
