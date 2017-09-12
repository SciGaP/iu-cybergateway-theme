<!DOCTYPE html>
<html lang="en">
<head>
    <title>IU Cybergateway</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/resources/assets/favicon.ico" type="image/x-icon">
    <link media="all" type="text/css" rel="stylesheet" href="https://assets.iu.edu/brand/3.x/brand.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://assets.iu.edu/search/3.x/search.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://assets.iu.edu/web/3.x/css/iu-framework.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/css/style.css">
    <script src="https://assets.iu.edu/web/1.5/libs/modernizr.min.js"></script>
</head>

<body class="mahogany has-banner has-page-title has-sticky">
    
    <div id="branding-bar" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity" role="complementary" aria-labelledby="campus-name">
        <div class="row pad">
            <img src="//assets.iu.edu/brand/3.x/trident-large.png" alt="IU">
            <p id="iu-campus">
                <a href="https://www.iu.edu" title="Indiana University" class="external">
                    <span id="campus-name" class="show-on-desktop" itemprop="name">Indiana University</span>
                    <span class="show-on-tablet" itemprop="name">Indiana University</span>
                    <span class="show-on-mobile" itemprop="name">IU</span>
                </a>
            </p>
        </div>
    </div>
    {{-- <div id="toggles">
        <div class="row pad">
            <button class="button hide-for-large" data-toggle="offCanvas" aria-expanded="false" aria-controls="offCanvas">Menu</button>
            <a class="button search-toggle" href="/search">Open Search Feature</a>
        </div>
    </div> --}}
    {{-- <div id="search" class="search-box" role="search"><div class="row pad"><div id="___gcse_0"><div class="gsc-control-searchbox-only gsc-control-searchbox-only-en" dir="ltr"><form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8"><table class="gsc-search-box" cellspacing="0" cellpadding="0"><tbody><tr><td class="gsc-input"><div class="gsc-input-box" id="gsc-iw-id1"><table style="width: 100%; padding: 0px;" id="gs_id50" class="gstl_50 " cellspacing="0" cellpadding="0"><tbody><tr><td id="gs_tti50" class="gsib_a"><input autocomplete="off" size="10" class="gsc-input" name="search" title="search" style="width: 100%; padding: 0px; border: medium none; margin: 0px; height: auto; outline: medium none; background: rgb(255, 255, 255) url(&quot;https://www.google.com/cse/static/images/1x/googlelogo_lightgrey_46x16dp.png&quot;) no-repeat scroll left center; text-indent: 48px;" id="gsc-i-id1" x-webkit-speech="" x-webkit-grammar="builtin:search" dir="ltr" spellcheck="false" placeholder="Custom Search" disabled="" type="text" lang="en"></td><td class="gsib_b"><div class="gsst_b" id="gs_st50" dir="ltr"><a class="gsst_a" href="javascript:void(0)" style="display: none;"><span class="gscb_a" id="gs_cb50">×</span></a></div></td></tr></tbody></table></div><input name="bgresponse" id="bgresponse" disabled="" type="hidden"></td><td class="gsc-search-button"><input src="https://www.google.com/uds/css/v2/search_box_icon.png" class="gsc-search-button gsc-search-button-v2" title="search" disabled="" value="Go" type="submit"></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div></td></tr></tbody></table><table class="gsc-branding" cellspacing="0" cellpadding="0"><tbody><tr><td class="gsc-branding-user-defined"></td><td class="gsc-branding-text"><div class="gsc-branding-text">powered by</div></td><td class="gsc-branding-img"><img src="https://www.google.com/cse/static/images/1x/googlelogo_grey_46x15dp.png" class="gsc-branding-img" srcset="https://www.google.com/cse/static/images/2x/googlelogo_grey_46x15dp.png 2x" alt="Google logo"></td></tr></tbody></table></form></div></div></div></div> --}}
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
        <div class="off-canvas-content" data-off-canvas-content="">
            <header class="site-header" itemscope="itemscope" itemtype="https://schema.org/CollegeOrUniversity" role="banner">
                
                <div class="row pad">
                    <h1><a class="title" href="{{URL::to('/')}}" itemprop="department">IU Cybergateway</a></h1>
                </div>
            </header>
            
            <div class="nav-secondary">
                <div class="row pad">
                    <ul class="inline separators" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                        <li class="first"><a href="/login" itemprop="url"><span itemprop="name">Login</span></a></li>
                        <li><a href="/create" itemprop="url"><span itemprop="name">Register</span></a></li>
                        <li class="last"><a href="#contact" itemprop="url"><span itemprop="name">Contact</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="section banner image loaded" id="banner" itemscope="itemscope" itemtype="http://schema.org/ImageObject" style="background-image: none;">
                <img alt="" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/bannercyber.png"/>
            </div>
            <main class="wide" role="main">

                <div class="bg-crimson bg-dark section" id="">

                    <div class="row">
                        <div class="layout">
                            <div class="text"><h2>Portal to IU computing resources</h2>
                                <div class="row">
                                    <ul>
                                        <li>Easy job submissions to IU computing resources, BigRed2, Karst and Mason.</li>
                                        <li>Monitor and manage running jobs in IU computing resources.</li>
                                        <li>Share your research experimental data with fellow researchers.</li>
                                        <li>You can request your application on IU portal for job submissions.</li>
                                    </ul>
                                    <div class="col-md-12">
                                        <a class="button" href="{{URL::to('/')}}/login">Login</a>
                                        <a class="button" href="{{URL::to('/')}}/create">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.layout -->
                    </div>
                </div>

                <div class="breakout extra-space bg-none section" id="">

                    <div class="row">
                        <div class="layout">
                            <div class="text">
                                <h4>Do you have a science gateway that you would like to list here, or would you like more information on creating a science gateway? Contact the Science Gateway Group at <a href="mailto:sgrc@iu.edu">sgrc@iu.edu</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breakout section bg-gray" id="contact">
                    <div class="row pad">
                        <div class="grid halves">
                            <div class="grid-item">
                                <div class="belt-social invert border">
                                    <div class="belt-title" style="margin-bottom: .5em;">
                                        <h2>Contact Us</h2>
                                    </div>
                                    <p style="padding-right:10%;">The IU Cyberinfrastructure Gateway is operated by Research Technologies division of UITS. Cybergaterway is based on Apache Airavata developed and supported by the Science Gateways Research Center - SGRC</p>
                                    
                                    <h2>UITS Assistance</h2>
                                    <p><a class="" href="https://rt.uits.iu.edu/ask_rt.php" target="_blank">Ask RT for Assistance</a><br/><a class="" href="https://kb.iu.edu/d/apgt" target="_blank">UITS Support Center</a>
                                    </p>
                                </div>
                            </div>
                            <div class="grid-item">
                            
                                <h4>Center Website:</h4>
                                <p><a href="https://sgrc.iu.edu/" target="_blank">https://sgrc.iu.edu/</a></p>
                                <h4>Email:</h4>
                                <p><a href="mailto:sgrc@indiana.edu">sgrc@indiana.edu</a></p>
                            
                                <h4>Mail Address:</h4>
                                <p style="margin-top: 1em;">IU Cyberinfrastructure Building (CIB)<br>
                                    2709 E. 10th St.<br>
                                    Bloomington, IN 47408</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer id="footer" role="contentinfo" itemscope="itemscope" itemtype="https://schema.org/CollegeOrUniversity">
                <div class="row pad">
                    
                    <p class="tagline">Fulfilling <span>the</span> Promise</p>
                    
                    <p class="signature">
                        <a href="https://www.iu.edu" class="signature-link">Indiana University</a>
                    </p>
                    
                    <p class="copyright">
                        <a href="https://www.iu.edu/copyright/index.html">Copyright</a> &#169; 2016 <span class="line-break-small">The Trustees of <a href="https://www.iu.edu/" itemprop="url"><span itemprop="name">Indiana University</span></a></span><span class="hide-on-mobile"> | </span><span class="line-break"><a href="/privacy" id="privacy-policy-link">Privacy Notice</a> | <a href="https://accessibility.iu.edu" id="accessibility-link" title="Having trouble accessing this web page because of a disability? Visit this page for assistance.">Accessibility</a></span>
                    </p>
                </div>
            </footer>
        </div>
    </div>
<!--

IU Branding scripts. Not required.


<script src="//code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="//assets.iu.edu/web/3.x/js/iu-framework.min.js"></script>
<script src="//assets.iu.edu/libs/slick/1.3.x/slick.min.js"></script>
<script src="//assets.iu.edu/search/3.x/search.js"></script>
-->
<script>
/*!
 * Initialize IU JS
 */

// (function($, window, document, undefined) {
// 
//     $(document).ready(function() {
//         /*
//         Foundation.OffCanvas.defaults.transitionTime = 500;
//         Foundation.OffCanvas.defaults.forceTop = false;
//         Foundation.OffCanvas.defaults.positiong = 'right';
// 
//         Foundation.Accordion.defaults.multiExpand = true;
//         Foundation.Accordion.defaults.allowAllClosed = true;
// 
//         // Initialize Foundation
//         $(document).foundation();
// 
//         var IU = window.IU || {};
// 
//         // Delete modules if necessary
//         // delete IU.uiModules['accordion'];
// 
//         IU.init && IU.init();
// 
//                 */
//         //$(".search-toggle").attr("href", " {{ URL::to('/') }}/pages/search");
// 
//         var IUSearch = window.IUSearch || {};
// 
//         var searchOptions = {
//             CX: {
//                 site: ' 016278320858612601979:w_w23ggyftu', // Replace this with a site CX value
//                 all: '  016278320858612601979:ddl1l9og1w8' // Replace this with campus CX value
//             },
//             wrapClass: 'row pad',
//             searchBoxIDs: ['search', 'off-canvas-search'],
//             attributes:{resultsUrl: "{{ URL::to('/') }}/pages/search" }
//         }
// 
//         /* Initialize global search */
//         IUSearch.init && IUSearch.init( searchOptions );
// 
//         });
// 
// 
//     $(".brand-logo")
//       .text("IU Cybergateway")
//       .css("color","#fff")
//       .css("margin-top", "10px")
//       .css("margin-right", "10px")
//       .css("text-decoration", "none")
//       .css("display", "inline");
// 
// })(jQuery, window, window.document);

</script>
</body>
</html>



