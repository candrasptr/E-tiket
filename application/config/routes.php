<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Admin
$route['editStasiun'] = 'admin/edit_stasiun';
$route['editBandara'] = 'admin/edit_Bandara';
$route['editJadwal'] = 'admin/edit_jadwal';
$route['editJadwalpesawat'] = 'admin/edit_jadwalpesawat';
$route['admin/dashboard/edit/(:any)'] = 'admin/KeHalamanEditStasiun/$1';
$route['admin/dashboard/editJadwal/(:any)'] = 'admin/KeHalamanEditJadwal/$1';
$route['admin/dashboard/editJadwalpesawat/(:any)'] = 'admin/KeHalamanEditJadwalpesawat/$1';
$route['admin/dashboard/editPesawat/(:any)'] = 'admin/KeHalamanEditBandara/$1';
$route['hapusStasiun/(:any)'] = 'admin/hapus_stasiun/$1';
$route['hapusBandara/(:any)'] = 'admin/hapus_bandara/$1';
$route['hapusJadwal/(:any)'] = 'admin/hapus_jadwal/$1';
$route['hapusJadwalpesawat/(:any)'] = 'admin/hapus_jadwalpesawat/$1';
$route['tambahStasiun'] = 'admin/tambah_stasiun';
$route['tambahBandara'] = 'admin/tambah_bandara';
$route['tambahJadwalKereta'] = 'admin/tambah_jadwalkereta';
$route['tambahJadwalPesawat'] = 'admin/tambah_jadwalpesawat';
$route['Login'] = 'admin/Login';
$route['login'] = 'admin/KeHalamanlogin';
$route['logout'] = 'admin/KeHalamanLogout';
$route['admin/dashboard'] = 'admin/KeHalamanDashboard';
$route['dashboardPesawat'] = 'admin/KeHalamanDashboardPesawat';
$route['dashboard/jadwalkereta'] = 'admin/KeHalamanDashboardJadwalKereta';
$route['dashboard/jadwalpesawat'] = 'admin/KeHalamanDashboardJadwalPesawat';



// Guest
$route['UserLogin'] = 'guest/UserLogin';
$route['PilihGerbong'] = 'guest/PilihGerbong';
$route['PilihGerbongPesawat'] = 'guest/PilihGerbongPesawat';
$route['kirimKonfirmasi'] = 'guest/kirimKonfirmasi';
$route['kirimKonfirmasiPesawat'] = 'guest/kirimKonfirmasiPesawat';
$route['pesanTiketPesawat'] = 'guest/pesanTiketPesawat';
$route['pesanTiket'] = 'guest/pesanTiket';
$route['pesanPesawat/(:any)'] = 'guest/pesanPesawat/$1';
$route['pesan/(:any)'] = 'guest/pesan/$1';
$route['cariTiket'] = 'guest/cari_tiket';
$route['cariTiketpesawat'] = 'guest/cari_tiketpesawat';
$route['pesawat'] = 'guest/KeHalamanPesawat';
$route['kereta'] = 'guest/KeHalamanKereta';
$route['konfirmasi'] = 'guest/KeHalamanKonfirmasi';
$route['konfirmasipesawat'] = 'guest/KeHalamanKonfirmasiPesawat';
$route['utama'] = 'guest/KeHalamanUtama';
$route['register'] = 'guest/KeHalamanRegister';
$route['default_controller'] = 'guest/Loginuser';
$route['pembayaran'] = 'guest/keHalamanPembayaran';
$route['pembayaran_pesawat'] = 'guest/keHalamanPembayaranPesawat';
$route['cekKonfirmasi'] = 'guest/cekKonfirmasi';
$route['cekKonfirmasiPesawat'] = 'guest/cekKonfirmasiPesawat';
$route['pilihan'] = 'guest/pilahan';



$route['coba'] = 'guest/coba';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
