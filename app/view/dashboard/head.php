<!DOCTYPE html>
<html>
<head>
    <title>Dashboard <?= KICKBONE_VERSION ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <?php kickbone_header(); ?>
    <style media="screen">
        * {
            font-family: 'Open Sans', sans-serif;
            font-weight: 'light';
        }
        .has-sub {
            margin-bottom: 5px;
        }
        .sub {
            color: #aaa;
            font-size: 12px;
            margin: 0;
            color: #bb
        }
        .row > div .inner {
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            min-height: 250px;
            padding: 10px;
            background-color: #f7f7f7;
        }
        .row .inner h2 {
            margin-top: 10px;
        }
    </style>
</head>
<body class="app">
    <div class="wrapper">
