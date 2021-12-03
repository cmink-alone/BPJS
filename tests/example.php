<?php

require_once __DIR__.'/../vendor/autoload.php';

//use your own bpjs config
$vclaim_conf = [
    'cons_id' => '123456',
    'secret_key' => '123456',
    'base_url' => 'url webservice BPJS',
    'service_name' => 'vclaim-rest',
    'user_key' => 'userkey untuk mengakses ws BPJS'
];

// use Referensi service
// https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog/Referensi

$referensi = new cmiNk\Bpjs\V2\Bridging($vclaim_conf);
var_dump($referensi->diagnosa('A00'));

//use Peserta service
//https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog/Peserta

$peserta = new cmiNk\Bpjs\V2\Bridging($vclaim_conf);
var_dump($peserta->getByNoKartu('123456789','2018-09-16'));
