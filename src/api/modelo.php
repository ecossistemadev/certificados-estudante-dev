<?php
use GuzzleHttp\Client;

function ApiModeloObterDetalhes($id) {
    if ($id) {
        $apiReqUrl = $_ENV["BASE_URL_API_N8N"] . "/modelo/obter/detalhes?id=$id";

        $client = new Client(['verify' => false]);
        $response = $client->get($apiReqUrl);

        $respostaApi = $response->getBody()->getContents();
        $respostaApiJson = json_decode($respostaApi);
        return $respostaApiJson;
    } else {
        return null;
    }
}