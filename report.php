<?php
require 'vendor/autoload.php';
// untuk menggunakan dompdf
use Dompdf\Dompdf;

// mencetak pdf
$dompdf = new Dompdf();
$dompdf->load_html('Nama saya muhammad farras jibran, saya bersekolah di SMK TARUNA BHAKTI. saya sedang belajar menggukan library DOMPDF untuk membuat report PDF');

// setup untuk ukuran kertas
$dompdf->setPaper('A4', 'landscape');

// render html sebagai pdf
$dompdf->render();

// output
$dompdf->stream('hasil_repot.pdf');
