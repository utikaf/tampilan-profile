<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <font align="center"><h1>Biodata</h1></font>
    <center><a href="<?= base_url('Percobaan/tambah_biodata')?>">input data</a></center> 
   <br>
    <table border="1" width="20%" align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=$nm ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?=$alt ?></td>
        </tr>
        <tr>
            <td>No hp</td>
            <td>:</td>
            <td><?=$nhp ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?=$em ?></td>
        </tr>
        <tr>
            <td>Sekolah</td>
            <td>:</td>
            <td><?=$skl ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?=$tempat?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?=$tanggal?></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td><?=$jk?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?=$hobi?></td>
        </tr>
        <tr>
            <td>Status Pernikahan</td>
            <td>:</td>
            <td><?=$st?></td>
        </tr>
    </table>
</body>
</html>