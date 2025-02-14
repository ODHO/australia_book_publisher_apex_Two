<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once("includes/head.php") ?>
    <title>Check Out Our Portfolio | StorylinePublisher</title>
    <meta name="keywords" content="our portfolio for books">
    <meta name="description" content="Check our portfolio of book designers and publishers to help you find the right service for your book project." />

</head>


<body>
    <?php include_once("includes/header.php") ?>
    <!-- Banner Start -->
    <section class="container-fluid bannimg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h3 class="text3">Our Work</h3>
                    <h1 class="text4">Checkout Our <span>Portfolio</span></h1>
                    <p class="mnbvcxqwww">Our portfolio is the supreme resource for agencies and all modern designers. Packed with more than 1,000 gorgeous and endless inspirations, it's everything you need to finally create the website of your dreams.</p>
                    <div class="home-button">
                    <a href="/get-a-quote/" class="btn btn11-warning">START PROJECT</a>
                    <a href="tel:+1 (833) 856-1274" class="btn btn12-warning">Call Now </a>
                    </div>
                    <!-- <div>
                    <img class="trusted" src="images/images-trusted.png">
                </div> -->
                </div>
                <div class="col-lg-5 bannform">
                     <div class="form-container" id="form-container">
                    <form action="/email-handler/" method="post" id="ajax_contact" class="tab details">
                        <input type="hidden" name="brand" value="theamzscout">
                        <input type="hidden" name="token" value="<?= $token; ?>">
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
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" Required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" Required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="exampleInputPhone1" placeholder="Phone Number" name="phone" Required>
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

    <!-- Column 3 Start -->

    <div class="container bnmn">
        <div class="row">
            <div class="col-md column3">
                <h1 class="heading1">Check Out Our Portfolio

</h1>
                <p class="para">We have collaborated with aspiring and well-recognized writers to best-selling authors on various writing and publishing projects. Let’s have a look at some of the work we have produced in our professional experience. </p>
            </div>
        </div>
    </div>




    <!-- Column 3 End -->



    <!-- Column 4 Start -->



    <section class="carousel right container-fluid">
        <div class="slide"></div>
        <div class="wrap mobileOverflow">
            <ul>
                <li><img src="images/cover-1.png" /></li>
                <li><img src="images/cover-2.png" /></li>
                <li><img src="images/cover-3.png" /></li>
                <li><img src="images/cover-4.png" /></li>
                <li><img src="images/cover-5.png" /></li>
                <li><img src="images/cover-6.png" /></li>
                <li><img src="images/cover-7.png" /></li>
                <li><img src="images/cover-8.png" /></li>
                <li><img src="images/cover-9.png" /></li>
                <li><img src="images/cover-10.png" /></li>
                <li><img src="images/cover-11.png" /></li>
                <li><img src="images/cover-12.png" /></li>
                <li><img src="images/cover-13.png" /></li>
                <li><img src="images/cover-14.png" /></li>
                <li><img src="images/cover-15.png" /></li>
            </ul>
        </div>
    </section>
    <section class="carousel right container-fluid">
        <div class="slide"></div>
        <div class="wrap mobileOverflow">
            <ul>
                <li><img src="images/cover-16.png" /></li>
                <li><img src="images/cover-17.png" /></li>
                <li><img src="images/cover-18.png" /></li>
                <li><img src="images/cover-19.png" /></li>
                <li><img src="images/cover-20.png" /></li>
                <li><img src="images/cover-21.png" /></li>
                <li><img src="images/cover-22.png" /></li>
                <li><img src="images/cover-23.png" /></li>
                <li><img src="images/cover-24.png" /></li>
                <li><img src="images/cover-25.png" /></li>
                <li><img src="images/cover-26.png" /></li>
                <li><img src="images/cover-27.png" /></li>
                <li><img src="images/cover-28.png" /></li>
                <li><img src="images/cover-29.png" /></li>
                <li><img src="images/cover-30.png" /></li>
            </ul>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-md column2">
                    <h2>Book a Call with Our Consultant to Get Help with Your Book</h2>
                    <h5>Call Us to Kick-start Your Project Right Away!</h5>
                    <a href="/get-a-quote/" class="btn btn11-warning">START PROJECT</a>
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