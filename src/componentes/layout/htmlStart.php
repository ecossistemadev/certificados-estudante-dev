<!DOCTYPE html>
<html lang="pt-br" class="dark-mode">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <link rel="icon" href="<?php echo $pathUrl;?>/assets/img/astronauta-perfil-fundo-transparente.png">


    <!-- Theme Dev Theme Bookstack -->
    <link href="<?php echo $pathUrl;?>/assets/themes/darkBookStack/main.css" rel="stylesheet">
    <link href="<?php echo $pathUrl;?>/assets/themes/darkBookStack/styles.css" rel="stylesheet">
    <script src="https://rawcdn.githack.com/ecossistemadev/dev-theme-bookstack/797be5d74305e57caeb32a041df4789abdb549be/bookstack/padrao/app.js"></script>

    <!-- Font Awesome -->
    <link href="<?php echo $pathUrl;?>/libs/font-awesome-5.12.0/css/all.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="<?php echo $pathUrl;?>/libs/font-awesome-5.12.0/js/all.min.js"></script>

    <!-- Global Css -->
    <link href="<?php echo $pathUrl;?>/assets/css/global.css" rel="stylesheet"/>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T28H7VNX');</script>
    <!-- End Google Tag Manager -->
</head>

<div class="theme-body">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T28H7VNX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php 
        include $PATH_ROOT."/src/componentes/menu.php";
    ?>