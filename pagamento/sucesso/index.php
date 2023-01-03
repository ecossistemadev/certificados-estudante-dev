<?php 
include $_SERVER['DOCUMENT_ROOT'].'/src/componentes/cabecalho.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/src/api/stripe.php';



$stripeSessionId = $_GET['stripeSessionId'];
$sessao = ApiStripeObterSessao($stripeSessionId);

?>

<div id="content" components="" class="block">

    <div class="container very-small">

        <div class="my-l">&nbsp;</div>

        <div class="card content-wrap auto-height">
            <h1 class="list-heading mb-4">Agradecemos pela sua compra!</h1>
            <div class="text-center"><img class="w-50" src="/src/static/img/undraw_order_confirmed_re_g0if.svg" alt="Ilustração de confirmação do pagamento" /></div>
            <p>A emissão do seu certificado já está em andamento. Ele será enviado para o seu e-mail em breve. Por favor, verifique sua caixa de entrada, pasta de spam e lixo eletrônico para localizá-lo. </p>
            <p>Além de aguardar o envio por e-mail, você também pode tentar localizá-lo acessando o botão de busca de certificados emitidos abaixo e digitando o endereço de e-mail utilizado durante a compra. Caso tenha alguma dificuldade, não hesite em entrar em contato conosco pelo e-mail <a href="mailto:contato@estudante.dev" target="_blank">contato@estudante.dev</a>. Obrigado pela sua compra</p>
            <a href="/busca/email/?email=<?php echo $sessao->metadata->email; ?>" class="button text-center w-100">
                <i class="zmdi zmdi-search"></i>
                Buscar meus certificados por e-mail
            </a>
        </div>
    </div>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/src/componentes/rodape.php'; ?>