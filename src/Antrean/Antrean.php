<?php
namespace cmiNk\Bpjs\Antrean;

use cmiNk\Bpjs\BpjsService;

class Antrean extends BpjsService
{
    public function getListTask($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/getlisttask',$data);
        return $response;
    }

    public function addAntrean($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/add', $data, $header);
        return $response;
    }

    public function cancelAntrean($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/batal', $data, $header);
        return $response;
    }

    public function updateWaktu($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/updatewaktu', $data, $header);
        return $response;
    }

    public function dashboardTgl($tanggal, $waktu)
    {
        $response = $this->get('dashboard/waktutunggu/tanggal/'.$tanggal.'/waktu/'.$waktu);
        return $response;
    }

    public function dashboardBln($bulan, $tahun, $waktu)
    {
        $response = $this->get('dashboard/waktutunggu/bulan/'.$bulan.'/tahun/' .$tahun. '/waktu/'.$waktu);
        return $response;
    }

}
