<!--================Banner Area =================-->
<section class="banner_area" style="background: #000; background-size: cover">
    <div class="container">
        <div class="banner_inner_text">
            <h4>BLOG</h4>
            <ul>
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="active"><a href="#">Blog</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Latest News Area =================-->
<section class="latest_news_area">
    <div class="container">
        <!-- <div class="main_c_b_title">
            <h2>Berita <br class="title_br" />Terkini</h2>
            <h6>Construction World</h6>
        </div> -->
        <div class="row latest_news_inner">
            <?php
              foreach ($berita as $row) {
                $replace = "/[^a-zA-Z0-9]/";
                $judul = preg_replace($replace, '-', strtolower($row->judul));
                $day = date('D', strtotime($row->date));
                            $dayList = array(
                                'Sun' => 'Minggu',
                                'Mon' => 'Senin',
                                'Tue' => 'Selasa',
                                'Wed' => 'Rabu',
                                'Thu' => 'Kamis',
                                'Fri' => 'Jumat',
                                'Sat' => 'Sabtu'
                            );

                            $bulan = array(
                                '01' => 'Jan',
                                '02' => 'Feb',
                                '03' => 'Mar',
                                '04' => 'Apr',
                                '05' => 'Mei',
                                '06' => 'Jun',
                                '07' => 'Jul',
                                '08' => 'Agu',
                                '09' => 'Sep',
                                '10' => 'Okt',
                                '11' => 'Nov',
                                '12' => 'Des'
                            );

                            $tgl = explode("-", $row->date);
                            $bln = $tgl[1];

                            $tanggal = $tgl[2].' '.$bulan[$bln].' '.$tgl[0];

            ?>
            <div class="col-md-4 col-sm-6">
                <div class="latest_news_item" style="margin-bottom: 27px">
                    <div class="news_image">
                        <img src="<?php echo $row->thumb; ?>" alt="" style="width: 100%; height: 200px" alt="">
                        <div class="l_date">
                            <h5><?php echo $tgl[2]; ?></h5>
                            <h6><?php echo $bulan[$bln]; ?></h6>
                        </div>
                    </div>
                    <div class="news_content">
                        <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>"><h4><?php echo $row->judul; ?></h4></a>
                        <h6>Posted By <a href="#"><?php echo $row->penulis; ?></a></h6>
                        <p><?php echo substr($row->deskripsi, 0, 130); ?>...</p>
                        <!-- <div class="pull-left">
                            <a href="#">2 Comments</a>
                        </div> -->
                        <div class="pull-right">
                            <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>">Selengkapnya <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
              }
            ?>
        </div>
        <?php echo $halaman; ?>
    </div>
</section>
<!--================End Latest News Area =================-->
