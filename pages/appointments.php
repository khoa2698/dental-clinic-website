<?php
require_once "newsKN/core/init.php";
$title = $data_web['title'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments - <?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../images/dentalcare-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</head>
<body>
    
    <header class="BgScrollEffect about-us">
        <div class="BackgroundImage"></div>
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
                            <span class="iconify" data-icon="healthicons:phone-outline" data-rotate="270deg"
                                data-flip="vertical"></span>
                            <span class="content d-flex justify-content-center flex-column">
                                <a class="d-block content--heading" href="tel:555-666-777">CALL US NOW</a>
                                <a class="d-block content--sub"
                                    href="mailto:clinic@dentalcare.com">clinic@dentalcare.com</a>
                            </span>
                        </div>
                        <div class="contact__info--address d-flex">
                            <span class="iconify" data-icon="fluent:location-28-regular" data-rotate="180deg"
                                data-flip="vertical"></span>
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
                    <a class="navbar-brand" href="../index.php">
                        <img src="../images/dentalcare-logo-color.png" alt="Logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                        <!-- <span class="navbar-toggler-icon">red</span> -->
                        <span class="iconify" data-icon="bytesize:menu"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">HOME</a>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"
                                    href="./about.php">ABOUT US</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="./about.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        General info
                                    </a>
                                    <a class="dropdown-item" href="./doctorprofile.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Doctors profile
                                    </a>
                                    <a class="dropdown-item active" href="./appointments.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Appointments
                                    </a>
                                    <a class="dropdown-item" href="./testimonials.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Testimonials
                                    </a>
                                    <a class="dropdown-item" href="./contact-us.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Contact us
                                    </a>
                                    <a class="dropdown-item" href="./working-hours.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Working hours
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"
                                    href="./services.php">SERVICES</a>
                                <div class="dropdown-menu dropdown-menu-2">
                                    <a class="dropdown-item" href="./services.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Services
                                    </a>
                                    <a class="dropdown-item" href="./procedures.php">
                                        <span class="iconify" data-icon="dashicons:arrow-right-alt2"></span>
                                        Procedures
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./cost-calculator.php">GET A FREE QUOTE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./newsKN/">NEWS</a>
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

        <div class="container WrapContent">
            <div class="ContentOnBackGround ElementScrollEffect right">
                <h5 class="heading--sub">About us</h5>
                <span class="dash"></span>
                <h2 class="heading">Appointments</h2>
                <p class="text">Praesent venenatis lobortis volutpat. Curabitur ultricies ex vel mi ornare fringilla. Aenean luctus orci ac tellus rutrum posuere. Curabitur sit amet varius erat. Morbi placerat, nulla eu iaculis condimentum.</p>
                <a class="content--btn content--btn--left mr-3 d-inline-block" href="#">
                    <span>VIEW SURGEONS</span>
                </a>
                <a class="content--btn content--btn--right d-inline-block" href="#">
                    <span>WORKING HOURS</span>
                </a>
            </div>
        </div>
    </header>

    <section class="MakeAppointment">
        <div class="container WrapHeadingContent">
            <div class="HeadingContent  ElementScrollEffect left">
                <h5 class="heading--sub">Book a visit with your doctor</h5>
                <span class="dash"></span>
                <h2 class="heading">make an appointment now</h2>
            </div>
            <div class="row">
                <div class="col-lg-8">
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
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="header">
                        <h3>about us</h3>
                    </div>
                    <div class="dash"></div>
                    <div class="content">
                        <ul>
                            <li><a class="title" href="./about.php">general info</a></li>
                            <li><a class="title" href="./doctorprofile.php">doctor profile</a></li>
                            <li><a class="title" href="./appointments.php">appointments</a></li>
                            <li><a class="title" href="./testimonials.php">testimonials</a></li>
                            <li><a class="title" href="./contact-us.php">contact us</a></li>
                            <li><a class="title" href="./working-hours.php">working hours</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="header">
                        <h3>services</h3>
                    </div>
                    <div class="dash"></div>
                    <div class="content">
                        <ul>
                            <li><a class="title" href="#">dental services</a></li>
                            <li><a class="title" href="#">surgery and dental implants</a></li>
                            <li><a class="title" href="#">dental crowns</a></li>
                            <li><a class="title" href="#">teeth whitening</a></li>
                            <li><a class="title" href="#">cosmetic dentistry</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="header">
                        <h3>news</h3>
                    </div>
                    <div class="dash"></div>
                    <div class="content">
                        <ul>
                            <li><a class="title" href="#">Some sugar-free drinks can also damage teeth, experts warn</a>
                            </li>
                            <li><a class="title" href="#">Benefits of Dental Implant</a></li>
                            <li><a class="title" href="#">Gum Diseases</a></li>
                            <li><a class="title" href="#">Pulpitis – Risk of tooth loss</a></li>
                            <li><a class="title" href="#">Meet the new dental guidelines.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="header">
                        <h3>follow us</h3>
                    </div>
                    <div class="dash"></div>
                    <div class="content">
                        <p>Organically grow the holistic world view of innovation empowerment</p>
                        <div class="footer--contact">
                            <a class="mt-2" href="#">
                                <span class="iconify" data-icon="gg:facebook"></span>
                            </a>
                            <a class="mt-2" href="#">
                                <span class="iconify" data-icon="ei:sc-twitter"></span>
                            </a>
                            <a class="mt-2" href="#">
                                <span class="iconify" data-icon="akar-icons:instagram-fill"></span>
                            </a>
                            <a class="mt-2" href="#">
                                <span class="iconify" data-icon="iconoir:youtube"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="content">
                Copyright &#169; <script>document.write(new Date().getFullYear())</script> DentalCare <br>Made by <a href="https://www.facebook.com/khoa.nguyenvan.99"
                    target="_blank">Khoa Nguyen</a></div>
        </div>
    </footer>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>

    <script src="../js/main.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/validator.js"></script>

</body>
</html>