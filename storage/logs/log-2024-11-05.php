<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-05 04:47:41 --> PDOException: SQLSTATE[HY000] [1049] Unknown database 'pisa' in C:\xampp\htdocs\OpenSID-umum\donjo-app\controllers\Install.php:180
Stack trace:
#0 C:\xampp\htdocs\OpenSID-umum\donjo-app\controllers\Install.php(180): PDO->__construct('mysql:host=loca...', 'root', '')
#1 C:\xampp\htdocs\OpenSID-umum\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): Install->database()
#2 C:\xampp\htdocs\OpenSID-umum\index.php(284): require_once('C:\\xampp\\htdocs...')
#3 {main}
NOTICE - 2024-11-05 04:49:03 --> Mulai memasang data awal
NOTICE - 2024-11-05 04:49:27 --> Berhasil memperbarui data awal tabel setting_aplikasi
NOTICE - 2024-11-05 04:49:27 --> Berhasil memperbarui data awal tabel setting_modul
NOTICE - 2024-11-05 04:49:27 --> Berhasil memperbarui data awal tabel user_grup
NOTICE - 2024-11-05 04:49:27 --> Berhasil memperbarui data awal tabel user
NOTICE - 2024-11-05 04:49:28 --> Berhasil memperbarui data awal tabel media_sosial
NOTICE - 2024-11-05 04:49:28 --> Berhasil memperbarui data awal tabel kehadiran_jam_kerja
NOTICE - 2024-11-05 04:49:28 --> Berhasil memperbarui data awal tabel ref_jabatan
NOTICE - 2024-11-05 04:49:28 --> Berhasil memperbarui data awal tabel anjungan_menu
NOTICE - 2024-11-05 04:49:28 --> Berhasil memperbarui data awal tabel gis_simbol
NOTICE - 2024-11-05 04:49:28 --> Berhasil memperbarui data awal tabel ref_syarat_surat
NOTICE - 2024-11-05 04:49:28 --> Berhasil memperbarui data awal tabel widget
NOTICE - 2024-11-05 04:49:28 --> Berhasil memperbarui data awal tabel tweb_penduduk_umur
NOTICE - 2024-11-05 04:49:30 --> Berhasil memperbarui data awal tabel notifikasi
NOTICE - 2024-11-05 04:49:36 --> Berhasil Jalankan Migrasi_2024010171
NOTICE - 2024-11-05 04:49:37 --> Berhasil Jalankan Migrasi_2024020171
NOTICE - 2024-11-05 04:49:37 --> Berhasil Jalankan Migrasi_2024030171
ERROR - 2024-11-05 04:49:37 --> Jalan Jie
NOTICE - 2024-11-05 04:49:38 --> Berhasil Jalankan Migrasi_2024040171
NOTICE - 2024-11-05 04:49:38 --> Berhasil Jalankan Migrasi_2024041751
NOTICE - 2024-11-05 04:49:38 --> Berhasil Jalankan Migrasi_2024042451
NOTICE - 2024-11-05 04:49:38 --> Berhasil Jalankan Migrasi_2024101801
NOTICE - 2024-11-05 04:49:38 --> Berhasil Jalankan Migrasi_2024110101
NOTICE - 2024-11-05 04:49:38 --> Migrasi data 2024042751
NOTICE - 2024-11-05 04:49:38 --> Berhasil Jalankan migrasi_dev
NOTICE - 2024-11-05 04:49:40 --> Versi database sudah terbaru
ERROR - 2024-11-05 04:49:40 --> updateConfigFile password - eyJpdiI6Im1SVEJFZW8yZGl6NGxROWE4TnV5S1E9PSIsInZhbHVlIjoiUGZybEE3bEZzY3JIZU1sd1U5b0dEQT09IiwibWFjIjoiYmEwZWIzMDg0ODNhODBjOGVhNmZlZGRiY2U0NjFhOWZkNjVlOTJkMzE0M2IyYzY1ZThiZGRhNDAwYTRjNjAzYyIsInRhZyI6IiJ9
NOTICE - 2024-11-05 04:49:40 --> Selesai memasang data awal
NOTICE - 2024-11-05 10:54:07 --> Website tidak dapat diakses 
NOTICE - 2024-11-05 10:54:11 --> Website tidak dapat diakses 
ERROR - 2024-11-05 11:00:35 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Resolving timed out after 4002 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\xampp\htdocs\OpenSID-umum\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\xampp\htdocs\OpenSID-umum\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\xampp\htdocs\OpenSID-umum\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\xampp\htdocs\OpenSID-umum\donjo-app\controllers\First.php(119): Track_model->track_desa('first')
#18 C:\xampp\htdocs\OpenSID-umum\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\xampp\htdocs\OpenSID-umum\index.php(284): require_once('C:\\xampp\\htdocs...')
#20 {main}
ERROR - 2024-11-05 11:04:06 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Resolving timed out after 4011 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\xampp\htdocs\OpenSID-umum\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\xampp\htdocs\OpenSID-umum\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\xampp\htdocs\OpenSID-umum\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\xampp\htdocs\OpenSID-umum\donjo-app\controllers\First.php(119): Track_model->track_desa('first')
#18 C:\xampp\htdocs\OpenSID-umum\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\xampp\htdocs\OpenSID-umum\index.php(284): require_once('C:\\xampp\\htdocs...')
#20 {main}
ERROR - 2024-11-05 11:04:20 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Resolving timed out after 4001 milliseconds (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:210
Stack trace:
#0 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 C:\xampp\htdocs\OpenSID-umum\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 C:\xampp\htdocs\OpenSID-umum\donjo-app\helpers\opensid_helper.php(275): GuzzleHttp\Client->post('https://pantau....', Array)
#15 C:\xampp\htdocs\OpenSID-umum\donjo-app\models\Track_model.php(135): httpPost('https://pantau....', Array)
#16 C:\xampp\htdocs\OpenSID-umum\donjo-app\models\Track_model.php(65): Track_model->kirim_data()
#17 C:\xampp\htdocs\OpenSID-umum\donjo-app\controllers\First.php(119): Track_model->track_desa('first')
#18 C:\xampp\htdocs\OpenSID-umum\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 C:\xampp\htdocs\OpenSID-umum\index.php(284): require_once('C:\\xampp\\htdocs...')
#20 {main}
ERROR - 2024-11-05 05:12:55 --> Severity: Warning --> The use statement with non-compound name 'Exception' has no effect C:\xampp\htdocs\OpenSID-umum\donjo-app\controllers\Rtm.php 49
ERROR - 2024-11-05 05:12:56 --> Severity: Warning --> The use statement with non-compound name 'Exception' has no effect C:\xampp\htdocs\OpenSID-umum\donjo-app\controllers\Rtm.php 49
ERROR - 2024-11-05 05:12:56 --> Severity: Warning --> The use statement with non-compound name 'Exception' has no effect C:\xampp\htdocs\OpenSID-umum\donjo-app\controllers\Rtm.php 49
ERROR - 2024-11-05 05:12:56 --> Severity: Warning --> The use statement with non-compound name 'Exception' has no effect C:\xampp\htdocs\OpenSID-umum\donjo-app\controllers\Rtm.php 49
