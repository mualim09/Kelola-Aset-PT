<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">local_shipping</i>
            </div>
            <h4 class="card-title">Daftar Kendaraan</h4>
          </div>
          <div class="card-body">
            <div class="material-datatables">
              <table id="datatables" class="table table-striped table-no-bordered table-hover"
              cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr class="text-warning">
                  <th>Plat</th>
                  <th>Nama</th>
                  <th>Jenis</th>
                  <th>Rayon</th>
                  <th>Status</th>
                  <th>Masa Berlaku</th>
                  <th class="disabled-sorting text-center">Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Plat</th>
                  <th>Nama</th>
                  <th>Jenis</th>
                  <th>Rayon</th>
                  <th>Status</th>
                  <th>Masa Berlaku</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach ($kendaraan as $key => $value): ?>
                  <tr>
                    <td><?php echo $value->nomor_polisi ?></td>
                    <td onclick="openModal(<?php echo $value->id_kendaraan?>)"><?php echo substr($value->nama_kendaraan,0 , 30); ?></td>
                    <td><?php echo $value->nama_jenis_kendaraan; ?></td>
                    <td class="text-warning"><?php echo $value->nama_rayon; ?></td>
                    <td><?php echo $value->status; ?></td>
                    <td><?php echo date_format(date_create($value->tanggal_berlaku), "d/m/Y"); ?></td>
                    <td class="text-center">
                      <a href="#" onclick="openModal(<?php echo $value->id_kendaraan?>)" rel="tooltip" title="Lihat"
                        class="btn btn-sm btn-success">
                        <i class="material-icons">zoom_out_map</i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title" id="exampleModalLabel">Hapus</h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <input type="hidden" id="id_kendaraan" value="">
        <p>Apakah Anda yakin untuk menghapus kendaraan ini..?</p>
      </div>
    </div>
    <div class="modal-footer">
      <button id="deleteButton" onclick="deleteBarang()" type="submit" class="btn btn-danger">Hapus</button>
      <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Kendaraan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <div class="modal-body" id="modal-content">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function openModal(id) {
  $.ajax({
    url: "<?php echo base_url('kendaraan/get/'); ?>" + id,
    method: 'post',
    data: null
  }).done(function(data) {
    $('#modal-content').html(data);
    $('#exampleModalCenter').modal('show');
  });
}

function deleteModal(id) {
  $('#id_kendaraan').val(id);
}

function deleteBarang() {
  var id = $('#id_kendaraan').val();
  $.ajax({
    url: "<?php echo base_url('kendaraan/delete/'); ?>" + id,
    method: 'post',
    data: null
  }).done(function(data) {
    location.reload();
  });
}
</script>
