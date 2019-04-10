<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
  <a class="navbar-brand logo_h" href="index.html">

      <img src="http://yucoding.com/yucoding-assets/img/brand/blue.png" alt="" width="100px">

  </a>
            <a class="navbar-brand logo_inner_page" href="/"><img src="img/logo2.png" alt=""></a>      
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav">
                    <li class="nav-item

                    @if(Request::is('/'))
                    active
                    @endif

                    "><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item

                    @if(Request::is('about'))
                    active
                    @endif
                    
                    
                    "><a class="nav-link" href="/about">About</a></li>
                    
                    {{-- <li class="nav-item"><a class="nav-link" href="/portfolio">Portfolio</a></li> --}}
                    {{-- <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                         aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="/portfolio-details">Portfolio Details</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                         aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="/blog/">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="/single-blog/">Blog Details</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>