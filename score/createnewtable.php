<?php

function print_order_of_class($class)
{
    $con = mysqli_connect("120.24.240.44","shawn","624453893521y","lab");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    $sql = "select * from " . "`".$class."`";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($query);
    $newarray1 = array();
    $counter = 0;
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $newarray1[$counter] = $result[$i][$j];
            $counter++;
        }
    }
    $newarray1 = array_unique($newarray1);
    sort($newarray1);
    $countt = count($newarray1)-1;

    $con = mysqli_connect("120.24.240.44","shawn","624453893521y","oneinstack");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    $sql = "CREATE TABLE oneinstack."."`".$class."`"."(id INT, name NVARCHAR(20)";
    $add = "";
    for ($i = 1; $i <= $countt; $i++)
    {
        $new = ", s".$i." INT";
        $add = substr_replace($add, $new, strlen($add));
    }
    $sql = substr_replace($sql, $add, strlen($sql)).")";
    echo $sql;
    $query = mysqli_query($con, $sql);
}

//print_order_of_class("16030");
//print_order_of_class("16020");
//print_order_of_class("16023");
print_order_of_class("16040");
print_order_of_class("16131");
//print_order_of_class("15040");

?>