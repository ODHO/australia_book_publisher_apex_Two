<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("includes/head.php")?><title>Check Out Our Client Testimonials | StorylinePublisher</title>
<meta name="keywords" content="StorylinePublisher testimonials">
<meta name="description" content="With our help, authors have been able to get their book publishing and marketing more smoothly and have generated more leads. See what they have to say.">

</head>


<body>
    <?php include_once("includes/header.php")?><!-- Banner Start -->

    <section class="container-fluid bannimg">
        <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h3 class="text3">What Our Clients Say</h3>
                <h1 class="text4">Checkout Our <span>Testimonials</span></h1>
                    <p class="mnbvcxqwww">We have assisted countless authors in writing and marketing their books. Read some great testimonials from our valuable clients to know about our services and how you can avail yourself of countless benefits from our expertise.</p>
                    <div class="home-button">
                    <a class=" btn btn12-warning ms-3" href="/get-a-quote/">Start Project</a>
                    <a class="btn btn12-warning ms-3" href="/get-a-quote/">Get a Quote</a>
                    </div>
                   <!-- <div>
                    <img class="trusted" src="images/images-trusted.png">
                </div> -->
            </div>
            <div class="col-lg-5 bannform">
                 <div class="form-container" id="form-container">
			<form action="/email-handler/" method="post" id="ajax_contact" class="tab details">
                            <input type="hidden" name="brand" value="theamzscout">
                            <input type="hidden" name="token" value="<?= $token;?>">
                            <input type="hidden" name="tag" value="banner-right-form">
                            <input type="hidden" name="price" value="null">
                            <input type="hidden" name="news" value="1">
                            <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<div id="secondForm">
	<div class="form-group ">
		 <h2 class="text9">Reach Out to Us</h2>
                                <p class="text-center" style="color: white;">
                                Please fill out the form below to submit your query. Our team will respond to you shortly
                                </p>
		<input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" required>
	</div>
	<div class="form-group">
		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
	</div>
	<div class="form-group">
		<input type="tel" class="form-control" id="exampleInputPhone1" placeholder="Phone Number" name="phone" required>
	</div>
	<div class="form-group">
		<textarea class="form-control" id="exampleInputAbout1" rows="4" placeholder="I am looking for ...." name="brief"></textarea>
	</div>
	<button type="submit" class="btn btn13-warning">Start Now!</button>
	   </div> 
</form>            
</div>
 <div id="success-message" style="display: none; text-align: center;">
    <h3>Thank you! Your message has been successfully sent.</h3>
</div>
</div>
        </div>
        </div>
    </section>








    <!-- Banner End -->






 <!-- Column 10 Start -->

 <section class="testimonialToggleClass testimonialClass">
    <div class="container testimonialClass" id="testimonial1" style="display: none;">
        <div class="row py-5 my-5">
            <div class="col-md-6 imageCenter">
                <div class="w3-container w3-center w3-animate-left">
                    <div class="afloat1">
                        <h5>Our Ratings</h5>
                        <div><span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"><p>5 star</p></div>
                                <div class="col-md-6 progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="col-md-3"><p>84%</p></div>
                            </div>
                            <!-- Similar rows for other star ratings -->
                        </div>
                    </div>
                </div>
                <img class="imageRadius" src="images/images-1ameli.jpg" width="400px" alt="StorylinePublisher">
                <div class="w3-container w3-center w3-animate-right">
                    <div class="afloat2">
                        <div class="align-left">
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                            <span class="fa fa-star checked" aria-hidden="true"></span>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-start"><img class="imageRadius" src="images/images-1john.jpg" width="50px" alt="StorylinePublisher"></div>
                            <div class="col-md-8 text-start">
                                <h5>JOHN</h5>
                                <p>Marketing Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Yvonnia</h3>
                <h6>Marketing Manager</h6>
                <p>A mere sentence will not do justice to the quality of the work they provide! They have an amazing and supportive team who helped me throughout the publication. Kudos to the Amazon Publishing Pros!</p>
            </div>
            <div class="col-md-2">
                <i class="fa fa-angle-up d-block text-center" onclick="showPrevious()" aria-hidden="true"></i>
                <img class="d-block m-auto my-sm-2" src="images/images-1laura.jpg" width="100px" alt="StorylinePublisher">
                <img class="d-block m-auto my-sm-2" src="images/images-1john.jpg" width="100px" alt="StorylinePublisher">
                <i class="fa fa-angle-down d-block text-center" onclick="showNext()" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="container testimonialClass" id="testimonial2" style="display: block;">
            <div class="row py-5 my-5">
                <div class="col-md-6 imageCenter">

                    <div class="w3-container w3-center w3-animate-left">
                        <div class="afloat1">
                            <h5>Our Ratings</h5>
                            <div><span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>5 star</p>
                                    </div>
                                    <div class="col-md-6 progress">
                                        <div class="progress-bar bg-warning " role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p>84%</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>4 star</p>
                                    </div>
                                    <div class="col-md-6 progress">
                                        <div class="progress-bar bg-warning " role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p>9%</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>3 star</p>
                                    </div>
                                    <div class="col-md-6 progress">
                                        <div class="progress-bar bg-warning " role="progressbar" style="width: 4%" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p>4%</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>2 star</p>
                                    </div>
                                    <div class="col-md-6 progress">
                                        <div class="progress-bar bg-warning " role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p>2%</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>1 star</p>
                                    </div>
                                    <div class="col-md-6 progress">
                                        <div class="progress-bar bg-warning " role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p>1%</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <img class="imageRadius" src="images/images-1john.jpg" width="400px" alt="StorylinePublisher">
                    <div class="w3-container w3-center w3-animate-right">
                        <div class="afloat2">
                            <div class="align-left"><span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                                <span class="fa fa-star checked" aria-hidden="true"></span>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-start"><img class="imageRadius" src="images/images-1laura.jpg" width="50px" alt="StorylinePublisher">
                                </div>
                                <div class="col-md-8 text-start">
                                    <h5>Laura</h5>
                                    <p>Fashion Deisgner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>John</h3>
                    <h6>Business Owner</h6>
                    <p>1 thing down, 10 more to go! That’s how I began working on publishing my book, until StorylinePublisher came along. Their commitment to winding up all the publishing processes within the time frame deserves all the appreciation. They picked up my slack and got everything in order in a timely manner. My book came out at least a couple of months before my original planning for releasing the book and I’d ever considered getting professional help. Thank you guys!</p>


                </div>
                <div class="col-md-2">
                    <i class="fa fa-angle-up d-block text-center" onclick="allOne()" aria-hidden="true"></i>
                    <img class="d-block m-auto my-sm-2" src="images/images-1ameli.jpg" width="100px" alt="StorylinePublisher">
                    <img class="d-block m-auto my-sm-2" src="images/images-1laura.jpg" width="100px" alt="StorylinePublisher">
                    <i class="fa fa-angle-down d-block text-center" onclick="allTwo()" aria-hidden="true"></i>
                </div>
            </div>``
        </div>
    <div class="container testimonialClass" id="testimonial3" style="display:none;">
        <!-- Content of Testimonial 3 -->
    </div>
</section>





    <!--Mobile testimonial Start -->
    <section class="mobileTestimonial">
    <div class="wrapper" style="margin: 30px 0px;">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>If you&rsquo;re looking for a truly dedicated team of publishers, you&rsquo;ve come to the right place! Kudos to StorylinePublisher for keeping up with the constantly changing requirements of the book. I couldn&rsquo;t have covered everything without their professional help and attention to detail. Done and dusted with book one and looking forward to publishing my next installment!</p>
      <div class="content">
        <div class="info">
          <div class="name">Ameli</div>
          <div class="job">Marketing Manager</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="images/images-1ameli.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>1 thing down, 10 more to go! That&rsquo;s how I began working on publishing my book, until StorylinePublisher came along. Their commitment to winding up all the publishing processes within the time frame deserves all the appreciation. They picked up my slack and got everything in order in a timely manner. My book came out at least a couple of months before my original planning for releasing the book and I&rsquo;d ever considered getting professional help. Thank you guys!</p>
      <div class="content">
        <div class="info">
          <div class="name">John</div>
          <div class="job">Business Owner</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="images/images-1john.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>When I wanted to publish my first book, I had no idea where to start. Thanks to StorylinePublisher and their team of editors for patiently assisting and guiding me through the entire process. They&rsquo;re now my go-to publication for all my future books.</p>
      <div class="content">
        <div class="info">
          <div class="name">Laura</div>
          <div class="job">Fashion Designer</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="images/images-1laura.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  </section>
    <!-- Mobile Testimonial End -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="lk">Everyone is Waiting for Your Amazing Book- We Can Help You Get Started</h2>
            <p class="bh">StorylinePublisher has a highly efficient system for book creation and publication. You will be in command and oversee every area of the book as we draft your book for you within a matter of days. </p>
                </div>
                <div class="col-md-2"></div>
            <div class="col-md-5">
                <ul class="jui">
                    <li>Share your project details </li>
                    <li>Editing and formatting of your manuscript to make your book publish-ready</li>
                    <li>An ISBN Number to help with sales and Publishing</li>
                    <li>Publication preference –Online or in Print </li>
                    <li>Featured on Amazon Kindle or Apple iBookstore</li>
                    <li>Exceptional service throughout the Project cycle</li>
                    <li>Achieve fame and authority in the digital world </li>
                </ul>
            </div>
            <div class="col-md-3">
                <img src="images/images-book3.png" alt="" width="350">
            </div>
            <div class="col-md-2"></div>
            
             <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">   
        <a href="javascript: ;" class="btn btn11-warning mt-3">START PROJECT</a>
</div>
<div class="col-md-5"></div>
</div>
</div>
        </div>

    </div>
    <section class="carousel right container-fluid">
        <div class="slide"></div>
        <div class="wrap mobileOverflow">
            <ul>
                <li><img src="images/cover-1.png"></li>
                <li><img src="images/cover-2.png"></li>
                <li><img src="images/cover-3.png"></li>
                <li><img src="images/cover-4.png"></li>
                <li><img src="images/cover-5.png"></li>
                <li><img src="images/cover-6.png"></li>
                <li><img src="images/cover-7.png"></li>
                <li><img src="images/cover-8.png"></li>
                <li><img src="images/cover-9.png"></li>
                <li><img src="images/cover-10.png"></li>
                <li><img src="images/cover-11.png"></li>
                <li><img src="images/cover-12.png"></li>
				<li><img src="images/cover-13.png"></li>
				<li><img src="images/cover-14.png"></li>
				<li><img src="images/cover-15.png"></li>
            </ul>
        </div>
    </section>
    <section class="carousel right container-fluid">
        <div class="slide"></div>
        <div class="wrap mobileOverflow">
            <ul>      
                <li><img src="images/cover-16.png"></li>
                <li><img src="images/cover-17.png"></li>
                <li><img src="images/cover-18.png"></li>
                <li><img src="images/cover-19.png"></li>
                <li><img src="images/cover-20.png"></li>
                <li><img src="images/cover-21.png"></li>
                <li><img src="images/cover-22.png"></li>
                <li><img src="images/cover-23.png"></li>
                <li><img src="images/cover-24.png"></li>
                <li><img src="images/cover-25.png"></li>
                <li><img src="images/cover-26.png"></li>
				<li><img src="images/cover-27.png"></li>
				<li><img src="images/cover-28.png"></li>
				<li><img src="images/cover-29.png"></li>
				<li><img src="images/cover-30.png"></li>
            </ul>
        </div>
		    <div class="container mb-3">
        <div class="row">
            <div class="col-md column2">
                <h2>Book a Call with Our Consultant to Get Help with Your Book</h2>
                <h5>Call Us to Kick-start Your Project Right Away!</h5>
                <div class="button-center">
                    <a class=" btn btn12-warning ms-3" href="/get-a-quote/">Start Project</a>
                    </div>
                <a class="btn btn12-warning ms-3" href="/get-a-quote/">Get a Quote</a>
            </div>
        </div>
    </div>
    </section>
   
    <?php include_once("form-global.php") ?>
    <?php include_once("faqs-global.php") ?>
    <?php include_once("includes/footer.php") ?>
    </body>
</html>
