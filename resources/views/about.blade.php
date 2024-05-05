@include('layouts.header')
<!-- end header section -->

    <!-- banner section -->
<section class="banner" style="background-image: url(images/about-us.jpg);
background-size: cover;
background-position: center center;
background-repeat: no-repeat;">
  <h1>About us</h1>
</section>
<!-- 
end banner section -->

  <!-- overview section -->

<section class="overiew same-section">
    <div class="container">
     <div class="overview-point">
        <div class="overview-heading">
            <h1>Who We Are</h1>
            <p>Luxury Residences, A Delhi/NCR (Gurgaon &amp; Noida) based venture is a full service Real Estate firm that tailors its services to the satisfaction of our clients. Be it Buying, Selling or Leasing of Corporates, Retail or Residential Property, our single platform is designed to cater the needs of buyers and sellers. Our strength is customer satisfaction. Buying home is an essential part of everyone life’s and we ensure that process is safe, sustainable and easy to understand for our clients.</p>
        </div>
     </div>
    </div>
</section>

<!-- end overview section -->


<!-- start location pointer section -->
<section class="location-points same-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="location">
                    <div class="location-image">
                        <a href="#"><img src="images/project.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="location-botton">
                        <a href="#" target="_blank">Our Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="location">
                    <div class="location-image">
                        <a href="#" target="_blank"><img src="images/location.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="location-botton">
                        <a href="#" target="_blank">Our Location</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- end location pointer section -->


<!-- start mission vision section -->

<section class="section-mission-vision same-section">
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-md-6">
                 <div class="mission">
                     <div class="mission-icon">
                         <img src="icons/mission.png" alt="" class="img-fluid">
                     </div>
                     <div class="mission-heading">
                         <h1>Our Mission</h1>
                         <p>Our mission is to simplify the real estate experience for our clients by offering them the best property requirement. We believe in transparency, honesty, and integrity, and we are committed to building long-lasting relationships with our clients based on trust and respect. As a team, we constantly strive to innovate and improve our services to exceed our clients' expectations and make their real estate journey as smooth and rewarding as possible.</p>
                     </div>
                 </div> 
             </div>
             <div class="col-md-6">
                 <div class="vision">
                     <div class="vision-icon">
                         <img src="icons/vision.png" alt="" class="img-fluid">
                     </div>
                     <div class="vision-heading">
                         <h1>Our Vision</h1>
                         <p>We envision a world where every individual finds their dream home with ease. We strive to create a positive impact on the communities we serve by offering the best possible advice, and support to help them make informed decisions. Our commitment to customer satisfaction and innovation drives us to continuously improve our services, and we are dedicated to becoming the go-to platform for all real estate needs.
                        </p>
                     </div>
                 </div>
             </div>
         </div>
    </div>
</section>

<!-- end mission vision section -->



<!-- start Location section -->

<section class="Location-section same-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="location">
                    <div class="location-image">
                        <a href="#" target="_blank"><img src="images/blog.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="location-botton">
                        <a href="#" target="_blank">Read Our Blogs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="location">
                    <div class="location-image">
                        <a href="#" target="_blank"><img src="images/video.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="location-botton">
                        <a href="#" target="_blank"> Our Videos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end Location section -->


<!-- start meeting section -->


<section class="meeting same-section">
    <div class="container">
        <div class="sehedule">
         <h1>Schedule a Meeting</h1>
       <div class="radio-form-start">
        <div class="radio-one">
            <h2><b>Have any question ?</b></h2>
            <p>Lets start the conversation</p>
            <form action="php-about.php" method="post" id="contact-form">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <input type="text" class="con-field" name="name" placeholder="First Name" required="" pattern="[a-zA-Z][a-zA-Z0-9\s]*">
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <input type="text" class="con-field" name="lname" placeholder="Last Name" required="" pattern="[a-zA-Z][a-zA-Z0-9\s]*">
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <input class="con-field" name="mobile" required="" id="phone" placeholder="Phone" type="text" pattern="[0-9]{10}">
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <input class="con-field" name="email" required="" id="email" placeholder="Email" type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                  </div>
                  <div class="col-md-12"> 
                    <textarea class="con-field" name="message" id="message" rows="4" onpaste="return false" placeholder="Your Message" required=""></textarea>
                  </div>
                  
                </div>
                <input type="hidden" name="min_budget" value="">
                <input type="hidden" name="locations" value="">
                <input type="hidden" name="bhk" value="">
                <input type="hidden" name="project_id" value="64b10fc3c364e71eab1b3618">
                <input type="hidden" name="srd" class="srd" value="64b1386ec364e71f101b2d81">
                <input type="hidden" name="source" class="source" value="Seo"> 
                <input type="text" name="formflag" class="formflag" value="">
                <button type="submit" name="submit" class="btn">SEND MESSAGE</button>
              </form>
         </div>
       </div>
        </div>
    </div>
</section>

<!-- end meeting section -->

<!-- Start footer section -->
@include('layouts.footer')