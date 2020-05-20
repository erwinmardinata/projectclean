<!--================Banner Area =================-->
<section class="banner_area" style="background: #000; background-size: cover">
    <div class="container">
        <div class="banner_inner_text">
            <h4>Jasa <?php echo $data->nama; ?></h4>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->
<!--================Work Area =================-->
<section class="work_area">
    <div class="container">
        <div class="work_content">
            <div class="main_c_title">
                <!-- <h2>Bekerja Sama <br class="title_br" />Dengan Kami</h2> -->
                <h6 style="font-size: 25px">Kami Siap Membantu Menciptakan Impian Anda</h6>
            </div>
            <p><strong>Shomad Build : Jasa Renovasi, Arsitek, dan Kontraktor Bangunan | PT Shomad Group | Call : (0371) 1234567 | Jujur dan Amanah.</strong></p>
            <a class="get_bg_btn" target="_blank" href="https://api.whatsapp.com/send?phone=6287863577415&text=Halo%20KhalifahPropertindo,%20saya%20tertarik%20menggunakan%20jasa%20Anda.%20Bisa%20bantu%20saya?">Whatsapp</a>
            <a class="get_bg_btn" href="#">Order disini</a>
            <a class="get_bg_btn" target="_blank" href="tel:0371625058">Telepon</a>
        </div>
    </div>
</section>
<!--================End Work Area =================-->
<!--================Get Quote Area =================-->
<section class="get_quote_area" style="padding:50px 0;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table width="100%">
            <tr>
              <td width="50%">
                <div style="color: #ffff54;font-size: 26px;font-weight: 700;">TAHUKAH ANDA ?</div>
              </td>
              <td style="line-height: 25px;font-size: 13px;color: #FFF">
                <?php echo $data->tahukah_anda; ?>
                <!-- <ul style="line-height: 25px;font-size: 13px;color: #FFF">
                  <li><i class="fa fa-arrows" aria-hidden="true"></i>
                    Penggunaan jasa renovasi rumah profesional bisa menghemat waktu & biaya.
                  </li>
                  <li><i class="fa fa-arrows" aria-hidden="true"></i>
                    Kesalahan dalam renovasi rumah berakibat buruk untuk keselamatan keluarga.
                  </li>
                  <li><i class="fa fa-arrows" aria-hidden="true"></i>
                    Mempelajari struktur bangunan lama cukup penting sebelum renovasi.
                  </li>
                  <li><i class="fa fa-arrows" aria-hidden="true"></i>
                    Pemilihan material berkualitas akan memperpanjang umur bangunan.
                  </li>
                  <li><i class="fa fa-arrows" aria-hidden="true"></i>
                    Biaya renovasi mungkin lebih mahal dibanding bangun baru.
                  </li>
                </ul> -->
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
</section>
<!--================End Get Quote Area =================-->
<!--================Our Project Area =================-->
<section class="our_project_area">
    <div class="container">
      <div style="font-size: 21px;text-align: center;font-weight: 700;padding: 47px;">
        Proses <span style="color:#ffff54">Jasa <?php echo $data->nama; ?></span> Shomad Build
      </div>
        <div class="row">
            <div class="col-md-6">
              <div style="font-size: 33px;font-weight: 700;margin-bottom: 19px;">Jasa <?php echo $data->nama; ?></div>
              <p style="margin-bottom: 19px;"><?php echo $data->deskripsi; ?></p>
              <br>
              <br>
              <div style="font-size: 33px;font-weight: 700;margin-bottom: 19px;">Alur Kerjasama Dengan Kami</div>
              <p style="margin-bottom: 19px;">
                Terima kasih Anda telah menjadikan Khalifah Propertindo sebagai salah satu bahan pertimbangan untuk membangun hunian impian Anda. Adapun proses yang Anda harus lalui jika menggunakan jasa kami adalah seperti tercantum pada tabel disamping.
              </p>
              <p style="margin-bottom: 19px;">
                Senang sekali jika kami bisa menjadi bagian penting dalam membangun hunian impian Anda. Oleh karena itu, kami akan bekerja semaksimal mungkin guna memenuhi kualitas terbaik yang sesuai dengan keinginan Anda.
              </p>
            </div>
            <div class="col-md-6">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  1. Survey
                              </a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                              <p>
                                Tahap pertama yang akan Anda lalui saat ingin membangun rumah mewah adalah tahap survey. Kami akan mengirimkan arsitek yang telah tersertifikasi dari Ikatan Arsitek Indonesia (IAI) ke rumah Anda agar Anda dapat berkonsultasi sepuasnya mengenai rumah mewah yang ingin Anda bangun. Jelaskan secara detail keinginan Anda agar arsitek kami dapat menampilkan desian keinginan Anda dalam bentuk gambar 3D sehingga Anda dapat membayangkan langsung seperti apa rumah mewah Anda nantinya.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  2. Konsultasi dan Gambar Arsitek
                              </a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                              <p>
                                Saat kami kirimkan tim survey ke rumah Anda, Anda dapat langsung berkonsultasi kepada arsitek bersertifikat kami. Jika Anda sudah memiliki gambar rumah mewah sendiri, Anda tinggal koordinasikan kepada arsitek kami. Namun, jika Anda belum memiliki desain rumah mewah, maka Anda bisa langsung minta arsitek kami untuk mendesainkan rumah mewah Anda.
                              </p><br>
                              <p>
                                Jika Anda menginginkan arsitek kami mendesainkan, maka Anda harus memberikan tanda jadi DP sebesar Rp. 10.000.000. Tanda jadi ini akan kami konversi menjadi DP termin 1 jika Anda menggunakan jasa kami. Namun jika Anda tidak menggunakan jasa kami, maka kami akan kenakan charge gambar arsitek yang akan kami ambil dari Rp. 10.000.000 yang Anda berikan.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  3. RAB
                              </a>
                          </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                              <p>
                                Pastikan desain gambar rumah mewah Anda sudah tahap final, baru kami akan membuatkan Rencana Anggaran Biaya (RAB). RAB akan selesai dalam waktu paling lama 3 hari setelah gambar final selesai. RAB akan berisi sebagai berikut :
                              </p>
                              <p>
                                1. Spesifikasi material<br>
                                2. Jenis pekerjaan<br>
                                3. Durasi pekerjaan<br>
                                4. Catatan kecil mengenai proyek<br>
                                5. Budget pekerjaan<br>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFour">
                          <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  4. Surat Kontrak Kerja
                              </a>
                          </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body">
                              <p>
                                Jika Anda menyetujui RAB yang kami buatkan, maka Surat Kontrak Kerja akan kami buatkan. Di dalam Surat Kontrak Kerja ini termuat :
                              </p>
                              <p>
                                - biaya pekerjaan<br>
                                - spesifikasi material<br>
                                - durasi proyek<br>
                                - jadwal pembayaran<br>
                                - hak dan kewajiban kontraktor/klien<br>
                              </p><br>
                              <p>
                                Setelah Surat Kontrak Kerja, Anda tidak bisa melakukan tambah kurang pekerjaan. Tambah kurang pekerjaan akan kami buatkan surat kontrak sendiri yang disebut dengan Addendum.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFive">
                          <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                  5. Pembayaran Bertahap
                              </a>
                          </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body">
                              <p>
                                Pembayaran dilakukan secara bertahap dengan diawali DP 30%, dan pembayaran selanjutnya sesuai dengan progress report.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingSix">
                          <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
                                  6. Pekerjaan
                              </a>
                          </h4>
                      </div>
                      <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                          <div class="panel-body">
                              <p>
                                Pekerjaan dilakukan oleh tenaga ahli kami yang profesional dan langsung diawasi oleh arsitek bersertifikat kami.
                              </p><br>
                              <p>
                                Penambahan atau pengurangan pekerjaan mohon koordinasikan kepada Project Manager kami agar dapat ditindaklanjuti segera. Hindari meminta tukang atau mandor untuk melakukan tambah kurang pekerjaan karena dapat mengganggu pekerjaan kami. Meminta tukang atau mandor untuk melakukan tambah kurang pekerjaan akan menghapuskan tanggung jawab perusahaan terhadap pekerjaan.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingSevem">
                          <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSevem" aria-expanded="false" aria-controls="collapseFour">
                                  7. Addendum
                              </a>
                          </h4>
                      </div>
                      <div id="collapseSevem" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSevem">
                          <div class="panel-body">
                              <p>
                                Pekerjaan tambah kurang akan tercantum kedalam surat “Addendum” dan terpisah dari surat kontrak kerja sebelumnya.
                              </p><br>
                              <p>
                                Jika “Addendum” menambah biaya, maka akan tagihkan terpisah dalam invoice yang berbeda. Namun jika “Addendum” mengurangi biaya, maka kelebihan dana Anda akan kami kembalikan.
                              </p>
                          </div>
                      </div>
                  </div>

              </div>
            </div>
        </div>
    </div>
</section>
<!--================End Our Project Area =================-->
<!--================Our Service Area =================-->
<section class="our_service_area">
    <div class="left_service">
        <div class="left_service_inner">
            <div class="service_item">
                <div class="service_item_inner">
                    <div class="service_icon">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-1.png" alt="">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-hover-1.png" alt="">
                    </div>
                    <a href="#"><h4 style="font-size: 17px">Tenaga Profesional</h4></a>
                    <p style="height: 130px;">Para tukang dan tim management kami merupakan tim pilihan yang ahli dibidangnya sehingga kualitas pekerjaan akan terus terjaga dengan baik</p>
                    <!-- <a class="view_btn" href="#">Read Details</a> -->
                </div>
            </div>
            <div class="service_item">
                <div class="service_item_inner">
                    <div class="service_icon">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-2.png" alt="">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-hover-2.png" alt="">
                    </div>
                    <a href="#"><h4 style="font-size: 17px">Tepat Waktu</h4></a>
                    <p style="height: 130px;">Penggunaan teknologi seperti aplikasi manajemen proyek menjadikan proyek teratur dengan baik sehingga pekerjaan selalu tepat pada waktunya</p>
                    <!-- <a class="view_btn" href="#">Read Details</a> -->
                </div>
            </div>
            <div class="service_item">
                <div class="service_item_inner">
                    <div class="service_icon">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-3.png" alt="">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-hover-3.png" alt="">
                    </div>
                    <a href="#"><h4 style="font-size: 17px">Harga Terjangkau</h4></a>
                    <p style="height: 130px;">Harga kami bisa menyesuaikan dengan budget Anda. Komunikasikan budget Anda, maka pekerjaan akan menyesuaikan budget</p>
                    <!-- <a class="view_btn" href="#">Read Details</a> -->
                </div>
            </div>
            <div class="service_item">
                <div class="service_item_inner">
                    <div class="service_icon">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-4.png" alt="">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-hover-4.png" alt="">
                    </div>
                    <a href="#"><h4 style="font-size: 17px">Material Terbaik</h4></a>
                    <p style="height: 130px;">Bahan material memegang peranan penting pada kualitas, dan kami hanya menggunakan bahan material yang berkualitas baik</p>
                    <!-- <a class="view_btn" href="#">Read Details</a> -->
                </div>
            </div>
            <div class="service_item">
                <div class="service_item_inner">
                    <div class="service_icon">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-5.png" alt="">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-hover-5.png" alt="">
                    </div>
                    <a href="#"><h4 style="font-size: 17px">Jaminan Pekerjaan</h4></a>
                    <p style="height: 130px;">Jaminan pemeliharaan atas pekerjaan kami berikan selama 3 bulan sebagai bentuk penjagaan kualitas pekerjaan BintoroBuild</p>
                    <!-- <a class="view_btn" href="#">Read Details</a> -->
                </div>
            </div>
            <div class="service_item">
                <div class="service_item_inner">
                    <div class="service_icon">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-6.png" alt="">
                        <img src="<?php echo base_url(); ?>assets/build/img/icon/s-icon-hover-6.png" alt="">
                    </div>
                    <a href="#"><h4 style="font-size: 17px">Gratis Anti Rayap</h4></a>
                    <p style="height: 130px;">Untuk pekerjaan tertentu, kami memberikan fasilitas FREE anti rayap guna menjaga bahan bangunan kayu Anda</p>
                    <!-- <a class="view_btn" href="#">Read Details</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="right_service">
        <div class="right_service_text">
            <div class="main_b_title">
              <h2><span style="color: blue">Khalifah Propertindo</span> Pilihan Tepat Untuk <span style="color: #ffff54">Jasa Renovasi, Kontraktor Bangunan, dan Arsitek</span> Anda</h2>
                <!-- <h6>Layanan kami lainnya secara rinci adalah sebagai berikut :</h6> -->
            </div>

            <div class="border_bar"></div>
        </div>
    </div>
</section>
<!--================End Our Service Area =================-->
<!--================Get Quote Area =================-->
<section class="get_quote_area project_contact">
    <div class="container">
        <div class="pull-left" style="text-align: center">
            <h3 style="margin-bottom: 20px">Harga Jasa Renovasi</h3>
            <h5 style="margin-bottom: 20px">Untuk menentukan harga jasa renovasi, kami harus melakukan survey terlebih dahulu untuk mengetahui secara pasti apa saja yang ingin Anda renovasi. Segera ajukan jadwal survey melalui klik tombol disamping.</h5>
            <a class="get_btn_black" href="<?php echo site_url('appointment'); ?>">Minta Survey</a>
        </div>
        <!-- <div class="pull-right"> -->
        <!-- </div> -->
    </div>
</section>
<!--================End Get Quote Area =================-->
