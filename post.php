<?php
require_once 'include/functions.php';
sec_session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"], $_POST["score"])) {

        $res = new stdClass();

        if (strlen($_POST["name"]) > 25 || strlen($_POST["name"]) == 0) {
            $res->success = false;
            $res->msg = "För långt eller kort namn, försök igen!";
            echo json_encode($res);
            return;
        }

        if (!ctype_digit($_POST["score"])) {
            $res->success = false;
            $res->msg = "Felaktiga poäng, försök igen!";
            echo json_encode($res);
            return;
        }

        if (addScore($_POST["name"], $_POST["score"])) {
            $res->success = true;
            $res->msg = "Dina poäng har sparats!";
        } else {
            $res->success = false;
            $res->msg = "Något gick fel, försök igen!";
        }
        
        echo json_encode($res);
        return;
    }
}
