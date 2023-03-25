<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="akhir">
            <h4>Form Input</h4> 
            <form method="post"> 
                <label>Nama: </label> 
                <input type="text" name="nama"> 
                <input type="submit" value="Kirim"> 
            </form> 
            <?php 
                echo 'Selamat Datang ' . $_POST['nama']; 
            ?>
            <hr>
        </div>
        <div class="satu">
            <h4>Operasi Aritmatika</h4> 
            <?php 
                $gaji = 1000000; 
                $pajak = 0.1; 
                $thp = $gaji - ($gaji*$pajak); 
                echo "Gaji sebelum pajak = Rp " .$gaji. "<br>"; 
                echo "Gaji yang dibawa pulang = Rp $thp"; 
            ?>
            <hr>
        </div>
        <div class="akhir">
            <h4>Kondisi If dan elseif</h4> 
            <?php 
                $nama_hari = date("l"); 
                if ($nama_hari == "Sunday") { 
                    echo "Minggu"; 
                } elseif ($nama_hari == "Monday") { 
                    echo "Senin"; 
                } else { 
                    echo "Selasa"; 
                } 
            ?>
            <hr>
        </div>
        <div class="satu">
            <h4>Kondisi Switch</h4> 
            <?php 
                $nama_hari = date("l"); 
                switch ($nama_hari) { 
                    case "Sunday": 
                        echo "Minggu"; 
                        break; 
                    case "Monday": 
                        echo "Senin";
                        break; 
                    case "Tuesday": 
                        echo "Selasa"; 
                        break; 
                    default: 
                        echo "Sabtu"; 
                }
            ?>
            <hr>
        </div>
        <div class="akhir">
            <h4>Looping For</h4> 
            <?php 
                echo "Perulangan 1 sampai 10 <br />"; 
                for ($i=1; $i<=10; $i++) { 
                    echo "Perulangan ke: " . $i . '<br />'; 
                } 
                echo "Perulangan Menurun dari 10 ke 1 <br />"; 
                for ($i=10; $i>=1; $i--) { 
                    echo "Perulangan ke: " . $i . '<br />'; 
                } 
            ?>    
            <hr>
        </div>
        <div class="satu">
            <h4>Looping while</h4> 
            <?php 
                echo "Perulangan 1 sampai 10 <br />"; 
                $i=1; 
                while ($i<=10) { 
                    echo "Perulangan ke: " . $i . '<br />'; 
                    $i++; 
                } 
            ?>
            <hr>
        </div>
        <div class="satu">
            <h4>Looping do while</h4> 
            <?php 
                echo "Perulangan 1 sampai 10 <br />"; 
                $i=1; 
                do { 
                    echo "Perulangan ke: " . $i . '<br />'; 
                    $i++; 
                } while ($i<=10); 
            ?>
        </div>
    </body>
</html>