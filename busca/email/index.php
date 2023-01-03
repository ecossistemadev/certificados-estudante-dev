<?php include $_SERVER['DOCUMENT_ROOT'].'/src/componentes/cabecalho.php'; ?>

<div id="content" components="" class="block">

    <div class="container very-small">

        <div class="my-l">&nbsp;</div>

        <div class="card content-wrap auto-height">
            <h1 class="list-heading mb-4">Buscar meus certificados</h1>


            <form id="formBusca" method="GET" action="/busca/email/listar">
                <div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input value="<?php echo $_GET['email']; ?>" tabindex="1" required id="email" name="email" type="email" class="theme-form-input" placeholder="Digite o e-mail que usou quando gerou seu certificado" />
                    </div>
                </div>


                <button tabindex="3" id="submit-login" type="submit" class="button"><i class="zmdi zmdi-search"></i> Buscar</button>
            </form>


        </div>
    </div>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/src/componentes/rodape.php'; ?>