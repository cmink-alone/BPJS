<?php
/**
 * @File Name   : Bridging.php
 * @Author      : cmiNk
 * @Version     : 1.0
 * @datetime    : 12/1/21, 11:30 AM
 * @License     : MIT - License
 */

namespace cmiNk\Bpjs\V2;
use cmiNk\Bpjs\BpjsService;

class Bridging extends BpjsService
{
    /** Unutk Referensi */
    public function diagnosa($keyword)
    {
        $response = $this->get('referensi/diagnosa/'.$keyword);
        return json_decode($response, true);
    }
    public function poli($keyword)
    {
        $response = $this->get('referensi/poli/'.$keyword);
        return json_decode($response, true);
    }
    public function faskes($kd_faskes = null, $jns_faskes = null)
    {
        $response = $this->get('referensi/faskes/'.$kd_faskes.'/'.$jns_faskes);
        return json_decode($response, true);
    }

    public function dokterDpjp($jnsPelayanan, $tglPelayanan, $spesialis)
    {
        $response = $this->get('referensi/dokter/pelayanan/'.$jnsPelayanan.'/tglPelayanan/'.$tglPelayanan.'/Spesialis/'.$spesialis);
        return json_decode($response, true);
    }

    public function propinsi()
    {
        $response = $this->get('referensi/propinsi');
        return json_decode($response, true);
    }

    public function kabupaten($kdPropinsi)
    {
        $response = $this->get('referensi/kabupaten/propinsi/'.$kdPropinsi);
        return json_decode($response, true);
    }

    public function kecamatan($kdKabupaten)
    {
        $response = $this->get('referensi/kecamatan/kabupaten/'.$kdKabupaten);
        return json_decode($response, true);
    }

    public function diagnosaPrb()
    {
        $response = $this->get('referensi/diagnosaprb');
        return json_decode($response, true);
    }

    public function obatPrb($namaObat)
    {
        $response = $this->get('referensi/obatprb/'.$namaObat);
        return json_decode($response, true);
    }

    public function procedure($keyword)
    {
        $response = $this->get('referensi/procedure/'.$keyword);
        return json_decode($response, true);
    }

    public function kelasRawat()
    {
        $response = $this->get('referensi/kelasrawat');
        return json_decode($response, true);
    }

    public function dokter($keyword)
    {
        $response = $this->get('referensi/dokter/'.$keyword);
        return json_decode($response, true);
    }

    public function spesialistik()
    {
        $response = $this->get('referensi/spesialistik');
        return json_decode($response, true);
    }

    public function ruangrawat()
    {
        $response = $this->get('referensi/ruangrawat');
        return json_decode($response, true);
    }

    public function carakeluar()
    {
        $response = $this->get('referensi/carakeluar');
        return json_decode($response, true);
    }

    public function pascapulang()
    {
        $response = $this->get('referensi/pascapulang');
        return json_decode($response, true);
    }

    /** Service Peserta */
    public function getByNoKartu($noKartu, $tglPelayananSEP)
    {
        $response = $this->get('Peserta/nokartu/'.$noKartu.'/tglSEP/'.$tglPelayananSEP);
        return json_decode($response, true);
    }
    public function getByNIK($nik, $tglPelayananSEP)
    {
        $response = $this->get('Peserta/nik/'.$nik.'/tglSEP/'.$tglPelayananSEP);
        return json_decode($response, true);
    }

    /** Service SEP */
    public function insertSEP($data = [])
    {
        $response = $this->post('SEP/2.0/insert', $data);
        return json_decode($response, true);
    }
    public function updateSEP($data = [])
    {
        $response = $this->put('SEP/2.0/Update', $data);
        return json_decode($response, true);
    }
    public function deleteSEP($data = [])
    {
        $response = $this->delete('SEP/2.0/Delete', $data);
        return json_decode($response, true);
    }
    public function cariSEP($nosep)
    {
        $response = $this->get('SEP/'.$nosep);
        return json_decode($response, true);
    }
    public function suplesiJasaRaharja($noKartu, $tglPelayanan)
    {
        $response = $this->get('sep/JasaRaharja/Suplesi/'.$noKartu.'/tglPelayanan/'.$tglPelayanan);
        return json_decode($response, true);
    }
    public function dataIndukKll($noKartu)
    {
        $response = $this->get('sep/KllInduk/List/'.$noKartu);
        return json_decode($response, true);
    }
    public function pengajuanSep($data = [])
    {
        $response = $this->post('Sep/pengajuanSEP', $data);
        return json_decode($response, true);
    }
    public function approvalSep($data = [])
    {
        $response = $this->post('Sep/aprovalSEP', $data);
        return json_decode($response, true);
    }
    public function updateTglPlg($data = [])
    {
        $response = $this->put('Sep/2.0/updtglplg', $data);
        return json_decode($response, true);
    }
    public function inacbgSEP($nosep)
    {
        $response = $this->get('sep/cbg/'.$nosep);
        return json_decode($response, true);
    }
    public function DataSepInternal($nosep)
    {
        $response = $this->get('SEP/Internal/'.$nosep);
        return json_decode($response, true);
    }
    public function deleteSepInternal($data = [])
    {
        $response = $this->delete('SEP/Internal/delete', $data);
        return json_decode($response, true);
    }
    public function getFingerPrint($noKartu, $tglPelayanan)
    {
        $response = $this->get('SEP/FingerPrint/Peserta/'.$noKartu.'/tglPelayanan/'.$tglPelayanan);
        return json_decode($response, true);
    }
    public function getListFingerPrint($tglPelayanan)
    {
        $response = $this->get('SEP/FingerPrint/List/Peserta/TglPelayanan/'.$tglPelayanan);
        return json_decode($response, true);
    }

    /** Service Monitoring */
    public function dataKunjungan($tglSep, $jnsPelayanan)
    {
        $response = $this->get('Monitoring/Kunjungan/Tanggal/'.$tglSep.'/JnsPelayanan/'.$jnsPelayanan);
        return json_decode($response, true);
    }

    public function dataKlaim($tglPulang, $jnsPelayanan, $statusKlaim)
    {
        $response = $this->get('Monitoring/Klaim/Tanggal/'.$tglPulang.'/JnsPelayanan/'.$jnsPelayanan.'/Status/'.$statusKlaim);
        return json_decode($response, true);
    }
    public function historyPelayanan($noKartu, $tglAwal, $tglAkhir)
    {
        $response = $this->get('monitoring/HistoriPelayanan/NoKartu/'.$noKartu.'/tglMulai/'.$tglAwal.'/tglAkhir/'.$tglAkhir);
        return json_decode($response, true);
    }
    public function dataKlaimJasaRaharja($tglMulai, $tglAkhir)
    {
        $response = $this->get('monitoring/JasaRaharja/tglMulai/'.$tglMulai.'/tglAkhir/'.$tglAkhir);
        return json_decode($response, true);
    }

    /** Service Rujukan */
    public function cariByNoRujukan($searchBy, $noRujukan)
    {
        if ($searchBy == 'RS') {
            $url = 'Rujukan/RS/'.$noRujukan;
        } else {
            $url = 'Rujukan/'.$noRujukan;
        }
        $response = $this->get($url);
        return json_decode($response, true);
    }
    public function cariByNoKartu($searchBy, $noKartu, $multi = false)
    {
        if ($multi) {
            $record = $multi ? 'List/' : '';
            if ($searchBy == 'RS') {
                $url = 'Rujukan/RS/'.$record.'Peserta/'.$noKartu;
            } else {
                $url = 'Rujukan/'.$record.'Peserta/'.$noKartu;
            }
        } else {
            if ($searchBy == 'RS') {
                $url = 'Rujukan/RS/Peserta/'.$noKartu;
            } else {
                $url = 'Rujukan/Peserta/'.$noKartu;
            }
        }
        $response = $this->get($url);
        return json_decode($response, true);
    }
    public function cariByTglRujukan($searchBy, $keyword)
    {
        if ($searchBy == 'RS') {
            $url = 'Rujukan/RS/TglRujukan/'.$keyword;
        } else {
            $url = 'Rujukan/List/Peserta/'.$keyword;
        }
        $response = $this->get($url);
        return json_decode($response, true);
    }
    public function insertRujukan($data = [])
    {
        $response = $this->post('Rujukan/2.0/insert', $data);
        return json_decode($response, true);
    }
    public function updateRujukan($data = [])
    {
        $response = $this->put('Rujukan/2.0/update', $data);
        return json_decode($response, true);
    }
    public function deleteRujukan($data = [])
    {
        $response = $this->delete('Rujukan/delete', $data);
        return json_decode($response, true);
    }
    public function insertRujukanKhusus($data = [])
    {
        $response = $this->post('Rujukan/Khusus/insert', $data);
        return json_decode($response, true);
    }
    public function deleteRujukanKhusus($data = [])
    {
        $response = $this->delete('Rujukan/Khusus/delete', $data);
        return json_decode($response, true);
    }
    public function listRujukanKhusus($bulan, $tahun)
    {
        $response = $this->get('Rujukan/Khusus/List/Bulan/' .$bulan. '/Tahun/' .$tahun);
        return json_decode($response, true);
    }
    public function listSpesialistikRujukan($kodePPk, $tglRujukan)
    {
        $response = $this->get('Rujukan/ListSpesialistik/PPKRujukan/' .$kodePPk. '/TglRujukan/' .$tglRujukan);
        return json_decode($response, true);
    }
    public function listSarana($kodePPk)
    {
        $response = $this->get('Rujukan/ListSarana/PPKRujukan/' .$kodePPk);
        return json_decode($response, true);
    }

    /** Service Rencana Kontrol/SPRI */
    public function insertRencanKontrol($data = [])
    {
        $response = $this->post('RencanaKontrol/insert', $data);
        return json_decode($response, true);
    }
    public function updateRencanKontrol($data = [])
    {
        $response = $this->put('RencanaKontrol/Update', $data);
        return json_decode($response, true);
    }
    public function hapusRencanKontrol($data = [])
    {
        $response = $this->delete('RencanaKontrol/Delete', $data);
        return json_decode($response, true);
    }
    public function insertSPRI($data = [])
    {
        $response = $this->post('RencanaKontrol/InsertSPRI', $data);
        return json_decode($response, true);
    }
    public function updateSPRI($data = [])
    {
        $response = $this->put('RencanaKontrol/UpdateSPRI', $data);
        return json_decode($response, true);
    }
    public function cariSepKontrol($noSep)
    {
        $response = $this->get('RencanaKontrol/nosep/' .$noSep);
        return json_decode($response, true);
    }
    public function cariNoSuratKontrol($noSurat)
    {
        $response = $this->get('RencanaKontrol/noSuratKontrol/' .$noSurat);
        return json_decode($response, true);
    }
    public function listRencanaKontrol($tglAwal, $tglAkhir, $filter)
    {
        $response = $this->get('RencanaKontrol/ListRencanaKontrol/tglAwal/' .$tglAwal. '/tglAkhir/' .$tglAkhir. '/filter/' .$filter);
        return json_decode($response, true);
    }
    public function listSpesialistikKontrol($jenis, $nomor, $tglKontrol)
    {
        $response = $this->get('RencanaKontrol/ListSpesialistik/JnsKontrol/' .$jenis. '/nomor/' .$nomor. '/TglRencanaKontrol/' .$tglKontrol);
        return json_decode($response, true);
    }
    public function jadwalPraktekDokter($jenis, $kodePoli, $tglKontrol)
    {
        $response = $this->get('RencanaKontrol/JadwalPraktekDokter/JnsKontrol/' .$jenis. '/KdPoli/' .$kodePoli. '/TglRencanaKontrol/' .$tglKontrol);
        return json_decode($response, true);
    }

    /** Service Lembar Pengajuan Klaim */
    public function insertLPK($data = [])
    {
        $response = $this->post('LPK/insert', $data);
        return json_decode($response, true);
    }
    public function updateLPK($data = [])
    {
        $response = $this->put('LPK/update', $data);
        return json_decode($response, true);
    }
    public function deleteLPK($data = [])
    {
        $response = $this->delete('LPK/delete', $data);
        return json_decode($response, true);
    }
    public function cariLPK($tglMasuk, $jnsPelayanan)
    {
        $response = $this->get('LPK/TglMasuk/'.$tglMasuk.'/JnsPelayanan/'.$jnsPelayanan);
        return json_decode($response, true);
    }

    /** Service Pembuatan Rujukan Balik */
    public function insertPRB($data = [])
    {
        $response = $this->post('PRB/insert', $data);
        return json_decode($response, true);
    }
    public function updatePRB($data = [])
    {
        $response = $this->put('PRB/update', $data);
        return json_decode($response, true);
    }
    public function deletePRB($data = [])
    {
        $response = $this->delete('PRB/delete', $data);
        return json_decode($response, true);
    }
    public function cariNomorSRB($noSurat, $noSep)
    {
        $response = $this->get('prb/'.$noSurat.'/nosep/'.$noSep);
        return json_decode($response, true);
    }
    public function cariTglSRB($tglMulai, $tglAkhir)
    {
        $response = $this->get('prb/tglMulai/'.$tglMulai.'/tglAkhir/'.$tglAkhir);
        return json_decode($response, true);
    }

    /** Service Referensi antrian */
    public function refpoli()
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/poli');
        return json_decode($response, true);
    }

    public function refdokter()
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/dokter');
        return json_decode($response, true);
    }

    /** Service Referensi Get Jadwal */
    public function getJadwal($kdpoli, $tanggal)
    {
        $response = $this->get('jadwaldokter/kodepoli/'.$kdpoli.'/tanggal/'.$tanggal);
        return json_decode($response, true);
    }
    public function update($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('jadwaldokter/updatejadwaldokter', $data, $header);
        return json_decode($response, true);
    }

    /** Service Referensi Antrian */
    public function getListTask($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/getlisttask',$data);
        return json_decode($response, true);
    }

    public function addAntrean($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/add', $data, $header);
        return json_decode($response, true);
    }

    public function cancelAntrean($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/batal', $data, $header);
        return json_decode($response, true);
    }

    public function updateWaktu($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/updatewaktu', $data, $header);
        return json_decode($response, true);
    }

    public function dashboardTgl($tanggal, $waktu)
    {
        $response = $this->get('dashboard/waktutunggu/tanggal/'.$tanggal.'/waktu/'.$waktu);
        return json_decode($response, true);
    }

    public function dashboardBln($bulan, $tahun, $waktu)
    {
        $response = $this->get('dashboard/waktutunggu/bulan/'.$bulan.'/tahun/' .$tahun. '/waktu/'.$waktu);
        return json_decode($response, true);
    }

}