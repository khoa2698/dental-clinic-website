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
                        <li><a class="title" href="#">Pulpitis - Risk of tooth loss</a></li>
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
            Copyright &#169; <script>
                document.write(new Date().getFullYear())
            </script> DentalCare <br>Made by <a href="https://www.facebook.com/khoa.nguyenvan.99" target="_blank">Khoa Nguyen</a></div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script src="<?php echo $_DOMAIN_Client; ?>js/main.js"></script>
<script src="<?php echo $_DOMAIN_Client; ?>js/jquery.js"></script>
</body>

</html>