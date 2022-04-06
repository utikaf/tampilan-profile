<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <br>
    <div class="container">
        <table class="table table-bordered table-success table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Siswa Nisn</th>
                    <th>Siswa Nis</th>
                    <th>Siswa Nama Lengkap</th>
                    <th>Siswa Tempat Lahir</th>
                    <th>Siswa Tanggal Lahir</th>
                    <th>Siswa No Hp</th>
                    <th>Program id</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($siswa as $s) {?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$s->siswa_nisn?></td>
                        <td><?=$s->siswa_nis?></td>
                        <td><?=$s->siswa_nama_lengkap?></td>
                        <td><?=$s->siswa_tempat_lahir?></td>
                        <td><?=$s->siswa_tgl_lahir?></td>
                        <td><?=$s->siswa_nohp?></td>
                        <td><?=$s->program_id?></td>
                    </tr>
                <?php $no++; }?>
            </tbody>
        </table>
    </div>
</body>
</html>