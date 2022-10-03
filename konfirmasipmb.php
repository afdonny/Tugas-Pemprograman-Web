<?php
    $jalur_pendaftaran = $_POST['jalur_pendaftaran']; 
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $nik = $_POST['nik'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $npsn = $_POST['npsn'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <title>Berhasil</title>
</head>
<body>
    <!-- CONTENT -->
    <div class="p-10 bg-secondary">
        <div class="container">
            <div class="row mt-0">
                <div class="col-md-12 rounded bg-white p-5 mt-5">
                    <div class="container">
                        <h3>Selamat! Anda Telah Berhasil Mendaftar</h3>
                        <p>Silahkan Tunggu Kabar Dari Kami</p>
                        
                        
                        <h5 class="mt-5 bg-success p-2 text-white">Data yang Terdaftar</h5>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th colspan="2" class="bg-primary text-white">Jalur Pendaftaran yang Dipilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Jalur Pendaftaran</b></td>
                                    <td><?= $jalur_pendaftaran ?></td>
                                </tr>
                                <tr>
                                    <th colspan="2" class="bg-primary text-white">Identitas Diri</th>
                                </tr>
                                <tr>
                                    <td><b>Nama</b></td>
                                    <td><?= $nama ?></td>
                                </tr>
                                <tr>
                                    <td><b>Jenis Kelamin</b></td>
                                    <td><?= $jk ?></td>
                                </tr>
                                <tr>
                                    <td><b>No. HP</b></td>
                                    <td><?= $no_hp ?></td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td><?= $email ?></td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal Lahir</b></td>
                                    <td><?= $tgl_lahir ?></td>
                                </tr>
                                <tr>
                                    <td><b>Tempat Lahir</b></td>
                                    <td><?= strtoupper($tempat_lahir) ?></td>
                                </tr>
                                <tr>
                                    <td><b>Kewarganegaraan</b></td>
                                    <td><?= strtoupper($kewarganegaraan) ?></td>
                                </tr>
                                <tr>
                                    <td><b>NIK</b></td>
                                    <td><?= $nik ?></td>
                                </tr>
                                <tr>
                                    <th colspan="2" class="bg-primary text-white">Asal Sekolah</th>
                                </tr>
                                <tr>
                                    <td><b>Tahun Lulus</b></td>
                                    <td><?= strtoupper($tahun_lulus) ?></td>
                                </tr>
                                <tr>
                                    <td><b>NPSN</b></td>
                                    <td><?= $npsn ?></td>
                                </tr>
                                <tr>
                                    <td><b>Jurusan</b></td>
                                    <td><?= strtoupper($jurusan) ?></td>
                                </tr>
                                <tr>
                                    <th colspan="2" class="bg-primary text-white">Program Studi yang Dipilih</th>
                                </tr>
                                <tr>
                                    <td><b>Program Studi</b></td>
                                    <td><?= $prodi ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="beranda.php" class="btn btn-danger">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>