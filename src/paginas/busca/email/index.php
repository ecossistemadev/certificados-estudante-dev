<head>
    <title><?php echo $titleStart; ?> Buscar Certificados por E-mail <?php echo $titleEnd; ?></title>
</head>
<body>
    <div id="content" components="" class="block">

        <div class="container very-small">

            <div class="my-l">&nbsp;</div>

            <div class="card content-wrap auto-height">
                <h1 class="list-heading mb-4">Buscar meus certificados</h1>


                <form id="formBusca" method="GET" action="<?php echo $pathUrl;?>/busca/email/listar">
                    <div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input value="<?php echo $_GET['email'] ?? null; ?>" tabindex="1" required id="email" name="email" type="email" class="theme-form-input" placeholder="Digite o e-mail que usou quando gerou seu certificado" />
                        </div>
                    </div>


                    <button tabindex="3" id="submit-login" type="submit" class="button"><i class="zmdi zmdi-search"></i> Buscar</button>
                </form>


            </div>
        </div>

    </div>
</body>