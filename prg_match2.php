<?php

    # com.tr  deneme.info   SCIFTCI@GMAIL.COM
    function emailValidation($email) 
    {
        $regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/";
        $email = strtolower($email);

        return preg_match ($regex, $email);
    }
 
    
 $eposta = "s.ciftci@asdf.info"; 
 $sonuc = emailValidation($eposta);
 if ( $sonuc ){
    echo "e posta geçerli!";
  } else  {
    echo "hata!";
  }



   
?>

