<?php

function ApiModeloObterDetalhes($id){
    if($id){
        $apiReqUrl = $_ENV["BASE_URL_API_N8N"] . "/modelo/obter/detalhes?id=$id";
        $respostaApi = file_get_contents($apiReqUrl);
        $respostaApiJson = json_decode($respostaApi);
        return $respostaApiJson;
    }else{
        return null;
    }
}
