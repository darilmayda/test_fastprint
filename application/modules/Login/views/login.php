<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASTPRINT-PROJECT</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/css/custom-css.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
</head>
<style>
.right-side{
        background: linear-gradient(45deg, #75b6bf, #75b6bf);
}
</style>
<body>
    <div class="wrapper">
        <div class="container-fluid body-wrapper">
            <div class="row">
                <div class="col-md-6 left-side">
                    <div class="text-center position-relative d-flex" style="height: 100%;">
                        <div class="m-auto">
                            <div class="m-auto px-4">
                                <img src="<?php echo base_url('assets/images/logo/login_fastprint.png'); ?>" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right-side">
                    <div class="form-wrapper mx-auto">
                        <div class="text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="">LOGIN</h2>
                                
                            </div>
                        </div>
                        <div class="alert alert-dismissible fade show" role="alert" id="alertDismissible" style="display: none;">
                            <p class="mb-0" id="alertMessage" style="font-size: 13px; margin: 0;text-align: left !important;"></p>
                            <button type="button" class="close" onclick="closeAlert()" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                        	<input type="hidden" name="" value="">
                            <div class="form-group">
                                <label for="">Username</label>
                                <div class="input-group">
                                    <input type="text" class="form-control border-right-0" id="username" name="username" placeholder="Username">
                                    <div class="input-group-append">
                                        <span class="input-group-text border-left-0">
                                            <i class="mdi mdi-account-outline"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-right-0" id="password" name="password" placeholder="********">
                                    <div class="input-group-append">
                                        <span class="input-group-text border-left-0">
                                            <i class="mdi mdi-lock-outline"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-control p-0">
                                 <a class="btn bg-darkblue text-white w-100" href="Admin">Sign In</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo base_url('assets/js/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</html>