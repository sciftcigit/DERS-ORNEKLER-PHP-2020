
<?php

include("inc_tools.php");

html_baslik("Kayıtları Listeleme Ekranı");
html_menu();

// benim yazdığım veritabanına bağlanma fonksiyonu
//  (inc_tools.php den çağırıyoruz.) 
$baglanti =  db_connect();

// sql to create table
$sql = " SELECT `id`, `isim`, `soyisim`, `email` FROM  kullanicilar  ";
$kayitlar = $baglanti->query($sql);

echo "Toplam kayıt sayısı : " . $kayitlar->num_rows."<br>";
echo '<a href="form_kayit_ekle.php" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"> Yeni Kayıt Ekle</a>';


?>
<table class="table">
    <thead>
      <tr>
        <th>İsim</th>
        <th>Soyisim</th>
        <th>e-Posta</th>
        <th>Sil</th>
        <th>Düzenle</th>
      </tr>
    </thead>
    <tbody>
<?php

if ($kayitlar->num_rows > 0) {
    // output data of each row
    while( $satir = $kayitlar->fetch_assoc() ) {

        echo "<tr>
                <td>  " . $satir["isim"]. " </td>
                <td> " . $satir["soyisim"]. " </td>
                <td> " . $satir["email"]. " </td> 
                <td>  <a href='kayit_sil.php?f_id=".$satir["id"]."'> Sil </a> </td>
                <td> | <a href='form_kayit_duzenle.php?f_id=".$satir["id"]."''> Düzenle </a> </td> 
             </tr>";

    }
} else {
    echo "0 results";
}
$baglanti->close();
?>
       </tbody>
       </table> 
<?php

html_dip();
?>