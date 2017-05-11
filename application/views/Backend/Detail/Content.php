      <div class="right_col" role="main">

        <div class="">
          
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Jaminan Kesehatan Nasional <small>Detail peserta</small></h2>
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

                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                    <div class="profile_img">

                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                          <img src="images/picture.jpg" alt="Avatar">

                        <!-- Cropping modal -->
                        
                        <!-- /.modal -->

                        <!-- Loading state -->
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                      </div>
                      <!-- end of image cropping -->

                    </div>
                    <?php foreach($detail as $isi){ ?>
                    <h3><?php echo $isi->nama_depan?> <?php echo $isi->nama_belakang?></h3>
                      
                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $isi->tempat_lahir?>
                      </li>

                      <li>
                        <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $isi->kelas_jkn?>
                      </li>

                      
                    </ul>


                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Data Peserta</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_kantor" role="tab" id="profile-kantor" data-toggle="tab" aria-expanded="false">kantor</a>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">JKN</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Riwayat</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="profile-tab">

                          <!-- start user projects -->
                          <table class="data table table-striped no-margin">
                            <tbody>
                              <tr>
                                <td width="300px"><a class="fa fa-user">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Lengkap</a></td>
                                <td>: <?php echo $isi->nama_depan?> <?php echo $isi->nama_belakang?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Identitas</a></td>
                                <td>: <?php echo $isi->jenis_identitas?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Identitas</a></td>
                                <td>: <?php echo $isi->no_identitas?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat Lahir</a></td>
                                <td>: <?php echo $isi->tempat_lahir?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal Lahir</a></td>
                                <td>: <?php echo $isi->tanggal_lahir?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status</a></td>
                                <td>: <?php echo $isi->status?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status Keluarga</a></td>
                                <td>: <?php echo $isi->status_keluarga?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kewarganegaraan</a></td>
                                <td>: <?php echo $isi->kewarganegaraan?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alamat</a></td>
                                <td>: <?php echo $isi->alamat?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email</a></td>
                                <td>: <?php echo $isi->email?></td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- end user projects -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_kantor" aria-labelledby="profile-kantor">

                          <!-- start user projects -->
                          <table class="data table table-striped no-margin">
                            <tbody>
                              <tr>
                                <td width="300px"><a class="fa fa-user">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</a></td>
                                <td>: <?php echo $isi->pekerjaan?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penghasilan</a></td>
                                <td>: <?php echo $isi->penghasilan?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat Kantor</a></td>
                                <td>: <?php echo $isi->alamat_kantor?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telpon Kantor</a></td>
                                <td>: <?php echo $isi->telpon_kantor?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail Kantor</a></td>
                                <td>: <?php echo $isi->email_kantor?></td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- end user projects -->
                        </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                          <!-- start user projects -->
                          <table class="data table table-striped no-margin">
                            <tbody>
                              <tr>
                                <td width="300px"><a class="fa fa-user">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No JKN</a></td>
                                <td>: <?php echo $isi->no_identitas?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kelas</a></td>
                                <td>: <?php echo $isi->kelas_jkn?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis</a></td>
                                <td>: <?php echo $isi->kategori_jkn?></td>
                              </tr>
                            <tr>
                                <td><a class="fa fa-credit-card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Masa Berlaku</a></td>
                                <td>: 15-10-2020</td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- end user projects -->
                            <?php } ?>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                          <!-- start user projects -->
                          <table class="data table table-striped no-margin">
                              <thead>
                                <th>No</th>
                                  <th>Rumah Sakit</th>
                                  <th>Keterangan</th>
                                  <th>Tanggal</th>
                              </thead>
                            <tbody>
                            <tr>
                                <td>1</a></td>
                                <td>Rumah sakit tapi sehat</td>
                                <td>Full Ceck Up</td>
                                <td>15-10-2016</td>
                              </tr>
                            <tr>
                                <td>2</a></td>
                                <td>RS. Sunat Yuk Gan</td>
                                <td>Sunat Kali ke 3</td>
                                <td>20-10-2016</td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- end user projects -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                            photo booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>
                  </div>
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