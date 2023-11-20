<?php
// Fungsi untuk membersihkan input dari potensi ancaman SQL Injection
function cleanInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Mengecek apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data Pribadi
    $nama = cleanInput($_POST["nama"]);
    $jenis_kelamin = cleanInput($_POST["jenis_kelamin"]);
    $asal_sekolah = cleanInput($_POST["asal_sekolah"]);
    $tanggal_lahir = cleanInput($_POST["tanggal_lahir"]);
    $tempat_lahir = cleanInput($_POST["tempat_lahir"]);
    $nomor_akta_lahir = cleanInput($_POST["nomor_akta_lahir"]);
    $nik = cleanInput($_POST["nik"]);
    $agama = cleanInput($_POST["agama"]);
    $anak_ke = cleanInput($_POST["anak_ke"]);
    $dari = cleanInput($_POST["dari"]);
    $status_anak = cleanInput($_POST["status_anak"]);
    $kewarganegaraan = cleanInput($_POST["kewarganegaraan"]);
    $berkebutuhan_khusus = cleanInput($_POST["berkebutuhan_khusus"]);

    // Keadaan Jasmani
    $penyakit = cleanInput($_POST["penyakit"]);
    $berat_badan = cleanInput($_POST["berat_badan"]);
    $tinggi_badan = cleanInput($_POST["tinggi_badan"]);
    $golongan_darah = cleanInput($_POST["golongan_darah"]);

    // Alamat
    $alamat_sesuai_kk = cleanInput($_POST["alamat_sesuai_kk"]);
    $alamat_tempat_tinggal = cleanInput($_POST["alamat_tempat_tinggal"]);
    $tinggal_bersama = cleanInput($_POST["tinggal_bersama"]);
    $jenis_tinggal = cleanInput($_POST["jenis_tinggal"]);
    $penerima_bantuan = cleanInput($_POST["penerima_bantuan"]);

    // Jenis Bantuan (Array)
    $jenis_bantuan = isset($_POST["jenis_bantuan"]) ? $_POST["jenis_bantuan"] : [];
    $jenis_bantuan_other = cleanInput($_POST["jenis_bantuan_other"]);
    if (!empty($jenis_bantuan_other)) {
        $jenis_bantuan[] = $jenis_bantuan_other;
    }
    $jenis_bantuan_str = implode(", ", $jenis_bantuan);

    // No. Tanda Bantuan
    $no_tanda_bantuan = cleanInput($_POST["no_tanda_bantuan"]);

    // Data Ayah
    $nama_ayah = cleanInput($_POST["nama_ayah"]);
    $nik_ayah = cleanInput($_POST["nik_ayah"]);
    $tanggal_lahir_ayah = cleanInput($_POST["tanggal_lahir_ayah"]);
    $pendidikan_terakhir_ayah = cleanInput($_POST["pendidikan_terakhir_ayah"]);
    $no_telepon_ayah = cleanInput($_POST["no_telepon_ayah"]);

    // Pekerjaan Ayah (Array)
    $pekerjaan_ayah = isset($_POST["pekerjaan_ayah"]) ? $_POST["pekerjaan_ayah"] : [];
    $pekerjaan_ayah_other = cleanInput($_POST["pekerjaan_ayah_other"]);
    if (!empty($pekerjaan_ayah_other)) {
        $pekerjaan_ayah[] = $pekerjaan_ayah_other;
    }
    $pekerjaan_ayah_str = implode(", ", $pekerjaan_ayah);

    // Penghasilan Ayah
    $penghasilan_ayah = cleanInput($_POST["penghasilan_ayah"]);

    // Data Ibu
    $nama_ibu = cleanInput($_POST["nama_ibu"]);
    $nik_ibu = cleanInput($_POST["nik_ibu"]);
    $tanggal_lahir_ibu = cleanInput($_POST["tanggal_lahir_ibu"]);
    $pendidikan_terakhir_ibu = cleanInput($_POST["pendidikan_terakhir_ibu"]);
    $no_telepon_ibu = cleanInput($_POST["no_telepon_ibu"]);

    // Pekerjaan Ibu (Array)
    $pekerjaan_ibu = isset($_POST["pekerjaan_ibu"]) ? $_POST["pekerjaan_ibu"] : [];
    $pekerjaan_ibu_other = cleanInput($_POST["pekerjaan_ibu_other"]);
    if (!empty($pekerjaan_ibu_other)) {
        $pekerjaan_ibu[] = $pekerjaan_ibu_other;
    }
    $pekerjaan_ibu_str = implode(", ", $pekerjaan_ibu);

    // Penghasilan Ibu
    $penghasilan_ibu = cleanInput($_POST["penghasilan_ibu"]);

    // Simpan data ke dalam file teks
    $data = "Nama: $nama\n";
    $data .= "Jenis Kelamin: $jenis_kelamin\n";
    $data .= "Asal Sekolah: $asal_sekolah\n";
    $data .= "Tanggal Lahir: $tanggal_lahir\n";
    $data .= "Tempat Lahir: $tempat_lahir\n";
    $data .= "Nomor Akta Lahir: $nomor_akta_lahir\n";
    $data .= "NIK: $nik\n";
    $data .= "Agama: $agama\n";
    $data .= "Anak ke: $anak_ke\n";
    $data .= "Dari: $dari\n";
    $data .= "Status Anak: $status_anak\n";
    $data .= "Kewarganegaraan: $kewarganegaraan\n";
    $data .= "Anak Berkebutuhan Khusus: $berkebutuhan_khusus\n\n";
    
    $data .= "Penyakit yang Pernah Diderita: $penyakit\n";
    $data .= "Berat Badan: $berat_badan\n";
    $data .= "Tinggi Badan: $tinggi_badan\n";
    $data .= "Golongan Darah: $golongan_darah\n\n";
    
    $data .= "Alamat Sesuai KK: $alamat_sesuai_kk\n";
    $data .= "Alamat Tempat Tinggal Sekarang: $alamat_tempat_tinggal\n";
    $data .= "Tinggal Bersama: $tinggal_bersama\n";
    $data .= "Jenis Tinggal: $jenis_tinggal\n";
    $data .= "Penerima Bantuan: $penerima_bantuan\n";
    $data .= "Jenis Bantuan: $jenis_bantuan_str\n";
    $data .= "No. Tanda Bantuan: $no_tanda_bantuan\n\n";
    
    $data .= "Nama Ayah: $nama_ayah\n";
    $data .= "NIK Ayah: $nik_ayah\n";
    $data .= "Tanggal Lahir Ayah: $tanggal_lahir_ayah\n";
    $data .= "Pendidikan Terakhir Ayah: $pendidikan_terakhir_ayah\n";
    $data .= "No. Telepon Ayah: $no_telepon_ayah\n";
    $data .= "Pekerjaan Ayah: $pekerjaan_ayah_str\n";
    $data .= "Penghasilan Ayah: $penghasilan_ayah\n\n";
    
    $data .= "Nama Ibu: $nama_ibu\n";
    $data .= "NIK Ibu: $nik_ibu\n";
    $data .= "Tanggal Lahir Ibu: $tanggal_lahir_ibu\n";
    $data .= "Pendidikan Terakhir Ibu: $pendidikan_terakhir_ibu\n";
    $data .= "No. Telepon Ibu: $no_telepon_ibu\n";
    $data .= "Pekerjaan Ibu: $pekerjaan_ibu_str\n";
    $data .= "Penghasilan Ibu: $penghasilan_ibu\n";
    
    // Simpan data ke dalam file teks
    $file = fopen("data_pendaftaran.txt", "a");
    fwrite($file, $data);
    fclose($file);

    // Tampilkan pesan sukses
    echo "Pendaftaran berhasil! Data Anda telah disimpan.";
}
?>
