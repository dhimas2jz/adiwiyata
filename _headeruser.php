<?php
require_once "_config/config.php";
require "_assets/libs/vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="website admin ini di buat untuk memudahkan admin dalam memantau dan meninjau sebuah website, yaitu website ticketing online, jadi begitu ya agan semuanya">
    <meta name="author" content="Dhimas Marwahyu">
    <title>Adiwiyata Rancabungur</title>
    <!-- script Bootstrap 3 -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">
    <!-- script CSS -->
    <link href="<?=base_url('_assets/css/admin-style.css');?>" rel="stylesheet">
    <!-- script Font Awesome 4 -->
    <link href="<?=base_url('_assets/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/font-awesome.min.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/icon_login.png')?>">
</head>
<body>
    <!-- script jquery -->
	<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <!-- script javascript -->
	<script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('_assets/libs/DataTables/Button-1.5.6/dataTables.buttons.min.js')?>"></script>
    <script src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>"></script>
    <!-- sidebar / kiri -->
	<div id="wrapper">
        <nav class="navbar navbar-static-top">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="" style="color: white"><b>Adiwiyata Rancabungur</b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('page-user/index.php')?>"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                </li>
                    <li>
                        <a href="<?=base_url('page-user/tanamankeras/data.php')?>"><i class="glyphicon glyphicon-tree-deciduous"></i> Tanaman Keras</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-user/tanamanhias/data.php')?>"><i class="glyphicon glyphicon-leaf"></i> Tanaman Hias</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-user/tanamanobat/data.php')?>"><i class="glyphicon glyphicon-grain"></i> Tanaman Obat</a>
                    </li>
                    <li>
                        <a href="<?=base_url('page-user/tanamanproduktif/data.php')?>"><i class="glyphicon glyphicon-apple"></i> Tanaman Produktif</a>
                    </li>
                    <li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">