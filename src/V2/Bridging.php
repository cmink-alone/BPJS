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
        $response = $this->get('referensi/diagnosa/' . $keyword);

        return $response;
    }
    public function poli($keyword)
    {
        $response = $this->get('referensi/poli/' . $keyword);
        return $response;
    }
    public function faskes($kd_faskes = null, $jns_faskes = null)
    {
        $response = $this->get('referensi/faskes/' . $kd_faskes . '/' . $jns_faskes);
        return $response;
    }

    public function dokterDpjp($jnsPelayanan, $tglPelayanan, $spesialis)
    {
        $response = $this->get('referensi/dokter/pelayanan/' . $jnsPelayanan . '/tglPelayanan/' . $tglPelayanan . '/Spesialis/' . $spesialis);
        return $response;
    }

    public function propinsi()
    {
        $response = $this->get('referensi/propinsi');
        return $response;
    }

    public function kabupaten($kdPropinsi)
    {
        $response = $this->get('referensi/kabupaten/propinsi/' . $kdPropinsi);
        return $response;
    }

    public function kecamatan($kdKabupaten)
    {
        $response = $this->get('referensi/kecamatan/kabupaten/' . $kdKabupaten);
        return $response;
    }

    public function diagnosaPrb()
    {
        $response = $this->get('referensi/diagnosaprb');
        return $response;
    }

    public function obatPrb($namaObat)
    {
        $response = $this->get('referensi/obatprb/' . $namaObat);
        return $response;
    }

    public function procedure($keyword)
    {
        $response = $this->get('referensi/procedure/' . $keyword);
        return $response;
    }

    public function kelasRawat()
    {
        $response = $this->get('referensi/kelasrawat');
        return $response;
    }

    public function dokter($keyword)
    {
        $response = $this->get('referensi/dokter/' . $keyword);
        return $response;
    }

    public function spesialistik()
    {
        $response = $this->get('referensi/spesialistik');
        return $response;
    }

    public function ruangrawat()
    {
        $response = $this->get('referensi/ruangrawat');
        return $response;
    }

    public function carakeluar()
    {
        $response = $this->get('referensi/carakeluar');
        return $response;
    }

    public function pascapulang()
    {
        $response = $this->get('referensi/pascapulang');
        return $response;
    }

    /** Service Peserta */
    public function getByNoKartu($noKartu, $tglPelayananSEP)
    {
        $response = $this->get('Peserta/nokartu/' . $noKartu . '/tglSEP/' . $tglPelayananSEP);
        return $response;
    }
    public function getByNIK($nik, $tglPelayananSEP)
    {
        $response = $this->get('Peserta/nik/' . $nik . '/tglSEP/' . $tglPelayananSEP);
        return $response;
    }

    /** Service SEP */
    public function insertSEP($data = [])
    {
        $response = $this->post('SEP/2.0/insert', $data);
        return $response;
    }
    public function updateSEP($data = [])
    {
        $response = $this->put('SEP/2.0/update', $data);
        return $response;
    }
    public function deleteSEP($data = [])
    {
        $response = $this->delete('SEP/2.0/delete', $data);
        return $response;
    }
    public function cariSEP($nosep)
    {
        $response = $this->get('SEP/' . $nosep);
        return $response;
    }
    public function suplesiJasaRaharja($noKartu, $tglPelayanan)
    {
        $response = $this->get('sep/JasaRaharja/Suplesi/' . $noKartu . '/tglPelayanan/' . $tglPelayanan);
        return $response;
    }
    public function dataIndukKll($noKartu)
    {
        $response = $this->get('sep/KllInduk/List/' . $noKartu);
        return $response;
    }
    public function pengajuanSep($data = [])
    {
        $response = $this->post('Sep/pengajuanSEP', $data);
        return $response;
    }
    public function approvalSep($data = [])
    {
        $response = $this->post('Sep/aprovalSEP', $data);
        return $response;
    }
    public function updateTglPlg($data = [])
    {
        $response = $this->put('SEP/2.0/updtglplg', $data);
        return $response;
    }
    public function ListUpdateTglPlg($bulan, $tahun, $filter = null)
    {
        $response = $this->get('Sep/updtglplg/list/bulan/' . $bulan . '/tahun/' . $tahun . '/' . $filter);
        return $response;
    }
    public function inacbgSEP($nosep)
    {
        $response = $this->get('sep/cbg/' . $nosep);
        return $response;
    }
    public function DataSepInternal($nosep)
    {
        $response = $this->get('SEP/Internal/' . $nosep);
        return $response;
    }
    public function deleteSepInternal($data = [])
    {
        $response = $this->delete('SEP/Internal/delete', $data);
        return $response;
    }
    public function getFingerPrint($noKartu, $tglPelayanan)
    {
        $response = $this->get('SEP/FingerPrint/Peserta/' . $noKartu . '/tglPelayanan/' . $tglPelayanan);
        return $response;
    }
    public function getListFingerPrint($tglPelayanan)
    {
        $response = $this->get('SEP/FingerPrint/List/Peserta/TglPelayanan/' . $tglPelayanan);
        return $response;
    }

    /** Service Monitoring */
    public function dataKunjungan($tglSep, $jnsPelayanan)
    {
        $response = $this->get('Monitoring/Kunjungan/Tanggal/' . $tglSep . '/JnsPelayanan/' . $jnsPelayanan);
        return $response;
    }

    public function dataKlaim($tglPulang, $jnsPelayanan, $statusKlaim)
    {
        $response = $this->get('Monitoring/Klaim/Tanggal/' . $tglPulang . '/JnsPelayanan/' . $jnsPelayanan . '/Status/' . $statusKlaim);
        return $response;
    }
    public function historyPelayanan($noKartu, $tglAwal, $tglAkhir)
    {
        $response = $this->get('monitoring/HistoriPelayanan/NoKartu/' . $noKartu . '/tglMulai/' . $tglAwal . '/tglAkhir/' . $tglAkhir);
        return $response;
    }
    public function dataKlaimJasaRaharja($jenis, $tglMulai, $tglAkhir)
    {
        $response = $this->get('monitoring/JasaRaharja/JnsPelayanan/' . $jenis . '/tglMulai/' . $tglMulai . '/tglAkhir/' . $tglAkhir);
        return $response;
    }

    /** Service Rujukan */
    public function cariByNoRujukan($searchBy, $noRujukan)
    {
        if ($searchBy == 'RS') {
            $url = 'Rujukan/RS/' . $noRujukan;
        } else {
            $url = 'Rujukan/' . $noRujukan;
        }
        $response = $this->get($url);
        return $response;
    }
    public function cariByNoKartu($searchBy, $noKartu, $multi = false)
    {
        if ($multi) {
            $record = $multi ? 'List/' : '';
            if ($searchBy == 'RS') {
                $url = 'Rujukan/RS/' . $record . 'Peserta/' . $noKartu;
            } else {
                $url = 'Rujukan/' . $record . 'Peserta/' . $noKartu;
            }
        } else {
            if ($searchBy == 'RS') {
                $url = 'Rujukan/RS/Peserta/' . $noKartu;
            } else {
                $url = 'Rujukan/Peserta/' . $noKartu;
            }
        }
        $response = $this->get($url);
        return $response;
    }
    public function cariByTglRujukan($searchBy, $keyword)
    {
        if ($searchBy == 'RS') {
            $url = 'Rujukan/RS/TglRujukan/' . $keyword;
        } else {
            $url = 'Rujukan/List/Peserta/' . $keyword;
        }
        $response = $this->get($url);
        return $response;
    }
    public function insertRujukan($data = [])
    {
        $response = $this->post('Rujukan/2.0/insert', $data);
        return $response;
    }
    public function updateRujukan($data = [])
    {
        $response = $this->put('Rujukan/2.0/Update', $data);
        return $response;
    }
    public function deleteRujukan($data = [])
    {
        $response = $this->delete('Rujukan/delete', $data);
        return $response;
    }
    public function insertRujukanKhusus($data = [])
    {
        $response = $this->post('Rujukan/Khusus/insert', $data);
        return $response;
    }
    public function deleteRujukanKhusus($data = [])
    {
        $response = $this->delete('Rujukan/Khusus/delete', $data);
        return $response;
    }
    public function listRujukanKhusus($bulan, $tahun)
    {
        $response = $this->get('Rujukan/Khusus/List/Bulan/' . $bulan . '/Tahun/' . $tahun);
        return $response;
    }
    public function listSpesialistikRujukan($kodePPk, $tglRujukan)
    {
        $response = $this->get('Rujukan/ListSpesialistik/PPKRujukan/' . $kodePPk . '/TglRujukan/' . $tglRujukan);
        return $response;
    }
    public function listSarana($kodePPk)
    {
        $response = $this->get('Rujukan/ListSarana/PPKRujukan/' . $kodePPk);
        return $response;
    }
    public function listRujukanKeluarRs($tglmulai, $tglakhir)
    {
        $response = $this->get('Rujukan/Keluar/List/tglMulai/' . $tglmulai . '/tglAkhir/' . $tglakhir);
        return $response;
    }
    public function DataRujukan($norujukan)
    {
        $response = $this->get('Rujukan/Keluar/' . $norujukan);
        return $response;
    }
    public function DataJmlSepRujukan($jenisrujukan, $norujukan)
    {
        $response = $this->get('Rujukan/JumlahSEP/' . $jenisrujukan . '/' . $norujukan);
        return $response;
    }

    /** Service Rencana Kontrol/SPRI */
    public function insertRencanKontrol($data = [])
    {
        $response = $this->post('RencanaKontrol/insert', $data);
        return $response;
    }
    public function updateRencanKontrol($data = [])
    {
        $response = $this->put('RencanaKontrol/Update', $data);
        return $response;
    }
    public function hapusRencanKontrol($data = [])
    {
        $response = $this->delete('RencanaKontrol/Delete', $data);
        return $response;
    }
    public function insertSPRI($data = [])
    {
        $response = $this->post('RencanaKontrol/InsertSPRI', $data);
        return $response;
    }
    public function updateSPRI($data = [])
    {
        $response = $this->put('RencanaKontrol/UpdateSPRI', $data);
        return $response;
    }
    public function cariSepKontrol($noSep)
    {
        $response = $this->get('RencanaKontrol/nosep/' . $noSep);
        return $response;
    }
    public function cariNoSuratKontrol($noSurat)
    {
        $response = $this->get('RencanaKontrol/noSuratKontrol/' . $noSurat);
        return $response;
    }
    public function listRencanaKontrolByNoka($bulan, $tahun, $nokartu, $filter)
    {
        $response = $this->get('RencanaKontrol/ListRencanaKontrol/Bulan/' . $bulan . '/Tahun/' . $tahun . '/Nokartu/' . $nokartu . '/filter/' . $filter);
        return $response;
    }
    public function listRencanaKontrol($tglAwal, $tglAkhir, $filter)
    {
        $response = $this->get('RencanaKontrol/ListRencanaKontrol/tglAwal/' . $tglAwal . '/tglAkhir/' . $tglAkhir . '/filter/' . $filter);
        return $response;
    }
    public function listSpesialistikKontrol($jenis, $nomor, $tglKontrol)
    {
        $response = $this->get('RencanaKontrol/ListSpesialistik/JnsKontrol/' . $jenis . '/nomor/' . $nomor . '/TglRencanaKontrol/' . $tglKontrol);
        return $response;
    }
    public function jadwalPraktekDokter($jenis, $kodePoli, $tglKontrol)
    {
        $response = $this->get('RencanaKontrol/JadwalPraktekDokter/JnsKontrol/' . $jenis . '/KdPoli/' . $kodePoli . '/TglRencanaKontrol/' . $tglKontrol);
        return $response;
    }

    /** Service Lembar Pengajuan Klaim */
    public function insertLPK($data = [])
    {
        $response = $this->post('LPK/insert', $data);
        return $response;
    }
    public function updateLPK($data = [])
    {
        $response = $this->put('LPK/update', $data);
        return $response;
    }
    public function deleteLPK($data = [])
    {
        $response = $this->delete('LPK/delete', $data);
        return $response;
    }
    public function cariLPK($tglMasuk, $jnsPelayanan)
    {
        $response = $this->get('LPK/TglMasuk/' . $tglMasuk . '/JnsPelayanan/' . $jnsPelayanan);
        return $response;
    }

    /** Service Pembuatan Rujukan Balik */
    public function insertPRB($data = [])
    {
        $response = $this->post('PRB/insert', $data);
        return $response;
    }
    public function updatePRB($data = [])
    {
        $response = $this->put('PRB/update', $data);
        return $response;
    }
    public function deletePRB($data = [])
    {
        $response = $this->delete('PRB/delete', $data);
        return $response;
    }
    public function cariNomorSRB($noSurat, $noSep)
    {
        $response = $this->get('prb/' . $noSurat . '/nosep/' . $noSep);
        return $response;
    }
    public function cariTglSRB($tglMulai, $tglAkhir)
    {
        $response = $this->get('prb/tglMulai/' . $tglMulai . '/tglAkhir/' . $tglAkhir);
        return $response;
    }

    /** Service Referensi antrian */
    public function refpoli()
    {
        $header = [
            'Content-Type' => 'application/json'
        ];
        $response = $this->get('ref/poli');
        return $response;
    }

    public function refdokter()
    {
        $header = [
            'Content-Type' => 'application/json'
        ];
        $response = $this->get('ref/dokter');
        return $response;
    }

    /** Service Referensi Get Jadwal */
    public function getJadwal($kdpoli, $tanggal)
    {
        $response = $this->get('jadwaldokter/kodepoli/' . $kdpoli . '/tanggal/' . $tanggal);
        return $response;
    }
    public function update($data = [])
    {
        $header = [
            'Content-Type' => 'application/json'
        ];
        $response = $this->post('jadwaldokter/updatejadwaldokter', $data, $header);
        return $response;
    }

    /** Service Referensi Antrian */
    public function getListTask($data = [])
    {
        $header = [
            'Content-Type' => 'application/json'
        ];
        $response = $this->post('antrean/getlisttask', $data);
        return $response;
    }

    public function addAntrean($data = [])
    {
        $header = [
            'Content-Type' => 'application/json'
        ];
        $response = $this->post('antrean/add', $data, $header);
        return $response;
    }

    public function cancelAntrean($data = [])
    {
        $header = [
            'Content-Type' => 'application/json'
        ];
        $response = $this->post('antrean/batal', $data, $header);
        return $response;
    }

    public function updateWaktu($data = [])
    {
        $header = [
            'Content-Type' => 'application/json'
        ];
        $response = $this->post('antrean/updatewaktu', $data, $header);
        return $response;
    }

    public function dashboardTgl($tanggal, $waktu)
    {
        $response = $this->get('dashboard/waktutunggu/tanggal/' . $tanggal . '/waktu/' . $waktu);
        return $response;
    }

    public function dashboardBln($bulan, $tahun, $waktu)
    {
        $response = $this->get('dashboard/waktutunggu/bulan/' . $bulan . '/tahun/' . $tahun . '/waktu/' . $waktu);
        return $response;
    }

}