<?php  
    $con = mysql_connect ("localhost", "root", "" ) ;  
    if ( ! $con)  
    die ( ' Could not connect: ' .mysql_error ( ) ) ;  
    }  
    mysql_select_db ("MCN", $con) ;  
    $sql = "CREATE TABLE EMPLOYEE  
    (  
    Name varchar ( 50) ,  
    )" ;  
    mysql_query($sql, $con) ;  
    mysql_close ($con) ;  
?> 