<div class="content-wrapper">
    <div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Manajemen Pesanan</h3>
            <h6 class="font-weight-normal mb-0">JewePe Wedding Organizer</h6>
        </div>
        </div>
    </div>
    </div>


  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Data Katalog</h4>    
            <!-- <p class="card-description">
                Edit Data Katalog
            </p> -->
            <form action="<?= base_url('admin/Katalog/updateData')?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $katalog->catalogue_id ?>">
              <div class="row">
                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="exampleInputName1">Nama Paket</label>
                    <input type="text" class="form-control" id="examplaInputName1" name="package_name" value="<?= $katalog->package_name ?>" placeholder="Paket Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Deskripsi</label>
                    <textarea class="form-control" name="description" id="editor"><?= $katalog->description ?></textarea>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="exampleInputName1">Gambar Header</label>
                    <input type="file" class="form-control" id="exampleInputName1" value="" name="image" <?= empty($katalog->image) ? 'required' : '' ?> >
                  </div>
                  <div class="form-group">
                    <img src="<?= base_url('assets/files/katalog/').$katalog->image; ?>" class="img-thumbnail" style="max-width:120px" alt="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Harga (Rp) </label>
                    <input type="text" class="form-control" id="exampleInputName1" name="price" value=<?= $katalog->price ?> placeholder="Harga" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleStatusPublish">Status Publish</label>
                    <select name="status_publish" id="exampleStatusPublish" class="form-control">
                      <option value="Y"<?=$katalog->status_publish == 'Y' ? 'selected' : '' ?> >Publish</option>
                      <option value="N"<?=$katalog->status_publish == 'N' ? 'selected' : '' ?> >Draft</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 text-right">
                  <a href="<?= base_url("admin/Katalog"); ?>" class="btn btn-secondary mr-2">Back</a>
                  <button type="submit" class="btn btn-primary mr-2">Edit</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
