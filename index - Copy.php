<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      
    />
    <meta name="theme-color" content="#f1f1f1" />

    <link rel="manifest" href="manifest.json" />
    <link rel="icon" type="image/x-icon" href="image/favicon.ico?v=2" />
    <link rel="apple-touch-icon" href="image/apple-touch-icon.webp" />

    <title>We Save Animals</title>

    <!-- Font Awesome  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

    <!-- JQuery -->
    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    ></script>

    <!-- Waypoints -->
    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
    ></script>

    <!-- CounterUp 2 -->
    <script
      defer
      src="https://unpkg.com/counterup2@2.0.2/dist/index.js"
    ></script>

    <!-- External JS -->
    <script defer src="js/script.js"></script>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <link
      rel="preload"
      href="image/hero-img.avif"
      as="image"
      fetchpriority="high"
      type="image/avif"
    />
  </head>
  <body>
    <!-- Header Start -->
    <header class="header">
      <a href="#" class="logo"><i class="fa-solid fa-paw"></i> WE SAVE ANIMALS </a>
      <nav class="navbar">
        <a href="#home" aria-label="home">Home</a>
        <a href="#about" aria-label="about">About</a>
        <a href="#service" aria-label="service">Service</a>
        <a href="#donate" aria-label="donation">Donation</a>
        <a href="#contact" aria-label="contact">Contact</a>
        
      </nav>
      <div class="icons">
        <!-- Responsive Navbar -->
        <div id="menu-btn" class="fas fa-bars menu-btn"></div>
        <a
          href="#search"
          id="search-btn"
          class="fas fa-search"
          aria-label="search"
        ></a>
        <a
          href="#donate"
          class="fas fa-hand-holding-heart"
          aria-label="donate-navbar"
        ></a>
        <a
          href="#login"
          id="login-btn"
          class="fas fa-user"
          aria-label="login"
        ></a>
      </div>
    </header>
    <!-- Header End -->

    <!-- Back To Top Start -->
    <button id="back-to-top-btn" class="back-to-top-btn">
      <i class="fa fa-chevron-up"></i>
    </button>
    <!-- Back To Top End -->

    <!-- Main Content Start -->
    <main>
      <!-- Hero Start-->
      <article class="hero" id="home">
        <div class="row">
          <div class="content">
            <h1>
              Be a Hero to Rescue
              <br />
              <strong>World's Animals</strong>
            </h1>
            <p class="hero-text">
              Will you help create a better tomorrow for vulnerable wildlife and
              fragile habitats around the world?. Today you can save the
              species, tomorrow may be to late. Make your donation today and be
              a hero for our beautiful planet.
            </p>
            <div class="wrapper">
              <a href="#donate" class="btn-hero"
                ><span
                  ><i ></i> Donate
                  Now!</span
                ></a
              >
            </div>
          </div>
        </div>
      </article>

      <!-- Hero End -->

      <!-- About Start -->
      <article class="about">
        <div class="about-image" id="about"></div>
        <div class="about-container">
          <p><i class="fa-solid fa-leaf"></i> Learn About Us</p>
          <h1> <strong>WE SAVE ANIMALS</strong></h1>
          <p>
            In India, street dogs are misunderstood as dangerous, savage animals. we work alongside India’s local shelters to rescue, rehabilitate, vaccinate, and house these strays in need
          </p>
          <div class="icons-container">
            <div class="icons">
              <i class="fa-solid fa-bowl-food"></i>
              <span>Foods</span>
            </div>
            <div class="icons">
              <i class="fa-solid fa-droplet"></i>
              <span>Water</span>
            </div>
            <div class="icons">
              <i class="fa-solid fa-briefcase-medical"></i>
              <span>Medical</span>
            </div>
          </div>
        </div>
      </article>
      <!-- About End -->

      <!-- Service Start  -->
      <article class="service">
        <div class="service-container swiper">
          <div class="title" id="service">
            <p class="title-sub">Our programs</p>
            <h1 class="title-description">
              We Work Differently to <br />
              Keep The World Safe
            </h1>
          </div>
          <div class="slide-container">
            <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide">
                <div class="image-box">
                  <img
                    src="image/shelter.png"
                    width="315"
                    height="200"
                    alt="Image"
                    loading="lazy"
                    fetchpriority="low"
                  />
                </div>
                <div class="service-details-container">
                  <div class="service-details">
                    <h1>Adoptions & Release</h1>
                    <h2 class="service-name">
                      Take home any of the shelter animals that are put up for adoption . You can get in touch with us via phone, email or any other social media .Walk into the centre any day between 10:00 a.m. to 5 p.m. to meet all the wet noses and wagging tails. 
                    </h2>
                    <a href="#service" class="btn-service">Read More</a>
                  </div>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-box">
                  <img
                    src="image/awa.png"
                    width="315"
                    height="200"
                    alt="Image"
                    loading="lazy"
                    fetchpriority="low"
                    fetchpriority="low"
                  />
                </div>
                <div class="service-details-container">
                  <div class="service-details">
                    <h1>Awareness Programs</h1>
                    <h2 class="service-name">
                      public education classes are highly essential to  combat stereotypes and promote fostering and adoption for the next generation of Indian animal lovers. We also employ a full-time officer to counsel abusers and, if necessary, refer animal abuse cases to law enforcement.
                    </h2>
                    <a hred="#service" class="btn-service">Read More</a>
                  </div>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-box">
                  <img
                    src="image/rehab.png"
                    width="315"
                    height="200"
                    alt="Image"
                    loading="lazy"
                    fetchpriority="low"
                    fetchpriority="low"
                  />
                </div>
                <div class="service-details-container">
                  <div class="service-details">
                    <h1>Rehabilitation</h1>
                    <h2 class="service-name">
                      with any history of injury, chances of adoption plummet to zero. With that in mind, our  focus is not on the conventional rehab-and-adopt model familiar to Westerners, but on giving the best chance of survival on their own by providing all the medical aids.
                    </h2>
                    <a hred="#service" class="btn-service">Read More</a>
                  </div>
                </div>
              </div>
             
      </article>
      <!-- Service End -->

      <!-- Counter Start-->
      <article class="main-counter" id="main-counter">
        <div class="main-counter-container">
          <div class="counter-up">
            <div class="content">
              
              <div class="box">
                <div class="icon"><i class="fa-solid fa-people-group"></i></div>
                <div class="counter-container">
                  <div class="counter"></div>
                  <div class="plus"></div>
                </div>
                <div class="text">Volunteers</div>
              </div>
              <div class="box">
                <div class="icon"><i class="fa-sharp fa-solid fa-paw"></i></div>
                <div class="counter-container">
                  <div class="counter"></div>
                  <div class="plus"></div>
                </div>
                <div class="text">RESCUED</div>
              </div>
              <div class="box">
                <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                <div class="counter-container">
                  <div class="counter"></div>
                  <div class="plus"></div>
                </div>
                <div class="text" >DONATIONS</div>
              </div>
            </div>
          </div>
        </div>
      </article>
      <!-- Counter End -->

      <!-- Donate Start -->
      <article class="donate" id="donate-main">
        <div class="donate-container">
          <div class="title">
            
            <h1 class="title-description">
              DONATIONS
            </h1>
          </div>

          <div class="box-container" id="donate">
            <div class="box">
              <div class="image">
                <img
                  src="image/dfood.png"
                  alt="Image"
                  loading="lazy"
                  fetchpriority="high"
                />
              </div>
              <div class="content">
                <h1>ONE DAY MEAL</h1>
                <p>
                  Celebrate your special moments with us. The One Day Meal covers the morning and evening feed for a day for our 162 dogs,19 cats,1 sheep, 1 goat, 2 calves and 2 cows.e
                </p>
                <a href="javascript:void(0)" class="btn-donate" aria-label="donate button" data-amount="2000"
                  >Donate Now</a
                >
                
                <div class="icons">
                 
                  <span> <i class="fa-solid fa-rupee-sign"></i> 2000 </span>
                </div>
              </div>
            </div>

            <div class="box">
              <div class="image">
                <img
                  src="image/vac.jpg"
                  alt="Image"
                  loading="lazy"
                  fetchpriority="high"
                />
              </div>
              <div class="content">
                <h1>VACCINATION</h1>
                <p>
                  Covers 1 round of vaccination for 1 resuced dog. Help our streeties to get boosted immunity and fight against disease.This will prevent animals from contagious diseases.
                </p>
                <a href="javascript:void(0)" class="btn-donate" aria-label="donate button" data-amount="600"
                  >Donate Now</a
                >
                
                <div class="icons">
                  
                  <span> <i class="fa-solid fa-rupee-sign"></i> 600 </span>
                </div>
              </div>
            </div>

            <div class="box">
              <div class="image">
                <img
                  src="image/kit.jpg"
                  alt="Image"
                  loading="lazy"
                  fetchpriority="high"
                />
              </div>
              <div class="content">
                <h1>MEDICINES</h1>
                <p>
                  It covers general medicines like  Betadine solution, bandage roll and 1 box of surgical gloves which helps in dressing the open wounds of shelter animals
                </p>
                <a href="#donate" class="btn-donate" aria-label="donate button" data-amount="2500"
                  >Donate Now</a
                >
                <div class="icons">
                  
                  <span> <i class="fa-solid fa-rupee-sign"></i> 2500 </span>
                </div>
              </div>
            </div>

            <div class="box">
              <div class="image">
                <img
                  src="image/pt.jpg"
                  alt="Image"
                  loading="lazy"
                  fetchpriority="low"
                />
              </div>
              <div class="content">
                <h1>PASSIVE PARENTS</h1>
                <p>
                  You can passively adopt any of the shelter animals. WSA will look after them and feed and vaccinate them, for a small contribution from your end
                </p>
                <a href="#donate" class="btn-donate" aria-label="donate button" data-amount="2000"
                  >Donate Now</a
                >
                <div class="icons">
                  
                  <span> <i class="fa-solid fa-rupee-sign"></i> 2000 </span>
                </div>
              </div>
            </div>

            <div class="box">
              <div class="image">
                <img
                  src="image/cow.jpg"
                  alt="Image"
                  loading="lazy"
                  fetchpriority="low"
                />
              </div>
              <div class="content">
                <h1>VEGETARIANS ZONE </h1>
                <p>
                  It covers the monthly needs of cows, calves, goats and sheep- like dry grass, vegetables, ragi, dry fodder and husk
                </p>
                <a href="#donate" class="btn-donate" aria-label="donate button" data-amount="7500"
                  >Donate Now</a
                >
                <div class="icons">
                  
                  <span> <i class="fa-solid fa-rupee-sign"></i> 7500 </span>
                </div>
              </div>
            </div>

            <div class="box">
              <div class="image">
                <img
                  src="image/inju.jpg"
                  alt="Image"
                  loading="lazy"
                  fetchpriority="low"
                />
              </div>
              <div class="content">
                <h1>MINOR SURGERY</h1>
                <p>
                  Saves the life of a rescued animal by helping them undergo the required surgery.This includes medicine and surgery costs.
                </p>
                <a href="#donate" class="btn-donate" aria-label="donate button" data-amount="3500"
                  >Donate Now</a
                >
                <div class="icons">
                  
                  <span> <i class="fa-solid fa-rupee-sign"></i> 3500 </span>
                </div>
              </div>
            </div>
          </div>
          <div id="load-more">Load More</div>
        </div>
      </article>
      <!-- Donate End -->

      <section class="">
        <div class="">
          <h2 class=""></h2>
          <h1 class=""></h1>
          <div class="">
            <div class="">
              <span class="" id=""></span>
              <span class=""></span>
            </div>
            <div class="">
              <span class="" id=""></span>
              <span class=""></span>
            </div>
            <div class="">
              <span class="" id=""></span>
              <span class=""></span>
            </div>
            <div class="">
              <span class="" id=""></span>
              <span class=""></span>
            </div>
          </div>
        </div>
      </section>

      <article class="contact" id="contact">
        <!-- Contact Start -->
        <div class="contact-form">
          <div class="card">
            <h1>Contact Us</h1>

            
            
          <form action="contact.php" method="POST">

            <?php if (isset($_GET['error'])) { ?>
     		      <p class="error"><?php echo $_GET['error']; ?></p>
     	      <?php } ?>

              <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
              <?php } ?>


            <div class="form-group">

            <label >Email</label>
                <?php if (isset($_GET['email'])) { ?>
                <input
                  class="contact-input"
                  type="text"
                  name="email"
                  id="email"
                  placeholder="Your Email ID..."
                  required
                  value="<?php echo $_GET['email']; ?>"/><br>
                  <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="your email"><br>
                <?php }?>


                
              </div>

             <div class="form-group">
                <label >Subjet</label>
                <?php if (isset($_GET['subject'])) { ?>
                <input
                  class="contact-input"
                  type="text"
                  name="subject"
                  id="subject"
                  placeholder="Subject..."
                  required
                  value="<?php echo $_GET['subject']; ?>"/><br>
                  <?php }else{ ?>
               <input type="text" 
                      name="subject" 
                      placeholder="Subject...."><br>
          <?php }?>

                  </div>
              
              <div class="form-group">
                <label >Message</label>
                <?php if (isset($_GET['message'])) { ?>
                <input
                  class="contact-textarea"
                  name="message"
                  id="message"
                  cols="15"
                  rows="10"
                  placeholder="Your Message..."
                  required
                  value="<?php echo $_GET['message']; ?>"/><br>
                  <?php }else{ ?>
               <input type="text" 
                      name="message" 
                      placeholder="message...."><br>
          <?php }?>



                
              </div>
              <div class="form-group">
                <button type="submit"  class="btn-contact" > send</button>
                
              </div>
            </form>
          </div>
        </div>
        <!-- Contact End -->

       
      </article>
    </main>
    <!-- Main Content End -->

    <!-- Footer Start -->
    <footer class="footer" id="footer">
      <div class="main-content-footer">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>
              In India, street dogs are misunderstood as dangerous, savage animals. we work alongside India’s local shelters to rescue, rehabilitate, vaccinate, and house these strays in need
            </p>

            <div class="social">
              <a
                href=#
                target="_blank"
                aria-label="Linkedin"
                ><span class="fab fa-whatsapp"></span
              ></a>
              <a
                href=#
                target="_blank"
                aria-label="twitter"
                ><span class="fab fa-twitter"></span
              ></a>
              <a
                href=3
                target="_blank"
                aria-label="instagram"
                ><span class="fab fa-instagram"></span
              ></a>
             
            </div>
          </div>
        </div>
        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">INDIA</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text"></span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text"></span>
            </div>
          </div>
        </div>
        <div class="right box">
          <h2>Become Member</h2>
          <div class="content">
          <form action="connect.php" method="post">
     
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['username'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="username" 
                      placeholder="Name"><br>
          <?php }?>

          <label>mAIL ID</label>
          <?php if (isset($_GET['mailid'])) { ?>
               <input type="email" 
                      name="mailid" 
                      placeholder="mailid"
                      value="<?php echo $_GET['mailid']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="mailid" 
                      placeholder="mailid"><br>
          <?php }?>
        <div class="btn-member">  
     	<button type="submit" >register now</button>
          </div>
       </form>
          </div>
        </div>
      </div>
      <div class="bottom">





        <!DOCTYPE html>
        <html>
        <head>
          <title>PHP Razorpay Payment Gateway Integration Example</title>
        </head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <style>
          .card-product .img-wrap {
            border-radius: 3px 3px 0 0;
            overflow: hidden;
            position: relative;
            height: 220px;
            text-align: center;
          }
          .card-product .img-wrap img {
            max-height: 100%;
            max-width: 100%;
            object-fit: cover;
          }
          .card-product .info-wrap {
            overflow: hidden;
            padding: 15px;
            border-top: 1px solid #eee;
          }
          .card-product .bottom-wrap {
            padding: 15px;
            border-top: 1px solid #eee;
          }
        
          .label-rating { margin-right:10px;
            color: #333;
            display: inline-block;
            vertical-align: middle;
          }
        
          .card-product .price-old {
            color: #999;
          }
        </style>
        <body>
        
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
        
          $('body').on('click', '.btn-donate', function(e){
            var totalAmount = $(this).attr("data-amount");
            var product_id =  $(this).attr("data-id");
            var options = {
            "key": "rzp_live_ILgsfZCZoFIKMb",
            "amount": (100*totalAmount), // 2000 paise = INR 20
            "name": "Razorpay",
            "description": "Payment",
            "image": "https://www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
            "handler": function (response){
                  $.ajax({
                    url: 'http://localhost/razorpay/payment-proccess.php',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
                    }, 
                    success: function (msg) {
        
                       window.location.href = 'http://localhost/razorpay/success.php';
                    }
                });
             
            },
        
            "theme": {
                "color": "#528FF0"
            }
          };
          var rzp1 = new Razorpay(options);
          rzp1.open();
          e.preventDefault();
          });
        
        </script>
        </body>
        </html>










        
        <span class="credit"
          >Copyright <span class="far fa-copyright"></span> 2023
        </span>
        <span>
          
          | All rights reserved.</span
        >
      </div>
    </footer>
    <!-- Footer End  -->

    <!-- SwiperJS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  </body>
</html>
