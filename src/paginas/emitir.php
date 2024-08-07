<?php
include $PATH_ROOT.'/src/api/modelo.php';

$id = urldecode($_GET['id'] ?? null);
$idFr = urldecode($_GET['idFr'] ?? null);
$detalhesProduto = ApiModeloObterDetalhes($id);
$detalhesFormacaoProduto = ApiModeloObterDetalhes($idFr);
$produtoFazParteFormacao = false;


if(!$detalhesProduto->produtoNome){
    header('Location: '.$pathUrl.'/404');
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
    $urlFormGerar = $_ENV["BASE_URL_API_N8N"]."/pagamento/criar/sessao";
} else {
    $produtoPago = false;
    $detalhesProduto->produtoPreco = 0;
    $urlFormGerar = $_ENV["BASE_URL_API_N8N"]."/emitir/gratis";
}

?>
<head>
    <title><?php echo $titleStart; ?> Emitir <?php echo $detalhesProduto->produtoNome; ?> <?php echo $titleEnd; ?></title>
</head>
<body>
    <div id="content" components="" class="block">
    <div class="container medium">

        <div class="my-l">&nbsp;</div>

        <div class="d-flex flex-wrap gap-4">
            <div class="col form card content-wrap auto-height">
                <h1 class="list-heading">Emitir meu certificado</h1>

                <h2 class="list-heading" remove-pc="true"><?php echo $detalhesProduto->produtoNome; ?> <b class="text-success">R$ <?php echo number_format($detalhesProduto->produtoPreco / 100, 2, ",", ""); ?></b></h2>

                <?php if($produtoFazParteFormacao) { ?>
                    <b remove-pc="true">Faz parte do <?php echo $detalhesFormacaoProduto->produtoNome; ?></b>
                <?php } ?>

                <div class="text-center mt-4"><img class="w-50 mb-4 border-radius-1" src="<?php echo $detalhesProduto->produtoImg; ?>" alt="Imagen do produto" /></div>


                <form id="formGerar" method="post" action="<?php echo $urlFormGerar;?>" <?php if($_GET["iframe"] === "true"){ echo 'target="_blank"'; } ?> >
                    
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                    <input type="hidden" name="ip" value="<?php echo $getIpUser ?>" />
                    <input type="hidden" name="priceId" value="<?php echo $detalhesProduto->priceId ?>" />
                    <input type="hidden" name="produtoPrecoMoeda" value="<?php echo $detalhesProduto->produtoPrecoMoeda ?>" />
                    <input type="hidden" name="produtoNome" value="<?php echo $detalhesProduto->produtoNome ?>" />
                    <?php if($produtoFazParteFormacao) { ?>
                        <input type="hidden" name="formacaoId" value="<?php echo $idFr ?>" />
                        <input type="hidden" name="formacaoPriceId" value="<?php echo $detalhesFormacaoProduto->priceId ?>" />
                        <input type="hidden" name="formacaoProdutoNome" value="<?php echo $detalhesFormacaoProduto->produtoNome ?>" />
                    <?php } ?>
                
                    <div>
                        <div class="form-group">
                            <label for="firstname">Primeiro Nome</label>
                            <input tabindex="1" required id="firstname" name="firstname" type="text" class="theme-form-input" placeholder="Digite seu primeiro nome" autofocus />
                        </div>
                        <div class="form-group">
                            <label for="lastname">Sobrenome</label>
                            <input tabindex="1" required id="lastname" name="lastname" type="text" class="theme-form-input" placeholder="Digite seu sobrenome" />
                        </div>
                        <!-- <div class="form-group">
                            <label for="celular">Celular</label>
                            <input tabindex="1" required id="celular" name="celular" type="text" class="theme-form-input" placeholder="Digite seu número do celular" pattern="[0-9]{11,11}" title="Apenas com números e não textos! Formatação é primeiro o seu DD do estado seguido do número, Deve conter 11 dígitos." />
                        </div> -->
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input tabindex="1" required id="email" name="email" type="email" class="theme-form-input" placeholder="Digite o seu melhor e-mail" />
                        </div>
                        <div class="form-group">
                            <label for="email">Tipo do documento fiscal</label>
                            <br>
                            <select tabindex="1" required id="documentType" name="documentType" class="theme-form-input">
                                <option value="CPF" selected="selected">CPF - Brasil</option>
                                <option value="CNPJ">CNPJ - Brasil</option>
                                <option value="NIF">NIF - Portugal</option>
                                <option value="NUIT">NUIT - Moçambique</option>
                                <option value="CC">CC - Angola</option>
                                <option value="NID">NID - Taiwan</option>
                                <option value="SSN">SSN - Estados Unidos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Número do documento fiscal</label>
                            <input tabindex="1" required id="documentNumber" name="documentNumber" type="number" class="theme-form-input" placeholder="Digite apenas números" />
                        </div>



                        <div class="form-group">
                            <input tabindex="2" required id="termos" name="termos" type="checkbox" />
                            <label for="termos">Aceito a <a href="https://ecossistema.dev/politica-privacidade-termos-e-condicoes/" target="_blank" title="Clique para abrir a página e ler!">Política Privacidade, Termos e Condições.</a>
                            </label>
                        </div>
                        <!-- <div class="form-group">
                            <input tabindex="2" required id="subscribeNews" name="subscribeNews" type="checkbox" checked />
                            <label for="subscribeNews" title="Isso significa que poderá receber e-mails ou menssagens de texto por whatsapp ou sms de empresa que pertecem a Ecossistema.dev, não gostamos de spam então não se preocupe você poderá deicidir sair quanto quiser dessa lista e receberá apenas notificações de promoções relevantes para você Dev :)">
                                Aceito receber novidades da <.dev />!
                            </label>
                        </div> -->
                    </div>

                    <?php if($produtoPago){ ?>
                        <button type="submit" name="botaoSubmit" value="pago" tabindex="3" id="submit-login" class="button"><i class="zmdi zmdi-shopping-cart"></i> Ir para Pagamento</button>
                    <?php } else { ?>
                        <button type="submit" name="botaoSubmit" value="gratis" tabindex="3" id="submit-login" class="button"><i class="zmdi zmdi-check-all"></i> Emitir</button>
                    <?php } ?>
                    
                </form>
            </div>
            
            <div class="col auto-height beneficios">
                <h2 class="list-heading" remove-mobile="true"><?php echo $detalhesProduto->produtoNome; ?> <b class="text-success"><?php echo $detalhesProduto->produtoPrecoMoedaSimbolo; ?> <?php echo number_format($detalhesProduto->produtoPreco / 100, 2, ",", ""); ?> (<?php echo strtoupper($detalhesProduto->produtoPrecoMoeda); ?>)</b></h2>

                <?php if($produtoFazParteFormacao) { ?>
                    <b remove-mobile="true">Faz parte do <?php echo $detalhesFormacaoProduto->produtoNome; ?></b>
                <?php } ?>


                <p class="mt-4"><?php echo $detalhesProduto->produtoDescricao; ?></p>
                <ul>
                    <?php
                        if($detalhesProduto->todos->features){
                            foreach ($detalhesProduto->todos->features as $beneficio) {
                                echo "<li>$beneficio->name</li>";
                            }
                        } else { ?>
                            <li>Ótimo complemento para o currículo</li>
                            <li>Permite a adição fácil no perfil do LinkedIn</li>
                            <li>Arquivo em formato PDF</li>
                            <li>Validação do certificado online</li>
                            <li>Pode ser apresentado como comprovante de conhecimento em reuniões de trabalho ou entrevistas</li>
                            <li>Pode ser usado como comprovante de conhecimento em processos seletivos</li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>

    </div>

</body>