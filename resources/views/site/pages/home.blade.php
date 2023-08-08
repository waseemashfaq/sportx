@extends('site.layout.app')
@section('title', __('index'))
@section('content')

 <!-- Banner section -->
      <section class="banner-section">
        <div class="bg-image-lyer" style="background-image: url({{asset('site/assets/imgs/banner.jpg')}}')}}">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 banner-content-wrapper" data-aos="fade-right" data-aos-duration="1500">
              <div class="bannercontent-wrappper">
                <div class="banner-content">
                  <h6>WELCOME TO TUDEBON</h6>
                  <h5>Keep Your Bone Strong & Health</h5>
                  <p>Aliquam ex nibh, rhoncus quis mi nec, imperdiet mattis est. Suspendisse potenti. Duis vestibulum magna quis suscipit tempus.</p>
                  <div class="make-appiontment-btn">
                    <button class="basic-btn-style"> Make appointment</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="banner-cards-section" >
        
        <div class="container">
          <div class="section-move">
            <div class="row ">
              <div class="col-lg-4 col-md-0 mb-4">
                
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="banner-card-wrapper" style="background-color: #5c645e;"
                  data-aos="fade-left" data-aos-duration="1500">
                  <div class="banner-card-content text-center">
                    <div class="bcard-img">
                      <img src="{{asset('site/assets/imgs/top-rated.png')}}">
                    </div>
                    <h6>Satisfaction Guarantee</h6>
                    <p>Aenean euismod eros arcu, ut dapibus vestibulum.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="banner-card-wrapper" data-aos="fade-left" data-aos-duration="1500">
                  <div class="banner-card-content text-center">
                    <div class="bcard-img">
                      <img src="{{asset('site/assets/imgs/doctor.png')}}">
                    </div>
                    <h6>Professional Therapist</h6>
                    <p>Aenean euismod eros arcu, ut dapibus vestibulum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
      </section>

      <!-- about section start -->
      <section class="about-section ptb-80" id="about-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-section">
                <div class="about-image p-relative">
                  <img class="img-fluid" src="{{    asset('site/assets/imgs/about-img.jpg')}}">
                  <div class="about-img-date" data-aos="fade-right" data-aos-duration="1500">
                    <h4>15<sup>TH</sup></h4>
                    <p>Years of Experience</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-right-section">
                <div class="about-sec-Content common-sec-heading">
                  <h6>ABOUT TUDEBON</h6>
                  <h5>Providing a High Level of Care</h5>
                  <p>Mauris vitae eros placerat velit molestie mollis. Aenean euismod eros arcu, ut dapibus urna vestibulum facilisis. Duis et facilisis augue, ac malesuada tortor. Duis vitae mattis nulla. Cras accumsan, neque eget eleifend vestibulum.
                  <br><br> Ut malesuada lectus non ante eleifend, ac consectetur lacus viverra. Etiam ornare neque augue, ut egestas nunc congue a.</p>
                  <div class="row mt-4 mb-4">
                    <div class="col-6">
                      <div class="our-vision d-flex">
                        <img src="{{    asset('site/assets/imgs/vision.png')}}">
                        <div>
                          <h3>Our Vision</h3>
                          <p>Consectetur adipiscing elit. Ut elit tellus.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="our-mission d-flex">
                        <img src="{{    asset('site/assets/imgs/target.png')}}">
                        <div>
                          <h3>Our Mission</h3>
                          <p>Consectetur adipiscing elit. Ut elit tellus.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="basic-btn-style mt-2" data-aos="fade-up" data-aos-duration="1500">Read more</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- services section Start -->
      <section class="services-section ptb-80" id="service-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
              <div class="common-sec-heading">
                <h6>SERVICES</h6>
                <h5>Conditions We Can Handle</h5>
                <p>Maecenas dictum fringilla nisi ac malesuada. Donec ac quam non diam elementum ultricies. In hac habitasse platea dictumst. Nullam eu elit sed metus convallis lobortis. Cras a iaculis eros. Phasellus at lectus viverra, sagittis erat quis.</p>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-4 mt-2 mb-4" data-aos="fade-up" data-aos-duration="1500">
              <div class="service-card-wrapper">
                <div class="service-card-content text-center">
                  <div class="service-card-img">
                    <img src="{{  asset('site/assets/imgs/service1.png')}}">
                  </div>
                  <h5>Chiropractic Care</h5>
                  <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                  <a href="">
                    <span class="card-readMore-btn mt-4 mb-4">
                      <span>Read More</span>
                      <img src="{{asset('site/assets/imgs/arrow.png')}}">
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-2" data-aos="fade-up" data-aos-duration="1500">
              <div class="service-card-wrapper">
                <div class="service-card-content text-center">
                  <div class="service-card-img">
                    <img src="{{  asset('site/assets/imgs/service2.png')}}">
                  </div>
                  <h5>Acupunctur</h5>
                  <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                  <a href="">
                    <span class="card-readMore-btn mt-4 mb-4">
                      <span>Read More</span>
                      <img src="{{asset('site/assets/imgs/arrow.png')}}">
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-2" data-aos="fade-up" data-aos-duration="1500">
              <div class="service-card-wrapper">
                <div class="service-card-content text-center">
                  <div class="service-card-img">
                    <img src="{{  asset('site/assets/imgs/service3.png')}}">
                  </div>
                  <h5>Massage Therapy</h5>
                  <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                  <a href="">
                    <span class="card-readMore-btn mt-4 mb-4">
                      <span>Read More</span>
                      <img src="{{asset('site/assets/imgs/arrow.png')}}">
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-2" data-aos="fade-up" data-aos-duration="2000">
              <div class="service-card-wrapper">
                <div class="service-card-content text-center">
                  <div class="service-card-img">
                    <img src="{{  asset('site/assets/imgs/service4.png')}}">
                  </div>
                  <h5>Sports Chiropractic</h5>
                  <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                  <a href="">
                    <span class="card-readMore-btn mt-4 mb-4">
                      <span>Read More</span>
                      <img src="{{asset('site/assets/imgs/arrow.png')}}">
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-2" data-aos="fade-up" data-aos-duration="2000">
              <div class="service-card-wrapper">
                <div class="service-card-content text-center">
                  <div class="service-card-img">
                    <img src="{{  asset('site/assets/imgs/service5.png')}}">
                  </div>
                  <h5>Laser Therapy</h5>
                  <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                  <a href="">
                    <span class="card-readMore-btn mt-4 mb-4">
                      <span>Read More</span>
                      <img src="{{asset('site/assets/imgs/arrow.png')}}">
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mt-2" data-aos="fade-up" data-aos-duration="2000">
              <div class="service-card-wrapper">
                <div class="service-card-content text-center">
                  <div class="service-card-img">
                    <img src="{{  asset('site/assets/imgs/service6.png')}}">
                  </div>
                  <h5>Pediatric Chiropractic</h5>
                  <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis. Suspendisse nec magna ac magna sagittis tristique etiam sagittis. Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                  <a href="">
                    <span class="card-readMore-btn mt-4 mb-4">
                      <span>Read More</span>
                      <img src="{{asset('site/assets/imgs/arrow.png')}}">
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Partner section start -->
      <section class="partner-section ptb-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="partner-content common-sec-heading">
                <h6>PARTNER</h6>
                <h5>Partners & Associations</h5>
                <p>Aliquam ex nibh, rhoncus quis mi nec, imperdiet mattis est. Suspendisse potenti duis.</p>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="row mt-5 textcenterr" data-aos="fade-left" data-aos-duration="2000">
                <div class="col-lg-4 col-md-6 mb-5">
                  <div class="partner-logo logo-first">
                    <img src="{{  asset('site/assets/imgs/partner1.png')}}">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                  <div class="partner-logo">
                    <img src="{{  asset('site/assets/imgs/partner2.png')}}">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                  <div class="partner-logo">
                    <img src="{{  asset('site/assets/imgs/partner3.png')}}">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                  <div class="partner-logo">
                    <img src="{{  asset('site/assets/imgs/partner4.png')}}">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                  <div class="partner-logo">
                    <img src="{{  asset('site/assets/imgs/partner5.png')}}">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                  <div class="partner-logo">
                    <img src="{{  asset('site/assets/imgs/partner6.png')}}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Rating section start-->
      <section class="Rating-section ptb-200" style="background-image: url(assets/imgs/bg-rate.jpg')}})">
        <div class="Rating-section-overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-11">
              <div class="row">
                <div class="col-lg-3  col-md-6">
                  <div class="rating-card-wrapper p-relative">
                    <div class="rating-card-content text-center">
                      <div class="rating-img">
                        <img src="{{    asset('site/assets/imgs/employees.png')}}">
                      </div>
                      <h5 data-value="1200" data-animation-duration="3500" data-style="static">1,200<sup>+</sup></h5>
                      <p>Happy Patients</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3  col-md-6">
                  <div class="rating-card-wrapper p-relative">
                    <div class="rating-card-content text-center">
                      <div class="rating-img">
                        <img src="{{    asset('site/assets/imgs/top-rated.png')}}">
                      </div>
                      <h5>15<sup>TH</sup></h5>
                      <p>Years of Experience</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="rating-card-wrapper p-relative">
                    <div class="rating-card-content text-center">
                      <div class="rating-img">
                        <img src="{{    asset('site/assets/imgs/doctor.png')}}">
                      </div>
                      <h5>250<sup>+</sup></h5>
                      <p>Therapist & Staff</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="rating-card-wrapper p-relative">
                    <div class="rating-card-content text-center">
                      <div class="rating-img">
                        <img src="{{    asset('site/assets/imgs/hospital.png')}}">
                      </div>
                      <h5>75<sup>+</sup></h5>
                      <p>Branch Clinic</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Why choose us section -->
      <section class="Why-us-section pb-80">
        <div class="container">
          <div class="Why-us-section-wrapper" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
              <div class="col-lg-6">
                <div class="why-left-content">
                  <div class="why-us-img">
                    <img src="{{  asset('site/assets/imgs/why-usimg.jpg')}}">
                  </div>

                  <div class="progress-heading">
                  <h6>Experience</h6>
                  <h6>97%</h6>  
                  </div>
                  <div class="progress">
                    <div class="progress-bar w-97" role="progressbar" aria-label="Basic example" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <div class="progress-heading">
                  <h6>Chiropractic</h6>
                  <h6>95%</h6>  
                  </div>
                  <div class="progress">
                    <div class="progress-bar w-95" role="progressbar" aria-label="Basic example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <div class="progress-heading">
                  <h6>Therapist</h6>
                  <h6>96%</h6>  
                  </div>
                  <div class="progress">
                    <div class="progress-bar w-96" role="progressbar" aria-label="Basic example" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                </div>
              </div>
              <div class="col-lg-6">
                <div class="why-right-content common-sec-heading">
                  <h6>WHY CHOOSE US</h6>
                  <h5>Many Solution Under One Roof</h5>
                  <p>Maecenas dictum fringilla nisi ac malesuada. Donec ac quam non diam elementum ultricies. In hac habitasse platea dictumst. Nullam eu elit sed metus convallis lobortis a iaculis eros. Ut malesuada lectus non ante eleifend, ac consectetur lacus viverra.</p>
                  <div class="why-us-list d-flex align-items-center mt-2">
                    <img src="{{  asset('site/assets/imgs/right-arrow.png')}}" class="img-fluid"> 
                    <p>Certified Professional Therapist</p>
                  </div>
                  <div class="why-us-list d-flex align-items-center mt-2">
                    <img src="{{  asset('site/assets/imgs/right-arrow.png')}}" class="img-fluid"> 
                    <p>High Quality Treatment and Best Equipment</p>
                  </div>
                  <div class="why-us-list d-flex align-items-center mt-2">
                    <img src="{{  asset('site/assets/imgs/right-arrow.png')}}" class="img-fluid"> 
                    <p>Friendly and Kind Staff</p>
                  </div>
                  <div class="why-us-list d-flex align-items-center mt-2">
                    <img src="{{  asset('site/assets/imgs/right-arrow.png')}}" class="img-fluid"> 
                    <p>Affordable Prices and Guaranteed Healing</p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <!-- how we are  -->
      <section class="How-we-work ptb-80">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="how-we-wrok-content common-sec-heading text-center">
                <h6>HOW WE WORK</h6>
                <h5>Stages of Consultation</h5>
                <p>Maecenas dictum fringilla nisi ac malesuada. Donec ac quam non diam elementum ultricies. In hac habitasse platea dictumst. Nullam eu elit sed metus convallis lobortis. Cras a iaculis eros. Phasellus at lectus viverra, sagittis erat quis.</p>
              </div>
            </div>
          </div>
          <div class="row mt-3" >
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800">
              <div class="how-we-card-wrapper">
                <div class="how-we-card-img mb-3">
                  <img src="{{    asset('site/assets/imgs/contract.png')}}">
                </div>
                <h6>Make an Appointment</h6>
                <p>Suspendisse nec magna ac magna sagittis tristique.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1100">
              <div class="how-we-card-wrapper">
                <div class="how-we-card-img mb-3">
                  <img src="{{    asset('site/assets/imgs/contract.png')}}">
                </div>
                <h6>Make an Appointment</h6>
                <p>Suspendisse nec magna ac magna sagittis tristique.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1400">
              <div class="how-we-card-wrapper">
                <div class="how-we-card-img mb-3">
                  <img src="{{    asset('site/assets/imgs/contract.png')}}">
                </div>
                <h6>Make an Appointment</h6>
                <p>Suspendisse nec magna ac magna sagittis tristique.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1800">
              <div class="how-we-card-wrapper">
                <div class="how-we-card-img mb-3">
                  <img src="{{    asset('site/assets/imgs/contract.png')}}">
                </div>
                <h6>Make an Appointment</h6>
                <p>Suspendisse nec magna ac magna sagittis tristique.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Patient review start -->
      <section class="reviews-section ptb-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-3">
              <div class="reviews-left-content common-sec-heading"> 
                <h5>Our Patient Review</h5>
                <p>Aliquam ex nibh, rhoncus quis mi nec, imperdiet mattis est. Suspendisse potenti duis fringilla massa at rhoncus.</p>
                <div class="review-div-content" data-aos="fade-right" data-aos-duration="1500">
                  <img src="{{    asset('site/assets/imgs/quote.png')}}">
                  <h6>"Curabitur accumsan felis in dui placerat lobortis. Pellentesque et malesuada orci, quis pretium neque. Aenean accumsan sodales tortor, porta tempor nunc efficitur quis. Nunc sit amet magna ac dui aliquet euismod nec vitae nisi."</h6>
                  <h4>Kim Esmeralda</h4>
                  <p>Gym Instructor</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-3">
              <div class="reviews-right-content">
                <div class="reviews-image">
                  <img src="{{    asset('site/assets/imgs/review-img.jpg')}}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA section start-->
      <section class="Rating-section ptb-80" style="background-image: url(assets/imgs/bg-cta.jpg')}})">
        <div class="Rating-section-overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="common-sec-heading text-center p-relative">
                <h5 style="color: white;">Feel Something Wrong With Your Bones?</h5>
                <p style="color: white;">Maecenas dictum fringilla nisi ac malesuada. Donec ac quam non diam elementum ultricies. In hac habitasse platea dictumst. <br> Nullam eu elit sed metus convallis lobortis. Cras a iaculis eros. Phasellus at lectus viverra, sagittis erat quis.</p>
                <button class="basic-btn-style mt-2" data-aos="fade-up" data-aos-duration="1300">Free Consultation</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Appiontment section -->
      <section class="Appiontment-section ptb-80">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="how-we-wrok-content common-sec-heading text-center">
                <h6>BOOKING</h6>
                <h5>Make An Appointment</h5>
                <p>Maecenas dictum fringilla nisi ac malesuada. Donec ac quam non diam elementum ultricies. In hac habitasse platea dictumst. Nullam eu elit sed metus convallis lobortis. Cras a iaculis eros. Phasellus at lectus viverra, sagittis erat quis.</p>
              </div>
            </div>
          </div>
          <div class="row mt-5 justify-content-center" data-aos="fade-up" data-aos-duration="1300">
            <div class="col-lg-10 appointmentform-wrapper">
              <div id="smartwizard">
                  <ul class="nav">
                     <li>
                         <a class="nav-link" href="#step-1" >
                            Step 1
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="#step-2" >
                            Step 2
                         </a>
                     </li>
                     <!-- <li>
                         <a class="nav-link" href="#step-3" >
                            Step 3
                         </a>
                     </li> -->
                  </ul>
                  <div class="tab-content">
                     <div id="step-1" class="tab-pane" role="tabpanel">
                        <form class="text-center">
                          <div class="From__Input">
                            <input type="text" name="name" placeholder="Name">
                          </div>
                          <div class="From__Input">
                            <input type="text" name="phone" placeholder="Phone">
                          </div>
                          <div class="From__Input">
                            <input type="text" name="email" placeholder="Email">
                          </div>
                        </form>
                     </div>
                     <div id="step-2" class="tab-pane" role="tabpanel">
                        <form class="text-center">
                          <div class=" input-Groups">
                            <div class="From__Input">
                              <select class="form-select" id="inputGroupSelect03" >
                                 <option selected>Select Service</option>    
                                @foreach ($allService as $item)
                                   <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="From__Input ">
                              <input type="text" name="date" id="datepicker" placeholder="Select Date" >
                            </div>
                            <div class="From__Input">
                              <input type="time" name="time" placeholder="Select Date">
                            </div>
                          </div>
                          <button class="basic-btn-style mt-3">Make Appiontment</button>
                        </form>
                     </div>
                     <!-- <div id="step-3" class="tab-pane" role="tabpanel">
                        <form class="text-center">
                          
                          <div class="d-flex">
                            <div class="From__Input w-50 mr-2">
                              <select class="form-select" id="inputGroupSelect03" >
                                <option selected>Select Service</option>
                                <option value="1">Message Therapy</option>
                                <option value="2">Laser Therapy</option>
                                <option value="3">Special Therapy</option>
                              </select>
                            </div>
                            <div class="From__Input w-50 ml-2">
                              <input type="date" name="date" placeholder="Select Date">
                            </div>
                          </div>
                            <button class="basic-btn-style mt-3" data-aos="fade-up" data-aos-duration="1300">Make Appiontment</button>
                        </form>
                     </div> -->
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog section start -->
      <section class="blog-section ptb-80" id="blog-section">
        <div class="container">
          <div class="row blogflex-direction">
            @foreach ($blogData as $item)
                <div class="col-lg-4 mb-4" data-aos="fade-right" data-aos-duration="1300">
              <div class="blog-card-wrapper">
                <img src="{{$item->image}}" class="img-fluid">
                <div class="blog-card-content">
                  <h6>{{$item->title}}</h6>
                  <p>{!! strlen($item->detail) > 100 ? substr($item->detail, 0, 100) . '...' : $item->detail !!}</p>
                  <a href="">
                    <span class="card-readMore-btn mt-4 mb-4">
                      <span style="color:white;">Read More</span>
                      <img src="{{asset('site/assets/imgs/arrow1.png')}}">
                    </span>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
            
            {{-- <div class="col-lg-4 mb-4" data-aos="fade-right" data-aos-duration="1600">
              <div class="blog-card-wrapper">
                <img src="{{asset('site/assets/imgs/blog2.jpg')}}" class="img-fluid">
                <div class="blog-card-content">
                  <h6>What Your Back Pain is Trying to Tell You</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. onsectetur adipiscing elit. onsectetur adipiscing elit. Maecenas rutrum ultrices nisi, at congue sapien lobortis…</p>
                  <a href="">
                    <span class="card-readMore-btn mt-4 mb-4">
                      <span style="color:white;">Read More</span>
                      <img src="{{asset('site/assets/imgs/arrow1.png')}}">
                    </span>
                  </a>
                </div>
              </div>
            </div> --}}
            <div class="col-lg-4 p-0 mb-4">
              <div class="common-sec-heading">
                <h6>CHECK OUT OUR</h6>
                <h5>Blog & Articles</h5>
                <p>Maecenas dictum fringilla nisi ac malesuada. Donec ac quam non diam elementum ultricies. In hac habitasse platea dictumst nullam eu elit ligula volutpat. <br> <br>Ut malesuada lectus non ante eleifend, ac lacus nunc viverra. Etiam ornare neque augue.</p>
                <button class="basic-btn-style mt-2" data-aos="fade-up" data-aos-duration="1300">view all</button>
              </div>
            </div>

          </div>
        </div>
      </section>

      <style type="text/css">
        .sw-theme-dots>.nav .nav-link.active{
            color: #5c645e !important;
        }
        .sw-theme-dots>.nav .nav-link.active::after{
            background-color: #5c645e !important;
        }
        .sw-theme-dots>.nav .nav-link.done::after{
            background-color: #c5c3c3 !important;

        }
        .sw-theme-dots>.nav .nav-link.done{
            color: #c5c3c3 !important;
        }
        .sw .toolbar>.sw-btn{
          background-color: #5c645e;
          border: 1px solid #5c645e ;
        }
        @media(min-width:320px) and (max-width:767px){
          .sw>.nav {
            flex-direction: row !important;
          }
          .input-Groups {
            flex-direction: column !important;
          }
          .From__Input{
            width: 100% !important;
            margin-left: 0px;
            margin-right: 0px;
          }
          .sw-theme-dots>.nav .nav-link.active{
            color: #5c645e !important;
            padding-left: 60px !important;
            padding-top: 12px !important;
        }
        .sw-theme-dots>.nav .nav-link.done{
            color: #c5c3c3 !important;
            padding-left: 60px !important;
            padding-top: 12px !important;
        }
        }
      </style>
      <style>
    /* // Add your styles for highlighted dates here */ */
    .highlighted-date {
        background-color: yellow;
    }
</style>
@endsection

@push('scripts')

<script type="text/javascript">

$(document).ready(function () {


});

</script>

@endpush