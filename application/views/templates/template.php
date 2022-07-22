<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASTPRINT-PROJECT</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" media="screen">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/css/custom-css.css'); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
</head>
<style>
    .navbar-toggler:focus{
        outline: unset;
    }
    .navbar-light .navbar-toggler{
        border: unset;
        color: white;
    }
    #menu_sidepanel li a,#header_sidepanel div a{
        color: #333333
    }
    #menu_sidepanel .sidemenu.active{
        background: #e71a21;
    }
    #menu_sidepanel .sidemenu.active a{
        color: #ffffff;
    }
    #account_collapse.dropdown-toggle:after{
        display: none;
    }
    .content-navbar{
        height: 63px;
        width: calc(100% - 250px);
        padding: 8px 16px;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.125);
    }
</style>
<body>

    <div class="container-hidden-scroller">
        <nav class="navbar navbar-light bg-light fixed-top p-0" style="background-color: #75b6bf  !important; display: flex; flex-direction: row;">
            <div class="header-sidebar d-flex align-items-center justify-content-center border-bottom" style="    background-color: #6daab3;">
                <h5 class="mb-0" style="text-align: center;">FASTPRINT PRODUCT</h5>
            </div>
            <div class="d-flex align-items-center content-navbar">
                <h6 id="title-nav" class="mb-0 text-white"></h6>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <!-- sidebar -->

             <!-- BAGIAN UNTUK LIST MENU -->
            <div class="sidebar">
                <ul class="nav custom-vertical mx-3">
                    <li class="nav-item active">
                        <a href="" class="nav-link"><i class="mdi mdi-view-dashboard mdi-18px mr-2"></i>Administrator</a>
                    </li>
                </ul>
            </div>

            <!-- BAGIAN UNTUK LIST MENU end -->
            <!-- sidebar -->
            <!-- content -->
            <div class="wrapper-content">
                <!-- main content -->
                <div class="main-content-wrapper p-4">
                    <!-- content -->
                    {content}
                    <!-- content -->
                    
                </div>
                <!-- main content -->
            </div>
            <!-- content -->
        </div>
    </div>
    
</body>
<script type="text/javascript">

    $('#administrator').click(function() {
            $('.container').toggle()
    });

    $(".collapse .nav-link").click(function(){
        $(this).removeClass('collapsed');
        $(this).attr('aria-expanded', 'true');
        $(this).addClass('show');
        $(this).addClass('active');
        $(this).parent().parent().find('.collapsed').addClass('active');
    });
</script>
</html>
