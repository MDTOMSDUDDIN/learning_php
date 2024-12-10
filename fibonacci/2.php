<?Php 
function fibonacci($n){
   if($n==0){
    return 0;
   } else if($n==1){
    return 1;
   }else{
    return fibonacci($n-1) + fibonacci($n-2);
   }
}

$x=5;

for($i=0;$i<$x; $i++){
    echo fibonacci($i)." ";
}

