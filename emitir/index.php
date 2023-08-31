<?php
include $_SERVER['DOCUMENT_ROOT'] . '/src/componentes/cabecalho.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/api/modelo.php';



$id = urldecode($_GET['id']);
$idFr = urldecode($_GET['idFr'] ?? null);
$detalhesProduto = ApiModeloObterDetalhes($id);
$detalhesFormacaoProduto = ApiModeloObterDetalhes($idFr);
$produtoFazParteFormacao = false;

// var_dump($detalhesProduto);

if(!$detalhesProduto->produtoNome){
    header('Location: /404');
    exit;
}

if(($detalhesFormacaoProduto) && ($detalhesFormacaoProduto->tipoCertificado === "formacao")){
    $formacaoProdutoPreco = floatval($detalhesFormacaoProduto->produtoPreco);
    $produtoFazParteFormacao = true;
    if ($formacaoProdutoPreco <= 0) {
        $detalhesProduto->produtoPreco = 0;
    }
}

$produtoPreco = floatval($detalhesProduto->produtoPreco);
if ($produtoPreco > 0) {
    $produtoPago = true;
    $urlFormGerar = obterConfig()["baseUrlApiN8n"]."/stripe/criar/sessao";
} else {
    $produtoPago = false;
    $detalhesProduto->produtoPreco = 0;
    $urlFormGerar = obterConfig()["baseUrlApiN8n"]."/emitir/gratis";
}

include 'html.php';



include $_SERVER['DOCUMENT_ROOT'] . '/src/componentes/rodape.php'; 
?>