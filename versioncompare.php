<?php

$check = compareVersion('abc','3.0.2');
print_r($check);
//-1 = "my version small than request version"
//0 = "my version is same as request version"
//1 = "my version greater than request version"
//2 = "cannot compare" 


function compareVersion($myVersion, $requestVersion) {

    $versionDelimiter = ".";

    $myVersionComponents = explode ($versionDelimiter, $myVersion); // <1>
    $requestVersionComponents = explode ($versionDelimiter, $requestVersion);

    $zeroDiff = count($myVersionComponents) - count($requestVersionComponents); // <2>

    if ($zeroDiff != 0) {
        $zeros = array_fill(0, abs($zeroDiff), '0'); // <4>
        if ($zeroDiff > 0) {
			$requestVersionComponents = array_merge($requestVersionComponents,$zeros);
            $requestVersion = implode('.', $requestVersionComponents);
        } else {
            $myVersionComponents = array_merge($myVersionComponents,$zeros);
            $myVersion = implode('.', $myVersionComponents);   
        }
        }
       
        if(version_compare($myVersion, $requestVersion) == -1){
            return -1; //"my version small than request version"
        }
        else if(version_compare($myVersion, $requestVersion) == 0){
            return 0; //"my version is same as request version"	
        }
        else if(version_compare($myVersion, $requestVersion) == 1){
            return 1; //"my version greater than request version" 
        }
        else{
            return 2; //cannot compare
        }
        
}
     

    

?>
