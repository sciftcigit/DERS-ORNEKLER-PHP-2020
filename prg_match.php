<?php


 $eposta = "s.ciftci@asdf.info"; 

 $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; 

 $sonuc = preg_match($regex, $eposta);

 if ( $sonuc ){
    echo "e posta geçerli!";
  } else  {
    echo "hata!";
  }



   
?>

