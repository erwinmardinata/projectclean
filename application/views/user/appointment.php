<link href="<?php echo base_url(); ?>assets/sweet_alert/dist/sweetalert.css" type="text/css" rel="stylesheet" media="all">
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/alertifyjs/alertify.min.js"></script>

<!--================Banner Area =================-->
<section class="banner_area" style="sbackground: #000; background-size: cover; margin-top: 150px">
    <div class="container">
        <div class="banner_inner_text">
            <h4>APPOINTMENT</h4>
            <ul>
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="active"><a href="#">Appointment</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->
<!--================Our Project Area =================-->
<section class="our_project_area">
    <div class="container">
      <div style="font-size: 30px;text-align: center;font-weight: 700;padding: 20px;">
        Jadwalkan Survey Sekarang Juga
      </div>
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="row">
              <form style="margin: -14px;margin: 20px 0" method="post" action="<?php echo site_url('appointment/insert'); ?>">
              <div class="col-md-12">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <input type="text" name="nama" class="form-control" style="border-radius: 0;border: 2px solid #ddd;padding: 21px 12px;font-size: 17px;" placeholder="Nama*">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <input type="text" name="telp" class="form-control" style="border-radius: 0;border: 2px solid #ddd;padding: 21px 12px;font-size: 17px;" placeholder="Telepon">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <input type="text" name="email" class="form-control" style="border-radius: 0;border: 2px solid #ddd;padding: 21px 12px;font-size: 17px;" placeholder="Email*">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <textarea class="form-control" name="pesan" style="border-radius: 0;border: 2px solid #ddd;padding: 12px 12px;font-size: 17px;" placeholder="Pesan anda*"></textarea>
                    </div>
                  </div>
              </div>
              <!-- <div class="col-md-4">
                <div style="font-size: 18px;font-weight: 700;">
                  Pilih Kategori Proyek
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Supermarket
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Rumah Sakit
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Restoran
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Perumahan
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Perkantoran
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Minimarket
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Perukoan
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Mall/Perbelanjaan
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Hotel
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Gudang/Pabrik
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                      <label class="form-check-label">
                        Apartemen
                      </label>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="col-md-12">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <select class="form-control" id="layanan" style="border-radius: 0;border: 2px solid #ddd;height: 47px;font-size: 17px;">
                      <option value="">Pilih Layanan</option>
                      <?php
                        foreach($program as $row):
                      ?>
                      <option value="<?php echo $row->id; ?>"><?php echo $row->judul; ?></option>
                      <?php
                        endforeach;
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <select name="id_jasa" id="jasa" class="form-control" style="border-radius: 0;border: 2px solid #ddd;height: 47px;font-size: 17px;">
                      <option value="">Pilih Jasa yang Anda Butuhkan</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="date" name="tanggal" class="form-control" style="border-radius: 0;border: 2px solid #ddd;height: 47px;font-size: 17px;" placeholder="Email*">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <button type="submit" class="get_bg_btn">Kirim</button>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
      </div>
    </div>
</section>
<!--================End Our Project Area =================-->
<?php
  echo $this->session->flashdata('notif');
?>
<script>
  $(function () {
    $("#layanan").change(function() {
		var id = $("#layanan").val();
		// return alert(id);

		$.ajax({

			url : '<?php echo site_url("Appointment/get_jasa"); ?>',
            data : 'id=' + id,
            type : 'get',
            success : function(result) {
                $("#jasa").html(result);

            }

		});

	});
  });
</script>
