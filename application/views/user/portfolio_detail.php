<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h4>Grand Khalifah</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Portfolio</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Project Single Area =================-->
<section class="project_single_area">
    <div class="container">
        <div class="project_single_inner">
            <div class="project_single_slider">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                      <?php
                        foreach($data as $row) {
                      ?>
                        <li><img src="<?php echo $row->foto; ?>" title="<?php echo $row->judul; ?>" style="width: 100%"></li>
                      <?php
                        }
                      ?>
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                      <?php
                        foreach($data as $row) {
                      ?>
                        <li><img src="<?php echo $row->foto; ?>" title="<?php echo $row->judul; ?>" style="width: 100%;height: 100px"></li>
                      <?php
                        }
                      ?>
                    </ul>
                    <div class="custom-navigation">
                        <a href="#" class="flex-prev"><i class="fa fa-angle-left"></i></a>
                        <a href="#" class="flex-next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="project_summery">
                        <h4 class="project_title">Projek Detail</h4>
                        <!-- <p></p> -->
                        <ul style="margin-top: 23px">
                            <li><a href="#">Nama Client: <span><?php echo $data2->nama_client; ?></span> </a></li>
                            <li><a href="#">Kategori: <span><?php echo $data2->kategori_portofolio; ?></span></a></li>
                            <li><a href="#">Tanggal Selesai: <span><?php echo $data2->tanggal_selesai; ?></span> </a></li>
                            <li><a href="#">Nilai: <span>Rp. <?php echo number_format($data2->nilai, 0, ".", "."); ?></span></a></li>
                            <li><a href="#">Luas Area: <span><?php echo $data2->luas; ?></span></a></li>
                            <li><a href="#">Lokasi: <span><?php echo $data2->lokasi; ?></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project_discription">
                        <h4 class="project_title">Projek Deskripsi</h4>
                        <p>
                          <?php echo $data2->deskripsi; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Project Single Area =================-->

<!--================Get Quote Area =================-->
<section class="get_quote_area project_contact">
    <div class="container">
        <div class="pull-left">
            <h3>Ingin menggunakan jasa kami? </h3>
            <h4>Kami berikan jasa terbaik dengan harga terjangkau. Segera hubungi kami </h4>
        </div>
        <div class="pull-right">
            <a class="get_btn_black" href="#">Whatsapp Kami</a>
        </div>
    </div>
</section>
<!--================End Get Quote Area =================-->
