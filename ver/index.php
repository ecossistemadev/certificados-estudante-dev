<?php
include $_SERVER['DOCUMENT_ROOT'] . '/src/componentes/cabecalho.php';


$numeroCertificado = urldecode($_GET['numeroCertificado']);

if(!$numeroCertificado){
    header('Location: /404');
    exit;
}

?>

<style>
  .iframe-container {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%;
  }
  .iframe-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
  }
</style>

<div class="iframe-container">
  <iframe src="<?php echo obterConfig()["baseUrlApiN8n"].'/ver/?numeroCertificado='.$numeroCertificado ?>" frameborder="0"></iframe>
</div>


<?php

include $_SERVER['DOCUMENT_ROOT'] . '/src/componentes/rodape.php'; 
?>