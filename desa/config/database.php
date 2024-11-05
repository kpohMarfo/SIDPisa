<?php
// -------------------------------------------------------------------------
//
// Letakkan username, password dan database sebetulnya di file ini.
// File ini JANGAN di-commit ke GIT. TAMBAHKAN di .gitignore
// -------------------------------------------------------------------------

// Data Konfigurasi MySQL yang disesuaikan

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = 'eyJpdiI6Im1SVEJFZW8yZGl6NGxROWE4TnV5S1E9PSIsInZhbHVlIjoiUGZybEE3bEZzY3JIZU1sd1U5b0dEQT09IiwibWFjIjoiYmEwZWIzMDg0ODNhODBjOGVhNmZlZGRiY2U0NjFhOWZkNjVlOTJkMzE0M2IyYzY1ZThiZGRhNDAwYTRjNjAzYyIsInRhZyI6IiJ9';
$db['default']['port']     = 3306;
$db['default']['database'] = 'pisa';
$db['default']['dbcollat'] = 'utf8_general_ci';

/*
| Untuk setting koneksi database 'Strict Mode'
| Sesuaikan dengan ketentuan hosting
*/
$db['default']['stricton'] = true;