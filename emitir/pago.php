

<div id="content" components="" class="block">

<div class="container very-small">

    <div class="my-l">&nbsp;</div>

    <div class="card content-wrap auto-height">
        <h1 class="list-heading">Emitir meu certificado</h1>
        <h2 class="list-heading mb-4"><?php echo $detalhesProduto->produtoNome; ?> <b>R$ <?php echo number_format($detalhesProduto->produtoPreco / 100, 2, ",", ""); ?></b></h2>

        <div class="text-center"><img class="w-50 mb-4 border-radius-1" src="<?php echo $detalhesProduto->produtoImg; ?>" alt="Imagen do produto" /></div>


        <form id="formGerar" method="post" action="<?php echo obterConfig()["baseUrlApiN8n"];?>/stripe/criar/sessao">
            
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <input type="hidden" name="priceId" value="<?php echo $detalhesProduto->priceId ?>" />
        
            <div>
                <div class="form-group">
                    <label for="firstname">Primeiro Nome</label>
                    <input tabindex="1" required id="firstname" name="firstname" type="text" class="theme-form-input" placeholder="Digite seu primeiro nome" autofocus />
                </div>
                <div class="form-group">
                    <label for="lastname">Sobrenome</label>
                    <input tabindex="1" required id="lastname" name="lastname" type="text" class="theme-form-input" placeholder="Digite seu sobrenome" />
                </div>
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input tabindex="1" required id="celular" name="celular" type="text" class="theme-form-input" placeholder="Digite seu número do celular" pattern="[0-9]{11,11}" title="Apenas com números e não textos! Formatação é primeiro o seu DD do estado seguido do número, Deve conter 11 dígitos." />
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input tabindex="1" required id="email" name="email" type="email" class="theme-form-input" placeholder="Digite o seu melhor e-mail" />
                </div>



                <div class="form-group">
                    <input tabindex="2" required id="termos" name="termos" type="checkbox" />
                    <label for="termos">Aceito a <a href="https://ecossistema.dev/politica-privacidade-termos-e-condicoes/" target="_blank" title="Clique para abrir a página e ler!">Política Privacidade, Termos e Condições.</a>
                    </label>
                </div>
                <div class="form-group">
                    <input tabindex="2" required id="subscribeNews" name="subscribeNews" type="checkbox" checked />
                    <label for="subscribeNews" title="Isso significa que poderá receber e-mails ou menssagens de texto por whatsapp ou sms de empresa que pertecem a Ecossistema.dev, não gostamos de spam então não se preocupe você poderá deicidir sair quanto quiser dessa lista e receberá apenas notificações de promoções relevantes para você Dev :)">
                        Aceito receber novidades da <.dev />!
                    </label>
                </div>
            </div>


            <button tabindex="3" id="submit-login" type="submit" class="button"><i class="zmdi zmdi-shopping-cart"></i> Continuar para o pagamento</button>
        </form>


    </div>
</div>

</div>
