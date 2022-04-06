<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form tambah biodata</h1>
    <form action="<?= base_url("Percobaan/action_tambah_biodata")?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="masukan nama lengkap"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>No hp</td>
                <td>:</td>
                <td><input type="number" name="no_hp" placeholder="masukan no hp anda"><td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" placeholder="masukan email anda"><td>
            </tr>
            <tr>
                <td>Sekolah</td>
                <td>:</td>
                <td><input type="text" name="sekolah" placeholder="masukan nama sekolah"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempatlahir" placeholder="masukan tempat lahir"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggallahir" placeholder="masukan tanggal lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><select name="jeniskelamin" id="jeniskelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi" value="Membaca">Membaca
                    <input type="checkbox" name="hobi" value="Menyanyi">Menyanyi
                    <input type="checkbox" name="hobi" value="Nonton film">Nonton film
                    <input type="checkbox" name="hobi" value="Bersepedah">Bersepedah
                </td>
            </tr>
            <tr>
                <td>Status pernikahan</td>
                <td>:</td>
                <td>
                    <input type="radio" name="status" value="Menikah">Menikah
                    <input type="radio" name="status" value="Belum menikah">Belum menikah
                </td>
            </tr>
            <tr>
                <td>Upload foto</td>
                <td>:</td>
                <td><input type="file" name="foto"></td>
            </tr>
        </table>
        <br>
        <button name="simpan">simpan</button>
    </form>
</body>
</html>