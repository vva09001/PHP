<?php 

    //ex6

    function sum($num_1,$num_2,$num_3)
    {
       
        return ($num_1 + $num_2 + $num_3);
    }
    function average($num1,$num2,$num3)
    {
        return ($num1 + $num2 + $num3) / 3;
    }

    echo sum(30,40,10);
    echo "<br>";
    echo average(30,10,40);
    echo "<br>";

    //ex7

    function arr_not_unique($my_arry)
    {
        $name = array();
        natcasesort($my_arry);
        reset($my_arry);
        $old_key = NULL;
        $old_value = NULL;

        foreach ($my_arry as $key => $value) {
            if ($value === NULL) {
                continue;
            }

            if ($old_value == $value) {
                $same[$old_key] = $old_value;
                $same[$key] = $value;
            }
            else
            {
                $old_value = $value;
                $old_key = $key;
            }
        }
        return $same;
    }
    $arr = array("1","2","5","6","5");
    print_r($arr);
    $b = arr_not_unique($arr);
    echo "<br>";
    print_r($b);
    echo" is not unique";

    // ex8

    function check_palindrome($string)
    {
        if ($string == strrev($string))
        {   
            return 1;   
        } 
        else
        { 
            return 0; 
        } 
    }

    $word = "madam";
    echo "<br>";
    echo "word: ".$word;
    echo "<br>";

    if (check_palindrome($word) == 1) 
    {
        echo $word . " Palindrome";
    }
    else 
    {
        echo $word . 'is not Palindrome';
    }

    //ex 9

    function is_str_lowrcase($str1)
    {

        for ($sc = 0; $sc < strlen($str1); $sc++)
         {
            if (ord($str1[$sc]) >= ord('A') && ord($str1[$sc]) <= ord('Z')) 
            {
                return false;
            }
            else 
            {
                return true;
            }
        }
       
    }

    echo "<br>";
    $a = "aaaaa";

    if ( is_str_lowrcase($a) == false)
    {
        echo $a . " is not lowecase";
    }
    else 
    {
        echo $a . " is lowecase";
    }

?>
