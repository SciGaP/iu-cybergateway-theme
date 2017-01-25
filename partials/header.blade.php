<title>IU Cybergateway</title>
<link media="all" type="text/css" rel="stylesheet" href="https://assets.iu.edu/brand/3.x/brand.css">
<link media="all" type="text/css" rel="stylesheet" href="https://assets.iu.edu/search/3.x/search.css">
<link media="all" type="text/css" rel="stylesheet" href="https://assets.iu.edu/web/3.x/css/iu-framework.min.css">
    <script src="http://assets.iu.edu/web/1.5/libs/modernizr.min.js"></script>
<style>
.content-area{
    max-width: 100%;
}
#search{
    position: fixed;
}
#toggles{
    position: fixed;
}
</style>

<div id="branding-bar" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity" role="complementary" aria-labelledby="campus-name">
    <div class="row pad">
            <img src="//assets.iu.edu/brand/3.x/trident-large.png" alt="IU" />
            <p id="iu-campus">
                <a href="https://www.iu.edu" title="Indiana University">
                    <span id="campus-name" class="show-on-desktop" itemprop="name">Indiana University</span>
                    <span class="show-on-tablet" itemprop="name">Indiana University</span>
                    <span class="show-on-mobile" itemprop="name">IU</span>
                </a>
            </p>
    </div>
</div>

<div id="toggles">
    <div class="row pad">
        <button class="button hide-for-large" data-toggle="offCanvas">Menu</button>
        <a class="button search-toggle" href="/search">Open Search Feature</a>
    </div>
</div>


<div id="search" class="search-box" role="search"></div>

<div class="off-canvas-wrappper-inner" data-off-canvas-wrapper="">
  <div class="off-canvas-content" data-off-canvas-content="">
    <header class="site-header" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity" role="banner">

        <div class="row pad">
          @if(! Session::get("loggedin"))
            <h1><a class="title" href="{{URL::to('/')}}" itemprop="department">IU Cybergateway</a></h1>
          @endif
        </div>
    </header>
       
    <div id="nav-main-sticky-wrapper" class="sticky-nav">
      <nav role="navigation" aria-label="Main navigation" id="nav-main" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" class="main show-for-large dropdown">
        <ul class="row pad">
          <li class="first"><a href="{{URL::to('/')}}/pages/software" itemprop="url"><span itemprop="name">Software</span></a>
            <ul class="children">
              <li><a href="{{URL::to('/')}}/pages/bigred2" itemprop="url"><span itemprop="name">Big Red II</span></a></li>
              <li><a href="{{URL::to('/')}}/pages/karst" itemprop="url"><span itemprop="name">Karst</span></a></li>
              <li><a href="{{URL::to('/')}}/pages/mason" itemprop="url"><span itemprop="name">Mason</span></a></li>
            </ul>
          </li>
          <li><a href="{{URL::to('/')}}/pages/news" itemprop="url"><span itemprop="name">News &amp; Events</span></a></li>
          <li class="last"><a href="http://ithelplive.iu.edu/" target="_blank" itemprop="url"><span itemprop="name">ITHelpLive</span></a></li>
          <li class="show-on-sticky search"><a class="search-toggle" href="/search">
            Search</a>
          </li>
        </ul>
      </nav>
    </div>

    @if(! Session::get("loggedin"))
    <div class="nav-secondary show-for-small">
      <div class="row pad">
        <ul class="inline separators" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
          <li class="first"><a href="{{URL::to('/')}}/login" itemprop="url"><span itemprop="name">Login</span></a></li>
          <li><a href="{{URL::to('/')}}/create" itemprop="url"><span itemprop="name">Register</span></a></li>
          <li class="last"><a href="#contact" itemprop="url"><span itemprop="name">Contact</span></a></li>
        </ul>
      </div>
    </div>
    @endif
    