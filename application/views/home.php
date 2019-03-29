
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Ongkir</title>
    <!-- css -->
    <?php $this->load->view('include/base_css'); ?>
</head>

<body class="js">
    <!--start header area-->
    <div id="preloader"></div>
    <section class="header_area" id="home">
        <!--   start logo & menu markup    -->
        <div class="logo_menu" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-6">
                        <div class="logo">
                            <a href="#"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="logo" height="30" width="100"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6 col-md-offset-1 col-sm-7 col-lg-offset-1 col-lg-6 pull-right mobMenuCol">
                        <nav class="navbar">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                                <ul class="nav navbar-nav navbar-right menu">
                                    
                                    <li><a href="<?php echo base_url('home') ?>">Home</a></li>
                                    <li><a href="<?php echo base_url('home/cekongkir') ?>">Cek Ongkir</a></li>
                                    <li><a href="<?php echo base_url('home/lacakpaket') ?>">Lacak Paket</a></li>
                                    <li><a href="" data-toggle="modal" data-target="#exampleModal">About</a></li>
                                    <!-- <li class="current-menu-item"><a href="index.html">home <span class="caret"></span></a>
                                       <ul class="dropdownMenu">
                                           <li><a href="index-2.html">Home 2</a></li>
                                           <li><a href="index-3.html">Home 3</a></li>
                                           <li><a href="index-4.html">Home 4</a></li>
                                           <li><a href="index-5.html">Home 5</a></li>
                                           <li><a href="index-6.html">Home 6</a></li>
                                       </ul>
                                        
                                    </li> -->
                                </ul>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- <div class="col-md-3 col-sm-3 col-xs-4 col-lg-3 signup">
                        <ul class="nav navbar-nav">
                            <li><a href="#">login</a></li>
                            <li><a href="#">sign up</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <!--   end of logo menu markup     -->
        <!--  start welcome text marup  -->
        <div class="table">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="welcome_text">
                                <h1>Periksa ongkos kirim dan lacak paket</h1>
                                <h1>dengan cepat Di sini!</h1>
                                <br>
                                <!-- <div class="welcome_p">
                                    <p>Periksa ongkos kirim dan lacak paket dengan cepat di sini!</p>
                                </div>
 -->                                <div class="welcome_form">
                                        <a class="btn btn-warning btn-lg" href="<?php echo base_url('home/cekongkir') ?>">Cek Ongkir</a>&nbsp;
                                        <a class="btn btn-warning btn-lg" href="<?php echo base_url('home/lacakpaket') ?>">Lacak Paket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of welcome text markup-->
    </section>
    <!--end of header area-->

    <!-- footer -->
    <?php $this->load->view('include/base_footer'); ?>

    <!-- js -->
    <?php $this->load->view('include/base_js'); ?>
</body>

</html>