# BPJS Kesehatan Indonesia
PHP package to access BPJS Kesehatan API :ambulance:.
This package is a wrapper of BPJS VClaim Web Service
https://dvlp.bpjs-kesehatan.go.id:8888/trust-mark/portal.html

Dibuat untuk mempermudah tanpa menggunakan metode lama dari PHP_CURL,
pengembangan dari BPJS Wrapper nsulistiawan (https://github.com/nsulistiyawan/bpjs)

#### Installation :fire:

`composer require cmink/bpjs`

#### Contoh Penggunaan :
```php
//use your own bpjs config
$vclaim_conf = [
    'cons_id' => '123456',
    'secret_key' => '123456',
    'user_key' => 'userkey untuk mengakses ws BPJS',
    'base_url' => 'url webservice BPJS',
    'service_name' => 'vclaim-rest'
];

// use Referensi service
// https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog/Referensi

$referensi = new cmiNk\Bpjs\V2\Bridging($vclaim_conf);
var_dump($referensi->diagnosa('A00'));

//use Peserta service
//https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog/Peserta

$peserta = new cmiNk\Bpjs\V2\Bridging($vclaim_conf);
var_dump($peserta->getByNoKartu('123456789','2018-09-16'));
```


#### Supported Services (WIP) :rocket:

- [x] Referensi
- [x] Peserta
- [x] SEP
- [x] Rujukan
- [x] Lembar Pengajuan Klaim
- [x] Monitoring
- [x] Aplicare
- [x] PRB (Pembuatan Rujukan Balik)
- [x] Rencana Kontrol/SPRI


#### Contributions :ok_hand:
Your contribution is always welcome!
