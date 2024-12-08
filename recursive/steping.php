<?php 

function PrintN($start,$end,$stepping=1){
  
    if($start >=$end){
        return ;
    }

    echo $start."\n";
    $start+=$stepping;
    PrintN($start,$end,$stepping);  //stepping 

}

PrintN(20,40,3);