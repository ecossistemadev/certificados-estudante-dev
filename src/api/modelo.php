<?php

function ApiModeloObterDetalhes($id){
    $apiReqUrl = obterConfig()["baseUrlApiN8n"] . "/modelo/obter/detalhes?id=$id";
    $respostaApi = file_get_contents($apiReqUrl);
    $respostaApiJson = json_decode($respostaApi);
    return $respostaApiJson;
}
