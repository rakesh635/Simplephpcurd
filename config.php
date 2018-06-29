

    <?php

    /* Database credentials. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    /*define('DB_SERVER', 'mysql-db.cinbwplpl4rh.ap-south-1.rds.amazonaws.com');

    define('DB_USERNAME', 'root');

    define('DB_PASSWORD', 'password');*/
    
    define('DB_SERVER', getenv("mysqlEndpoint"));

    define('DB_USERNAME', getenv("mysqlUname"));

    define('DB_PASSWORD', getenv("mysqlPswd"));

    define('DB_NAME', 'testdb');

     

    /* Attempt to connect to MySQL database */

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    ?>
    
    


