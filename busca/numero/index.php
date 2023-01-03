<?php include $_SERVER['DOCUMENT_ROOT'].'/src/componentes/cabecalho.php'; ?>

<div id="content" components="" class="block">

    <div class="container very-small">

        <div class="my-l">&nbsp;</div>

        <div class="card content-wrap auto-height">
            <h1 class="list-heading mb-4">Valide um certificados da Estudante.dev</h1>


            <form id="formBusca" method="get" action="/ver/">
                <div>
                    <div class="form-group">
                        <label for="numeroCertificado">Número do certificado</label>
                        <input tabindex="1" required id="numeroCertificado" name="numeroCertificado" type="text" class="theme-form-input" placeholder="Digite seu número que fica seguido de um # escrito no certificado" />
                    </div>
                </div>


                <button tabindex="3" id="submit-login" type="submit" class="button"><i class="zmdi zmdi-search"></i> Buscar</button>
            </form>


        </div>
    </div>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/src/componentes/rodape.php'; ?>