<?php
    //parameters received by post or get method
    $param1="age=120";
    $param2="sex=m";
    //n parameters

    $query="SELECT bla bla bla FROM table WHERE";
    $previous=0;
    if($param1!=''){
        if($previous)
            $query=$query." AND ";
        else{
            $query=$query."	WHERE ";
            $previous=1;
        }
        $query=$query." field=".$param1;
    }
    if($param2!=''){
        if($previous)
            $query=$query." AND ";
        else{
            $query=$query."	WHERE ";
            $previous=1;
        }
        $query=$query." field=".$param2;
    }
    if($paramN!=''){
        if($previous)
            $query=$query." AND ";
        else{
            $query=$query."	WHERE ";
            $previous=1;
        }
        $query=$query." field=".$paramN;
    }
    echo $query;
    
?>
