<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cek Ongkir</title>
        <!-- css -->
        <?php $this->load->view('include/base_css'); ?>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    </head>
    <body class="js">
        <div id="preloader"></div>
        <section class="about-us">
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
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section><br><br><br><br>
            <!--start about bottom area-->
            <section class="about-us-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4">
                            <div class="single-about-us-bottom">
                                <h4>Cek Ongkir</h4>
                                <!-- <form action="<?php echo base_url() ?>tiket/cekjadwal?>" method="get"> -->
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <span class="input-group-text">Berat</span>
                                        </div>
                                        <input type="number" placeholder="Jumlah Kg" value="1" min="1" class="form-control" id="berat" name="berat">
                                        
                                    </div>
                                    <div class="form-group">
                                    </div>
                                    <p>Lokasi Asal :</p>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                            <option value=""> Pilih Provinsi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="sel2" disabled>
                                            <option value=""> Pilih Kota</option>
                                        </select>
                                    </div>
                                    <p>Lokasi Tujuan :</p>
                                    <div class="form-group">
                                        <select class="form-control" id="sel11">
                                            <option value=""> Pilih Provinsi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="sel22" disabled>
                                            <option value=""> Pilih Kota</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="kurir" disabled>
                                            <option value=""> Pilih Kurir</option>
                                            <option value="jne">JNE</option>
                                            <option value="tiki">TIKI</option>
                                            <option value="pos">POS Indonesia</option>
                                        </select>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12 col-lg-8">
                            <div class="single-about-us-bottom">
                                <h4>Hasil</h4>
                                <h2>
                                <div id="hasil"></div></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- footer -->
            <?php $this->load->view('include/base_footer'); ?>
            <!-- js -->
            <?php $this->load->view('include/base_js'); ?>
            <script type="text/javascript">
            function getLokasi() {
            var $op = $("#sel1"), $op1 = $("#sel11");
            $.getJSON("<?php echo base_url('produk/provinsi') ?>", function(data){
            $.each(data, function(i,field){
            $op.append('<option value="'+field.province_id+'">'+field.province+'</option>');
            $op1.append('<option value="'+field.province_id+'">'+field.province+'</option>');
            });
            });
            }
            getLokasi();
            $("#sel11").on("change", function(e){
            e.preventDefault();
            var option = $('option:selected', this).val();
            $('#sel22 option:gt(0)').remove();
            $('#kurir').val('');
            if(option==='')
            {
            alert('null');
            $("#sel22").prop("disabled", true);
            $("#kurir").prop("disabled", true);
            }
            else
            {
            $("#sel22").prop("disabled", false);
            getKota1(option);
            }
            });
            $("#sel1").on("change", function(e){
            e.preventDefault();
            var option = $('option:selected', this).val();
            $('#sel2 option:gt(0)').remove();
            $('#kurir').val('');
            if(option==='')
            {
            alert('null');
            $("#sel2").prop("disabled", true);
            $("#kurir").prop("disabled", true);
            }
            else
            {
            $("#sel2").prop("disabled", false);
            getKota(option);
            }
            });
            $("#sel22").on("change", function(e){
            e.preventDefault();
            var option = $('option:selected', this).val();
            $('#kurir').val('');
            if(option==='')
            {
            alert('null');
            $("#kurir").prop("disabled", true);
            }
            else
            {
            $("#kurir").prop("disabled", false);
            }
            });
            $("#kurir").on("change", function(e){
            e.preventDefault();
            var option = $('option:selected', this).val();
            var origin = $("#sel2").val();
            var des = $("#sel22").val();
            var qty = $("#berat").val();
            if(qty==='0' || qty==='')
            {
            alert('null');
            }
            else if(option==='')
            {
            alert('null');
            }
            else
            {
            getOrigin(origin,des,qty,option);
            }
            });
            function getOrigin(origin,des,qty,cour) {
            var $op = $("#hasil");
            var i, j, x = "";
            $.getJSON("<?php echo base_url('produk/tarif') ?>/"+origin+"/"+des+"/"+qty+"/"+cour, function(data){
            $.each(data, function(i,field){
            for(i in field.costs)
            {
            x += "<p class='mb-0'>Tipe : <b>" + field.costs[i].service + "</b>("+field.costs[i].description+")</p>";
            for (j in field.costs[i].cost) {
            x += "Rp " + field.costs[i].cost[j].value +"<br>Estimasi : "+field.costs[i].cost[j].etd+"Hari<br>"+field.costs[i].cost[j].note;
            }
            }
            $op.html(x);
            });
            });
            }
            function getKota1(idpro) {
            var $op = $("#sel22");
            $.getJSON("<?php echo base_url('produk/kota') ?>/"+idpro, function(data){
            $.each(data, function(i,field){
            $op.append('<option value="'+field.city_id+'">'+field.type+' '+field.city_name+'</option>');
            });
            });
            }
            function getKota(idpro) {
            var $op = $("#sel2");
            $.getJSON("<?php echo base_url('produk/kota') ?>/"+idpro, function(data){
            $.each(data, function(i,field){
            $op.append('<option value="'+field.city_id+'">'+field.type+' '+field.city_name+'</option>');
            });
            });
            }
            </script>
        </body>
    </html>