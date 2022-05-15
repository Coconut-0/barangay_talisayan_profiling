<?php
    define('DBINFO','mysql:host=sql102.unaux.com;dbname=unaux_31729383_barangay_profiling');
    define('DBUSER','unaux_31729383');
    define('DBPASS','cngtmt8owh5');

    function performQuery($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }

?>