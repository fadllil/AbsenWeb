
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header  with-border">
              <h3 class="box-title">Surat Masuk Perencanaan</h3>
              <div class="box-tools pull-right">
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"><i class="fa fa-times"></i></button>
              </div>

            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin: 15px"> <i class="fa fa-plus"></i> Tambah </button>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>No Surat</th>
                  <th>Tanggal</th>
                  <th>Alamat</th>
                  <th>Keringkasan</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($perencanaan as $u) { 
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u->no; ?>/<?php if ($u->kode == '1') {
                                  echo "A-1";
                                }elseif ($u->kode == '2') {
                                  echo "A-2";
                                }elseif ($u->kode == '3') {
                                  echo "A-3";
                                }elseif ($u->kode == '4') {
                                  echo "A-4";
                                }elseif ($u->kode == '5') {
                                  echo "A-5";
                                }elseif ($u->kode == '6') {
                                  echo "A-6";
                                }elseif ($u->kode == '7') {
                                  echo "A-7";
                                }
                                else{
                                  echo "A-8";
                                }?>/<?php if ($u->sekolah == 0) {
                                  echo "MTs-DH";
                                } ?>/X/<?php $format = date('Y', strtotime($u->tanggal));echo $format?>
                      </td>
                      <td><?php $format = date('d-m-Y', strtotime($u->tanggal));echo $format?></td>
                      <td><?php echo $u->alamat; ?></td>
                      <td><?php echo $u->keringkasan; ?></td>
                      <td style="text-align: center;">
                        <a href="#lihat<?php echo $u->no;?>" data-toggle="modal" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="lihat"></span></a> | 
                        <a href="#edit<?php echo $u->no;?>" data-toggle="modal" ><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> | 
                        <a href="<?php echo base_url('admin/cmperencanaan/hapus/'.$u->no);?>" onclick="return confirm('Anda yakin?')" ><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
                      </td>
                    </tr>
                    <?php } ?>

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
          <div class="modal-dialog" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title ">Tambah</h4>
              </div>
              
              <form class="form-horizontal" action="<?php echo base_url('admin/cmperencanaan/tambah'); ?>" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">No Surat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="No Surat" name="no" required="">
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Kode Surat</label>
                <div class="col-sm-8">
                <select class="form-control select2" name="kode" style="width: 100%;" required="" >
                            
                            <option>---Pilih---</option>
                            <option value="1">A-1</option>
                            <option value="2">A-2</option>
                            <option value="3">A-3</option> 
                            <option value="4">A-4</option> 
                            <option value="5">A-5</option> 
                            <option value="6">A-6</option>
                            <option value="7">A-7</option> 
                            <option value="8">A-8</option>
                </select>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekolah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Sekolah" name="sekolah" value="MTs-DH" required="" readonly="">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" placeholder="tanggal" name="tanggal" required="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Keringkasan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keringkasan" placeholder="Keringkasan" required="">
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

