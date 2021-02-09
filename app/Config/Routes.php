<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth\Login::index');
$routes->post('login', 'Auth\Auth::login');
$routes->get('glogin', 'Auth\Auth::gauth');
$routes->post('register_google', 'Auth\Login::register_google');


$routes->get('logout', 'Auth\Auth::logout');
$routes->group('akun', ['filter' => 'akun_auth'], function ($routes) {
	//$routes->get('test', 'Admin\ImportDataSiswa::test_index');
	//$routes->post('test', 'Admin\ImportDataSiswa::test_delete');


	$routes->get('/', 'Akun\Akun::index');
	$routes->post('sync', 'Akun\Akun::syncron');

	/**
	 * --------------------------------------------------------------------
	 * Data Pribadi Routing
	 * --------------------------------------------------------------------
	 */
	$routes->get('data_pribadi', 'Akun\DataPribadi::data_guru');

	/**
	 * --------------------------------------------------------------------
	 * Profile Routing
	 * --------------------------------------------------------------------
	 */
	$routes->get('profile', 'Akun\Profile::index');
	$routes->post('profile/save_foto', 'Akun\Profile::upload_foto');
	$routes->post('profile/save_profile', 'Akun\Profile::simpan_profile');
	$routes->post('profile/save_background', 'Akun\Profile::save_background');
	$routes->post('profile/ganti_password', 'Akun\Profile::ganti_pass');
});
$routes->group('akun', ['filter' => 'email_ditemukan'], function ($routes) {

	/**
	 * --------------------------------------------------------------------
	 * Aplikasi Guru dan Tendik Routing
	 * --------------------------------------------------------------------
	 */

	/**
	 * Siswa Routing
	 */
	$routes->get('app/siswa', 'Aplikasi\Siswa::index');
	$routes->get('app/siswa/list_siswa', 'Aplikasi\Siswa::get_siswa');
	$routes->post('app/siswa/single_siswa', 'Aplikasi\Siswa::view_data');
	/**
	 * --------------------------------------------------------------------
	 */
	/**
	 * Rombol Routing
	 */
	$routes->get('app/rombel', 'Aplikasi\Rombel::index');
	$routes->get('app/rombel/list_rombel', 'Aplikasi\Rombel::get_rombel');
	$routes->get('app/rombel/per_kelas/(:any)', 'Aplikasi\Rombel::view_rombel/$1');
	$routes->get('app/rombel/ambil_kelas/(:any)', 'Aplikasi\Rombel::get_siswa_rombel/$1');
});
$routes->group('akun', ['filter' => 'aplikasi_surat'], function ($routes) {
	/**
	 *---------------------------- Surat Routing
	 * ----------------------------Surat Keluar---------------------------------------------
	 */
	$routes->get('app/arsipsurat/surat_keluar', 'Aplikasi\ArsipSurat::surat_keluar');
	$routes->post('app/arsipsurat/surat_keluar', 'Aplikasi\ArsipSurat::surat_keluar');
	$routes->post('app/arsipsurat/edit_surat_keluar', 'Aplikasi\ArsipSurat::edit_surat_keluar');
	$routes->post('app/arsipsurat/hapus_surat_keluar', 'Aplikasi\ArsipSurat::hapus_surat_keluar');
	$routes->post('app/arsipsurat/hapus_permanen_surat_keluar', 'Aplikasi\ArsipSurat::hapus_permanen_surat_keluar');
	$routes->post('app/arsipsurat/simpan_edit_surat_keluar', 'Aplikasi\ArsipSurat::simpan_edit_surat_keluar');
	$routes->get('app/arsipsurat/get_all_surat_keluar/(:any)', 'Aplikasi\ArsipSurat::get_surat_keluar_list/$1');

	/**
	 * ----------------------------Surat Keputusan--------------------------------------------
	 */
	$routes->get('app/arsipsurat/surat_keputusan', 'Aplikasi\ArsipSurat::surat_keputusan');
	$routes->post('app/arsipsurat/surat_keputusan', 'Aplikasi\ArsipSurat::surat_keputusan');
	$routes->post('app/arsipsurat/edit_surat_keputusan', 'Aplikasi\ArsipSurat::edit_surat_keputusan');
	$routes->post('app/arsipsurat/hapus_surat_keputusan', 'Aplikasi\ArsipSurat::hapus_surat_keputusan');
	$routes->post('app/arsipsurat/hapus_permanen_surat_keputusan', 'Aplikasi\ArsipSurat::hapus_permanen_surat_keputusan');
	$routes->post('app/arsipsurat/simpan_edit_surat_keputusan', 'Aplikasi\ArsipSurat::simpan_edit_surat_keputusan');
	$routes->get('app/arsipsurat/get_all_surat_keputusan/(:any)', 'Aplikasi\ArsipSurat::get_surat_keputusan_list/$1');

	/**
	 * ----------------------------Surat Eskul--------------------------------------------
	 */
	$routes->get('app/arsipsurat/surat_eskul', 'Aplikasi\ArsipSurat::surat_eskul');
	$routes->post('app/arsipsurat/surat_eskul', 'Aplikasi\ArsipSurat::surat_eskul');
	$routes->post('app/arsipsurat/edit_surat_eskul', 'Aplikasi\ArsipSurat::edit_surat_eskul');
	$routes->post('app/arsipsurat/hapus_surat_eskul', 'Aplikasi\ArsipSurat::hapus_surat_eskul');
	$routes->post('app/arsipsurat/hapus_permanen_surat_eskul', 'Aplikasi\ArsipSurat::hapus_permanen_surat_eskul');
	$routes->post('app/arsipsurat/simpan_edit_surat_eskul', 'Aplikasi\ArsipSurat::simpan_edit_surat_eskul');
	$routes->get('app/arsipsurat/get_all_surat_eskul/(:any)', 'Aplikasi\ArsipSurat::get_surat_eskul_list/$1');
});
$routes->group('akun', ['filter' => 'datapegawai_auth'], function ($routes) {
	$routes->get('admin/data_pegawai/gtk', 'Admin\DaftarGuru::index');
	$routes->get('admin/data_pegawai/gtk/get_all', 'Admin\DaftarGuru::get_all_guru');
	$routes->post('admin/data_pegawai/gtk/single_gtk', 'Admin\DaftarGuru::view_data');
	$routes->get('admin/data_pegawai/ptk', 'Admin\DaftarTendik::index');
	$routes->get('admin/data_pegawai/ptk/get_all', 'Admin\DaftarTendik::get_all_tendik');
	$routes->post('admin/data_pegawai/ptk/single_ptk', 'Admin\DaftarTendik::view_data');
});
$routes->group('akun', ['filter' => 'admin_auth'], function ($routes) {
	/**
	 * --------------------------------------------------------------------
	 * Admin Routing
	 * --------------------------------------------------------------------
	 */	/**
	 * ----------------------------Import Siswa--------------------------------------------
	 */
	$routes->get('app/arsipsurat/get_all_surat_keluar_admin/(:any)', 'Aplikasi\ArsipSurat::get_surat_keluar_list_admin/$1');
	$routes->get('app/arsipsurat/get_all_surat_keputusan_admin/(:any)', 'Aplikasi\ArsipSurat::get_surat_keputusan_list_admin/$1');
	$routes->get('app/arsipsurat/get_all_surat_eskul_admin/(:any)', 'Aplikasi\ArsipSurat::get_surat_eskul_list_admin/$1');



	$routes->get('admin/importsiswa', 'Admin\ImportDataSiswa::index');
	$routes->post('admin/importsiswa', 'Admin\ImportDataSiswa::proses_import');
	/**
	 * 	----------------------------Import Guru--------------------------------------------
	 */
	$routes->get('admin/importgtkptk', 'Admin\ImportDataGTKPTK::index');
	$routes->post('admin/importguru', 'Admin\ImportDataGTKPTK::proses_import_guru');
	$routes->post('admin/importptk', 'Admin\ImportDataGTKPTK::proses_import_ptk');

	/**
	 * ----------------------------Surat Keputusan--------------------------------------------
	 */
	$routes->get('admin/get_tahun_pelajaran', 'Admin\TahunPelajaran::get_tahun_pelajaran');
	$routes->get('admin/tahunpelajaran', 'Admin\TahunPelajaran::tahun_pelajaran');
	$routes->post('admin/tambahtahunpelajaran', 'Admin\TahunPelajaran::tahun_pelajaran');
	$routes->post('admin/tahunpelajaran', 'Admin\TahunPelajaran::tahun_aktif');
	/**
	 * ----------------------------Daftar Guru--------------------------------------------
	 */

	/**

	 * ----------------------------Daftar Tendik--------------------------------------------
	 */


	$routes->get('admin/users', 'Admin\AkunList::index');
	$routes->get('admin/users/get_all_gtkptk', 'Admin\AkunList::get_all_akun_gtkptk');
	$routes->post('admin/users/single_users', 'Admin\AkunList::view_data');
});
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
