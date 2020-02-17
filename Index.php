<?php
$arr = [1,34,655,78,98];
$x = 0;

function search($arr, $x)
{
    
    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i] == $x)
        {
            return $i;
        }
    }
    return -1;
    
}
$result = search($arr,$x);
if($result == -1)
{
    echo "index is not found";
}
else{
    echo "index is found at " . $result;
}

?>
