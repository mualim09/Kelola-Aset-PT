<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">inventory</i>
            </div>
            <h4 class="card-title">Laporan Extracomptable</h4>
          </div>
          <div class="card-body ">
          </div>
          <div class="card-footer ">
            <a href="<?php echo site_url('admin/barang/export')?>" class="btn btn-fill btn-rose"><i class="material-icons">arrow_downward</i> Donwload
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">local_shipping</i>
            </div>
            <h4 class="card-title">Laporan Kendaraan</h4>
          </div>
          <div class="card-body ">
          </div>
          <div class="card-footer ">
            <a href="<?php echo site_url('admin/kendaraan/export')?>" class="btn btn-fill btn-warning"><i
              class="material-icons">arrow_downward</i> Donwload
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">home</i>
            </div>
            <h4 class="card-title">Laporan Properti</h4>
          </div>
          <div class="card-body ">
          </div>
          <div class="card-footer ">
            <a href="<?php echo site_url('admin/properti/export')?>" class="btn btn-fill btn-success"><i
              class="material-icons">arrow_downward</i> Donwload
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">inventory</i>
            </div>
            <h4 class="card-title">Laporan Extracomptable</h4>
          </div>
          <div class="card-body ">
            <form method="#" action="#">
              <div class="form-group">
                <label for="rayon">Rayon</label>
                <select class="custom-select" name="rayon" required>
                  <option selected value="">Pilih Rayon</option>
                  <?php foreach ($rayon as $row): ?>
                    <option value="<?php echo $row->id_rayon ?>">
                      <?php echo $row->nama_rayon; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </form>
          </div>
          <div class="card-footer ">
            <a href="<?php echo site_url('admin/barang/export')?>" class="btn btn-fill btn-rose"><i class="material-icons">arrow_downward</i>Donwload</a>
            <a href="#" target="_blank" class="btn btn-primary"><i class="material-icons">zoom_out_map</i> Preview</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">local_shipping</i>
            </div>
            <h4 class="card-title">Laporan Kendaraan</h4>
          </div>
          <div class="card-body ">
            <form method="#" action="#">
              <div class="form-group">
                <label for="rayon">Rayon</label>
                <select class="custom-select" name="rayon" required>
                  <option selected value="">Pilih Rayon</option>
                  <?php foreach ($rayon as $row): ?>
                    <option value="<?php echo $row->id_rayon ?>">
                      <?php echo $row->nama_rayon; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </form>
          </div>
          <div class="card-footer ">
            <a href="<?php echo site_url('admin/kendaraan/export')?>" class="btn btn-fill btn-rose"><i class="material-icons">arrow_downward</i>Donwload</a>
            <a href="#" target="_blank" class="btn btn-primary"><i class="material-icons">zoom_out_map</i> Preview</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">home</i>
            </div>
            <h4 class="card-title">Laporan Properti</h4>
          </div>
          <div class="card-body ">
            <form method="#" action="#">
              <div class="form-group">
                <label for="rayon">Rayon</label>
                <select class="custom-select" name="rayon" required>
                  <option selected value="">Pilih Rayon</option>
                  <?php foreach ($rayon as $row): ?>
                    <option value="<?php echo $row->id_rayon ?>">
                      <?php echo $row->nama_rayon; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </form>
          </div>
          <div class="card-footer ">
            <a href="<?php echo site_url('admin/properti/export')?>" class="btn btn-fill btn-success"><i class="material-icons">arrow_downward</i>Donwload</a>
            <a href="#" target="_blank" class="btn btn-primary"><i class="material-icons">zoom_out_map</i> Preview</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card ">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="material-icons">person</i>
            </div>
            <h4 class="card-title">Laporan Pengguna</h4>
          </div>
          <div class="card-body ">
            <form method="#" action="#">
              <div class="form-group">
                <label for="rayon">Pengguna</label>
                <!-- <select class="custom-select" name="rayon" required>
                <option selected value="">Pilih Rayon</option>
                <?php foreach ($rayon as $row): ?>
                <option value="<?php echo $row->id_rayon ?>">
                <?php echo $row->nama_rayon; ?>
              </option>
            <?php endforeach; ?> -->
            <h5>laporan tentang daftar admin / pengguna.</h5>
          </select>
        </div>
      </form>
    </div>
    <div class="card-footer ">
      <a href="<?php echo site_url('admin/pengguna/export')?>" class="btn btn-fill btn-info"><i class="material-icons">arrow_downward</i>Donwload</a>
      <a href="#" target="_blank" class="btn btn-primary"><i class="material-icons">zoom_out_map</i> Preview</a>
    </div>
  </div>
</div>
</div>
</div>
</div>
