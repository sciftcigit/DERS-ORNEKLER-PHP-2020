<!DOCTYPE html>
<html>
<body>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
  İsim : <input type="text" name="f_name">
         <input type="submit">
</form>

<?php


    // collect value of input field
    $name = htmlspecialchars($_REQUEST['f_name']);
    if (empty($name)) {
        echo "İsim girilmemiş";
    } else {
        echo $name;
    }

?>

</body>
</html>