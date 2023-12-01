<?php
session_start();
include '../../includes/header.php'; ?>

<!-- NAVBAR -->
<?php include_once '../../includes/nav.php' ?>


<!--start page content-->
<div class="page-content">
    <!--start product details-->
    <section class="section-padding">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-body p-4">
                            <h4 class="mb-0 fw-bold text-center">User Login</h4>
                            <hr>

                            <?php
                            // ALERTS
                            if (isset($_SESSION['signup_success'])) {
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                ' . $_SESSION['signup_success'] . '
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                                unset($_SESSION['signup_success']);
                            }

                            if (isset($_SESSION['login_fail'])) {
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                ' . $_SESSION['login_fail'] . '
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                                unset($_SESSION['login_fail']);
                            }
                            ?>

                            <form action="../controller/login_handle.php" method="POST" id="user_login_form">
                                <div class="row g-4">

                                    <!-- USER EMAIL -->
                                    <div class="col-12">
                                        <label for="user_email" class="form-label">User Email</label>
                                        <input type="email" name="user_email" class="form-control rounded-0"
                                            id="useremail">
                                        <span class="error-msg" id="emailError"></span>
                                    </div>

                                    <!-- USER PASSWORD -->
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control rounded-0"
                                                id="password">
                                            <span class="input-group-btn">
                                                <button class="btn  toggle-password" type="button">
                                                    <i class="fa fa-eye" id="togglePasswordIcon"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <span class="error-msg" id="passwordError"></span>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-dark rounded-0 btn-ecomm w-100">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- To Show Password -->
<script>
    $(document).ready(function () {
        $('.toggle-password').on('click', function () {
            var passwordField = $('#password');
            var passwordIcon = $('#togglePasswordIcon');

            if (passwordField.attr('type') === 'password') {
                passwordField.attr('type', 'text');
                passwordIcon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                passwordIcon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });
</script>

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
<!--End Back To Top Button-->


<!-- JavaScript files -->
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/plugins/slick/slick.min.js"></script>
<script src="../../assets/js/main.js"></script>
<script src="../../assets/js/loader.js"></script>
<script src="../../assets/js/validate-forms.js"></script>


</body>

</html>