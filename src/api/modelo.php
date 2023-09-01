<?php

function ApiModeloObterDetalhes($id){
    if($id){
        $apiReqUrl = $_ENV["baseUrlApiN8n"] . "/modelo/obter/detalhes?id=$id";
        $respostaApi = file_get_contents($apiReqUrl);
        $respostaApiJson = json_decode($respostaApi);
        return $respostaApiJson;
    }else{
        return null;
    }
}
