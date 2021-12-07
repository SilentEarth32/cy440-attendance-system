<?php    
    $con = mysql_connect ("localhost", "root" , "" ) ;    
    $ db="MCN";    
    if ( ! $con)    
    die ( ' Could not connect: ' . mysql_error( ) ) ;    
    if (mysql_query ("CREATE DATABASE $db" , $con) )    
    echo "Your Database Created Which Name is : $db";    
    }    
    else    
    {    
    echo "Error creating database: " . mysql_error( ) ;    
    }    
    mysql_close ($con) ;    
?>