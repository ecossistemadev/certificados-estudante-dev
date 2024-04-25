<?php
use GuzzleHttp\Client;

// Função para obter o endereço IP real do usuário, mesmo se estiver atrás de um proxy
function getIpUser() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // IP enviado pelo proxy
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // IP passado pelo proxy reverso
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // IP direto do usuário
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    if($ip == "::1"){
        $ip = "";
    }
    // $ip = "187.180.212.144"; // BR
    // $ip = "104.132.255.255"; // PORTGUGAL 
    // $ip = "103.116.99.255"; // Taiwan 
    // $ip = "149.87.166.255"; // Angola 
    // $ip = "69.162.81.155"; // EUA
    // $ip = "181.9.126.48"; // ARGENTINA
    return $ip;
}

$getIpUser = getIpUser();

?>