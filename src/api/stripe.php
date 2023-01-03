<?php

function ApiStripeObterSessao($id){
    $apiReqUrl = obterConfig()["baseUrlApiN8n"] . "/stripe/obter/sessao?id=$id";
    $respostaApi = file_get_contents($apiReqUrl);
    $respostaApiJson = json_decode($respostaApi);
    return $respostaApiJson;
}
