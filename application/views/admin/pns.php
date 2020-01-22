
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header  with-border">
              <h3 class="box-title">DATA pegawai</h3>
              <div class="box-tools pull-right">
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo $this->session->flashdata('gagal'); ?>
                  
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"> <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"><i class="fa fa-times"></i></button>
              </div>

            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin: 15px"> <i class="fa fa-plus"></i> Tambah pegawai</button>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Pangkat</th>
                  <th>Golongan</th>
                  <th>Jabatan</th>
                  <th>UnitKerja</th>
                  <th>Status</th>
                    <th>IMEI HP</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                   <?php 
                    $no = 1;
                    foreach ($pegawai as $u) { 
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $u->nip ?></td>
                      <td><?php echo $u->nama; ?></td>
                      <td><?php if($u->pangkat == 1){
                          echo "Juru Muda";
                            }else if($u->pangkat == 2){
                            echo "Juru Muda Tingkat I";
                            }else if($u->pangkat == 3){
                                echo "Juru";
                            }else if($u->pangkat == 4){
                                echo "Juru Tingkat I";
                            }else if($u->pangkat == 5){
                                echo "Pengatur Muda";
                            }else if($u->pangkat == 6){
                                echo "Pengatur Muda Tingkat I";
                            }else if($u->pangkat == 7){
                                echo "Pengatur";
                            }else if($u->pangkat == 8){
                                  echo "Pengatur Tingkat I";
                            }else if($u->pangkat == 9){
                                  echo "Penata Muda";
                            }else if($u->pangkat == 10){
                                echo "Penata Muda Tingkat I";
                            }else if($u->pangkat == 11){
                               echo "Penata";
                              }else if($u->pangkat == 12){
                              echo "Penata Tingkat I";
                          }else if($u->pangkat == 13){
                             echo "Pembina";
                           }else if($u->pangkat == 14){
                               echo "Pembina Tingkat I";
                         }else if($u->pangkat == 15){
                               echo "Pembina Utama Muda";
                            }else if($u->pangkat == 16){
                                 echo "Pembina Utama Madya";
                         }elseif($u->pangkat == 17){
                            echo "Pembina Utama";
                             }else ;?></td>
                      <td><?php if($u->golongan == 1){
                          echo "I/a";
                              }else if($u->pangkat == 2){
                              echo "I/b";
                              }else if($u->pangkat == 3){
                                  echo "I/c";
                              }else if($u->pangkat == 4){
                                  echo "I/d";
                              }else if($u->pangkat == 5){
                                  echo "II/a";
                              }else if($u->pangkat == 6){
                                  echo "II/b";
                              }else if($u->pangkat == 7){
                                  echo "II/c";
                              }else if($u->pangkat == 8){
                                    echo "II/d";
                              }else if($u->pangkat == 9){
                                    echo "III/a";
                              }else if($u->pangkat == 10){
                                  echo "III/b";
                              }else if($u->pangkat == 11){
                                 echo "III/c";
                                }else if($u->pangkat == 12){
                                echo "III/d";
                            }else if($u->pangkat == 13){
                               echo "IV/a";
                             }else if($u->pangkat == 14){
                                 echo "IV/b";
                           }else if($u->pangkat == 15){
                                 echo "IV/c";
                              }else if($u->pangkat == 16){
                                   echo "IV/d";
                           }elseif($u->pangkat == 17){
                              echo "IV/e";
                               }else ;?></td>
                          
                      <td><?php echo $u->jabatan; ?></td>
                      <td><?php echo $u->unitkerja; ?></td>
                      <td><?php if ($u->status == 1) {
                        echo "PNS";
                      }elseif ($u->status == 2) {
                        echo "THL";
                      }?></td>
                        <td><?= $u->imei ?></td>
                      <td style="text-align: center;">
                        <a href="#edit<?php echo $u->nip;?>" data-toggle="modal" ><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> | 
                        <a href="<?php echo base_url('admin/pns/hapus/'.$u->nip);?>" onclick="return confirm('Anda yakin?')" ><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
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
                <h4 class="modal-title ">Tambah pegawai</h4>
              </div>
              
              <form class="form-horizontal" action="<?php echo base_url('admin/pns/tambah'); ?>" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">NIP</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="NIP" name="nip" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="name">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required="">
                  </div>
                </div>
                <input type="hidden" name="status" value="1">
                <input type="hidden" name="unitkerja" value="Dinas Koperasi UKM Kota Pekanbaru">

                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">Pangkat</label>
                  <div class="col-sm-8">
                  <select class="form-control select2" name="pangkat" style="width: 100%;" required="" >
                            
                            <option>---Pilih---</option>
                            <option value="1">Juru Muda</option>
                            <option value="2">Juru Muda Tignkat I</option>
                            <option value="3">Juru</option>
                            <option value="4">Juru Tingkat I</option>
                            <option value="5">Pengatur Muda</option>
                            <option value="6">Pengatur Muda Tingkat I</option>
                            <option value="7">Pengatur</option>
                            <option value="8">Pengatur Tingkat I</option>
                            <option value="9">Penata Muda</option>
                            <option value="10">Penata Muda Tingkat I</option> 
                            <option value="11">Penata</option>
                            <option value="12">Penata Tingkat I</option>
                            <option value="13">Pembina</option>
                            <option value="14">Pembina Tingkat I</option>
                            <option value="15">Pembina Utama Muda</option>
                            <option value="16">Pembina Utama Madya</option>
                            <option value="17">Pembina Utama</option>
                </select>
                  </div>
                </div>

                

                <div class="form-group">
                      <label for="no_hp" class="col-sm-2 control-label">Jabatan</label>
                      <div class="col-sm-8">
                          <input type="text" id="jabatan" class="form-control" name="jabatan" placeholder="Jabatan" required="">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="no_hp" class="col-sm-2 control-label">IMEI HP</label>
                      <div class="col-sm-8">
                          <input type="text" id="jabatn" class="form-control" name="imei" placeholder="IMEI" required="">
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


        
        <?php foreach ($pegawai as $u) { ?>
        <div class="modal fade" id="edit<?php echo $u->nip?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel2">
          <div class="modal-dialog modal-ig" style="width:68%" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">Edit pegawai</h4>
              </div>
              
              <form class="form-horizontal form-label-left" action="<?php echo base_url('admin/pns/update'); ?>" method="post" >
              <div class="box-body" >

              <div class="form-group">
                  <label class="col-sm-2 control-label" for="name">NIP</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="NIP" name="nip" required="" value="<?php echo $u->nip?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="name">Nama Lengkap</label>
                  <div class="col-sm-8">
                    <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="nama" required="" value="<?php echo $u->nama?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="pangkat">Pangkat</label>
                  <div class="col-sm-8">
                  <select class="form-control select2" name="pangkat" style="width: 100%;" required="" >
                            
                            <option>---Pilih---</option>
                            <option value="1">Juru Muda</option>
                            <option value="2">Juru Muda Tignkat I</option>
                            <option value="3">Juru</option>
                            <option value="4">Juru Tingkat I</option>
                            <option value="5">Pengatur Muda</option>
                            <option value="6">Pengatur Muda Tingkat I</option>
                            <option value="7">Pengatur</option>
                            <option value="8">Pengatur Tingkat I</option>
                            <option value="9">Penata Muda</option>
                            <option value="10">Penata Muda Tingkat I</option> 
                            <option value="11">Penata</option>
                            <option value="12">Penata Tingkat I</option>
                            <option value="13">Pembina</option>
                            <option value="14">Pembina Tingkat I</option>
                            <option value="15">Pembina Utama Muda</option>
                            <option value="16">Pembina Utama Madya</option>
                            <option value="17">Pembina Utama</option>
                </select>
                  </div>
                </div>
                <input type="hidden" name="status" value="1">
                <input type="hidden" name="unitkerja" value="Dinas Koperasi UKM Kota Pekanbaru">

                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-8">
                    <input type="text" id="jabatan" class="form-control" name="jabatan" placeholder="Jabatan" required="" value="<?php echo $u->jabatan?>">
                  </div>
                </div>
                  <div class="form-group">
                      <label for="no_hp" class="col-sm-2 control-label">IMEI HP</label>
                      <div class="col-sm-8">
                          <input type="text" id="jabatn" class="form-control" value="<?= $u->imei ?>" name="imei" placeholder="IMEI" required="">
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
        <?php } ?>
        </div>

      