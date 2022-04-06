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
    <center>
        <h1>Tampil data profile</h1>
        <a href="<?=base_url('Percobaan/tambah_profile') ?>"><button type="button" class="btn btn-sm btn-primary">Tambah profile</button> </a>
        <br><br>
    <div class="container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis kelamin</th>
                <th>Alamat</th>
                <th>Jenjang pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($profile as $p) {?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$p->nama_depan?></td>
                    <td><?=$p->nama_belakang?></td>
                    <td><?=$p->tempat_lahir?></td>
                    <td><?=$p->tanggal_lahir?></td>
                    <td><?=$p->jenis_kelamin?></td>
                    <td><?=$p->alamat?></td>
                    <td><?=$p->jenjang_pendidikan?></td>
                    <td>
                        <a href="<?=base_url('Percobaan/update_data/'.$p->id) ?> ">Edit ||</a>
                        <a href="<?=base_url('Percobaan/hapus_data/'.$p->id) ?>">Hapus</a>
                    </td>
                </tr>
            <?php $no++; }?>
        </tbody>
    </table>
    </div>
    </center>

  
    
</body>
</html>