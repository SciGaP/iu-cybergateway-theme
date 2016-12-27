
    <div class="section banner image loaded" id="banner" itemscope="itemscope" itemtype="http://schema.org/ImageObject" role="banner" style="background-image: none;">

      <img alt="" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/bannercyber.png"/>

    </div>

    <main class="wide" role="main">
                                
      <div class="bg-none ticker-section section">
        <div class="row">
          <div class="layout">
            <h2>Latest News and events</h2>
              <div class="one-third">
                <h5>Heading 1</h5>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada, orci at elementum lobortis, dolor neque tristique eros, vitae placerat urna orci vel erat. Donec non pellentesque ex. Praesent nec sa               
              </div>
              <div class="one-third">
                <h5>Heading 2</h5>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada, orci at elementum lobortis, dolor neque tristique eros, vitae placerat urna orci vel erat. Donec non pellentesque ex. Praesent nec sa               
              </div>
              <div class="one-third">
                <h5>Heading 3</h5>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque malesuada, orci at elementum lobortis, dolor neque tristique eros, vitae placerat urna orci vel erat. Donec non pellentesque ex. Praesent nec sa               
              </div>

              <div class="one-third float-right text-right">
                <a href="{{URL::to('/')}}/pages/news">Read More</a>
              </div>
          </div><!-- /.layout -->
        </div>

        <div class="bg-crimson bg-image bg-dark section" id="">

          <div class="bg-image-cover" style="opacity:0.2; background-image:url({{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/gates.png)"></div>

          <div class="row">
            <div class="layout">
              <div class="text"><h2>Portal to IU computing resources</h2>
                <div class="row">
                  <ul>
                    <li>Get updates on Big Red II, Karst, and Mason status.</li>
                    <li>Move files from your desktop to IU's Scholarly Data Archive and Data Capacitor.</li>
                    <li>Monitor and manage running jobs on Big Red II, Karst, and Mason.</li>
                    <li>Find information on available software.</li>
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

        <div class="bg-none section" id="">
          <div class="row"><div class="layout"><div class="callout"><div class="content"><p>
            A connected network of biomedical researchers, chemical and data scientists and students from various organizations to fulfil computation needs with access to supercomputers via ubiquitously accessible web applications.
          </p></div></div></div><!-- /.layout --></div>
        </div>

        <div class="bg-gray section" id="">
          <div class="row">
            <div class="layout">
              <div class="row">
                <h2>System Status</h2> { DATA from API goes here.}
              </div>
            </div><!-- /.layout -->
          </div>
        </div>

        <div class="breakout extra-space bg-none section" id="">

          <div class="row">
            <div class="layout">
              <div class="text">
                  <h2>IU Science Gateways</h2>
                  <ul class="sponsor-list">
                    <li><b>NCGAS Galaxy Portal:</b> 
                      The IU-led NCGAS project provides support for four different Galaxy instances for bioinformatics compuations. See <a href="http://ncgas.org/galaxy.php" target="_blank">Galaxy Services</a> for more information.
                    </li>
                    <li><b>QuakeSim Portal:</b> 
                      IU is a participant in the QuakeSim earthquake-modeling science gateway project. The portal is available at <a href="http://www.quakesim.org" target="_blank">http://www.quakesim.org</a>.
                    </li>
                    <li><b>Structural Protein-Ligand Interactome (SPLINTER) Portal:</b> 
                      SPLINTER is a computational resource to enable chemical genomics and drug discovery. See the <a href="http://biodrugscreen.org/" target="_blank">SPLINTER Start Page</a> for more information.
                    </li>
                    <li><b>Science Gateways:</b> 
                      More information on the NSF-funded <a href="https://www.xsede.org/" target="_blank">XSEDE</a> Science Gateway program is available <a href="https://www.xsede.org/gateways-overview" target="_blank">here</a>.
                    </li>
                    <li><b>Science Gateway Portal:</b> 
                      The NSF XSEDE program allocates free Virtual Machine hosting for science gateways. For more information, see <a href="https://www.xsede.org/resources/overview?p_p_id=rdr_WAR_rdrportlet_INSTANCE_7Vbz&p_p_lifecycle=1&p_p_state=normal&p_p_mode=view&p_p_col_id=column-2&p_p_col_pos=1&p_p_col_count=2&_rdr_WAR_rdrportlet_INSTANCE_7Vbz_RESOURCE_ID=quarry.iu.teragrid.org" target="_blank">here</a>.
                    </li>
                  </ul>
                  <h4>Do you have a science gateway that you would like to list here, or would you like more information on creating a science gateway? <a href="https://cybergateway.uits.iu.edu/iugateway/contactus" target="_blank">Contact the Science Gateway Group.</a></h4>
              </div>
            </div>
          </div>
        </div>

    </main>
        
    