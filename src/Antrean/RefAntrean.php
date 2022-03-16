<?php
namespace cmiNk\Bpjs\Antrean;

use cmiNk\Bpjs\BpjsService;

class RefAntrean extends BpjsService
{
    public function refpoli()
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/poli');
        return $response;
    }

    public function refdokter()
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/dokter');
        return $response;
    }
}
