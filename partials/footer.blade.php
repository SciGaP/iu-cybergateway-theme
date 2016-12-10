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