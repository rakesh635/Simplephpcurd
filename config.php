

    <?php

    /* Database credentials. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    /*define('DB_SERVER', 'mysql-db.cinbwplpl4rh.ap-south-1.rds.amazonaws.com');

    define('DB_USERNAME', 'root');

    define('DB_PASSWORD', 'password');*/
    
    define('DB_SERVER', $_ENV("mysqlEndpoint"));

    define('DB_USERNAME', $_ENV("mysqlUname"));

    define('DB_PASSWORD', $_ENV("mysqlPswd"));

    define('DB_NAME', 'curddb');

     

    /* Attempt to connect to MySQL database */

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    ?>
    
    


