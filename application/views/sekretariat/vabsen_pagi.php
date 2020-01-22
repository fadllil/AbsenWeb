<?php
date_default_timezone_set("Asia/Jakarta");
?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <!-- /.box -->
      <div class="box">
        <div class="box-header  with-border">
          <h3 class="box-title">Data Absen</h3>
          <div class="box-tools pull-right">
            <?php echo $this->session->flashdata('message'); ?>
            <?php echo $this->session->flashdata('gagal'); ?>

            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"> <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"><i class="fa fa-times"></i></button>
          </div>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin: 15px"> <i class="fa fa-plus"></i> Tambah Absen Pagi</button>

        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $d = date('Y-m-d');
              foreach ($pagi as $u) {
                if ($d == $u->tgl_absen) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $u->nip ?></td>
                    <td><?php echo $u->nama; ?></td>
                    <td><?php echo $format = date('d-m-Y', strtotime($u->tgl_absen)); ?></td>
                    <td><?php if ($u->absen_pagi == '1') {
                          echo "Hadir";
                        } elseif ($u->absen_pagi == '2') {
                          echo "Sakit";
                        } elseif ($u->absen_pagi == '3') {
                          echo "Izin";
                        } elseif ($u->absen_pagi == '4') {
                          echo "Alpha";
                        } elseif ($u->absen_pagi == '5') {
                          echo "Dinas Luar";
                        } elseif ($u->absen_pagi == '6') {
                          echo "Cuti";
                        }
                        ?></td>

                    <td style="text-align: center;">
                      <a href="<?php echo base_url('sekretariat/cabsen_pagi/hapus/' . $u->id_absen); ?>" onclick="return confirm('Anda yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
                    </td>
                  </tr>
                <?php }
            } ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title ">Tambah Absen</h4>
      </div>

      <form class="form-horizontal" action="<?php echo base_url('sekretariat/cabsen_pagi/tambah'); ?>" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="no_hp" class="col-sm-2 control-label">Nama Pegawai</label>
            <div class="col-sm-8">
              <?php $komang = "var prdName = new Array();"; ?>
              <select class="form-control select2" name="nip" id="absen_pagi" style="width: 100%;" required="">
                <option value="" disabled>---Pilih---</option>
                <?php
                foreach ($pegawai as $p) { ?>
                  <?php $v = TRUE;
                  $d = date('Y-m-d');
                  for ($i = 0; $i < count($pagi); $i++) {
                    if ($d == $pagi[$i]->tgl_absen) {
                      if ($p->nip == $pagi[$i]->nip) {
                        $v = FALSE;
                        break;
                      }
                    } else {
                      $v = TRUE;
                    }
                  } ?>
                  <?php if ($v) { ?>
                    <option value="<?php echo $p->nip; ?>"><?php echo $p->nama; ?></option>
                  <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Status</label>
            <div class="col-sm-8">
              <select class="form-control select2" name="absen" style="width: 100%;" required="">
                <option value="">---Pilih---</option>
                <option value="1">Hadir</option>
                <option value="2">Sakit</option>
                <option value="3">Izin</option>
                <option value="4">Alpha</option>
                <option value="5">Dinas Luar</option>
                <option value="6">Cuti</option>
              </select>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" id="send" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>