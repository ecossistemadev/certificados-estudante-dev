<?php
include $_SERVER['DOCUMENT_ROOT'] . '/src/componentes/cabecalho.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/api/modelo.php';



$id = urldecode($_GET['id']);
$detalhesProduto = ApiModeloObterDetalhes($id);

if(!$detalhesProduto->produtoNome){
    header('Location: /404');
    exit;
}

$produtoPreco = floatval($detalhesProduto->produtoPreco);
if ($produtoPreco > 0) {
    include 'pago.php';
} else {
    include 'gratis.php';
}



include $_SERVER['DOCUMENT_ROOT'] . '/src/componentes/rodape.php'; 
?>