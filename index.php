<?php
require_once "pages/newsKN/core/init.php";
$title = $data_web['title'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="./images/dentalcare-favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/main.css">
  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</head>

<body id="body">
  <header class="BgScrollEffect">
    <span class="cover-lay"></span>
    <span class="separate-nav"></span>
    <div class="container-fluid NavEffect">
      <div class="SearchContainer">
        <div class="TopBarContact">
          <span class="infoToggle">
            <div class="left">
              <span class="iconify" data-icon="dashicons:plus"></span>
            </div>
            <div class="right">
              <span class="iconify" data-icon="ic:round-keyboard-arrow-down"></span>
            </div>
          </span>
          <div class="contact__info justify-content-lg-end">
            <div class="contact__info--time d-flex">
              <span class="iconify" data-icon="ph:clock-thin" data-rotate="270deg"></span>
              <span class="content d-flex justify-content-center flex-column">
                <h6 class="d-block">Monday - Friday 08:00-19:00</h6>
                <p class="d-block mb-0">Saturday and Sunday - CLOSED</p>
              </span>
            </div>
            <div class="contact__info--phone d-flex">
              <span class="iconify" data-icon="healthicons:phone-outline" data-rotate="270deg" data-flip="vertical"></span>
              <span class="content d-flex justify-content-center flex-column">
                <a class="d-block content--heading" href="tel:555-666-777">CALL US NOW</a>
                <a class="d-block content--sub" href="mailto:clinic@dentalcare.com">clinic@dentalcare.com</a>
              </span>
            </div>
            <div class="contact__info--address d-flex">
              <span class="iconify" data-icon="fluent:location-28-regular" data-rotate="180deg" data-flip="vertical"></span>
              <span class="content d-flex justify-content-center flex-column">
                <h6 class="d-block">Madison Avenue 7</h6>
                <p class="d-block mb-0">Ha Noi, VN</p>
              </span>
            </div>
          </div>
        </div>
        <form style="margin-right: 20px;" class="form-inline SearchFixed" action="<?php echo $_DOMAIN; ?>" method="GET">
          <button style="width: 70px; background-color:#22c7dd; border-color:#22c7dd" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSearch">
            <span style="font-size: 25px;" class="iconify search-btn" data-icon="gg:search-loading"></span>
          </button>
        </form>
      </div>

      <div class="ContainerNavbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="./index.php">
            <img src="./images/dentalcare-logo-color.png" alt="Logo">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <!-- <span class="navbar-toggler-icon">red</span> -->
            <span class="iconify" data-icon="bytesize:menu"></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="./index.php">HOME</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="./pages/about.php">ABOUT US</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./pages/about.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    General info
                  </a>
                  <a class="dropdown-item" href="./pages/doctorprofile.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Doctors profile
                  </a>
                  <a class="dropdown-item" href="./pages/appointments.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Appointments
                  </a>
                  <a class="dropdown-item" href="./pages/testimonials.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Testimonials
                  </a>
                  <a class="dropdown-item" href="./pages/contact-us.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Contact us
                  </a>
                  <a class="dropdown-item" href="./pages/working-hours.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Working hours
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="./pages/services.php">SERVICES</a>
                <div class="dropdown-menu dropdown-menu-2">
                  <a class="dropdown-item" href="./pages/services.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Services
                  </a>
                  <a class="dropdown-item" href="./pages/procedures.php">
                    <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                    Procedures
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/cost-calculator.php">GET A FREE QUOTE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/newsKN/">NEWS</a>
              </li>
            </ul>

            <form class="form-inline SearchFixed" action="<?php echo $_DOMAIN; ?>" method="GET">
              <button style="width: 70px; background-color:#22c7dd; border-color:#22c7dd" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSearch">
                <span style="font-size: 25px;" class="iconify search-btn" data-icon="gg:search-loading"></span>
              </button>
            </form>
          </div>

        </nav>
      </div>
    </div>

    <div id="header__slider" class="carousel slide" data-ride="carousel" data-interval="false">
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="content">
            <h1 style="letter-spacing: .2rem;">YOUR OWN STOMATOLOGIST</h1>
            <div class="text" style="line-height: 1.55;">Donec libero dui, dapibus non leo et, molestie faucibus
              risus. In fermentum tortor et posuere laoreet.
              Morbi pharetra velit ut varius semper. Donec accumsan et lacus at posuere.
            </div>
            <a class="content--btn content--btn--left d-inline-block" href="#">
              <span;">VIEW OUR TEAM</span>
            </a>
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Open modal
            </button> -->
            <div class="content--btn content--btn--right d-inline-block" href="#" data-toggle="modal" data-target="#myAppointment">
              <span>BOOK A VISIT</span>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="content">
            <h1 style="letter-spacing: .2rem;">YOUR BEAUTIFUL SMILE</h1>
            <div class="text" style="line-height: 1.55;">DentalCare is most focused in helping you discover your
              most beauiful smile as quickly as possible. Get your best looking smile now!</div>
            <a class="content--btn content--btn--left mt-3 mr-3 d-inline-block" href="#">
              <span>READ MORE</span>
            </a>
            <a class="content--btn content--btn--right mt-3 d-inline-block" href="#">
              <span>MORE ABOUT US</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#header__slider" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#header__slider" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </header>

  <!-- section common-feature -->
  <section class="common-feature BgScrollEffect">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 container__card card--1">
          <a href="#" class="icon-card">
          </a>
          <div class="content">
            <h4>Best dental surgeons</h4>
            <div class="text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis semper felis.</p>
            </div>
          </div>
          <a class="content--btn" href="#">
            <span>READ MORE</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 container__card card--2">
          <a href="#" class="icon-card"></a>
          <div class="content">
            <h4>Quick examination</h4>
            <div class="text">
              <p>Aliquam sit amet porttitor ex, sit amet pellentesque nibh. Praesent viverra dui augue.</p>
            </div>
          </div>
          <a class="content--btn" href="#">
            <span>READ MORE</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 container__card card--3">
          <a href="#" class="icon-card"></a>
          <div class="content">
            <h4>Painless procedures</h4>
            <div class="text">
              <p>Praesent cursus ligula elit, vitae ullamcorper felis sodales non suspendisse.</p>
            </div>
          </div>
          <a class="content--btn" href="#">
            <span>READ MORE</span>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 container__card card--4">
          <a href="#" class="icon-card"></a>
          <div class="content">
            <h4>Book now</h4>
            <div class="text">
              <p>Select the doctor you prefer and book a visit with him or her in a matter of minutes.</p>
            </div>
          </div>
          <a class="content--btn" href="#">
            <span>READ MORE</span>
          </a>
        </div>
      </div>
      <!-- out standing -->
      <div style="margin-top:7rem;" class="row outstanding">
        <div class="col-md-6 col-lg-7 ElementScrollEffect left">
          <div class="content">
            <div class="content__header">
              <div class="content__header--subtitle">
                Dr Jenna Wilson
              </div>
              <span class="d-block dash"></span>
              <div class="content__header--title">
                YOUR DENTAL TEAM
              </div>
            </div>
            <div class="content__script mt-4">
              <p>Dr. Jenna Wilson is is dedicated to providing her patients with the most beautiful smile together with
                the best dental protection available nowadays. Dr Jenna non malesuada erat, id consequat nunc. Nulla
                fermentum ipsum eget tortor laoreet varius.</p>
            </div>
            <div class="content__footer">
              <img src="./images/signature.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 ElementScrollEffect right">
          <img src="./images/Jenna_Dr.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!--Section doctor team -->
  <section class="dr-team SequentialAppear">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 dr-card FadeInItem dr-card--1">
          <div class="container-img">
            <a href="#">
              <div class="search-info">
                <span class="iconify" data-icon="carbon:search"></span>
              </div>
              <img src="./images/dr-audrey.jpg" alt="">
            </a>
          </div>
          <div class="content">
            <a href="#" class="icon-card icon-card--1"></a>
            <a href="#" class="icon-card icon-card--2"></a>
            <h5>Dental Surgeon</h5>
            <h3>Audrey Button</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quia totam amet laboriosam harum magni aut!
              Veritatis, veniam facilis nihil itaque pariatur quam!</p>
          </div>
          <div class="dr-card--contact">
            <a href="#">
              <span class="iconify" data-icon="gg:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="ei:sc-twitter"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="la:google-plus-g"></span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 dr-card FadeInItem dr-card--2">
          <div class="container-img">
            <a href="#">
              <div class="search-info">
                <span class="iconify" data-icon="carbon:search"></span>
              </div>
              <img src="./images/dr-emma.jpg" alt="">
            </a>
          </div>
          <div class="content">
            <a href="#" class="icon-card icon-card--1"></a>
            <a href="#" class="icon-card icon-card--2"></a>
            <h5>Dental Surgeon</h5>
            <h3>Emma Beckett</h3>
            <p>Vivamus sapien ligula, tempus ac ipsum ac, mattis luctus magna. Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Nobis, obcaecati!</p>
          </div>
          <div class="dr-card--contact">
            <a href="#">
              <span class="iconify" data-icon="gg:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="ei:sc-twitter"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="la:google-plus-g"></span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 dr-card FadeInItem dr-card--3">
          <div class="container-img">
            <a href="#">
              <div class="search-info">
                <span class="iconify" data-icon="carbon:search"></span>
              </div>
              <img src="./images/dr-hellen.jpg" alt="">
            </a>
          </div>
          <div class="content">
            <a href="#" class="icon-card">
            </a>
            <h5>Dentist</h5>
            <h3>Hellen Hill</h3>
            <p>Donec varius libero tortor, eu luctus ipsum aliquet ut. Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Ut, eaque?</p>
          </div>
          <div class="dr-card--contact">
            <a href="#">
              <span class="iconify" data-icon="gg:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="ei:sc-twitter"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="la:google-plus-g"></span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 dr-card FadeInItem dr-card--4">
          <div class="container-img">
            <a href="#">
              <div class="search-info">
                <span class="iconify" data-icon="carbon:search"></span>
              </div>
              <img src="./images/dr-arianna.jpg" alt="">
            </a>
          </div>
          <div class="content">
            <a href="#" class="icon-card">
            </a>
            <h5>Dentist</h5>
            <h3>Audrey Button</h3>
            <p>Curabitur lobortis, eros eu efficitur lacinia, velit magna cursus nisi. Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Dolorem, aliquam.</p>
          </div>
          <div class="dr-card--contact">
            <a href="#">
              <span class="iconify" data-icon="gg:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="ei:sc-twitter"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="la:google-plus-g"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Section testimonials-->
  <section class="testimonial">
    <div class="container">
      <div class="container__heading ElementScrollEffect right">
        <h5 class="container__heading--sub">
          The best reference is a good word
        </h5>
        <span class="dash"></span>
        <h2>
          <em>CLIENT</em>
          <b>TESTIMONIALS</b>
        </h2>
      </div>
      <div class="row SequentialAppear">
        <div class="col-md-12 col-lg-6 testimonial__content FadeInItem testimonial__content--1">
          <div style="height: 100%;" class="row align-items-center pt-3 pb-3">
            <div class="col-md-12 col-lg-4 testimonial__content--info">
              <img class="client-img" src="./images/client-1.jpg" alt="">
              <h4>PAUL LEE</h4>
              <span class="sign-img"><img src="./images/sign-1.png" alt=""></span>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="testimonial__content--text">
                <blockquote>
                  <i class="fas fa-quote-left"></i>
                  <p>Nullam eleifend lectus a tortor interdum, non sodales ante vehicula. Proin consequat, at commodo.
                    Donec eros massa, gravida ac lectus et, pharetra interdum lectus. Sed vel scelerisque quam, id
                    fringilla ante. Vivamus sagittis velit quis dictum ultricies.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 testimonial__content FadeInItem testimonial__content--2">
          <div style="height: 100%;" class="row align-items-center pt-3 pb-3">
            <div class="col-md-12 col-lg-4 testimonial__content--info">
              <img class="client-img" src="./images/client-2.jpg" alt="">
              <h4>ANN CLARK</h4>
              <span class="sign-img"><img src="./images/sign-2.png" alt=""></span>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="testimonial__content--text">
                <blockquote>
                  <i class="fas fa-quote-left"></i>
                  <p>Quisque posuere rhoncus erat, sit amet aliquet augue. Donec eros massa, gravida ac lectus et,
                    pharetra interdum lectus. Sed vel scelerisque quam, id fringilla ante. Vivamus sagittis velit quis
                    dictum ultricies. Nullam eleifend lectus a tortor interdum, non sodales.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row SequentialAppear">
        <div class="col-md-12 col-lg-6 testimonial__content FadeInItem testimonial__content--3">
          <div style="height: 100%;" class="row align-items-center pt-3 pb-3">
            <div class="col-md-12 col-lg-4 testimonial__content--info">
              <img class="client-img" src="./images/client-3.jpg" alt="">
              <h4>PAUL LEE</h4>
              <span class="sign-img"><img src="./images/sign-3.png" alt=""></span>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="testimonial__content--text">
                <blockquote>
                  <i class="fas fa-quote-left"></i>
                  <p>Nullam eleifend lectus a tortor interdum, non sodales ante vehicula. Proin consequat, at commodo.
                    Donec eros massa, gravida ac lectus et, pharetra interdum lectus. Sed vel scelerisque quam, id
                    fringilla ante. Vivamus sagittis velit quis dictum ultricies.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 testimonial__content FadeInItem testimonial__content--4">
          <div style="height: 100%;" class="row align-items-center pt-3 pb-3">
            <div class="col-md-12 col-lg-4 testimonial__content--info">
              <img class="client-img" src="./images/client-4.jpg" alt="">
              <h4>ANN CLARK</h4>
              <span class="sign-img"><img src="./images/sign-4.png" alt=""></span>
            </div>
            <div class="col-md-12 col-lg-8">
              <div class="testimonial__content--text">
                <blockquote>
                  <i class="fas fa-quote-left"></i>
                  <p>Quisque posuere rhoncus erat, sit amet aliquet augue. Donec eros massa, gravida ac lectus et,
                    pharetra interdum lectus. Sed vel scelerisque quam, id fringilla ante. Vivamus sagittis velit quis
                    dictum ultricies. Nullam eleifend lectus a tortor interdum, non sodales.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Section contact us-->
  <section class="contact-us">
    <div class="container content d-flex justify-content-between flex-wrap">
      <div class="heading ElementScrollEffect left">
        <h5>Interested?</h5>
        <h2 class="mb-3">contact us and schedule your visit</h2>
      </div>
      <div class="d-flex align-items-center ElementScrollEffect right">
        <a href="#">
          <span style="text-transform: uppercase; color: #000000;">contact us</span>
        </a>
      </div>
    </div>
  </section>

  <!--Section services-->
  <section class="services">
    <div class="container">
      <div class="container__heading ElementScrollEffect right">
        <h5 class="container__heading--sub">
          the best reference
        </h5>
        <span class="dash"></span>
        <h2>
          <em>our</em>
          <b>services</b>
        </h2>
        <p>
          Quisque posuere rhoncus erat, sit amet aliquet augue. Donec eros massa, gravida ac lectus et, pharetra
          interdum lectus.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--1">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="./images/sv-teeth.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>teeth</h5>
              <h3>dental services</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quia totam amet laboriosam harum magni aut!
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--2">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="./images/sv-implants.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>if you lost your</h5>
              <h3>implants</h3>
              <p>Nullam eleifend lectus a tortor interdum, non sodales ante vehicula. Proin consequat, at commodo.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--3">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="./images/sv-dentistry.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>cosmetic</h5>
              <h3>dentistry</h3>
              <p>Curabitur nec interdum justo. Suspendisse in venenatis justo. Sed arcu velit, pulvinar eu consequat in,
                volutpat et urna.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--4">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="./images/sv-bridges.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>the best solution</h5>
              <h3>dental bridges</h3>
              <p>Vestibulum volutpat, nunc vitae tempus efficitur, sapien quam tristique nunc, in pulvinar sapien sem et
                massa.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--5">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="./images/sv-crowns.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>painless fixes</h5>
              <h3>crowns</h3>
              <p>Integer ullamcorper odio vitae nibh dapibus, id mollis quam eleifend. Fusce finibus vestibulum odio
                vitae malesuada.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--6">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="./images/sv-invisalign.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>line them all up</h5>
              <h3>invisalign</h3>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi a
                pulvinar leo.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--7">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="./images/sv-venneers.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>porcelain</h5>
              <h3>veneers</h3>
              <p>Praesent porta lacus a viverra tempus. Proin maximus felis ac risus aliquam maximus. Pellentesque quis
                orci tempus.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 sv-card FadeInItem sv-card--8">
          <div class="container--card">
            <div class="container-img">
              <a href="#">
                <img src="./images/sv-whitening.jpg" alt="">
              </a>
            </div>
            <div class="content">
              <a href="#" class="icon-card"></a>
              <h5>beautify your smile</h5>
              <h3>teeth whitening</h3>
              <p>Fusce tempus suscipit auctor. Sed at nulla at nisi pretium tincidunt. Nullam mattis arcu porttitor,
                dictum metus sed.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--section map-->
  <section class="map">
    <div class="container-map">
      <div class="containerWorkingHour" style="background-color: #005B88; padding: 48px 40px;">
        <div id="btn-toggle" data-icon=""></div>
        <div class="working-hours-wrap">
          <h3>working hours</h3>
          <div class="working-hours">
            <div class="row">
              <div class="col-md-5">
                Mon - Wed
              </div>
              <div class="col-md-7">
                8:00 AM - 7:00 PM
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                Thu - Fri
              </div>
              <div class="col-md-7">
                8:00 AM - 5:00 PM
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                Sat - Sun
              </div>
              <div class="col-md-7">
                Closed
              </div>
            </div>
          </div>
          <div class="TopSpace"></div>
          <h3>contact details</h3>
          <div class="contact">
            <div>
              <a href="#">
                <div style="display: table-cell; width: 28px;">
                  <span class="iconify" data-icon="fluent:location-28-regular" data-rotate="180deg" data-flip="vertical"></span>
                </div>
                <span style="display: table-cell;" class="ml-2 text">Madison Avenue 7, NY, US</span>
              </a>
              <a class="d-block mt-2" href="mailto:clinic@dentalcare.com">
                <span class="iconify" data-icon="uiw:mail-o"></span>
                <span class="ml-2 text">clinic@dentalcare.com</span>
              </a>
              <a class="d-block mt-2" href="tel:555-666-777">
                <span class="iconify" data-icon="healthicons:phone-outline" data-rotate="270deg" data-flip="vertical"></span>
                <span class="ml-2 text">Call Us Now</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2521.189562983325!2d105.86532408406353!3d20.996233074417177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac04daecb877%3A0xef1e1e02b64fcb4c!2zQuG7h25oIHZp4buHbiDEkGEga2hvYSBRdeG7kWMgdOG6vyBWaW5tZWMgVGltZXMgQ2l0eQ!5e0!3m2!1svi!2s!4v1635734046594!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>

  <?php
  require_once "layouts/footer.php";
  ?>

  <!-- The Modal -->
  <div class="modal fade" id="myAppointment">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Make an appointment now</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="<?php echo $_DOMAIN_Client . 'verifyEmail.php' ?>" method="POST" class="form" id="form-1">

            <div class="spacer"></div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="fullname" class="form-label">Tên đầy đủ<span class="mandatory"> *</span></label>
                  <input id="fullname" name="fullname" type="text" placeholder="VD: Khoa Nguyễn" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email" class="form-label">Email<span class="mandatory"> *</span></label>
                  <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="phone-number" class="form-label">Điện thoại</label>
                  <input id="phone-number" name="phone-number" type="text" placeholder="Số điện thoại" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="formDate" class="form-label">Lịch hẹn<span class="mandatory"> *</span></label>
                  <input id="formDate" name="date" type="date" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="formTimes" class="form-label">Chọn thời gian phù hợp với bạn<span class="mandatory"> *</span></label>
                  <select name="formTimes" id="formTimes" class="form-control">
                    <option value="">Thời gian</option>
                  </select>
                  <span class="form-message"></span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="formAddress" class="form-label">Địa chỉ<span class="mandatory"> *</span></label>
                  <input id="formAddress" name="address" type="text" placeholder="Địa chỉ của bạn" class="form-control">
                  <span class="form-message"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="gender" class="form-label">Giới tính</label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="">Chọn</option>
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                    <option value="3">Khác</option>
                  </select>
                  <span class="form-message"></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="services" class="form-label">Dịch vụ của bạn là gì<span class="mandatory"> *</span></label>
              <span style="display: block" class="form-message"></span>
              <div class="row" id="formServices">
                <div class="col-lg-6">
                  <input type="checkbox" id="service-1" name="service" value="Nhận tư vấn">
                  <label for="service-1">Nhận tư vấn</label><br>
                  <input type="checkbox" id="service-2" name="service" value="Thẩm mỹ răng sứ">
                  <label for="service-2">Thẩm mỹ răng sứ</label><br>
                  <input type="checkbox" id="service-3" name="service" value="Chỉnh nha niềng rằng">
                  <label for="service-3">Chỉnh nha niềng rằng</label><br>
                  <input type="checkbox" id="service-4" name="service" value="Trám răng thẩm mỹ">
                  <label for="service-4">Trám răng thẩm mỹ</label><br>
                  <input type="checkbox" id="service-5" name="service" value="Làm răng giả">
                  <label for="service-5">Làm răng giả</label>
                </div>
                <div class="col-lg-6">
                  <input type="checkbox" id="service-6" name="service" value="Tẩy trắng răng">
                  <label for="service-6">Tẩy trắng răng</label><br>
                  <input type="checkbox" id="service-7" name="service" value="Lấy cao răng">
                  <label for="service-7">Lấy cao răng</label><br>
                  <input type="checkbox" id="service-8" name="service" value="Mặt dán răng sứ Veneers">
                  <label for="service-8">Mặt dán răng sứ Veneers</label><br>
                  <input type="checkbox" id="service-9" name="service" value="Bọc răng sứ Emax">
                  <label for="service-9">Bọc răng sứ Emax</label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="form-field-message" class="form-label">Nếu bạn cần hỏi điều gì hoặc muốn gửi các thông tin về mối quan tâm
                của bạn vui lòng điền vào khung bên dưới.</label>
              <textarea name="form-field-message" id="form-field-message" cols="100%" rows="5" placeholder="Nội dung" class="form-control"></textarea>
            </div>

            <button class="form-submit">BOOK NOW</button>
          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- The search Modal -->
  <div class="modal fade" id="ModalSearch">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tìm kiếm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="<?php echo $_DOMAIN; ?>" method="GET">
            <div class="input-group">
              <input type="text" class="form-control" name="s" placeholder="Bạn muốn tìm gì?">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><span class="iconify" data-icon="gg:search-loading"></span></button>
              </span>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>

  <script src="./js/main.js"></script>
  <script src="./js/validator.js"></script>
  <script src="./js/jquery.js"></script>
</body>

</html>