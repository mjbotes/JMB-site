<?php
    echo "Welcome to JMB install php script";
    echo "Do you want to continue'?(y/n)";
    $ok = 0;
    while ($ok === 0){
        $ans = strtoupper(trim(fgets(STDIN)));
        if ($ans === "Y")
        {
            unlink("scripts/config.php");
            $con = fopen("scripts/config.php", "w") or die("Unable to open file!");
            $ok = 1;
            fwrite($con,"<?php\n");
        } elseif ($ans === "N")
        {
            exit;
        } else {
            echo "Please specify Y or N.";
        }
    }
    echo "Is the server 'localhost'?(y/n)";
    $ok = 0;
    while ($ok === 0){
        $ans = strtoupper(trim(fgets(STDIN)));
        if ($ans === "Y")
        {
            fwrite($con, "define('DB_SERVER', 'localhost');\n");
            $s_n = "localhost";
            $ok = 1;
        } elseif ($ans === "N")
        {
            while ($ok_s === 0) {
            echo "Please enter server Name";
            $s_n = trim(fgets(STDIN));
            $ok_s = 0;
                if (!empty($s_n)) {
                    fwrite($con, "define('DB_SERVER', '".$s_n."');\n");
                    $ok = 1;
                    $ok_s = 1;
                }
            }
        } else {
            echo "Please specify Y or N.";
        }
    }
    echo "Is the username 'root'?(y/n)";
    $ok = 0;
    while ($ok === 0){
        $ans = strtoupper(trim(fgets(STDIN)));
        if ($ans === "Y")
        {
            fwrite($con, "define('DB_USERNAME', 'root');\n");
            $s_u = "root";
            $ok = 1;
        } elseif ($ans === "N")
        {
            $ok_s = 0;
            while ($ok_s === 0) {
            echo "Please enter server username";
            $s_u = trim(fgets(STDIN));
                if (!empty($s_u)) {
                    fwrite($con, "define('DB_USERNAME', '".$s_u."');\n");
                    $ok = 1;
                    $ok_s = 1;
                }
            }
        } else {
            echo "Please specify Y or N.";
        }
    }
    $ok_s = 0;
    while ($ok_s === 0) {
        echo "Please enter server password";
        $s_p = trim(fgets(STDIN));
            if (!empty($s_p)) {
                fwrite($con, "define('DB_PASSWORD\n', '".$s_p."');");
                $ok_s = 1;
            }
    }
    fwrite($con, "define('DB_NAME', 'users');\n\n");
    fwrite($con, '$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    ?>');

?>