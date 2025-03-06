<!-- <section class="container blackBack ">
  <div class="row">
   <div class="col-md-12">
   <nav class="navbar navbar-expand-lg navbar-light">
      <a href="/"><img class="logopng" src="images/logos2.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse blackBack" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us/">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdownMenuLink">
              <div class="container">
                <div class="row">
                <div class=" col-md-4">
                  <li><a class="dropdown-item" href="book-promotion/">Book Promotions</a></li>
                  <li><a class="dropdown-item" href="e-book-writing/">E-Book Writing</a></li>
                  <li><a class="dropdown-item" href="editing/">Editing</a></li>
                  <li><a class="dropdown-item" href="proofreading/">Proofreading</a></li>
                  <li><a class="dropdown-item" href="publishing/">Publishing</a></li>
                </div>
                <div class=" col-md-4">
                  <li><a class="dropdown-item" href="article-Writing/">Article Writing</a></li>
                  <li><a class="dropdown-item" href="audio-book/">Audio Book</a></li>
                  <li><a class="dropdown-item" href="author-website/">Author Website</a></li>
                  <li><a class="dropdown-item" href="blog-writing/">Blog Writing</a></li>
                  <li><a class="dropdown-item" href="book-cover/">Book Cover</a></li>
                </div>
                <div class=" col-md-4">
                  <li><a class="dropdown-item" href="formatting/">Formatting</a></li>
                  <li><a class="dropdown-item" href="ghost-writing/">Ghostwriting</a></li>
                  <li><a class="dropdown-item" href="book-video-trailer/">Video Book Trailer</a></li>
                  <li><a class="dropdown-item" href="web-design-seo/">Web Design SEO</a></li>
                  <li><a class="dropdown-item" href="website-content-writing/">Website Content</a></li>
                </div>
                </div>
              </div>



            </ul>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="our-portfolio/">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="client-testimonials/">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us/">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
   </div>
  </div>
</section> -->
<div class="main-header-book-publishing">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <nav>
          <div class="hamburger" onclick="toggleMenu()">☰</div>
          <div class="nav-menu">
            <a href="/" class="nav-item">Home</a>
            <a href="about-us/" class="nav-item">About</a>
            <div class="nav-item dropdown" id="services-dropdown">
              Services <span class="dropdown-arrow">▾</span>
              <ul class="dropdown-menu">
                <li><a href="book-promotion/">Book Promotion</a></li>
                
              </ul>
            </div>
            <a href="#" class="nav-item">Portfolio</a>
          </div>
        </nav>
      </div>

     
      <div class="col-md-4 text-center">
        <div class="logo-book-publishing">
          <a href="/">
            <img src="../images/logo-main-booking.png" class="logo-set-image" alt="Logo">
          </a>
        </div>
      </div>

      <div class="col-md-4 text-end">
        <div class="contact-us-btn-sec">
          <a href="contact-us/" class="btn-contact-sec">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleMenu() {
    document.querySelector(".nav-menu").classList.toggle("active");
  }

  document.addEventListener("DOMContentLoaded", function () {
    const servicesDropdown = document.getElementById("services-dropdown");
    const dropdownMenu = servicesDropdown.querySelector(".dropdown-menu");

    servicesDropdown.addEventListener("click", function (event) {
      event.stopPropagation();
      dropdownMenu.style.display =
        dropdownMenu.style.display === "block" ? "none" : "block";
    });

    document.addEventListener("click", function () {
      dropdownMenu.style.display = "none";
    });
  });
</script>