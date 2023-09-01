<head>
    <title><?php echo $titleStart; ?> Msg <?php echo $_GET['titulo']; ?> <?php echo $titleEnd; ?></title>
</head>
<body>
    <div id="content" components="" class="block">

        <div class="container very-small">

            <div class="my-l">&nbsp;</div>

            <div class="card content-wrap auto-height">
                <h1 class="list-heading mb-4"><i class="zmdi <?php echo urldecode($_GET['icone']); ?>"></i> <?php echo urldecode($_GET['titulo']); ?></h1>
                <p><?php echo urldecode($_GET['descricao']); ?> </p>

                <?php if($_GET['btnTentarnovamente']){ ?>
                    <a href=<?php echo urldecode($_GET['btnUrl']); ?> class="button text-center w-100">
                        <i class="zmdi zmdi-link"></i>
                        Tentar novamente
                    </a>
                <?php }; ?>

            </div>
        </div>

    </div>
</body>