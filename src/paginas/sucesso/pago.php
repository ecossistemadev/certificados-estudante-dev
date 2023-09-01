<?php 
include $PATH_ROOT. '/src/api/stripe.php';



$stripeSessionId = $_GET['stripeSessionId'] ?? null;
$sessao = ApiStripeObterSessao($stripeSessionId);

if(!$sessao){
    header('Location: '.$pathUrl.'/404');
    exit; 
}

?>
<head>
    <title><?php echo $titleStart; ?> Agradecimento de compra <?php echo $titleEnd; ?></title>
</head>
<body>
    <div id="content" components="" class="block">

        <div class="container very-small">

            <div class="my-l">&nbsp;</div>

            <div class="card content-wrap auto-height">
                <h1 class="list-heading mb-4">Agradecemos pela sua compra!</h1>
                <div class="text-center"><img class="w-50" src="<?php echo $pathUrl;?>/assets/img/undraw_order_confirmed_re_g0if.svg" alt="Ilustração de confirmação do pagamento" /></div>
                <p>A emissão do seu certificado já está em andamento. Ele será enviado para o seu e-mail em breve. Por favor, verifique sua caixa de entrada, pasta de spam e lixo eletrônico para localizá-lo. </p>
                <p> Caso tenha alguma dificuldade, não hesite em entrar em contato conosco pelo e-mail <a href="mailto:contato@estudante.dev" target="_blank">contato@estudante.dev</a>. Obrigado pela sua compra</p>
            </div>
        </div>

    </div>
</body>