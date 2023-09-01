<?php

function ApiStripeObterSessao($id){
    if($id){
        $apiReqUrl = $_ENV["BASE_URL_API_N8N"] . "/stripe/obter/sessao?id=$id";
        $respostaApi = file_get_contents($apiReqUrl);
        $respostaApiJson = json_decode($respostaApi);
        return $respostaApiJson;
    }else{
        return null;
    }
}
