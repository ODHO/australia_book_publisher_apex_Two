<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once("includes/head.php") ?>
    
</head>


<body>
    <?php include_once("includes/header.php") ?>
    <!-- Banner Start -->

    
    <div class="banner-publishing-main" style=" height: 80vh;">
        <div class="container">
          <div class="row">
          <div class="col-md-5">
                <div class="banner-heading-and-set">
                  <div class="contact-fit-img">
                    <img src="../images/io-banner-preview.png.png" alt="">
                  </div>
                </div>
                <div class="btn-banner-two-button">
                  
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact-heading-page">
                    <h1>
                    Lorem ipsum Lorem Ipsum
                    </h1>
                    <p>Lorem ipsum dolor sit amet consectetur. Ut placerat sit ut odio. Ac cras tellus pulvinar vestibulum hendrerit morbi massa morbi.. Lobortis aliquam.</p>
                </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Banner End -->



    <!-- Column 7 Start -->


    <!-- Column 7 End -->

    <section class="contact-set-back-form" style="visibility: visible;animation-name: bounceInUp;">
        <div class="container">
            <div class="footerbox">
                <div class="row">
                    <div class="col-md-6 pad-r-zero p-0">
                        <div class="footer-left" style="position: relative; z-index: 1;">
                            <h3>Over 2,000 satisfied authors and 10,000+ outstanding books available!</h3>


                            <img width="auto" height="auto" class="lazy loading form-1-img" src="../images/footer-img-01.webp" alt="" data-was-processed="true">
                            <img width="auto" height="auto" class="lazy loading form-2-img" src="../images/footer-img-02.webp" alt="" data-was-processed="true">

                            
                            <ul>
                                <li class="first"> <img width="auto" height="auto" class="lazy loading" src="../images/trs-img-1.webp" alt="images" data-was-processed="true"></li>
                                <li class="last"> <img width="auto" height="auto" class="lazy loading" src="../images/trs-img-2.webp" alt="images" data-was-processed="true"></li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-md-6 pad-l-zero p-0">
                        <div class="footer-right" id="form-container">
                        <h3>Let’s <b>Bring</b> Your <b>Story</b> to Life!</h3>
                        <form action="/email-handler/" method="post" id="ajax_contact">
                    <input type="hidden" name="brand" value="theamzscout">
                    <input type="hidden" name="token" value="<?= $token; ?>">
                    <input type="hidden" name="tag" value="banner-right-form">
                    <input type="hidden" name="price" value="null">
                    <input type="hidden" name="news" value="1">
                    <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input type="text" class="form-control " id="exampleInputName" placeholder="Name" name="name" Required>
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="email" Required>
                        </div>
                        <div class="col-md-12">
                            <input type="tel" class="form-control" id="exampleInputNumber" placeholder="Phone Number" name="phone" Required>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" id="exampleInputMessage" rows="6" placeholder="I am looking for ..." name="brief"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn22-warning">SEND MESSAGE</button>
                </form>
                        </div>
                         <div id="success-message" style="display: none; text-align: center;">
    <h3>Thank you! Your message has been successfully sent.</h3>
</div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    
    <?php include_once("includes/footer.php") ?>

</body>

</html>