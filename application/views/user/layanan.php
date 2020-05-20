<!--================Banner Area =================-->
<section class="banner_area" style="sbackground: #000; background-size: cover">
    <div class="container">
        <div class="banner_inner_text">
            <h4>LAYANAN KAMI</h4>
            <ul>
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="active"><a href="#">layanan Kami</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->
<style>
table tr td {
  padding: 7px 0;
}
table tr td > a {
  color: #000
}
</style>
<!--================Our Project Area =================-->
<section class="our_project_area">
    <div class="container">
      <div style="font-size: 30px;text-align: center;font-weight: 700;padding: 20px;margin-bottom: 12px;">
        Khalifah Propertindo Pilihan Tepat Untuk Bangunan Anda
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <?php
              foreach($program as $row) {
            ?>
            <div class="col-md-3">
              <div style="text-align: center;font-size: 21px;font-weight: 700;margin-bottom: 15px">
                <?php echo $row->judul; ?>
              </div>
              <div>
                <table width="100%">
                  <?php
                    $jasa = $this->db->where('id_program_detail', $row->id)->get('jasa')->result();
                    foreach($jasa as $list) {
                  ?>
                  <tr>
                    <td width="10%">
                      <i class="<?php echo $list->icon; ?>" aria-hidden="true"></i>
                    </td>
                    <td>
                      <a href="<?php echo site_url('layanan/detail/'.$list->id); ?>"><?php echo $list->nama; ?></a>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                </table><br>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>
</section>
<!--================End Our Project Area =================-->
