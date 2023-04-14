<?php

include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

?>

<!DOCTYPE html>
<html lang="pt-br" class="dark-mode">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Certificados.Estudante.dev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">


    <link href="/src/static/themes/darkBookStack/main.css" rel="stylesheet">
    <link href="/src/static/themes/darkBookStack/styles.css" rel="stylesheet">
    <link rel="icon" href="/src/static/img/astronauta-perfil-fundo-transparente.png">

    <script src="https://rawcdn.githack.com/ecossistemadev/dev-theme-bookstack/797be5d74305e57caeb32a041df4789abdb549be/bookstack/padrao/app.js"></script>

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

<body class="theme-body">
    <header id="header" component="header-mobile-toggle" class="primary-background">
        <div class="grid mx-l">
            <div>
                <a href="/" data-shortcut="home_view" class="logo" title="Clique para voltar ao site de origem!">
                    <img class="logo-image" src="/src/static/img/astronauta-perfil-fundo-transparente.png" alt="Logo">
                    <span class="logo-text">Certificados.Estudante.dev</span>
                </a>
            </div>
        </div>
    </header>