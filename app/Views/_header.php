<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navadarsan Members Dashboard</title>
    <?php $site_url = base_url(); ?>
    <script>
        // var site_url = '<?php echo $site_url; ?>';
    </script>
    <!-- BOOTSTRAP STYLES-->
    <!-- <link href="<?php echo $site_url; ?>assets/css/bootstrap.css"
        rel="stylesheet" /> -->
    <!-- FONTAWESOME STYLES-->
    <!-- <link href="<?php echo $site_url; ?>assets/css/font-awesome.css"
        rel="stylesheet" /> -->
    <!-- CUSTOM STYLES-->
    <!-- <link href="<?php echo $site_url; ?>assets/css/custom.css"
        rel="stylesheet" />
    <link href="<?php echo $site_url; ?>assets/css/AdminLTE.css" -->
    <!-- rel="stylesheet" /> -->
    <!-- GOOGLE FONTS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .navbar {
            width: auto;
            height: 70px;
            border: 2px solid #102448;
            box-shadow: 10px 10px 5px #ccc;
            -moz-box-shadow: 10px 10px 5px #ccc;
            -webkit-box-shadow: 10px 10px 5px #ccc;
            -khtml-box-shadow: 10px 10px 5px #ccc;
        }

        .footer {

            width: auto;
            position: static;
            height: 5px;
        }

        /* .st {
            background: yellow;
        } */

        /* .upload {
            padding-top: 50px;
            border: 2px solid #224860ff;
            box-shadow: 10px 10px 5px #ccc;
            -moz-box-shadow: 10px 10px 5px #ccc;
            -webkit-box-shadow: 10px 10px 5px #ccc;
            -khtml-box-shadow: 10px 10px 5px #ccc;
        }

        .notice {
            padding-top: 50px;
            border: 2px solid #224860ff;
            box-shadow: 10px 10px 5px #ccc;
            -moz-box-shadow: 10px 10px 5px #ccc;
            -webkit-box-shadow: 10px 10px 5px #ccc;
            -khtml-box-shadow: 10px 10px 5px #ccc;
        } */

        .navbar {
            background-color: #102448;
        }

        .con1 {
            padding-top: 80px;
            padding-bottom: 80px;
            border: 2px solid #224860ff;
            box-shadow: 10px 10px 5px #ccc;
            -moz-box-shadow: 10px 10px 5px #ccc;
            -webkit-box-shadow: 10px 10px 5px #ccc;
            -khtml-box-shadow: 10px 10px 5px #ccc;
        }


        .w3-allerta {
            font-family: "Allerta Stencil", Sans-serif;
            box-shadow: 10px 10px 5px #ccc;
            -moz-box-shadow: 10px 10px 5px #ccc;
            -webkit-box-shadow: 10px 10px 5px #ccc;
            -khtml-box-shadow: 10px 10px 5px #ccc;
        }

        /* .bg {
            background: #dfdccb; */


        /* .search {
            font-family: "Allerta Stencil", Sans-serif;
            box-shadow: 10px 10px 5px #ccc;
            -moz-box-shadow: 10px 10px 5px #ccc;
            -webkit-box-shadow: 10px 10px 5px #ccc;
            -khtml-box-shadow: 10px 10px 5px #ccc;
        } */

        .b1 {
            font-family: "Allerta Stencil", Sans-serif;
            -moz-box-shadow: 10px 10px 5px #ccc;
            -webkit-box-shadow: 10px 10px 5px #ccc;
            box-shadow: 10px 10px 5px #ccc;
            -moz-border-radius: 25px;
        }

        .b2 {
            font-family: "Allerta Stencil", Sans-serif;
        }

        form-group {
            font-family: "Allerta Stencil", Sans-serif;
            width: 100%;
            background-color: auto;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .GFG {
            font-family: "Allerta Stencil", Sans-serif;
            background-color: lightskyblue;
            border: 2px solid black;
            color: white;
            padding: 2px 8px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: auto;
            cursor: pointer;
            text-decoration: none;
        }

        /* .wrapper1{
            padding-top: 20px;
        } */
    </style>
</head>

<body>

    <div id="wrapper" style="background: #ffffff;">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav">
                <div class="navbar-header">

                    <a class="navbar-brand" href="">
                        <img class="img2" style="margin-top:-15px" src="http://192.168.2.101/liveOG/assets/images/logo-nav.png" />
                    </a>
                </div>
            </div>
        </div>
        <div class="content con1">
            <!--div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img style="margin-top:-15px" src="<!?php echo $site_url; ?>assets/images/logo-nav.png" />

                    </a>

                </div>
            </div>
        </div-->
            <!-- /. NAV TOP  -->
            <!--nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-/-li class="active-link">
                        <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </!--li-->
            <!--li class="active-link">
                        a style="color:#42a4f5;" href="<!?php echo $site_url; ?>assets/form.pdf"><i class="fa fa-desktop"><span class="badge" style="color:#89d3fa;">RECOMMENDATION FORM</i></a
        <!/li>
                </ul>
                            </div>

        </nav-->
            <!-- /. NAV SIDE  -->