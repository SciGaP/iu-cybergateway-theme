    
    <div class="section bg-gray dark belt" id="contact">
      <div class="row pad">
        <div class="grid">
            <div class="one-half">
                <div class="belt-social invert border">
                  <div class="belt-title" style="margin-bottom: .5em;">
                    <h2>Contact Us</h2>
                  </div>
                  <p style="padding-right:10%;">The IU Cyberinfrastructure Gateway is developed and supported by the Science Gateways Research Center - SGRC</p>
                  <h4>Center Website:</h4>
                  <p><a href="https://sgrc.iu.edu/" target="_blank">https://sgrc.iu.edu/</a></p>
                  <h4>Email:</h4>
                  <p><a href="mailto:sgrc@indiana.edu">sgrc@indiana.edu</a></p>

                  <!--
                  <h2 class="visually-hidden">Pervasive Technology Institute social media channels</h2>
                  <ul class="social">
                    <li><a class="icon-twitter external" href="">Twitter</a></li>
                    <li><a class="icon-facebook external" href="">Facebook</a></li>
                    <li><a class="icon-youtube external" href="">YouTube</a></li>
                  </ul>
                  -->
                  <h4>Mail Address:</h4>
                  <p style="margin-top: 1em;">IU Cyberinfrastructure Building (CIB)<br>
                  2709 E. 10th St.<br>
                  Bloomington, IN 47408</p>
                </div>
            </div>
            <div class="one-half">
                <h2>Chat with a Consultant</h2>
                <p><a class="" href="http://ithelplive.iu.edu/" target="_blank">ITHelpLive</a> ( IU Login Required)
                <h2>UITS Assistance</h2>
                <p><a class="" href="https://rt.uits.iu.edu/ask_rt.php" target="_blank">Ask RT for Assistance</a><br/><a class="" href="https://kb.iu.edu/d/apgt" target="_blank">UITS Support Center</a>
                </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer id="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity">
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


<script src="//assets.iu.edu/web/3.x/js/iu-framework.min.js"></script>
<script src="//assets.iu.edu/web/3.x/js/slick.min.js"></script>

<script src="https://assets.iu.edu/search/3.x/search.js"></script>
<script>
/*!
 * Initialize IU JS
 */
(function($, window, document, undefined) {

    $(document).ready(function() {

        Foundation.OffCanvas.defaults.transitionTime = 500;
        Foundation.OffCanvas.defaults.forceTop = false;
        Foundation.OffCanvas.defaults.positiong = 'right';

        Foundation.Accordion.defaults.multiExpand = true;
        Foundation.Accordion.defaults.allowAllClosed = true;

        // Initialize Foundation
        $(document).foundation();

        var IU = window.IU || {};

        // Delete modules if necessary
        // delete IU.uiModules['accordion'];

        IU.init && IU.init();

                
        var IUSearch = window.IUSearch || {};

        var searchOptions = {
            CX: {
                site: ' 016278320858612601979:w_w23ggyftu', // Replace this with a site CX value
                all: '  016278320858612601979:ddl1l9og1w8' // Replace this with campus CX value
            },
            wrapClass: 'row pad',
            searchBoxIDs: ['search', 'off-canvas-search']
        }

        /* Initialize global search */
        IUSearch.init && IUSearch.init( searchOptions );

        });

})(jQuery, window, window.document);

</script>