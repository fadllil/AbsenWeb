<?php
date_default_timezone_set("Asia/Jakarta");
?>
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          
          <div class="box">
            <div class="box-header  with-border">
              <h3 class="box-title">Rekap Absen</h3>
              <div class="box-tools pull-right">
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"><i class="fa fa-times"></i></button>
              </div>

            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th rowspan="2" style="text-align:center">No</th>
                  <th rowspan="2" style="text-align:center">Nama</th>
                  <th rowspan="2" style="text-align:center">NIP</th>
                  <th colspan="3" style="text-align:center">Absen</th>
                  <tr>
                  <th>Pagi</th>
                  <th>Siang</th>
                  <th>Sore</th>
                  </tr>
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($rekap as $a) { 
                      $ap = $a->absen_pagi;
                      $jlhap = count($ap);
                      $asi = $a->absen_siang;
                      $jlhasi = count($asi);
                      $aso = $a->absen_sore;
                      $jlhaso = count($aso);
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $a->nama ?></td>
                      <td><?php echo $a->nip ?></td>
                      <td><?php echo $jlhap ?></td>
                      <td><?php echo $jlhasi ?></td>
                      <td><?php echo $jlhaso ?></td>
                    </tr>
                    <?php }?>
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