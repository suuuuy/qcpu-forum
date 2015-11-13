<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QCPU - Admin</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/foundation.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/constants.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/foundation-icons/foundation-icons.css');?>">

    <script>
        var MyNameSpace = {
            config: {
                base_url: "<?php echo base_url(); ?>"
            }
        }
    </script>

    <script type="text/javascript" src="<?= base_url('assets/js/jquery-1.11.3.min.js');?>"></script>
    <script src="<?=base_url('assets/js/vendor/modernizr.js');?>"></script>

    <style>
        body {
            background: #F0F0F3;
        }
        .login-box {
            background: #fff;
            border: 1px solid #ddd;
            margin: 100px 0;
            padding: 40px 20px 0 20px;
        }
    </style>
</head>
<body>

    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">

            <?php
                if(isset($navigator)){
                    echo $navigator;
                }
            ?>

            <section class="main-section">
                <?=$dashboard?>
            </section>

            <a class="exit-off-canvas"></a>

        </div>
    </div>

    <script src="<?=base_url('assets/js/vendor/jquery.js');?>"></script>
    <script src="<?=base_url('assets/js/foundation.min.js');?>"></script>
    <script src="<?=base_url('assets/js/foundation/foundation.offcanvas.js');?>"></script>
    <script src="<?=base_url('assets/js/jquery.form.js');?>"></script>
    <script src="<?=base_url('assets/js/jquery-ui.min.js');?>"></script>
    <script src="<?=base_url('assets/js/cf77f9273ab747e14102a80d1d5b6d51.js');?>"></script>
    <script src="<?=base_url('assets/js/704f63fb0c058ffdcd5c49e556ed9739.js');?>"></script>
    <script src="<?=base_url('assets/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?=base_url('assets/js/dataTables.foundation.js');?>"></script>
    <script>
        $(document).foundation();
        $(".off-canvas-submenu").hide();
        $(".off-canvas-submenu-call").click(function() {
            var icon = $(this).parent().next(".off-canvas-submenu").is(':visible') ? '+' : '-';
            $(this).parent().next(".off-canvas-submenu").slideToggle('fast');
            $(this).find("span").text(icon);
        });

    </script>
</body>
</html>