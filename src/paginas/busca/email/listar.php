<?php
include $PATH_ROOT.'/src/api/obter.php';


$email = $_GET['email'] ?? null;
$lista = ApiObterPorEmail($email);


if (($lista === null) || (isset($lista->message))) {
    header('Location: '.$pathUrl.'/404');
    exit; 
}
?>


<head>
    <title><?php echo $titleStart; ?> Resultado de certificados do Email "<?php echo $email;?>"</title>
</head>


<body>
    <div id="content" components="" class="block">
        <div class="container small">
            <div class="my-l">&nbsp;</div>
            <div class="card content-wrap auto-height">

                <h1 class="list-heading mb-4">Resultado da busca de certificados "<?php echo $email;?>"</h1>

                <div class="item-list">
                    <div class="item-list-row flex-container-row items-center bold hide-under-m">
                        <div class="flex-2 px-m py-xs flex-container-row items-center">Nome</div>
                        <div class="flex-2 px-m py-xs text-right">Ação</div>
                    </div>


                    <?php foreach ($lista as $item) { ?>
                        <div class="item-list-row flex-container-row items-center wrap py-xxs">
                            <div class="flex-2 px-m py-xxs min-width-m"><?php echo $item->nome ?></div>
                            <div class="px-m py-xxs text-right">
                                <a href="<?php echo $pathUrl.'/ver?numeroCertificado='.$item->numero?>" target="_blank" class="button"><i class="zmdi zmdi-eye"></i> Ver Certificado</a>
                            </div>
                        </div>
                    <?php } ?>



                </div>
                <p class="text-center mt-3">OBS: Essa página só mostra os últimos 50 certificados emitidos!</p>
            </div>
        </div>

    </div>
</body>