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

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G8KVMRP2KE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-G8KVMRP2KE');
    </script>
    
</head>

<div class="theme-body">
    <?php 
        include $PATH_ROOT."/src/componentes/menu.php";
    ?>