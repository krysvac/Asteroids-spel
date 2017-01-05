<?php
error_reporting(E_ALL);

function connect()
{
    $db_dsn  = ($_SERVER['HTTP_HOST'] != 'localhost') ? "mysql:host=blu-ray.student.bth.se;dbname=jodu15" : "mysql:host=localhost;dbname=jodu15";
    $db_user = ($_SERVER['HTTP_HOST'] != 'localhost') ? "jodu15" : "root";
    $db_pass = ($_SERVER['HTTP_HOST'] != 'localhost') ? "" : "";
    $pdo     = new PDO($db_dsn, $db_user, $db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    return $pdo;
}

function sec_session_start()
{
    date_default_timezone_set("Europe/Stockholm");
    
    $session_name = 'jodu15javascriptprojekt'; // Set a custom session name
    $secure       = false;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    ini_set('session.use_only_cookies', 1);
    $inactive = 3600;
    ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime
    if (ini_set('session.use_only_cookies', 1) === false)
    {
        http_response_code(500);
        die();
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"],
        $cookieParams["domain"],
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start(); // Start the PHP session
    session_regenerate_id(); // regenerated the session, delete the old one.
}

function addScore($name, $score)
{
    $pdo = connect();
    $stmt = $pdo->prepare("INSERT INTO javascript10_playedgames (username, score) VALUES (:username, :score)");

    $stmt->execute(array(   ':username'   => $name,
                            ':score'      => $score));

    if($stmt->rowCount() == 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function getAllScores()
{
    $pdo = connect();
    $stmt = $pdo->prepare('SELECT * FROM javascript10_playedgames');
    $stmt->execute();

    if ($stmt->rowCount() >= 1)
    {
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    else
    {
        return false;
    }
}
