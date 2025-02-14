<!-- <div class=" frt home-form" >
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <H3 class="njh">Let’s Get Started with <br> StorylinePublisher!</H3>
                <p class="bvc">Call Us at <a href="tel:+1 (833) 856-1274">+1 (833) 856-1274</a></p>
                <h5 class="kljh">FILL OUT THE FORM</h5>
                
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div> -->
    <section class="footer-form-sec wow bounceInUp" style="visibility: visible;animation-name: bounceInUp;">
        <div class="container">
            <div class="footerbox">
                <div class="row">
                    <div class="col-md-6 pad-r-zero p-0">
                        <div class="footer-left">
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