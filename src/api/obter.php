<?php

function ApiObterPorEmail($email){
    if($email){
        // Dados a serem enviados na requisição
        $data = array(
            'emailAluno' => $email
        );
    
        // Converte os dados para o formato JSON
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
            ),
        );
    
        $context  = stream_context_create($options);
        $respostaApi = file_get_contents($_ENV["BASE_URL_API_N8N"] . "/obter/email", false, $context);
        $respostaApiJson = json_decode($respostaApi);
        return $respostaApiJson;
    }else{
        return null;
    }
}
