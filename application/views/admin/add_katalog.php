<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Settings Profile Websites</h4>    
            <p class="card-description">
                JewePe Wedding Organizer
            </p>
            <form action="<?= base_url('admin/Katalog/addData')?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="exampleInputName1">Nama Paket</label>
                    <input type="text" class="form-control" id="examplaInputName1" name="package_name" placeholder="Paket Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Deskripsi</label>
                    <textarea class="form-control" name="description" id="editor"></textarea>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="exampleInputName1">Gambar Header</label>
                    <input type="file" class="form-control" id="exampleInputName1" value="" name="image" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Harga (Rp) </label>
                    <input type="text" class="form-control" id="exampleInputName1" name="price" placeholder="Harga" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleStatusPublish">Status Publish</label>
                    <select name="status_publish" id="exampleStatusPublish" class="form-control">
                      <option value="Y">Publish</option>
                      <option value="N">Draft</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 text-right">
                  <a href="<?= base_url("admin/Katalog"); ?>" class="btn btn-secondary mr-2">Back</a>
                  <button type="submit" class="btn btn-primary mr-2">Add</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
