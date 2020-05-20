<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h4>TENTANG KAMI</h4>
            <div style="color: #FFF">
              Jujur, Amanah, Bertanggung Jawab adalah Prioritas Kami :)
            </div>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Who We Are Area =================-->
<section class="who_we_are_area">
    <div class="container">
        <div class="row who_we_inner">
            <div class="col-md-6">
                <div class="who_we_left_content">
                    <div class="main_w_title">
                        <h2><?php echo $tentang->judul; ?></h2>
                    </div>
                    <p>
                      <?php echo $tentang->isi; ?>
                    </p>
               <!-- <a class="get_bg_btn" href="#">TENTANG KAMI</a>
                    <div class="border_bar"></div> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="who_we_image">
                    <img src="<?php echo $tentang->foto; ?>" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Who We Are Area =================-->

<!--================Banner Area =================-->
<section class="banner_area" style="background: url('<?php echo base_url(); ?>assets/build/img/bismillah.jpg') scroll center center;background-size: 100%;">
    <div class="container">
        <div class="banner_inner_text">
          <div class="row">
            <?php
              foreach ($unggulan as $row) {
            ?>
            <div class="col-md-4">
              <div>
                <i class="<?php echo $row->icon; ?> fa-4x" aria-hidden="true" style="color: #fff"></i>
              </div>
              <div style="color: #FFF;font-size: 23px;font-weight: 900;padding: 20px;">
                <?php echo $row->judul; ?>
              </div>
              <div style="color: #fff;margin-bottom: 12px;">
                <?php echo $row->deskripsi; ?>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Our Project Area =================-->
<section class="our_project_area">
    <div class="container">
      <div style="font-size: 35px;text-align: center;font-weight: 700;padding: 20px;">
        VISI dan MISI
      </div>
      <p style="text-align: center;margin-bottom: 23px">
        Kami selalu ingin berkembang menjadi yang terbaik dan melayani Anda dengan pelayanan yang selalu konsisten
      </p>
      <div class="row">
          <div class="col-md-6">
            <table class="table table-bordered">
              <tr style="text-align: center;font-size: 25px;font-weight: 900;background-color: #ffff5a;">
                <td>
                  VISI
                </td>
              </tr>
              <tr>
                <td style="padding: 25px;">
                  <?php echo $visi->isi; ?>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-6">
            <table class="table table-bordered">
              <tr style="text-align: center;font-size: 25px;font-weight: 900;background-color: #ffff5a;">
                <td>
                  MISI
                </td>
              </tr>
              <tr>
                <td style="padding: 25px;">
                  <?php
                    foreach($misi as $row) {
                  ?>
                    <?php echo $row->deskripsi; ?><hr>
                  <?php
                    }
                  ?>
                </td>
              </tr>
            </table>
          </div>
      </div>
    </div>
</section>
<!--================End Our Project Area =================-->

<!--================Work Area =================-->
<section class="work_area">
    <div class="container">
        <div class="work_content">
            <div class="main_c_title">
                <h2>Bekerja Sama <br class="title_br" />Dengan Kami</h2>
                <h6>Kami Siap Membantu Menciptakan Impian Anda</h6>
            </div>
            <p><strong>Shomad Build : Jasa Renovasi, Arsitek, dan Kontraktor Bangunan | PT Shomad Group | Call : (0371) 1234567 | Jujur dan Amanah.</strong></p>
            <a class="get_bg_btn" target="_blank" href="https://api.whatsapp.com/send?phone=6287863577415&text=Halo%20KhalifahPropertindo,%20saya%20tertarik%20menggunakan%20jasa%20Anda.%20Bisa%20bantu%20saya?">Whatsapp</a>
            <a class="get_bg_btn" href="#">Order disini</a>
            <a class="get_bg_btn" target="_blank" href="tel:0371625058">Telepon</a>
        </div>
    </div>
</section>
<!--================End Work Area =================-->
