<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

    <style>
        .txt-center {text-align: center;}
            input[type=checkbox] {
            width: 25px;
            margin: 20px;
            cursor: pointer;
        }
        input[type=checkbox]:before {
            content: "";
            width: 50px;
            height: 50px;
            border-radius: 5px;
            -webkit-border-radius: 5px; /* Safari 3-4, iOS 1-3.2, Android 1.6- */
            -moz-border-radius: 5px; /* Firefox 1-3.6 */
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            border: 3px solid #ff9800;
            background-color: #cfa8a8;
            }
            input[type=checkbox]:checked:before {background-color: Green;}
            input[type=checkbox]:disabled:before{background-color: red;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/tiku_slider.css" media="screen">
    
    <title>TiKu</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/tiku.png"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="<?= base_url(); ?>">Home</a>
            <a class="nav-item nav-link" href="<?= base_url(); ?>home/tentang_kami">Tentang Kami</a>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    
    