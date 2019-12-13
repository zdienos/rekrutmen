<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Remove the default route set by the module extensions
|--------------------------------------------------------------------------
|
| Normally by default this route is accepted:
|
| module/controller/method
|
| If you do not want to allow access via that route you should add:
|
| $route['module'] = "";
| $route['module/(:any)'] = "";
|
*/

//$route['report/(:any)'] = "";
/*
|--------------------------------------------------------------------------
| Routes to accept
|--------------------------------------------------------------------------
|
| Map all of your valid module routes here such as:
|
| $route['your/custom/route'] = "controller/method";
|
*/


/* Home */
//$route['rekrutmen'] = "rekrutmen/diri";
// $route['otentikasi'] = "rekrutmen/otentikasi";
// $route['otentikasi/login'] = "rekrutmen/otentikasi/login";
// $route['otentikasi/daftar'] = "rekrutmen/otentikasi/daftar";
// $route['otentikasi/aktivasi'] = "rekrutmen/otentikasi/aktivasi";
// $route['otentikasi/logout'] = "rekrutmen/otentikasi/logout";
// $route['otentikasi/email'] = "rekrutmen/otentikasi/email";

$route['login'] = "rekrutmen/otentikasi/login";
$route['daftar'] = "rekrutmen/otentikasi/daftar";
$route['aktivasi'] = "rekrutmen/otentikasi/aktivasi";
$route['logout'] = "rekrutmen/otentikasi/logout";
$route['email'] = "rekrutmen/otentikasi/email";

$route['diri'] = "rekrutmen/diri";
$route['diri/simpan_data_diri'] = "rekrutmen/diri/simpan_data_diri";

$route['keluarga'] = "rekrutmen/keluarga";
$route['keluarga/get_data_keluarga_json'] = "rekrutmen/keluarga/get_data_keluarga_json";
$route['keluarga/simpan_data_keluarga'] = "rekrutmen/keluarga/simpan_data_keluarga";
$route['keluarga/update_data_keluarga'] = "rekrutmen/keluarga/update_data_keluarga";
$route['keluarga/hapus_data_keluarga'] = "rekrutmen/keluarga/hapus_data_keluarga";

$route['pendidikan'] = "rekrutmen/pendidikan";
$route['pendidikan/simpan_data_pendidikan'] = "rekrutmen/pendidikan/simpan_data_pendidikan";
$route['pendidikan/update_data_pendidikan'] = "rekrutmen/pendidikan/update_data_pendidikan";
$route['pendidikan/hapus_data_pendidikan'] = "rekrutmen/pendidikan/hapus_data_pendidikan";
//$route['otentikasi'] = "rekrutmen/otentikasi";

//$route['rekrutmen/profil'] = "rekrutmen/profil";

// /* Adm_profil */
// $route['adm_profil'] = "administrator/adm_profil";
// $route['adm_profil/simpan_profil'] = "administrator/adm_profil/simpan_profil";
// $route['adm_profil/simpan_foto'] = "administrator/adm_profil/simpan_foto";
// $route['adm_profil/simpan_pwd'] = "administrator/adm_profil/simpan_pwd";
// $route['adm_profil/simpan_open_username'] = "administrator/adm_profil/simpan_open_username";

// /* User */
// $route['adm_user'] = "administrator/adm_user";
// $route['adm_user/tambah'] = "administrator/adm_user/tambah";
// $route['adm_user/edit/(:num)'] = "administrator/adm_user/edit";
// $route['adm_user/cari_admin'] = "administrator/adm_user/cari_admin";
// $route['adm_user/cari'] = "administrator/adm_user/cari";
// $route['adm_user/cari_url'] = "administrator/adm_user/cari_url";
// $route['adm_user/simpan'] = "administrator/adm_user/simpan";
// $route['adm_user/hapus/(:num)'] = "administrator/adm_user/hapus";

// /* Pustaka Level */
// $route['adm_p_level'] = "administrator/adm_p_level";
// $route['adm_p_level/cari'] = "administrator/adm_p_level/cari";
// $route['adm_p_level/simpan'] = "administrator/adm_p_level/simpan";
// $route['adm_p_level/hapus/(:num)'] = "administrator/adm_p_level/hapus";

// /* Pustaka Url */
// $route['adm_p_url'] = "administrator/adm_p_url";
// $route['adm_p_url/cari'] = "administrator/adm_p_url/cari";
// $route['adm_p_url/simpan'] = "administrator/adm_p_url/simpan";
// $route['adm_p_url/hapus/(:num)'] = "administrator/adm_p_url/hapus";

// // Original version would have to have yourmodule at the start of the route for the routes.php to be read

// /* Home */
// $route['adm_home/adm_home'] = "administrator/adm_home";
