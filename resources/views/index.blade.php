@include('layouts.header')
  <!-- HOME SECTION -->

<section class="home-section">
    <div class="home-banner">
        <div class="banner-div">
            <div class="slideshow-container">
                <div class="mySlides fade" style="background-image: url('images/elt-banner.jpg'); opacity:1;"></div>
                <div class="mySlides fade" style="background-image: url('images/trump-banner.jpg');opacity:1;"></div>
                <div class="mySlides fade" style="background-image: url('images/dlf-one-midtown-banner.jpg');opacity:1;"></div>
                <div class="mySlides fade" style="background-image: url('images/banner3.jpg');opacity:1;"></div>
            </div>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span>
            </div>
        </div>
        <div class="border-frame">
            <div class="inner-border-frame"></div>
        </div>
        <a href="{{ route('home') }}" class="homelogo"> 
            <img src="images/logo1.png" alt="Luxury Residences" width="350" height="131">
            <div class="mask mask1">
                <img src="images/logo1.png" alt="Luxury Residences Gurgaon" width="350" height="131">
                </div>
        </a>
        <a class="luxury-btn" href="{{ route('home') }}">Choose Your Luxury</a>
        <a class="banner-arrow" href="{{ route('projects') }}"><i class="fa fa-angle-down" aria-hidden="true"></i></a>

    </div>
</section>

<!-- ALL PROJECTS SECTION -->

<section class="all-projects" id="all-projects">
    <div class="title">
        <div class="container-fluid">
            <h3>View All Projects</h3>
        </div>
    </div>  
    <div class="all-projects-div">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="project-items">
                        <a href="#" target="_blank">
                            <span class="project-item-img"><img src="images/home/super-luxury-project image.jpg" alt="Super Luxury Projects" class="img-fluid" width="633" height="807"></span>
                            <span class="project-text">Ultra Luxury</span>
                        </a>  
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-items">
                        <a href="#" target="_blank">
                            <span class="project-item-img"><img src="images/home/luxury-projects-image.jpg" alt="Luxury Projects" class="img-fluid" width="633" height="807"></span>
                            <span class="project-text">Luxury</span>
                        </a>  
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-items">
                        <a href="#" target="_blank">
                            <span class="project-item-img"><img src="images/home/premium-project-image.jpg" alt="Preium Projects" class="img-fluid" width="633" height="807"></span>
                            <span class="project-text">Premium</span>
                        </a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- achievement section -->
<section class="our-achievement">
    <div class="title">
        <div class="container">
            <h3>Our Achievement</h3> 
        </div>
    </div>
    <div class="our-achievement-div">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="achievement-item">
                        <img src="images/home/developer-icon.png" alt="Developers" width="97" height="110">
                        <div id="achievement-count1">24</div>
                        <p>Developers</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="achievement-item">
                        <img src="images/home/project-icon.png" alt="Projects" width="97" height="110">
                        <div id="achievement-count2"></div>
                        <p>Projects</p>
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="achievement-item">
                        <img src="images/home/client-icon.png" alt="Developers" width="97" height="110">
                        <div id="achievement-count3">825</div>
                        <p>Clients</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>


<!-- feature-project -->
<section class="feature-project">
    <div class="title">
        <div class="container">
            <h3>Feature Projects</h3> 
            <p>Check out some of our listed properties</p>
        </div>
    </div>
    <div class="feature-project-div">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-project-item">
                        <div class="feature-project-image">
                            <img src="images/home/dlf-camellias.jpg" alt="" class="img-fluid" width="653" height="368">
                            <span>Ready To Move</span>
                        </div>
                        <div class="feature-project-cnt">
                            <h4>DLF Camellias</h4>
                            <p>Sector 42, Gurugram</p>
                            <ul>
                                <li>
                                    <span>Area: On Request</span>
                                    <span>Size: On Request</span>
                                </li>
                                <li>
                                    <span><b>&#8377; On Request</b></span>
                                    <span><a class="btn" href="dlf-camellias-sector-42-gurgaon/" target="_blank">View Details</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-project-item">
                        <div class="feature-project-image">
                            <img src="images/home/trump-tower-gurgaon.jpg" alt="" class="img-fluid" width="653" height="368">
                            <span>Under Construction</span>
                        </div>
                        <div class="feature-project-cnt">
                            <h4>Trump Tower</h4>
                            <p>Sector 65, Gurugram</p>
                            <ul>
                                <li>
                                    <span>3525 Sq. Ft. Onwards</span>
                                    <span>3 & 4 BHK</span>
                                </li>
                                <li>
                                    <span><b>&#8377; 8.50 Cr* Onwards</b></span>
                                    <span><a class="btn" href="trump-towers-sector-65-gurgaon/" target="_blank">View Details</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-project-item">
                        <div class="feature-project-image">
                            <img src="images/home/godrej-south-estate.jpg" alt="" class="img-fluid" width="653" height="368">
                            <span>OC Received</span>
                        </div>
                        <div class="feature-project-cnt">
                            <h4>Godrej South Estate</h4>
                            <p>Okhla Phase - 1, South Delhi</p>
                            <ul>
                                <li>
                                    <span>2764 - 3851 Sq. Ft.</span>
                                    <span>3 & 4 BHK Apartments</span>
                                </li>
                                <li>
                                    <span><b>&#8377; 6.91 Cr* Onwards</b></span>
                                    <span><a class="btn" href="godrej-south-estate-okhla-delhi/" target="_blank">View Details</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-project-item">
                        <div class="feature-project-image">
                            <img src="images/home/tarc-tripundra.jpg" alt="" class="img-fluid" width="653" height="368">
                            <span>Under Construction</span>
                        </div>
                        <div class="feature-project-cnt">
                            <h4>Tarc Tripundra</h4>
                            <p>Main Bijwasan Road, New Delhi</p>
                            <ul>
                                <li>
                                    <span>2200 - 3100 Sq. Ft.</span>
                                    <span>3 & 4 BHK Apts.</span>
                                </li>
                                <li>
                                    <span><b>&#8377; 5.25 Cr Onwards</b></span>
                                    <span><a class="btn" href="tarc-tripundra-main-bijwasan-road-new-delhi/" target="_blank">View Details</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-project-item">
                        <div class="feature-project-image">
                            <img src="images/home/dlf-one-midtown.jpg" alt="" class="img-fluid" width="653" height="368">
                            <span>Under Construction</span>
                        </div>
                        <div class="feature-project-cnt">
                            <h4>DLF One Midtown</h4>
                            <p>Moti Nagar, West Delhi</p>
                            <ul>
                                <li>
                                    <span>1740 - 3040 Sq. Ft.</span>
                                    <span>2, 3 & 4 BHK Apts</span>
                                </li>
                                <li>
                                    <span><b>&#8377; 3.60Cr* Onwards</b></span>
                                    <span><a class="btn" href="dlf-midtown-moti-nagar-delhi/" target="_blank">View Details</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-project-item">
                        <div class="feature-project-image">
                            <img src="images/home/phoenix-kessaku.jpg" alt="" class="img-fluid" width="653" height="368">
                            <span>Ready to Move</span>
                        </div>
                        <div class="feature-project-cnt">
                            <h4>Phoenix Kessaku</h4>
                            <p>Rajkumar Rd, Rajajinagar, Bangalore</p>
                            <ul>
                                <li>
                                    <span>2678 Sq. Ft. Onwards</span>
                                    <span>3 - 8 BHK Bungalows</span>
                                </li>
                                <li>
                                    <span><b>&#8377; 5.02 Cr* Onwards</b></span>
                                    <span><a class="btn" href="phoenix-kessaku-rajajinagar-bangalore/" target="_blank">View Details</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-project-item">
                        <div class="feature-project-image">
                            <img src="images/home/embassy-one-bangalore.jpg" alt="" class="img-fluid" width="653" height="368">
                            <span>Ready to Move</span>
                        </div>
                        <div class="feature-project-cnt">
                            <h4>Embassy One</h4>
                            <p>Off Bellary Road, Ganganagar, Bangalore</p>
                            <ul>
                                <li>
                                    <span>1992 Sq. Ft. Onwards</span>
                                    <span>Branded Residences & Penthouse</span>
                                </li>
                                <li>
                                    <span><b>&#8377; On Request</b></span>
                                    <span><a class="btn" href="four-seasons-private-residences-bellary-road-bangalore/" target="_blank">View Details</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-project-item">
                        <div class="feature-project-image">
                            <img src="images/home/embassy-lake-terraces.jpg" alt="" class="img-fluid" width="653" height="368">
                            <span>Ready To Move</span>
                        </div>
                        <div class="feature-project-cnt">
                            <h4>Embassy Lake Terraces</h4>
                            <p>NH -7, Hebbal, Bangalore</p>
                            <ul>
                                <li>
                                    <span>3596 Sq. Ft. Onwards</span>
                                    <span>3, 4 & 5 BHK Apartments</span>
                                </li>
                                <li>
                                    <span><b>&#8377; 5.40 Cr* Onwards</b></span>
                                    <span><a class="btn" href="embassy-lake-terraces-hebbal-bangalore/" target="_blank">View Details</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-project-item">
                        <div class="feature-project-image">
                            <img src="images/home/the-ark-voyage.jpg" alt="" class="img-fluid" width="653" height="368">
                            <span>Under Construction</span>
                        </div>
                        <div class="feature-project-cnt">
                            <h4>The Ark Voyage</h4>
                            <p>Hadapsar, Pune, Maharashtra</p>
                            <ul>
                                <li>
                                    <span>2247 Sq. Ft. Onwards</span>
                                    <span>3 & 4 BHK Residences</span>
                                </li>
                                <li>
                                    <span><b>&#8377; 3 Cr* Onwards</b></span>
                                    <span><a class="btn" href="the-ark-voyage-pune-maharastra/" target="_blank">View Details</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="view-all-project-btn">
                        <a class="btn" href="projects" target="_blank">View All Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Top Builder -->

<section class="top-builder">
    <div class="title">
        <div class="container">
            <h3>Top Builders</h3> 
        </div>
    </div>
    <div class="top-builder-div">
        <div class="container">
            <div class="swiper-container top-builder-slider"> 
                <div class="swiper-wrapper"> 
                    <div class="swiper-slide"> 
                        <img src="images/developers/embassy-group.png" alt="Embassy Group" class="img-fluid" width="150" height="80">
                    </div>
                    <div class="swiper-slide"> 
                        <img src="images/developers/godrej-properties.png" alt="Godrej Properties" class="img-fluid" width="150" height="80"> 
                    </div>
                    <div class="swiper-slide"> 
                        <img src="images/developers/ireo.png" alt="Ireo" class="img-fluid" width="150" height="80">
                    </div>
                    <div class="swiper-slide"> 
                        <img src="images/developers/pioneerurban.png" alt="Pioneer Urban" class="img-fluid" width="150" height="80">
                    </div>
                    <div class="swiper-slide"> 
                        <img src="images/developers/puri.png" alt="Puri" class="img-fluid" width="150" height="80">
                    </div>
                    <div class="swiper-slide"> 
                        <img src="images/developers/silverglades.png" alt="Silverglades" class="img-fluid" width="150" height="80">
                    </div>                      
                </div>   
            </div>
            <div class="swiper-pagination-top-builder-slider"></div>  
        </div> 
    </div>
</section>
<!-- End Top Builder -->

<!-- start testimonials section -->
<section class="testimonials-section">
    <div class="title">
        <div class="container">
            <h3>Testimonials</h3> 
        </div>
    </div>
    <div class="testimonials-div">
        <div class="container">
            <div class="swiper-container testimonials-slider"> 
                <div class="swiper-wrapper"> 
                    <div class="swiper-slide"> 
                        <div class="testimonials-item">
                            <p>Excellent service and always available to provide advice and support. They understand the requirements of the customer. Professional and timely service from beginning to end. I would highly recommend anyone in the market to buy property from them.</p>
                            <h5>Ajay Puri</h5>
                      
                        </div> 
                    </div>
                    <div class="swiper-slide"> 
                        <div class="testimonials-item">
                            <p>Luxury Residences is the best real estate consulting company. They made my home buying journey easier. Their team was really helpful, supportive and professional. Thanks to all Luxury Residences team for such a great support.</p>
                            <h5>Sonia Mehta</h5>
                         
                        </div> 
                    </div>
                    <div class="swiper-slide"> 
                        <div class="testimonials-item">
                            <p>When I was looking for a property in Gurgaon, I got full support from Luxury Residences. They guided me to all properties based on my requirements and arranged for visits on time. There were also good follow-ups. Thanks for such great service.</p>
                            <h5>Maneesh Kapur</h5>
                           
                        </div> 
                    </div>
                    <div class="swiper-slide"> 
                        <div class="testimonials-item">
                            <p>If you are looking to buy a property you will find a better deal with Luxury Residences. Their knowledge of the real estate sector is extensive, and they are very professional and helpful. Thanks for being supportive and responsive</p>
                            <h5>Kapil Tandon</h5>
                           
                        </div> 
                    </div>                  
                </div>   
            </div> 
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<!-- End testimonials section -->


<!-- Start footer section -->
<footer>
    <div class="top-footer" style="background-image: url(images/home/banner.jpg);">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5 col-lg-4">
                    <div class="location-detail">
                        <h4>Location Details</h4>
                        <div class="location-item">
                            <h5>Address</h5>
                            <p>Unit No 226 & 227, 2nd Floor,
                                Suncity Success Tower,
                                Golf Course Ext. Road,
                                Sector 65, Gurugram</p>
                        </div>
                        <div class="location-item">
                            <h5>Phone</h5>
                            <p><a href="tel:+919899055893">+91 9899 055 893</a></p>
                        </div>
                        <div class="location-item">
                            <h5>Email</h5>
                            <p><a href="mailto:info@luxuryresidences.in">info@luxuryresidences.in</a></p>
                        </div>
                        <div class="location-item">
                            <h5>Working Hours</h5>
                            <p>Monday - Saturday</p>
                            <p>10:00 AM - 08:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="form-footer">
                        <h4>Leave Your Details Here</h4>
                        <form action="thanks.php" method="post" name="form" autocomplete="off">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email ID" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                  
                                        <input type="text" class="form-control" name="mobile" placeholder="Mobile" required pattern="[0-9]{10}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-select form-control" name="scheduletime">
                                            <option class="d-none">Best Time To Call You</option>
                                            <option>Within 15 Min.</option>
                                            <option>08AM To 12PM</option>
                                            <option>12PM To 04PM</option>
                                            <option>04PM To 08PM</option>
                                            <option>Anytime</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                              
                                <div class="col-md-12">
                               
                                    <button type="submit" name="submit" value="submit" class="send_btn btn">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  </footer> 
  
  
  


@include('layouts.footer')