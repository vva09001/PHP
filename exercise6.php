<!DOCTYPE html>
<html>
<head>

<style type="text/css">

.wrapper
{ 
    text-align: center;
}
.wrapper>div
{ 
    /* float: left; */
    width: 400px;
    display: inline-block;    
}
img
{ 
    height: 300px;
    width: 300px;
}

</style>
</head>
<body>
<div class='wrapper'>

    <?php
    for ($i=0; $i < 6; $i++)
    { 
        echo "
            <div>
                <img src='https://salt.tikicdn.com/cache/550x550/media/catalog/product/s/o/sony_dsc_rx100_mark_4_digital_1436371587000_1159879.jpg' alt='Sony RX100'  >
                <p class='title'>Máy Ảnh Sony RX100 IV (Chính Hãng)</p>
                <p>
                    <span><b>7.600.000</b><u>đ</u></span>
                    <span><strike> 9.3700.000 </strike> <u>đ</u></span>
                    <span>-17%</span> 
                </p>
            </div>";
    }      
    ?>  
 </div>
</body>
</html>