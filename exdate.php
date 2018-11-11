<!DOCTYPE html>
<html>
<body>
     <?php 
         $d1=strtotime("December 24");
         $d2=ceil(($d1-time())/60/60/24);
         echo 'Now:       '. date('d-m-Y') ;
         echo "<br>"; 
         echo "There are " . $d2 ." days until 24th of December."; 
         // echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
         echo "<hr>";
     ?>
</body>
</html>