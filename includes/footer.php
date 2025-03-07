
<section class="container-fluid web">
        <div class="container ">
            <div class="row">
                <div class="col-md-5">
                    <a href="/">  <img src="../images/logo-main-booking.png" class="logo-set-image" alt=""></a>
                    <p class="opi" style="color: #000000 !important;">Australian Book Publishing  is a trailblazer in the world of self-publishing. We help facilitate the self-publishing and marketing process on behalf of independent authors and help them sell their books as e-books, audiobooks, hardcover and paperback books worldwide.</p>
                    <!-- <img src="images/images-google.png" height="30">
                    <img src="images/images-scribd.png" height="30">
                    <img src="images/images-kobo.png" height="30">
                    <img src="images/images-ibook.png" height="30">
                    <img src="images/images-hatchee.png" height="30"> -->
                </div>
                <div class="col-md-2 col-6">
                    <h3 class="uyt">About Us</h3>
                    <ul class="ytu">
                        <li><a href="/">Home</a></li>
                        <li><a href="about-us/">About Us</a></li>
                        <!-- <li><a href="our-services/">Services </a></li> -->
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Testimonial</a></li>
                        <li><a href="contact-us/">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-6">
                    <h3 class="jki">Services</h3>
                    <ul class="ytu">
                        <li><a href="#"> Book Promotions </a></li>
						<li><a href="#"> E-Book Writing </a></li>
						<li><a href="#"> Editing </a></li>
						<!-- <li><a href="book-cover-designing/"> Cover Design </a></li> -->
						<li><a href="#"> Proofreading </a></li>
						<li><a href="#"> Publishing </a></li>
						<!-- <li><a href="#"> Article Writing </a></li> -->
                        <!-- <li><a href="book-promotion/"> Book Promotions </a></li>
						<li><a href="e-book-writing/"> E-Book Writing </a></li>
						<li><a href="editing/"> Editing </a></li>
						<! <li><a href="book-cover-designing/"> Cover Design </a></li> -->
						<!-- <li><a href="proofreading/"> Proofreading </a></li> -->
						<!-- <li><a href="publishing/"> Publishing </a></li> -->
						<!-- <li><a href="article-Writing/"> Article Writing </a></li> -->
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="nmb">Contact</h3>
                    <p class="vgy"> <i class="far fa-envelope zz"></i><a style=" margin-left: 10px;" href="mailto:query@Australian Book Publishing .com">query@Australian Book Publishing .com</a></p>
                   
                    <p class="vgy"> <i class="bi bi-telephone-fill"></i><a style=" margin-left: 10px;" href="tel:+1 (833) 856-1274">+1 (833) 856-1274</a></p>
                    
					
                </div>
                <div class="col-lg-8">
                    <p><p style="margin-bottom: 32px; color:#000000 !important;"><strong>Disclaimer:</strong> Australian Book Publishing  is an independent entity helping self-reliant authors with book publishing and marketing solutions. We believe in ethical business practices and abide by US Federal and State Laws.</p></p>
                </div>
                <div class="col-lg-4">
                <p class="color" style="margin-top: 40px;"><a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a></p>
                </div>
            </div>
            <div class="pt-sm-5">
                <p class="color">&copy; 2024 - Australian Book Publishing  | All right reserved.</p>
                <p class="color">Disclaimer: We are not affiliated with Amazon, We are seprate entity</p>
            </div>
        </div>
        <div class="card cookie-alert">
  <div class="card-body">
    <h5 class="card-title">&#x1F36A; Do you like cookies?</h5>
    <p class="card-text">We use cookies to ensure you get the best experience on our website.</p>
    <div class="btn-toolbar justify-content-end">
      <a href="terms-and-condition/" target="_blank" class="btn btn-link">Learn more</a>
      <a href="#" class="btn btn-primary accept-cookies">Accept</a>
    </div>
  </div>
</div>
    </section>
    <!-- GREETING-POPUP START -->

	<!-- <div class="modal fade" id="greetingpopup" tabindex="-1" role="dialog" aria-labelledby="greetingpopupLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="modal-image-wrapper">
                                    <img src="../images/book-covers-new.webp" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="content content-front">
						<h4 class="color-primary">Wait! It’s time to Avail</h4>
						<h4>an Amazing Discount.</h4>
						<h2 class="color-primary" style="font-size: 50px;"><span style="color:#ef0001;">50%</span> OFF!</h2>
						<h4>All Services Included</h4>
						<a href="javascript:void(0)" class="started-btn" id="started-btn">Get Started Now</a>
					</div>
					<div class="content content-back">
						<h4>Avail Discount!!!</h4>
						<h3 class="color-primary">50%</h3>
						<form action="/leads/" method="POST" class="main-form mt-3">
							<input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
							<input type="hidden" name="brand" value="amazonauthorpublishing">
							<input type="hidden" name="token" value="<?= $token; ?>">
							<input type="hidden" name="tag" value="footer">
							<input type="hidden" name="price" value="null">
							<input type="hidden" name="news" value="1">
							<div class="form-group">
								<input id="username" class="form-control" name="name" minlength="2" type="text" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="cemail" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="number" class="form-control" id="phone" name="phone" placeholder="Contact" required>
							</div>
							<div class="form-group">
								<textarea rows="3" class="form-control" name="brief" placeholder="Project Description"></textarea>
							</div>
							<button class="started-btn" type="submit">Proceed</button>
						</form>
					</div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- GREETING-POPUP END -->
    <style>
    .cookie-alert {
  position: fixed;
  bottom: 15px;
  right: 15px;
  width: 320px;
  margin: 0 !important;
  z-index: 999;
  opacity: 0;
  transform: translateY(100%);
  transition: all 500ms ease-out;
}

.cookie-alert.show {
  opacity: 1;
  transform: translateY(0%);
  transition-delay: 1000ms;
}
</style>
    <!-- Footer End -->
	<!-- Start of  Zendesk Widget script -->
<!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=f081cf71-6296-44b5-9b54-ee7d398318cf"> </script> -->
<!-- End of  Zendesk Widget script -->
    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.1/assets/js/docs.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://cdn.jsdelivr.net/gsap/1.19.1/TweenMax.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

	
    <script>
    (function () {
    "use strict";

    var cookieAlert = document.querySelector(".cookie-alert");
    var acceptCookies = document.querySelector(".accept-cookies");

    cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

    if (!getCookie("acceptCookies")) {
        cookieAlert.classList.add("show");
    }

    acceptCookies.addEventListener("click", function () {
        setCookie("acceptCookies", true, 60);
        cookieAlert.classList.remove("show");
    });
})();

// Cookie functions stolen from w3schools
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
</script>
<!-- Brevo Conversations {literal} -->
<script>
    (function(d, w, c) {
        // IP geolocation detection
        fetch('https://ipinfo.io/json')
        .then(response => response.json())
        .then(data => {
            const blockedCountries = ['IN', 'BD', 'PK', 'AF', 'LK', 'RU', 'MX']; // Blocked country codes: India, Bangladesh, Pakistan, Afghanistan, Sri Lanka, Russia, Mexico
            const userCountry = data.country;

            if (!blockedCountries.includes(userCountry)) {
                // If the user is NOT from a blocked country, load the Brevo widget
                w.BrevoConversationsID = '66e5f5518282fdb55900489f';
                w[c] = w[c] || function() {
                    (w[c].q = w[c].q || []).push(arguments);
                };
                var s = d.createElement('script');
                s.async = true;
                s.src = 'https://conversations-widget.brevo.com/brevo-conversations.js';
                if (d.head) d.head.appendChild(s);
            } else {
                console.log("Widget blocked for your country.");
            }
        })
        .catch(error => console.error("Geolocation error:", error));
    })(document, window, 'BrevoConversations');
</script>
<!-- /Brevo Conversations {/literal} -->
<script>
    document.querySelector('.chat-btn').addEventListener('click', function() {
        // This will toggle the Brevo chat widget when clicked
        BrevoConversations('open');
    });
</script>
    <script>
        // Code By Webdevtrick ( https://webdevtrick.com )
        ; (function ($) {
            "use strict";

            var bindToClass = 'carousel',
                containerWidth = 0,
                scrollWidth = 0,
                posFromLeft = 0,
                stripePos = 0,
                animated = null,
                $slide, $carousel, el, $el, ratio, scrollPos, nextMore, prevMore, pos, padding;

            function calc(e) {
                $el = $(this).find(' > .wrap');
                el = $el[0];
                $carousel = $el.parent();
                $slide = $el.prev('.slide');

                nextMore = prevMore = false;

                containerWidth = el.clientWidth;
                scrollWidth = el.scrollWidth;
                padding = 0.2 * containerWidth;
                posFromLeft = $el.offset().left;
                stripePos = e.pageX - padding - posFromLeft;
                pos = stripePos / (containerWidth - padding * 2);
                scrollPos = (scrollWidth - containerWidth) * pos;

                if (scrollPos < 0)
                    scrollPos = 0;
                if (scrollPos > (scrollWidth - containerWidth))
                    scrollPos = scrollWidth - containerWidth;

                $el.animate({ scrollLeft: scrollPos }, 200, 'swing');

                if ($slide.length)
                    $slide.css({
                        width: (containerWidth / scrollWidth) * 100 + '%',
                        left: (scrollPos / scrollWidth) * 100 + '%'
                    });

                clearTimeout(animated);
                animated = setTimeout(function () {
                    animated = null;
                }, 200);

                return this;
            }

            function move(e) {
                if (animated) return;

                ratio = scrollWidth / containerWidth;
                stripePos = e.pageX - padding - posFromLeft;

                if (stripePos < 0)
                    stripePos = 0;

                pos = stripePos / (containerWidth - padding * 2);

                scrollPos = (scrollWidth - containerWidth) * pos;

                el.scrollLeft = scrollPos;
                if ($slide[0] && scrollPos < (scrollWidth - containerWidth))
                    $slide[0].style.left = (scrollPos / scrollWidth) * 100 + '%';

                prevMore = el.scrollLeft > 0;
                nextMore = el.scrollLeft < (scrollWidth - containerWidth);

                $carousel.toggleClass('left', prevMore);
                $carousel.toggleClass('right', nextMore);
            }

            $.fn.carousel = function (options) {
                $(document)
                    .on('mouseenter.carousel', '.' + bindToClass, calc)
                    .on('mousemove.carousel', '.' + bindToClass, move);
            };

            $.fn.carousel();

        })(jQuery);

        $(document).ready(function () {

            $('.counter').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });

    </script>

<a href="https://www.facebook.com/"></a>

<script>
jQuery(document).ready(function () {
        jQuery("img").attr('alt', 'StorylinePublisher');
   
});
</script>

<script>
    const popupTimeOut = setTimeout(function() {
        $('#greetingpopup').modal('show');
    }, 10000);
    $('.btn11-warning').click(function() {
        $('#greetingpopup').modal('show');
});
    
    $('#started-btn').on('click', function() {
        var frontContainer = $('.content-front');
        var backContainer = $('.content-back');

        if (!frontContainer.is(':hidden')) {
            frontContainer.fadeOut(200);
            setTimeout(function() {
                backContainer.fadeIn();
            }, 300);
        }
    });
// $('.close').onClick()
$('.close').click(function() {
    $('#greetingpopup').modal('hide');
});
    $("#mobile-number").intlTelInput();
</script>

<script>
    angular.module('formApp', [])
        .controller('formController', ['$scope', function($scope) {
          	$scope.master = {};

          	$scope.update = function(user) {
            	$scope.master = angular.copy(user);
          	};

          	$scope.reset = function() {
            	$scope.user = angular.copy($scope.master);
          	};

          	$scope.reset();
    }]);
</script> 
<script>
    /* Scroll nav section */
$(document).ready(function(){
  $(".overlay-content a").on('click', function(event) {

  $(".overlay").css("height", "0%");
  $(".menu-icon").toggleClass('change');

  if (this.hash !== "") {
    event.preventDefault();

    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1000, function(){
      
      window.location.hash = hash;
    });
  } // End if
});


/* Menu icon */
$(".menu-icon").click(function(){
    var $this = $(this);
    $this.toggleClass('change');
    $(".menu-icon").css("z-index", "10");
    if($this.hasClass('change')){
      $(".overlay").css("height", "100%");        
    } else {
      $(".overlay").css("height", "0%");
    }
});


  /* General slide animation up */
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 700) {
          $(this).addClass("slide");
        }
    });
  });


  /* Service slide left */
    $(".brand-nav").ready(function() {
      $(".slideanimleft").each(function(){
          $(this).addClass("slideleft");
      });
    });

	/* Scroll to Top */ 
	$(window).scroll(function() {
	    if ($(this).scrollTop() > 500) {        
	        $('.to-top').fadeIn(500);    
	    } else {
	        $('.to-top').fadeOut(500);   
	    }
	});

	$('.to-top').click(function(event) {
      event.preventDefault();      
	    $('.body,html').animate({
	        scrollTop : 0                       
	    }, 500);
	});


})


</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.slider').slick({
      slidesToShow: 1,          // Default number of slides to show
      slidesToScroll: 1,        // Number of slides to scroll
      autoplay: true,           // Enable autoplay
      autoplaySpeed: 1500,      // Autoplay speed in milliseconds
      arrows: false,             // Enable next/prev arrows
      dots: true,               // Enable dot indicators
      
      // Responsive settings for different screen sizes
      responsive: [
        {
          breakpoint: 1024,     // Screen width of 1024px and below
          settings: {
            slidesToShow: 1,    // Show 3 slides
            slidesToScroll: 1,  // Scroll 1 slide
          }
        },
        {
          breakpoint: 768,      // Screen width of 768px and below
          settings: {
            slidesToShow: 1,    // Show 2 slides
            slidesToScroll: 1,  // Scroll 1 slide
          }
        },
        {
          breakpoint: 480,      // Screen width of 480px and below
          settings: {
            slidesToShow: 1,    // Show 1 slide
            slidesToScroll: 1,  // Scroll 1 slide
          }
        }
      ]
    });
  });
</script>

<script>
    let currentTestimonial = 1;
    const totalTestimonials = 3;

    function showNext() {
        document.getElementById(`testimonial${currentTestimonial}`).style.display = "none";
        currentTestimonial = (currentTestimonial % totalTestimonials) + 1;
        document.getElementById(`testimonial${currentTestimonial}`).style.display = "block";
    }

    function showPrevious() {
        document.getElementById(`testimonial${currentTestimonial}`).style.display = "none";
        currentTestimonial = (currentTestimonial - 2 + totalTestimonials) % totalTestimonials + 1;
        document.getElementById(`testimonial${currentTestimonial}`).style.display = "block";
    }
</script>

<script>
    document.getElementById('ajax_contact').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent default form submission behavior

    const formData = new FormData(this);

    fetch('/email-handler/', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.text()) // Handle the response
        .then(data => {
            if (data.trim() === 'success') {
                document.getElementById('form-container').style.display = 'none';
                document.getElementById('success-message').style.display = 'block';
            } else {
                alert('Error: ' + data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while submitting the form.');
        });
});

(function($) {
        "use strict";
        
        $(document).ready(function() {
            if ($('.testimonial-carousel').length) {
                $('.testimonial-carousel').owlCarousel({
                    animateOut: 'slideOutDown',
                    animateIn: 'zoomIn',
                    loop: true,
                    margin: 0,
                    nav: true,
                    smartSpeed: 300,
                    autoplay: true,
                    autoplayTimeout: 7000,
                    navText: [ '<span class="arrow-left"></span>', '<span class="arrow-right"></span>' ],
                    responsive: {
                        0: { items: 1 },
                        600: { items: 1 },
                        800: { items: 1 },
                        1024: { items: 1 }
                    }
                });  
            }
        });

    })(jQuery);
 

</script>
