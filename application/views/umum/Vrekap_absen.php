<?php
date_default_timezone_set("Asia/Jakarta");
?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header  with-border">
          <h3 class="box-title">Rekap Absen</h3>
          <div class="box-tools pull-right">
            <?php echo $this->session->flashdata('message'); ?>
            <?php echo $this->session->flashdata('gagal'); ?>
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"> <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"><i class="fa fa-times"></i></button>
          </div>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pilih" style="margin-top: 20px; margin-left: 20px; margin-bottom: 0px;">
          <i class="fa fa-print"></i> Cetak
        </button>

        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th rowspan="2" style="text-align:center">No</th>
                <th rowspan="2" style="text-align:center">Nama</th>
                <th rowspan="2" style="text-align:center">NIP</th>
                <th colspan="3" style="text-align:center">Absen</th>
                <th colspan="3" style="text-align:center">Keterangan</th>
              <tr>
                <th>Pagi</th>
                <th>Siang</th>
                <th>Sore</th>
                <th>Sakit</th>
                <th>Izin</th>
                <th>Alfa</th>
                <th>DL</th>
                <th>Cuti</th>
              </tr>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $q = $ap;
              $w = $asi;
              $e = $aso;
              $s = $sakit;
              $i = $izin;
              $af = $alfa;
              $dl = $dinas_luar;
              $ct = $cuti;
              foreach ($rekap as $pg) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $pg->nama ?></td>
                  <td><?php echo $pg->nip_p ?></td>
                  <?php for ($a = 0; $a < count($q); $a++) {
                    if ($pg->nip_p == $q[$a]->nip_p) { ?>
                      <td><?php echo $q[$a]->ap ?></td>
                    <?php
                  } else { ?>
                    <?php }
                }
                for ($b = 0; $b < count($w); $b++) {
                  if ($pg->nip_p == $w[$b]->nip_p) { ?>
                      <td><?php echo $w[$b]->asi ?></td>
                    <?php
                  } else { ?>
                    <?php }
                }
                for ($c = 0; $c < count($e); $c++) {
                  if ($pg->nip_p == $e[$c]->nip_p) { ?>
                      <td><?php echo $e[$c]->aso ?></td>
                    <?php
                  } else { ?>
                    <?php }
                } ?>
                  <td>
                    <?php
                    for ($d = 0; $d < count($s); $d++) {
                      if ($pg->nip_p == $s[$d]->nip_p) { ?>
                        <?php echo $s[$d]->sakit ?>
                      <?php
                    } else { ?>
                      <?php }
                  }
                  echo "</td>";
                  echo "<td>";
                  for ($f = 0; $f < count($i); $f++) {
                    if ($pg->nip_p == $i[$f]->nip_p) { ?>
                        <?php echo $i[$f]->izin ?>
                      <?php
                    } else { ?>
                      <?php }
                  }
                  echo "</td>";
                  echo "<td>";
                  for ($g = 0; $g < count($af); $g++) {
                    if ($pg->nip_p == $af[$g]->nip_p) { ?>
                        <?php echo $af[$g]->alfa ?>
                      <?php
                    } else { ?>
                      <?php }
                  }
                  echo "</td>";
                  echo "<td>";
                  for ($h = 0; $h < count($dl); $h++) {
                    if ($pg->nip_p == $dl[$h]->nip_p) { ?>
                        <?php echo $dl[$h]->dinas_luar ?>
                      <?php
                    } else { ?>
                      <?php }
                  }
                  echo "</td>";
                  echo "<td>";
                  for ($j = 0; $j < count($ct); $j++) {
                    if ($pg->nip_p == $ct[$j]->nip_p) { ?>
                        <?php echo $ct[$j]->cuti ?>
                      <?php
                    } else { ?>
                        <?php echo "-" ?>
                      <?php }
                  } ?>
                  </td>
                <?php } ?>
              </tr>
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


<div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel-2">Pilih Bulan Dan Tahun</h5>
      </div>
      <div class="modal-body">

        <form action="<?php echo base_url('umum/crekapabsen/cetak_rekap') ?>" method="post" style="display:inline;" class="modal-body" target="_blank" enctype="multipart/form-data">
          Bulan
          <select class="form-control" name="bulan" style="width:35%; display:inline; margin-right: 10px;">
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
          </select>
          Tahun
          <select class="form-control" name="tahun" style="width:20%; display:inline;">
            <?php
            $mulai = date('Y') - 5;
            for ($i = $mulai; $i < $mulai + 6; $i++) {
              $sel = $i == date('Y') ? ' selected="selected"' : '';
              echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
            }
            ?>
          </select>

          <div class="modal-footer" style="margin-top: 20px;">
            <button type="submit" target="_blank" class="btn btn-primary" style="margin-top: -5px; margin-left: 10px;"><i class="fa fa-print"></i> Cetak</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>