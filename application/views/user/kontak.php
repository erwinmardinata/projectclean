<!--================Banner Area =================-->
<section class="banner_area" style="background: #000; background-size: cover">
    <div class="container">
        <div class="banner_inner_text">
            <h4>KONTAK KAMI</h4>
            <ul>
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="active"><a href="#">Kontak Kami</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Map Area =================-->
<div id="" class="mapBox row m0">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.099064115648!2d117.41749881433441!3d-8.48974848825218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcb932d512e392f%3A0xf5a531c9f6b1a383!2sKantor%20Bupati%20Sumbawa!5e0!3m2!1sid!2sid!4v1572964609767!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<!--================End Map Area =================-->

<!--================Our Project Area =================-->
<section class="our_project_area">
    <div class="container">
        <div class="row">
            <div class="col-md-7" style="ppadding: 0">
              <h3 style="font-size: 34px;font-weight: 900;margin-bottom: 57px;">Kirimkan kami Pesan</h3>
              <form style="margin: -14px;margin-bottom: 12px">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" style="border-radius: 0;border: 2px solid #ddd;padding: 21px 12px;font-size: 17px;" placeholder="Nama">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" style="border-radius: 0;border: 2px solid #ddd;padding: 21px 12px;font-size: 17px;" placeholder="Email">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" style="border-radius: 0;border: 2px solid #ddd;padding: 21px 12px;font-size: 17px;" placeholder="Subjek">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" style="border-radius: 0;border: 2px solid #ddd;padding: 21px 12px;font-size: 17px;" placeholder="Telepon">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <textarea class="form-control" style="border-radius: 0;border: 2px solid #ddd;padding: 12px 12px;font-size: 17px;" placeholder="Pesan anda"></textarea>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <button type="submit" class="get_bg_btn">Kirim</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <div style="background: #000;color: #FFF;padding: 44px;">
                    <h3 style="font-weight: 900;">
                      Hubungi segera untuk kegiatan anda!
                    </h3>
                    <br>
                    <table style="width: 100%">
                      <tr>
                        <td width="20%">
                          <i class="fa fa-phone fa-2x" aria-hidden="true" style="background: #ffff54;padding: 7px;color: #000;width: 45px;text-align: center;"></i>
                        </td>
                        <td style="font-size: 20px;font-weight: 900;">
                          <?php echo $data->telp; ?>
                        </td>
                      </tr>
                      <tr>
                        <td width="20%">
                          &nbsp;
                        </td>
                      </tr>
                      <tr>
                        <td width="20%">
                          <i class="fa fa-whatsapp fa-2x" aria-hidden="true" style="background: #ffff54;padding: 7px;color: #000;width: 45px;text-align: center;"></i>
                        </td>
                        <td style="font-size: 20px;font-weight: 900;">
                          <?php echo $data->telp; ?>
                        </td>
                      </tr>
                      <tr>
                        <td width="20%">
                          &nbsp;
                        </td>
                      </tr>
                      <tr>
                        <td width="20%">
                          <i class="fa fa-envelope-o fa-2x" aria-hidden="true" style="background: #ffff54;padding: 7px;color: #000;width: 45px;text-align: center;"></i>
                        </td>
                        <td style="font-size: 15px;font-weight: 900;">
                          <?php echo $data->email; ?>
                        </td>
                      </tr>
                      <tr>
                        <td width="20%">
                          &nbsp;
                        </td>
                      </tr>
                      <tr>
                        <td width="20%">
                          <i class="fa fa-home fa-2x" aria-hidden="true" style="background: #ffff54;padding: 7px;color: #000;width: 45px;text-align: center;"></i>
                        </td>
                        <td style="font-size: 15px;font-weight: 900;">
                          <?php echo $data->alamat; ?>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<!--================End Our Project Area =================-->
