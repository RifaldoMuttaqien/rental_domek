<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() . 'assets_login/vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'assets_login/css/sb-admin-2.min.css' ?>" rel="stylesheet">

</head>


<div class="page-header">
    <h3>Dashboard</h3>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-folder-open"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_rental->get_data('mobil')->num_rows(); ?>
                        </div>
                        <div>Jumlah Mobil</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/mobil' ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_rental->get_data('mobil')->num_rows(); ?>
                        </div>
                        <div>Jumlah Mobil</div>
                    </div>
                    <a href="<?php echo base_url() . 'admin/mobil' ?>">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_rental->get_data('kostumer')->num_rows(); ?>
                        </div>
                        <div>Jumlah Kostumer</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/kostumer' ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-sort"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_rental->get_data('transaksi')->num_rows(); ?>
                        </div>
                        <div>Jumlah Transaksi</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/transaksi' ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-ok"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_rental->edit_data(array('transaksi_status' => 1), 'transaksi')->num_rows(); ?>
                        </div>
                        <div>Rental Selesai</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/transaksi' ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-random arrow-right"></i> Mobil</h3>
            </div>





            <?php $this->load->view('admin/index2'); ?>