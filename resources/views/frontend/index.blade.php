 @extends('layouts.frontend')

@section('content')

    <!-- Start Hero Section -->
    <section class="hero creative-hero1" id="home">
      <div class="container">
        <div class="hero-text black-color">
          <h1>{{($contactus)?$contactus->companyname:''}}</h1>
          <h4>{!! ($contactus)?$contactus->tagline:'' !!}</h4>
         
        </div>
      </div>
      <div class="hero-animation1">
        <div class="shap1"></div>
        <div class="shap2"></div>
        <div class="shap3"></div>
        <div class="shap4"></div>
        <div class="shap5"></div>
        <div class="shap6"></div>
      </div>
      <div class="hero-c-img"><img src="/img/hero-img1.jpg" alt="Image"></div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Feature Section -->
    <section class="feature">
      <div class="container">
        <div class="flex">
          <div class="col-lg-4 single-feature text-center">
            <div class="single-feature-icon">
              <i class="icon-apartment_building"></i>
              <i class="icon-apartment_building"></i>
            </div>
            <h3 class="feature-text">Construction</h3>
          </div>
          <div class="col-lg-4 single-feature text-center">
            <div class="single-feature-icon">
              <i class="icon-tools_creative"></i>
              <i class="icon-tools_creative"></i>
            </div>
            <h3 class="feature-text">Architecture</h3>
          </div>
          <div class="col-lg-4 single-feature text-center">
            <div class="single-feature-icon">
              <i class="icon-multiple_paper"></i>
              <i class="icon-multiple_paper"></i>
            </div>
            <h3 class="feature-text">Consulting</h3>
          </div>
        </div><!-- .row -->
      </div>
    </section>
    <!-- End Feature Section -->

    <!-- Start about-company -->
    <section class="section" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="about-company">
              <h3 class="about-company-title">Director's Message</h3>
              <div class="about-company-text">
                <p>Perceived end knowledge certainly day sweetness why cordially. Ask quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. </p>
              </div>
              <div class="about-company-man">
                <img src="/img/chairman.jpg" alt="Chairman" class="about-company-img">
                <div class="about-company-meta">
                  <img src="/img/chairman-png.png" alt="Signature" class="about-company-signature">
                  <h3>BISWAJIT DASH</h3>
                </div>
              </div>


              <div class="about-company-text">
                <p>Perceived end knowledge certainly day sweetness why cordially. Ask quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. </p>
              </div>
              <div class="about-company-man">
                <img src="/img/md1.jpg" alt="Chairman" class="about-company-img">
                <div class="about-company-meta">
                  <img src="/img/chairman-png.png" alt="Signature" class="about-company-signature">
                  <h3>NARAYAN BEHERA</h3>
                </div>
              </div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-6">
            <div class="accordian-wrapper">
              <div class="single-accordian">
                <h3 class="accordian-head">
                  <i class="fa fa-user-circle"></i>
                  Why People Chose Us
                </h3>
                <div class="accordian-body">Perceived end knowledge certainly day sweetness why cordially. Ask quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried.
                </div>
              </div><!-- .single-accordian -->
              <div class="single-accordian">
                <h3 class="accordian-head">
                 <i class="fa fa-bar-chart"></i>
                 Company Groth
                </h3>
               <div class="accordian-body">
                  Is education residence conveying so so. Suppose shyness say ten behaved morning had. Any unsatiable assistance compliment occasional too reasonably advantages. Unpleasing has ask acceptance.
               </div>
              </div><!-- .single-accordian -->
              <div class="single-accordian">
                <h3 class="accordian-head">
                 <i class="fa fa-cog"></i>
                 Our Vison and Mison
                </h3>
                 <div class="accordian-body">
                   Married he hearing am it totally removal. Remove but suffer wanted his lively length. Moonlight two applauded conveying end direction old principle but. Are expenses distance weddings perceive strongly who age domestic. 
                 </div>
              </div><!-- .single-accordian -->
            </div>
          </div><!-- .col -->
        </div>
      </div>
    </section>
    <!-- End about-company -->

    <!-- Start Service Sectinn -->
    <section class="service section gray-bg service-v1" id="services">
      <div class="container">
        <div class="section-header type1">
          <h2>Services We Provide</h2>
          <div class="sub-heading">Our dedicated team member provided there best services and we have a<br> 
            very high-quality engineer to taking care of your project</div>
        </div>
        <div class="row flex">
          <div class="col-lg-4 text-center">
            <div class="singel-service style1">
              <div class="single-feature-icon2">
                <i class="icon-apartment_building"></i>
              </div>
              <h3 class="service-header"><a href="service-details-1.html">Construction</a></h3>
              <div class="service-details">The Construction Services department is responsible for managing the development and execution of new construction</div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-4 text-center">
            <div class="singel-service style1">
              <div class="single-feature-icon2">
                <i class="icon-basic_settings"></i>
              </div>
              <h3 class="service-header"><a href="service-details-1.html">Renovation</a></h3>
              <div class="service-details">Renovations can often be subtle, improving on the existing building or house. Or, can be drastic, much like a remodel</div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-4 text-center">
            <div class="singel-service style1">
              <div class="single-feature-icon2">
                <i class="icon-basic_lightbulb"></i>
              </div>
              <h3 class="service-header"><a href="service-details-1.html">Planning</a></h3>
              <div class="service-details">Planning and scheduling of construction activities helps engineers to complete the project in time and within the budget</div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-4 text-center">
            <div class="singel-service style1">
              <div class="single-feature-icon2">
                <i class="icon-tools_creative"></i>
              </div>
              <h3 class="service-header"><a href="service-details-2.html">Architecture</a></h3>
              <div class="service-details">Architecture and construction workers work on buildings and other structures. This includes houses and buildings.</div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-4 text-center">
            <div class="singel-service style1">
              <div class="single-feature-icon2">
                <i class="icon-paint_brush_wall_roller"></i>
              </div>
              <h3 class="service-header"><a href="service-details-2.html">Painting</a></h3>
              <div class="service-details">Paint is the general term for liquid that is used to add colour to the surface of an object by covering it with a pigmented coating.</div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-4 text-center">
            <div class="singel-service style1">
              <div class="single-feature-icon2">
                <i class="icon-home"></i>
              </div>
              <h3 class="service-header"><a href="service-details-2.html">Consulting</a></h3>
              <div class="service-details">Our construction consultants possess the engineering and construction experience to provide perfect, cost-effective solutions.</div>
            </div>
          </div><!-- .col -->
        </div>
      </div>
    </section>
    <!-- End Service Sectinn -->

    <!-- Start Working process -->
    <section class="work-process-wrap section fw-400">
      <div class="container">
        <div class="section-header type1">
          <h2>Working Process</h2>
          <div class="sub-heading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit ipsum dolor.<br> 
          Lorem ipsum dolor sit amet, consectetuer ipsum dolor.</div>
        </div>
        <div class="work-process">
          <div class="single-process">
            <div class="single-process-number"><span>01</span></div>
            <div class="single-process-text">
              <h3>Descussion</h3>
              <p>At first, we discuss your dream project.</p>
            </div>
          </div>
          <div class="single-process">
            <div class="single-process-number"><span>02</span></div>
            <div class="single-process-text">
              <h3>Planing</h3>
              <p>After that planer make a great plan for us.</p>
            </div>
          </div>
          <div class="single-process">
            <div class="single-process-number"><span>03</span></div>
            <div class="single-process-text">
              <h3>Design</h3>
              <p>Then creative designer make a unique design.</p>
            </div>
          </div>
          <div class="single-process">
            <div class="single-process-number"><span>04</span></div>
            <div class="single-process-text">
              <h3>Construction</h3>
              <p>Our worker give 100% effort for project.</p>
            </div>
          </div>
          <div class="single-process">
            <div class="single-process-number"><span>05</span></div>
            <div class="single-process-text">
              <h3>Check Quality</h3>
              <p>At last Quality Controler team check everything</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Working process -->
    <hr>
    <!-- Start Project Section -->
    <section class="project section" id="projects">
      <div class="container">
        <div class="section-header type1">
          <h2>Featured Projects</h2>
          <div class="sub-heading">Here are some projects that we build the last few years you can check<br> 
          Every project that we build very carefully and love.</div>
        </div>
        <div class="row flex">
          <div class="col-lg-4">
            <a href="project-details-1.html" class="singel-project">
              <img src="/img/nw-project/01.jpg" alt="Image">
              <div class="project-meta">
                <h3 class="project-title">Colorful House</h3>
                <span class="project-date">26 Jan, 2018</span>
              </div>
            </a>
          </div><!-- .col -->
          <div class="col-lg-4">
            <a href="project-details-1.html" class="singel-project">
              <img src="/img/nw-project/07.jpg" alt="Image">
              <div class="project-meta">
                <h3 class="project-title">Luxury Resort</h3>
                <span class="project-date">15 Feb, 2018</span>
              </div>
            </a>
          </div><!-- .col -->
          <div class="col-lg-4">
            <a href="https://www.youtube.com/embed/-3a5P876CmA?autoplay=1" class="singel-project video-open">
              <span class="project-player"><i class="fa fa-play"></i></span>
              <img src="/img/nw-project/04.jpg" alt="Image">
              <div class="project-meta">
                <h3 class="project-title">Personal Home</h3>
                <span class="project-date">25 Apr, 2018</span>
              </div>
            </a>
          </div><!-- .col -->
        </div>
      </div>
    </section>
    <!-- End Project Section -->
    
    <!-- Start fun-factor -->
    <section class="fun-factor section bg-img lazy" data-src="/img/fun-fact-bg.jpg">
      <div class="container">
        <div class="row flex">
          <div class="col-md-4">
            <div class="single-factor">
              <div class="factor-icon"><i class="icon-apartment_building"></i></div>
              <h2 class="factor-number"><span class="counter">{{($contactus)?$contactus->projectdone:''}}</span>+</h2>
              <h3 class="factor-header">Projects Done</h3>
            </div>
          </div><!-- .col -->
          <div class="col-md-4">
            <div class="single-factor">
              <div class="factor-icon"><i class="icon-user"></i></div>
              <h2 class="factor-number"><span class="counter">{{($contactus)?$contactus->noofclients:''}}</span>+</h2>
              <h3 class="factor-header">Clients Handle</h3>
            </div>
          </div><!-- .col -->
          <div class="col-md-4">
            <div class="single-factor">
              <div class="factor-icon"><i class="icon-trophy"></i></div>
              <h2 class="factor-number"><span class="counter">{{($contactus)?$contactus->noofawards:''}}</span>+</h2>
              <h3 class="factor-header">Award Won</h3>
            </div>
          </div><!-- .col -->
        </div>
      </div>
    </section>
    <!-- End fun-factor -->

    <!-- Start Team Section -->
    <section class="team team-v1 section" id="team">
      <div class="container">
        <div class="section-header type1">
          <h2>Creative Team Member</h2>
          <div class="sub-heading">Here are some projects that we build the last few years you can check<br> 
          Every project that we build very carefully and love.</div>
        </div>
        <div class="row flex">
          <div class="col-md-4">
            <div class="team-member">
              <div class="team-member-img">
                <img src="/img/team/05.jpg" alt="Image">
              </div>
              <div class="team-member-text text-center">
                <h3>Jesmin Jesi</h3>
                <span>Architect</span>
                <div class="member-social-btn-v1">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                </div>
              </div>
            </div><!-- .team-member -->
          </div><!-- .col -->
          <div class="col-md-4">
            <div class="team-member">
              <div class="team-member-img">
                <img src="/img/team/06.jpg" alt="Image">
              </div>
              <div class="team-member-text text-center">
                <h3>Michel Smith</h3>
                <span>Manager</span>
                <div class="member-social-btn-v1">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                </div>
              </div>
            </div><!-- .team-member -->
          </div><!-- .col -->
          <div class="col-md-4">
            <div class="team-member">
              <div class="team-member-img">
                <img src="/img/team/07.jpg" alt="Image">
              </div>
              <div class="team-member-text text-center">
                <h3>Robart Rome</h3>
                <span>Incharge</span>
                <div class="member-social-btn-v1">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                </div>
              </div>
            </div><!-- .team-member -->
          </div><!-- .col -->
        </div>
      </div>
    </section>
    <!-- End Team Section -->
    <hr>
    <!-- Start home-blog -->
   
    <!-- End home-blog -->

    <!-- Start Testimonial -->
    <section class="testimonial-wrap section gray-bg" id="testimonial">
      <div class="container">
        <div class="section-header type1">
          <h2>What Client Say?</h2>
          <div class="sub-heading">People love our work and they always be with us as a family, some of client<br> 
           reviews is given below please see and asume our service.</div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial">
              <div class="testimonial-text">"Bizzybeehomes is one of the very best I have had the pleasure to work with in my 27 years of design and construction project management here at Dover Air Force Base and I look forward to working with Bancroft again on future construction."</div>
              <div class="testimonial-meta">
                <div class="avator"><img src="/img/comment-01.jpg" alt="Image"></div>
                <div class="testimonial-meta-text">
                  <h3>Jhon Doe</h3>
                  <span>Manager</span>
                </div>
              </div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-4">
            <div class="testimonial">
              <div class="testimonial-text">"I would like to extend my personal gratitude and congratulations to you and the entire Bizzybeehomes Construction project team for their dedication and professional approach and hard work in the completion of my Largest project."</div>
              <div class="testimonial-meta">
                <div class="avator"><img src="/img/testimonial2.jpg" alt="Image"></div>
                <div class="testimonial-meta-text">
                  <h3>Dana M. Porter</h3>
                  <span>Director</span>
                </div>
              </div>
            </div>
          </div><!-- .col -->
          <div class="col-lg-4">
            <div class="testimonial">
              <div class="testimonial-text">"This state of the art facility will provide our dedicated staff and volunteers with the ability to better serve thousands of homeless cats and dogs for years to come. All of us at DHA appreciate the outstanding service of Bizzybeehomes."</div>
              <div class="testimonial-meta">
                <div class="avator"><img src="/img/testimonial3.jpg" alt="Image"></div>
                <div class="testimonial-meta-text">
                  <h3>Robert Smith</h3>
                  <span>Executive</span>
                </div>
              </div>
            </div>
          </div><!-- .col -->
        </div>
      </div>
    </section>
    <!-- End Testimonial -->

    <!-- Start Contact Section -->
    <section class="contact section" id="contact">
      <div class="container">
        <div class="section-header type1">
          <h2>Contact Us Now</h2>
        </div>
        <div class="row">
          <div class="col-xl-6">
            <div class="contact-text">If you have any quires or have any project fill free to contact us<br> 
              Our support team is available for you 24/7.</div>
            <div class="contact-info-wrap">
              <div class="row">
                <div class="col-md-6">
                  <div class="single-contact-info">
                    <i class="icon-basic_geolocalize-01"></i>
                    <div class="single-info-details">
                      <h3>Our Location</h3>
                      <span>{{($contactus)?$contactus->address:''}}</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single-contact-info">
                    <i class="icon-device_iphone"></i>
                    <div class="single-info-details">
                      <h3>Our Phone</h3>
                      @if($contactus->mobile)
                        @foreach(explode(",",$contactus->mobile) as $mob)
                            <span>{{$mob}}</span>
                        @endforeach
                      @endif
                  
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="single-contact-info">
                    <i class="icon-mail_envelope"></i>
                    <div class="single-info-details">
                      <h3>Our E-mail</h3>
                      @if($contactus->email)
                        @foreach(explode(",",$contactus->email) as $em)
                           <span>{{$em}}</span>
                        @endforeach
                      @endif

                    </div>
                  </div>
                </div>
                <!-- <div class="col-md-6">
                  <div class="single-contact-info">
                    <i class="icon-support_tools"></i>
                    <div class="single-info-details">
                      <h3>Our Support</h3>
                      <span>support@gmail.com</span>
                      <span>example@gmail.com</span>
                    </div>
                  </div>
                </div> -->
              </div>
            </div><!-- .contact-info-wrap -->
          </div><!-- .col -->
          @if(Session::has('message'))
            <script type="text/javascript">
              alert("Your Message Has been sent Successfully");
            </script>
          @endif
          <div class="col-xl-6">
            <form  action="/sendquery" method="post" class="contact-form">
              {{csrf_field()}}
              <div class="cf-msg"></div>
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" id="name" name="name" placeholder="Full Name" required>
                </div><!-- .col -->
                <div class="col-sm-6">
                  <input type="text" id="subject" name="subject" placeholder="Subject" required>
                </div><!-- .col -->
                <div class="col-sm-6">
                  <input type="tel" id=phone name="phone" placeholder="Phone">
                </div><!-- .col -->
                <div class="col-sm-6">
                  <input type="email" id="email" name="email" placeholder="Email" required>
                </div><!-- .col -->
                <div class="col-sm-12">
                  <textarea rows="3" placeholder="Droap a line" id="msg" name="msg" required></textarea>
                </div><!-- .col -->
                <div class="col-sm-12">
                  <button class="t-btn" type="submit" name="submit">Send Message</button>
                </div><!-- .col -->
              </div>
            </form>
          </div><!-- .col -->
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
    <hr>
    <!-- Start Our Partners -->
   <!--  <section class="partner section">
      <div class="container">
        <div class="section-header type1">
          <h2>Partner Organization</h2>
          <div class="sub-heading">We fill proud to introduce our partners, they really help us to go <br>
          forward of our business and we love to add us. </div>
        </div>
        <div class="partner-logo2">
          <div class="partner-logo-in"><img src="img/clients/01.png" alt="Image"></div>
          <div class="partner-logo-in"><img src="img/clients/02.png" alt="Image"></div>
          <div class="partner-logo-in"><img src="img/clients/03.png" alt="Image"></div>
          <div class="partner-logo-in"><img src="img/clients/04.png" alt="Image"></div>
          <div class="partner-logo-in"><img src="img/clients/05.png" alt="Image"></div>
          <div class="partner-logo-in"><img src="img/clients/06.png" alt="Image"></div>
          <div class="partner-logo-in"><img src="img/clients/07.png" alt="Image"></div>
          <div class="partner-logo-in"><img src="img/clients/08.png" alt="Image"></div>
          <div class="partner-logo-in"><img src="img/clients/09.png" alt="Image"></div>
        </div>
      </div>
    </section> -->
    <!-- End Our Partners -->
    <!-- Start Subscribe Section -->
    <div class="subscribe-wrap">
      <div class="container">
         @if(Session::has('submessage'))
            <script type="text/javascript">
              alert("Your are Successfully Subscribed");
            </script>
          @endif
        <h2>Subscribe to Get Our News, Update and Special Offer.</h2>
        <form class="mailchimp" action="/subscribe" method="post">
          {{csrf_field()}}
          <input type="email" name="email" id="subscriber-email" placeholder="Enter your Email" class="form-control" required="">
          <button type="submit" class="t-btn">Subscribe</button>
          <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
          <h5 class="subscription-success"> . </h5>
          <h5 class="subscription-error"> . </h5>
          <label class="subscription-label" for="subscriber-email"></label>
        </form>
      </div>
    </div>
    <!-- End Subscribe Section -->


  @endsection