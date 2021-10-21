<?php include_once('../_headeruser.php'); ?>

  <div class="row">
      <div class="col-lg-12">
          <h1>Dashboard</h1>
          <hr>
  <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-tree-deciduous" style="font-size: 70px;"></i>
                                    </div>
                                    <div class="col-xs-12 text-right">
                                        <div class="huge"><?= mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_tanamankeras")); ?></div>
                                        <div>Data Tanaman Keras</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../page-admin/tanamankeras/data.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-leaf" style="font-size: 70px;"></i>
                                    </div>
                                    <div class="col-xs-12 text-right">
                                        <div class="huge"><?= mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_tanamanhias")); ?></div>
                                        <div>Data Tanaman Hias</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../page-admin/tanamanhias/data.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-grain" style="font-size: 70px;"></i>
                                    </div>
                                    <div class="col-xs-12 text-right">
                                        <div class="huge"><?= mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_tanamanobat")); ?></div>
                                        <div>Data Tanaman Obat</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../page-admin/tanamanobat/data.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="glyphicon glyphicon-apple" style="font-size: 70px;"></i>
                                    </div>
                                    <div class="col-xs-12 text-right">
                                        <div class="huge"><?= mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_tanamanproduktif")); ?></div>
                                        <div>Data Tanaman Produktif</div>
                                    </div>
                                </div>
                            </div>
<!-- footer -->
                            <a href="../page-admin/tanamanproduktif/data.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
      </div>
  </div>

<?php include_once('../_footer.php'); ?>