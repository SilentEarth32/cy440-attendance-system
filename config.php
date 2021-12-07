<?php  
    /* Database Connection */  
    $sDbHost = 'localhost' ;  
    $sDbName = 'Attendance Records' ;  
    $sDbUser = 'root';  
    $sDbPud = '';  
    $ Conn = mysql_connect ($sDbHost, $sDbUser, $sDbPwd);  
    mysql_select_db ($sDbName, $Conn);  
?>  
