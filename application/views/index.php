<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- <link rel="icon" type="image/x-icon" href="<?php echo base_url().'assets/images/stp.png' ?>"> -->
    <title>Sewa Mobil Dashboard &mdash; Hehe</title>
    

    <!-- General JS Scripts -->
    <script src="<?php echo base_url().'assets/modules/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/modules/popper.js'?>"></script>
    <script src="<?php echo base_url().'assets/modules/tooltip.js'?>"></script>
    <script src="<?php echo base_url().'assets/modules/bootstrap/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/modules/nicescroll/jquery.nicescroll.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/modules/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/stisla.js'?>"></script>
    

    <!-- Jquery Validation -->
    <script type="text/javascript" src="<?php echo base_url().'assets/plugin/jquery-validation-1.19.5/dist/jquery.validate.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugin/jquery-validation-1.19.5/dist/additional-methods.min.js'; ?>"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url().'assets/plugin/jquery-validation-1.19.5/dist/localization/messages_id.js'; ?>"></script> -->
        
    <!-- JS Libraies -->
    <script src="<?php echo base_url().'assets/modules/datatables/datatables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/modules/jquery-ui/jquery-ui.min.js'?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo base_url().'assets/js/page/modules-datatables.js'?>"></script>
    
    <!-- Template JS File -->
    <script src="<?php echo base_url().'assets/js/scripts.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/custom.js'?>"></script>

    <!--Custom Script-->
    <script src="<?php echo base_url().'assets/js/script_main.js'?>"></script>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/fontawesome/css/all.min.css'?>">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/bootstrap-daterangepicker/daterangepicker.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/select2/dist/css/select2.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/jquery-selectric/selectric.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/datatables/datatables.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/jqvmap/dist/jqvmap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/summernote/summernote-bs4.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css'?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/components.css'?>">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->

    <?php if (isset($script)): ?>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/'.$script; ?>"></script>
    <?php endif; ?>

</head>
    <body>
        <?php if (isset($app)): ?>
            <div id="app">
                <div class="main-wrapper main-wrapper-1">
                    <?php $this->load->view($navbar); ?>   
                    <div class="main-sidebar sidebar-style-2" style="overflow: hidden; outline: currentcolor none medium;" tabindex="1">
                        <?php $this->load->view($sidebar); ?>
                    </div>

                    <div class="main-content">
                        <?php $this->load->view($app); ?>
                    </div>
                    
                    <footer class="main-footer">
                        <?php $this->load->view($footer); ?>
                    </footer>

                </div>
            </div>
            <?php ;else: ?>
                <?php $this->load->view($content); ?>
        <?php endif; ?>
    </body>

    

</html>
