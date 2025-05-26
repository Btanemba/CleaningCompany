<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Elbio Cleaning Services</title>
  <link rel="stylesheet" href="path/to/your/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Reviews Section Styling */
    .reviews_section {
      background-color: #f9f9f9;
      padding: 60px 0;
    }

    .review_box {
      background: white;
      border-radius: 10px;
      padding: 30px;
      margin: 20px auto;
      max-width: 800px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .review_stars {
      color: #FFD700;
      font-size: 24px;
      margin-bottom: 15px;
    }

    .review_text {
      font-size: 18px;
      line-height: 1.6;
      color: #555;
      font-style: italic;
    }

    .reviewer_name {
      color: #333;
      margin-top: 20px;
      font-weight: 600;
    }

    .checked {
      color: #FFD700;
    }

    .carousel-control-prev,
    .carousel-control-next {
      color: #333;
      width: 5%;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      color: #000;
    }
  </style>
</head>
<body>

  <!-- Header Section -->
  <div class="header_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
           <img src="images/Elbio.jpg" style="width: 90px; height: auto; border-radius: 50%;">
        </div>
       
      </div>
    </div>

    <!-- Banner Section -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="banner_taital">SPARKLING CLEAN HOMES</h1>
            <p class="banner_text">Let us do the dirty work so you don't have to. We offer top-notch residential and commercial cleaning tailored to your needs.</p>
            <div class="contact_bt"><a href="#">CONTACT US <span class="contact_padding"><img src="images/contact-icon.png"></span></a></div>
          </div>
          <div class="col-sm-5">
            <div><img src="images/img-1.png" class="image_1"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Services Section -->
  <div class="services_section layout_padding">
    <div class="container">
      <h1 class="services_taital"><span>Our</span> <img src="images/icon-1.png" alt="icon"> <span style="color: #1f1f1f">Services</span></h1>
      <p class="services_text">We offer a wide range of professional cleaning services to keep your home and business spotless, fresh, and healthy — all at affordable rates.</p>

      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text">Tile & Grout Cleaning</h3>
                    <p class="lorem_text">We bring back the shine! Our deep-cleaning techniques remove grime and restore your tiles to their original beauty.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Using eco-friendly products, we eliminate stains, dust, and allergens, leaving your carpets fresh and clean.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text">Window Cleaning</h3>
                    <p class="lorem_text">Crystal-clear windows that let the light shine in — without streaks, smudges, or hassle.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Office Cleaning</h3>
                    <p class="lorem_text">A clean workspace boosts productivity. We provide flexible cleaning schedules for your office needs.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div><img src="images/img-2.png" class="image_2"></div>
        </div>
        <div class="col-md-6">
          <h1 class="services_taital"><span>About</span> <img src="images/icon-1.png" alt="icon"> <span style="color: #1f1f1f">Cleaning</span></h1>
          <p class="ipsum_text">At Elbio Cleaning Services, we are committed to delivering exceptional cleaning solutions tailored to your home or business. Our experienced team uses eco-friendly products and proven methods to ensure every space shines—clean, fresh, and healthy.</p>
          <div class="contact_bt_1"><a href="#">READ MORE <span class="contact_padding"><img src="images/contact-icon1.png" alt="read more icon"></span></a></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Choose Section -->
  <div class="choose_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Why</span> <img src="images/icon-1.png" alt="icon"> <span style="color: #1f1f1f">Choose Us</span></h1>
      <p class="choose_text">We go beyond basic cleaning—delivering reliability, quality, and satisfaction with every visit. Here's why our customers trust us.</p>
      <div class="choose_section_2 layout_padding">
        <div class="image_3"><img src="images/img-3.png" alt="Cleaning team image"></div>
        {{-- <div class="get_bt"><a href="#">Get A Quote</a></div> --}}
      </div>
    </div>
  </div>

  <!-- Reviews Section -->
  <div class="reviews_section layout_padding">
    <div class="container">
      <h1 class="services_taital"><span>Customer</span> <img src="images/icon-1.png" alt="icon"> <span style="color: #1f1f1f">Reviews</span></h1>
      <p class="services_text">Don't just take our word for it—see what our clients say about our cleaning services!</p>

      <div id="reviews_carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- Review 1 -->
          <div class="carousel-item active">
            <div class="review_box">
              <div class="review_content">
                <div class="review_stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
                <p class="review_text">"Elbio Cleaning transformed my home! The team was punctual, thorough, and left every surface sparkling. Best cleaning service I've ever used."</p>
                <h4 class="reviewer_name">— Sarah J., Residential Client</h4>
              </div>
            </div>
          </div>

          <!-- Review 2 -->
          <div class="carousel-item">
            <div class="review_box">
              <div class="review_content">
                <div class="review_stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
                <p class="review_text">"Our office has never looked better. Reliable weekly service with attention to detail. Highly recommend for commercial cleaning!"</p>
                <h4 class="reviewer_name">— Michael T., Business Client</h4>
              </div>
            </div>
          </div>

          <!-- Review 3 -->
          <div class="carousel-item">
            <div class="review_box">
              <div class="review_content">
                <div class="review_stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <p class="review_text">"Impressed with their carpet cleaning—removed years of stains I thought were permanent. Will definitely use them again!"</p>
                <h4 class="reviewer_name">— Lisa M., Repeat Customer</h4>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#reviews_carousel" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#reviews_carousel" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>

    </div>
  </div>

  <!-- Optional: JS scripts -->
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>

</body>
</html>
