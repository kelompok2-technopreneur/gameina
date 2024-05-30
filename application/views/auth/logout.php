<?php
session_start();
// Hapus semua data sesi
session_destroy();
// Alihkan pengguna kembali ke halaman login atau halaman lain
header("welcome"); // Ganti dengan halaman login Anda
exit;
