<div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>

          <div class="row">

            

            

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Data Pendaftar <small>Belum terverifikasi</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Kategori JKN</th>
                        <th>Detail Pendaftaran</th>
                        <th>Tanggapan</th>
                      </tr>
                    </thead>


                    <tbody>
                        <?php $no=0; foreach($notverified as $isi){$no++ ?>
                      <tr>
                        <td>1</td>
                        <td><?php echo $isi->nama_depan;?> <?php echo $isi->nama_belakang;?></td>
                        <td><?php echo $isi->no_identitas;?></td>
                        <td><?php echo $isi->alamat;?></td>
                        <td><?php echo $isi->kelas_jkn;?></td>
                        <td class="text-center"><a href="<?php echo base_url()?>Member/detail" class="btn btn-info">Detail</a></td>
                        <td class="text-center">
                          <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Verifikasi <span class="caret"></span> </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Verivikasi Pendaftaran</a>
                          </li>
                          <li><a href="#">Tolak Pendaftaran</a>
                          </li>
                        </ul>
                      </div></td>
                      </tr>
                        <?php } ?>
                        
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            

                  
                </div>
              </div>
              
              <!-- footer content -->
              <footer>
                <div class="pull-right">
                  JKN - Jaminan Kesehatan Nasional by <a href="https://colorlib.com">Kelompok 3</a>
                </div>
                <div class="clearfix"></div>
              </footer>
              <!-- /footer content -->

            </div>