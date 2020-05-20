<!--================Banner Area =================-->
<section class="banner_area" style="background: #000; background-size: cover">
    <div class="container">
        <div class="banner_inner_text">
            <h4>Blog Detail</h4>
            <ul>
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="active"><a href="#"><?php echo $berita->judul; ?></a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Blog Details Area =================-->
<section class="blog_details_area p_100">
    <div class="container">
        <div class="row blog_details_inner">
            <div class="col-md-8">
                <div class="blog_details_img">
                    <img src="<?php echo $berita->thumb; ?>" alt="<?php echo $berita->judul; ?>">
                     <?php
                        $day = date('D', strtotime($berita->date));
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
                          '01' => 'Januari',
                          '02' => 'Februari',
                          '03' => 'Maret',
                          '04' => 'April',
                          '05' => 'Mei',
                          '06' => 'Juni',
                          '07' => 'Juli',
                          '08' => 'Agustus',
                          '09' => 'September',
                          '10' => 'Oktober',
                          '11' => 'November',
                          '12' => 'Desember'
                        );

                        $tgl = explode("-", $berita->date);
                        $bln = $tgl[1];

                        $tanggal = $dayList[$day].', '.$tgl[2].' '.$bulan[$bln].' '.$tgl[0];

                        // echo $tanggal;
                    ?>
                    <div class="b_date">
                        <h3><?php echo $tgl[2]; ?></h3>
                        <h5><?php echo $bulan[$bln].', '.$tgl[0]; ?></h5>
                    </div>
                </div>
                <div class="blog_d_text" style="padding-left: 0">
                    <h6>Posted by <a href="#"><?php echo $berita->penulis; ?></a><span><i class="fa fa-eye" aria-hidden="true"></i><?php echo $berita->hits; ?></span></h6>
                    <a href="#"><h3 style="padding: 30px 0px 2px 0px;"><?php echo $berita->judul; ?></h3></a>
                </div>

                <div class="image_text">
                    <p><?php echo $berita->isi; ?></p>
                </div>
<!--                 <div class="like_post">
                    <h3>You may also like</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="like_post_item">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/build/img/blog/like-post-1.jpg" alt=""></a>
                                <h5>But I must explain to you how all this mistaken idea</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="like_post_item">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/build/img/blog/like-post-1.jpg" alt=""></a>
                                <h5>But I must explain to you how all this mistaken idea</h5>
                            </div>
                        </div>
                    </div>
                </div>
    -->         </div>
            <div class="col-md-4">
                <div class="sidebar_area">
                    <aside class="right_widget r_post_widget">
                        <div class="r_w_title">
                            <h3>Berita Populer</h3>
                        </div>
                        <div class="r_post_inner">
                        <?php
                          foreach($berita2 as $row) {
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
                              '01' => 'Januari',
                              '02' => 'Februari',
                              '03' => 'Maret',
                              '04' => 'April',
                              '05' => 'Mei',
                              '06' => 'Juni',
                              '07' => 'Juli',
                              '08' => 'Agustus',
                              '09' => 'September',
                              '10' => 'Oktober',
                              '11' => 'November',
                              '12' => 'Desember'
                            );

                            $tgl = explode("-", $row->date);
                            $bln = $tgl[1];

                            $tanggal = $tgl[2].' '.$bulan[$bln].' '.$tgl[0];

                        ?>
                            <div class="r_post_item">
                                <img src="<?php echo $row->thumb; ?>" alt="<?php echo $row->judul; ?>">
                                <a href="<?php echo site_url('berita/id/'.$row->id.'/'.$judul.'.html'); ?>"><p><?php echo $row->judul; ?></p></a>
                            </div>
                        <?php
                          }
                        ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Blog Details Area =================-->
