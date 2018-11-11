<!DOCTYPE html>
<html>
<body>
    <?php 
       $all_uppercase = "vtc academy";
       $all_lowercase = "VTC ACADEMY";
       $first = "vtc academy";
       $all_first = "vtc academy";
      
       echo $all_uppercase." uppercase: ".strtoupper($all_uppercase);
       echo "<br>";
       echo $all_lowercase. " lowercase: ".strtolower($all_lowercase);
       echo "<br>";
       echo $first. " first character uppercase: ".ucfirst($first);
       echo "<br>";
       echo $all_first. " first character of all the words uppercase: ".ucwords($all_first);

    ?>

   
</body>
</html>