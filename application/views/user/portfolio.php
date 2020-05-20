<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h4>PORTFOLIO</h4>
            <ul>
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="active"><a href="#">Portfolio</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Our Project2 Area =================-->
<section class="our_project2_area project_grid_three">
   <div class="container">
       <!-- <div class="main_c_b_title">
            <h2>Portfolio<br class="title_br">Kami</h2>
            <h6>Great & Awesome Works</h6>
        </div> -->
        <!-- <ul class="our_project_filter">
            <li class="active" data-filter="*"><a href="#">All</a></li>
            <li data-filter=".building"><a href="#">Buildings</a></li>
            <li data-filter=".interior"><a href="#">Interior</a></li>
            <li data-filter=".design"><a href="#">Design</a></li>
            <li data-filter=".isolation"><a href="#">Isolation</a></li>
            <li data-filter=".plumbing"><a href="#">Plumbing</a></li>
            <li data-filter=".tiling"><a href="#">Tiling</a></li>
        </ul> -->
        <div class="row our_project_details">

          <?php
            foreach($data as $row) {
          ?>
          <div class="col-md-4 col-sm-6 building isolation interior">
              <div class="project_item">
                  <img src="<?php echo $row->foto; ?>" alt="<?php echo $row->kategori; ?>">
                  <div class="project_hover">
                      <div class="project_hover_inner">
                          <div class="project_hover_content">
                              <a href="<?php echo site_url('portfolio/detail/'.$row->id_kategori_foto); ?>"><h4>Shomad Build</h4></a>
                              <p><?php echo $row->kategori; ?></p>
                              <a class="view_btn" href="<?php echo site_url('portfolio/detail/'.$row->id_kategori_foto); ?>">Lihat Selengkapnya</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <?php
            }
          ?>
        </div>
   </div>
</section>
<!--================End Our Project2 Area =================-->

<!--================Work Area =================-->
<section class="work_area">
    <div class="container">
        <div class="work_content">
            <div class="main_c_title">
                <h2>Bekerja Sama <br class="title_br" />Dengan Kami</h2>
                <h6>Kami Siap Membantu Menciptakan Impian Anda</h6>
            </div>
            <p><strong>Khalifah Propertindo : Jasa Renovasi, Arsitek, dan Kontraktor Bangunan | PT Khalifah Group | Call : (0371) 625058 | Jujur dan Amanah.</strong></p>
            <a class="get_bg_btn" target="_blank" href="https://api.whatsapp.com/send?phone=6285337576979&text=Halo%20KhalifahPropertindo,%20saya%20tertarik%20menggunakan%20jasa%20Anda.%20Bisa%20bantu%20saya?">Whatsapp</a>
            <a class="get_bg_btn" href="#">Order disini</a>
            <a class="get_bg_btn" target="_blank" href="tel:0371625058">Telepon</a>
        </div>
    </div>
</section>
<!--================End Work Area =================-->
