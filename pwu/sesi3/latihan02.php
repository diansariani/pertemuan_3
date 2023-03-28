<?php
    $nawal = 0;
    $nakhir = 10;

    while($nawal < $nakhir){//perulamngan yang dicek diawal
       echo "Perulangan ke-".$nawal."<br>"; //perulangan akan berakhir jika bernilai false, jika true maka akan terus berulang
       $nawal++; //nilai setiap perulangan akan ditambahkan 1 angka 
    }

    echo "<hr>";

    $nawal = 0;//jika sintak ini dihapus maka perulangan yang ke 10 saja yang akan muncul dikarenakan itu merupakan perulangan yang terakhir
    do{//perulangan yang di cek diakhir
        echo "Perulangan ke-".$nawal."<br>";
        $nawal++;
    }while($nawal < $nakhir);