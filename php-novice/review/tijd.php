<?php
//input ophalen en netjes neerzetten met behulp van argv en explode
$input = explode(" ", $argv[1]) ;

foreach ($input as $tijd) {
    $tijdletter = substr($tijd, -1) ;
    $tijdcijfer = substr($tijd, 0, -1) ;
    switch ($tijdletter) {
        case "d":
            $ndagen = $tijdcijfer * 86400 ;
            break ;
        case "u":  
            $nuren = $tijdcijfer * 3600 ;
            break ;  
        case "m":
            $nminuten = $tijdcijfer * 60 ;
            break ;
        case "s":
            $nseconden = $tijdcijfer * 1 ;
            break ;
    }
}
$aantalseconden = $ndagen + $nuren + $nminuten + $nseconden ;
echo "$aantalseconden seconden" ;

?>