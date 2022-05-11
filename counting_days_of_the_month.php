<?php
$dateBefore = '2022-02-20';
$dateNow = date('Y-m-d');
$bi = explode('-',$dateBefore);
$months = array(
            '1'=>'31',
            '2'=>'28',
            '3'=>'31',
            '4'=>'30',
            '5'=>'31',
            '6'=>'30',
            '7'=>'31',
            '8'=>'31',
            '9'=>'30',
            '10'=>'31',
            '11'=>'30',
            '12'=>'31'
        );
if($bi[1] < date('m')){
    $count = 0;
    for($x=$bi[1];$x<date('m');$x++){
        $count = $count+1;
    }
    echo 'The tenant owes ',$count,' months rent','<br>';
    $c_mounth=0;
    for($i=($bi[1]*1);$i<=(date('m')*1);$i++){
        echo $c_mounth+=$months[$i],'<br>';
    }
    echo $c_mounth,' Days','<br>';
    echo 'the tenant entered on 2022-02-20, on the 20th of that month ',$bi[2]*1, '<br>';
    echo 'days elapsed since date of entry ',(date('d')*1),'<br>';
    echo 'days elapsed since date of entry ',$c_mounth - (($bi[2]*1)+(($months[(date('m')*1)]) - (date('d')*1))), '<br>';
    echo $months[$bi[1]*1],'-',$bi[2],'=',$months[$bi[1]*1] - $bi[2],' days';
}else{
    echo 'the tenant has no outstanding debts !';
}
?>
