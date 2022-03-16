<?php
namespace cmiNk\Bpjs\Antrean;

use cmiNk\Bpjs\BpjsService;

class Jadwaldokter extends BpjsService
{
    public function getJadwal($kdpoli, $tanggal)
    {
        $response = $this->get('jadwaldokter/kodepoli/'.$kdpoli.'/tanggal/'.$tanggal);
        return $response;
    }
    public function update($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('jadwaldokter/updatejadwaldokter', $data, $header);
        return $response;
    }
}
