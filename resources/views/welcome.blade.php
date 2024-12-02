{{--Nama: Aulia Hanifah
    NRP: 5026221198
    Website Reference: http://www.emilyridge.ie/
    Template Reference: https://bootstrapmade.com/selecao-bootstrap-template/--}}

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Web Designer's Portfolio</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com" rel="preconnect">
      <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900&family=Arima:wght@100..700&family=Exo+2:ital,wght@0,100..900&display=swap" rel="stylesheet">

      <!-- Main CSS File -->
      <link rel="stylesheet" href="{{ asset('assets') }}/css/stylesheet.css" rel="stylesheet">
    </head>

    <body class="index-page">
      <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-end">
          <nav id="navmenu" class="navmenu">
            <ul class="ms-auto">
              <li><a href="#hero" class="active">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
        </div>
      </header>

      <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
          <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <div class="carousel-item active">
              <div class="carousel-container">
                <h3 class="animate__animated animate__fadeInDown" style="font-weight: bold;">Freelance Web Designer & Developer based in Galway, Ireland.</h3>
                <h3 class="animate__animated animate__fadeInDown" style="font-weight: bold;">Highly experienced in designing & developing custom Wordpress websites.</h3>
                <p class="animate__animated animate__fadeInUp" style="font-size: 20px;">Fully responsive, custom designed Wordpress CMS websites</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
              <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
            </defs>
            <g class="wave1">
              <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
              <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
              <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
          </svg>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

          <!-- Section Title -->
          <div class="container section-title">
            <h2>About</h2>
            <p>Who we are</p>
          </div><!-- End Section Title -->

          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-6 content">
                <div class="member-img justify-content">
                  <img class="profile-about" src="{{ asset('assets') }}/img/emily-ridge.jpg" alt="Photo of Freelance Web Developer Emily Ridge" title="Photo of Freelance Web Developer Emily Ridge">
                </div>
                <h4 class="member-img">Emily Ridge — Web Designer & Developer</h4>
                  <p class="member-p">After graduating in 2009 with a Bachelor’s Degree (First Class Honours) in Multimedia Programming and Design, I spent the last nine years working both as a freelance web developer and designer and as part of a team in various companies across Galway, Dublin, Berlin and Melbourne. I acquired project and time management skills, as well as the ability to communicate with team members and clients while effectively meeting milestones and deadlines.</p>
                  <p class="member-p">As a freelance web developer and designer I collaborated with several graphic designers in Berlin and Melbourne, at the same time maintaining clients in Germany, Ireland, Australia and the UK.</p>
                  <p class="member-p">I have worked on a multitude of web and print based projects for a range of clients providing Web Design (Photoshop, Illustrator, InDesign) and Development (PHP, HTML, CSS, LESS, JS, jQuery, WordPress, WooCommerce, Bootstrap, Responsive Layouts), eCommerce Solutions, Corporate Branding and Graphic Design. During my Multimedia degree I studied Information Architecture, and therefore have a keen understanding of wireframes, sitemaps and user experience design which I put to good use on every project I work on.</p>
                  <p class="member-p">I am currently working in Ireland between Dublin and Galway. I am always available to discuss your project over the phone or via Skype. These days I enjoy spending my free time riding my bike, baking and crocheting.</p>
              </div>

              <div class="col-lg-6 content">
                <div class="member-img">
                  <img class="profile-about" src="{{ asset('assets') }}/img/nicholas-grundy.jpg" alt="Photo of Freelance Photographer Nicholas Grundy" title="Photo of Freelance Photographer Nicholas Grundy">
                </div>
                <h4 class="member-img">Nicholas Grundy — Photographer, Copywriter and Translator</h4>
                    <p class="member-p"> Since turning my passion into a career, I’ve worked as a professional photographer in Germany, Australia and Ireland. I’ve received numerous awards and my photographs have appeared in various galleries across the globe. They’re also found in publications such as Time Magazine, The Sydney Morning Herald Newspaper, Australian Geographic, and on the cover of Tasmania 40° South Magazine. My fine art prints appear in the University of Melbourne’s collection and in various private homes and institutions across Australia, Europe, and the United States. </p>
                    <p class="member-p"> I’ve worked together with Emily for a number of years now. Apart from conducting photo shoots for her websites, I also collaborate regularly with Emily to provide clear and succinct content writing. In addition, I provide the full gamut of SEO services, including not only content, image and website structure optimisation, but also regular maintenance, Google Analytics reporting, and the creation and management of Google AdWords campaigns.</p>
                    <p class="member-p"> I also provide German translating and interpreting. I’m fluent in German, having lived in Berlin for three years, and I regularly translate entire websites for various translation clients and localisation and IT companies around the world. My eye for detail, creative view on the world, and meticulous nature have left me with many highly satisfied clients. I look forward to speaking with you soon about your unique project, be it photography, copywriting, SEO or translation!</p>
              </div>
            </div>
          </div>
        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

          <!-- Section Title -->
          <div class="container section-title">
            <ul>
                <li><a href="http://127.0.0.1:8000/day1">pertemuan 1</li>
                <li><a href="http://127.0.0.1:8000/style">pertemuan 2</li>
                <li><a href="http://127.0.0.1:8000/style2">pertemuan 2</li>
                <li><a href="http://127.0.0.1:8000/responsive1">pertemuan 3</li>
                <li><a href="http://127.0.0.1:8000/5026221198">pertemuan 4</li>
                <li><a href="http://127.0.0.1:8000/tugas1">pertemuan 5</li>
                <li><a href="http://127.0.0.1:8000/form">pertemuan 7</li>
                <li><a href="http://127.0.0.1:8000/pegawai">latihan tabel sql</li>
                <li><a href="http://127.0.0.1:8000/bagian">latihan akhir</li>
            </ul>
            <h2>Services</h2>
            <p>What we do offer</p>
          </div><!-- End Section Title -->

          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6">
                <div class="service-item  position-relative">
                  <img class="img-center img-responsive margin-top icon" src="{{ asset('assets') }}/img/galway-website-design.png" alt="Galway Website Design. Freelance web designer and developer Emily Ridge" title="Galway Website Design. Freelance web designer and developer Emily Ridge" style="width: 80px; height: fit-content;">
                  <a href="http://www.emilyridge.ie/galway-website-services/website-design/" class="stretched-link">
                    <h3>Website Design</h3>
                  </a>
                  <p class="services-p">Our approach to website design is to create a website that strengthens your company’s brand while ensuring ease of use and simplicity for your audience.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item position-relative">
                  <img class="img-center img-responsive margin-top icon" src="{{ asset('assets') }}/img/galway-wordpress-theme-development.png" alt="Galway Wordpress Theme Development" title="Galway Wordpress Theme Development" style="width: 80px; height: fit-content;">
                  <a href="http://www.emilyridge.ie/galway-website-services/custom-wordpress-theme/" class="stretched-link">
                    <h3>Custom WordPress Theme Development</h3>
                  </a>
                  <p class="services-p">Wordpress CMS is a user-friendly administrative area allowing you to easily edit your website's content.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item position-relative">
                  <img class="img-center img-responsive margin-top icon" src="{{ asset('assets') }}/img/galway-wordpress-training-tutoring.png" alt="Galway Wordpress Training and Tutoring" title="Galway Wordpress Training and Tutoring" style="width: 80px; height: fit-content;">
                  <a href="http://www.emilyridge.ie/galway-website-services/wordpress-training-tutoring-galway/" class="stretched-link">
                    <h3>Wordpress Training & Tutoring</h3>
                  </a>
                  <p class="services-p">We offer customised WordPress training to ensure you are confident in updating and maintaining your WordPress website.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item position-relative">
                  <img class="img-center img-responsive margin-top icon" src="{{ asset('assets') }}/img/galway-seo.png" alt="Galway SEO Search Engine Optimisation" title="Galway SEO Search Engine Optimisation" style="width: 80px; height: fit-content;">
                  <a href="http://www.emilyridge.ie/galway-website-services/search-engine-optimisation/" class="stretched-link">
                    <h3>SEO (Search Engine Optimisation)</h3>
                  </a>
                  <p class="services-p">SEO is the practice of improving and promoting a website in order to increase the number of visitors it receives.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item position-relative">
                  <img class="img-center img-responsive margin-top icon" src="{{ asset('assets') }}/img/galway-seo-search-engine-optimisation-training.png" alt="Galway SEO Search Engine Optimisation Training" title="Galway SEO Search Engine Optimisation Training" style="width: 80px; height: fit-content;">
                  <a href="http://www.emilyridge.ie/galway-website-services/seo-search-engine-optimisation-training-tutoring/" class="stretched-link">
                    <h3>SEO (Search Engine Optimisation) Training</h3>
                  </a>
                  <p class="services-p">We offer customised SEO (Search Engine Optimisation) training to ensure your website is rising the ranks in Google and staying at the top.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item position-relative">
                  <img class="img-center img-responsive margin-top icon" src="{{ asset('assets') }}/img/galway-wordpress-security-updates.png" alt="Galway Wordpress Security Updates" title="Galway Wordpress Security Updates" style="width: 80px; height: fit-content;">
                  <a href="http://www.emilyridge.ie/galway-website-services/wordpress-website-security-maintenance-updates/" class="stretched-link">
                    <h3>Wordpress Website Security Maintenance & Updates</h3>
                  </a>
                  <p class="services-p">If your website is built with Wordpress it's crucial to keep the Wordpress version and plugins up-to-date to eliminate vulnerabilities.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item position-relative">
                  <img class="img-center img-responsive margin-top icon" src="{{ asset('assets') }}/img/galway-logo-design.png" alt="Galway Logo Design" title="Galway Logo Design" style="width: 80px; height: fit-content;">
                  <a href="http://www.emilyridge.ie/galway-website-services/logo-design-galway/" class="stretched-link">
                    <h3>Logo Design</h3>
                  </a>
                  <p class="services-p">Our goal is to design a professional yet creative logo that reflects your company’s spirit and leaves a lasting, memorable effect.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item position-relative">
                  <img class="img-center img-responsive margin-top icon" src="{{ asset('assets') }}/img/galway-ecommerce-solution.png" alt="Galway eCommerce Solution" title="Galway eCommerce Solution" style="width: 80px; height: fit-content;">
                  <a href="http://www.emilyridge.ie/galway-website-services/ecommerce-solution/" class="stretched-link">
                    <h3>eCommerce Solution</h3>
                  </a>
                  <p class="services-p">An eCommerce solution is a feature-filled, customisable online storefront and shopping cart that will be directly integrated into your website.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item position-relative">
                  <img class="img-center img-responsive margin-top icon" src="{{ asset('assets') }}/img/galway-website-development.png" alt="Galway Website Development" title="Galway Website Development" style="width: 80px; height: fit-content;">
                  <a href="http://www.emilyridge.ie/galway-website-services/website-development/" class="stretched-link">
                    <h3>Website Development</h3>
                  </a>
                  <p class="services-p">The web development process involves taking the graphical elements defined in the design process and coding them into a custom Wordpress theme.</p>
                </div>
              </div><!-- End Service Item -->

            </div>

          </div>

        </section><!-- /Services Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

          <!-- Section Title -->
          <div class="container section-title">
            <h2>Portfolio</h2>
            <p>What we've done</p>
          </div><!-- End Section Title -->

          <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
              <div class="row gy-4 isotope-container">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                  <img src="{{ asset('assets') }}/img/bren-kelly-tattoo-galway.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Bren Kelly Tattoo Galway</h4>
                    <a href="http://www.emilyridge.ie/wp-content/uploads/bren-kelly-tattoo-galway-1024x559.png" title="BrenKelly"></a>
                    <a href="https://brenkellytattoo.com/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                  <img src="{{ asset('assets') }}/img/red-ocean.png" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Red Ocean</h4>
                    <a href="http://www.emilyridge.ie/wp-content/uploads/red-ocean.png" title="redOcean"></a>
                    <a href="https://redocean.com/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="{{ asset('assets') }}/img/spencer-panels-website.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Spencer Panels</h4>
                    <a href="http://www.emilyridge.ie/wp-content/uploads/spencer-panels-website.jpg" title="spencer-panels"></a>
                    <a href="https://spencerpanels.com.au/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                  <img src="{{ asset('assets') }}/img/new-line-tiles-tuam-galway.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>New Line Tiles</h4>
                    <a href="http://www.emilyridge.ie/wp-content/uploads/new-line-tiles-tuam-galway.jpg" title="new-line-tiles-tuam-galway"></a>
                    <a href="https://newlinetiles.ie/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                  <img src="{{ asset('assets') }}/img/smr-legal.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>SMR Legal</h4>
                    <a href="http://www.emilyridge.ie/wp-content/uploads/smr-legal-web-development.jpg" title="smr-legal-web-development" data-gallery="portfolio-gallery-product"></a>
                    <a href="https://smrlegal.com.au/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                  <img src="{{ asset('assets') }}/img/nicholas-grundy-photography-web-design.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Nicholas Grundy Photography</h4>
                    <a href="http://www.emilyridge.ie/wp-content/uploads/nicholas-grundy-photography-web-design.jpg" title="nicholas-grundy-photography-web-design"></a>
                    <a href="https://www.nicholasgrundy.com/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
              </div><!-- End Portfolio Container -->
            </div>
          </div>
        </section><!-- /Portfolio Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

          <!-- Section Title -->
          <div class="container section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </div><!-- End Section Title -->

          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-4">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h3>Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Us</h3>
                    <p>emilyridge@example.com</p>
                  </div>
                </div><!-- End Info Item -->
              </div>

              <div class="col-lg-8">
                <form action="https://formspree.io/f/mpwzzdez" method="post" onsubmit="return validateForm()">
                  <div class="row gy-4">

                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-md-6 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="col-md-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                      <input type="submit" class="btn btn-primary" value="Send Message">
                    </div>

                  </div>
                </form>
              </div><!-- End Contact Form -->
            </div>
          </div>
        </section><!-- /Contact Section -->
      </main>

      <footer id="footer" class="footer dark-background">
        <div class="container">
          <div class="container">
            <div class="copyright">
              <span>Copyright</span> <strong class="px-1 sitename">Selecao</strong> <span>All Rights Reserved</span>
            </div>
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </footer>

      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Main JS File -->
      <script src="{{ asset('assets') }}/js/main.js">
         function validateForm() {
          var name = document.getElementById("name").value;

          var letters = /^[a-zA-Z\s]+$/;

          if (!letters.test(name)) {
            alert("Input your name by letters only!");
            return false;
          }

          return true;
          }
      </script>
    </body>
    </html>
