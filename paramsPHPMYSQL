<?php
    //parameters received by post or get method
    $param1="age=120";
    $param2="sex=m";
    $param3="date='2020-07-23'";
    //n parameters

    $query="SELECT bla bla bla WHERE";
    $previous=0;
    if($param1!=''){
        if($previous)
            $query=$query." AND ".$param1;
        else{
            $query=$query." ".$param1;
            $previous=1;
        }
    }
    if($param2!=''){
        if($previous)
            $query=$query." AND ".$param2;
        else{
            $query=$query." ".$param2;
            $previous=1;
        }
    }
    if($param3!=''){
        if($previous)
            $query=$query." AND ".$param3;
        else{
            $query=$query." ".$param3;
            $previous=1;
        }
    }
    echo $query;
    
?>
