
<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
          <h4 class="card-title">Settings Profile Websites</h4>
          
          <p class="card-description">
            JewePe Wedding Organizer
          </p>
          <?= $this->session->flashdata('message'); ?>
          <form class="forms-sample" action="<?= base_url('admin/Settings/updateData'); ?>" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $settings->id; ?>">
          <div class="row">
            <div class="col-lg-12 text-right">
              <a href="<?= base_url('admin/Dashboard') ?>" class="btn btn-primary text-right">Kembali</a>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                  <label for="exampleInputName1">Nama Websites</label>
                  <input type="text" class="form-control" id="exampleInputName1" value="<?= $settings->website_name; ?>" name='website_name' placeholder="Website names" required>
              </div>
            </div>              
            <div class="col-lg-6">
              <div class="form-group">
                  <label for="exampleInputName1">Phone Number 1</label>
                  <input type="text" class="form-control" id="exampleInputName1" value="<?= $settings->phone_number1; ?>" name="phone_number1" placeholder="Phone Number 1" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                  <label for="exampleInputName1">Phone Number 2</label>
                  <input type="text" class="form-control" id="exampleInputName1" value="<?= $settings->phone_number2; ?>" name="phone_number2" placeholder="Phone Number 2" >
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                  <label for="exampleInputName1"> Email 1 </label>
                  <input type="email" class="form-control" id="exampleInputName1" value="<?= $settings->email1; ?>" name="email1" placeholder="Email 1" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                  <label for="exampleInputName1"> Email 2 </label>
                  <input type="email" class="form-control" id="exampleInputName1" value="<?= $settings->email2; ?>" name="email2" placeholder="Email 2">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleAddress1">Address</label>
                <textarea class="form-control" id="exampleAddress1" name="address" rows="4"><?= $settings->address; ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleMaps1">Maps</label>
                <textarea class="form-control" id="exampleMaps1" name="maps" rows="4"><?= $settings->maps; ?></textarea>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                  <label for="exampleInputName1">Logo Website</label>
                  <input type="file" class="form-control" id="exampleInputName1" value="" name="logo" >
              </div>
              <div class="form-group">
                <img src="<?= base_url('assets/files/').$settings->logo; ?>" class="img-thumbnail" style="max-width: 120px" alt="" >
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                  <label for="exampleInputName1">Facebook</label>
                  <input type="text" class="form-control" id="exampleInputName1" value="<?= $settings->facebook_url; ?>" name="facebook_url" placeholder="Facebook" >
              </div>
              <div class="form-group">
                  <label for="exampleInputName1">Instagram</label>
                  <input type="text" class="form-control" id="exampleInputName1" value="<?= $settings->instagram_url; ?>" name="instagram_url" placeholder="Instagram" >
              </div>
              <div class="form-group">
                  <label for="exampleInputName1">Youtube</label>
                  <input type="text" class="form-control" id="exampleInputName1" value="<?= $settings->youtube_url; ?>" name="youtube_url" placeholder="Youtube" >
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleHeaderBussinesHour1">Header Bussiness Hour</label>
                <textarea class="form-control" id="exampleHeaderBussinesHour1" name="header_bussiness_hour" rows="4"><?= $settings->header_bussiness_hour; ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleTimesBussinesHour1">Time Bussiness Hour</label>
                <textarea class="form-control" id="exampleTimesBussinesHour1" name="time_bussiness_hour" rows="4"><?= $settings->time_bussiness_hour; ?></textarea>
              </div>
          
              <div class="col-lg-12 text-right">
                <button type="submit" class="btn btn-warning mr-2">Update</button>

              </div>
            </div>
          
          </form>
      </div>
    </div>
    </div>
  </div>
</div>