<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
    <body>
        <h1 sty>Tugas Pertemuan ke-3</h1>
        <h4>Masukkan Data Anda</h4> 
        <form method="post"> 
            <label>Nama : </label> 
            <input type="text" name="nama"> <br>
            <label for="birthday">Tanggal Lahir : </label>
            <input type="date" id="birthday" name="birthday"><br>
            <label>Pekerjaan : </label> 
            <select name="pekerjaan" id="pekerjaan">
                <optgroup label="Kampus">
                    <option value="dosen">Dosen</option>
                    <option value="kaprodi">Ke Prodi</option>
                    <option value="dekan">Dekan</option>
                    <option value="rektor">Rektor</option>
                </optgroup>
                <optgroup label="Sekolah">
                    <option value="guru">Guru</option>
                    <option value="walikelas">Wali Kelas</option>
                    <option value="kepalasekolah">Kepala Sekolah</option>
                </optgroup>
            </select>
            <br>
            <input type="submit" value="Kirim"> 
        </form> 
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $siapa = $_POST['nama']; 
            $tanggal = date("Y-m-d",strtotime($_POST['birthday']));
            $pekerjaan = $_POST['pekerjaan'];
            if (strlen($siapa) != 0) { 
                echo "Nama Anda :".$siapa."<br>"; 
            } else { 
                echo "Anda Belum Mengisi Nama Anda!!!<br>";
            }
            echo "Tanggal Lahir Anda : $tanggal <br>";
            echo hitung_umur($_POST['birthday']);
            if (strlen($pekerjaan) != 0) { 
                echo "Pekerjaan:".$pekerjaan."<br>"; 
            } else { 
                echo "Anda Belum Mengisi Pekerjaan Anda!!!<br>";
            }
        } else { 
                echo "Anda Belum Mengisi Nama Anda!!!<br>";
        }             
        ?>
    </body>
    <?php
    function hitung_umur($tanggal_lahir){
        $birthDate = new DateTime($tanggal_lahir);
        $today = new DateTime("today");
        if ($birthDate > $today) { 
            exit("0 tahun 0 bulan 0 hari");
        }
        $y = $today->diff($birthDate)->y;
        $m = $today->diff($birthDate)->m;
        $d = $today->diff($birthDate)->d;
        return "Usia Anda Saat Ini $y tahun $m bulan $d hari <br>";
    }
    ?>
</html>