<?php

echo "I am php browser redirection";

// header("Location:https://google.com");
// exit();

$query = $_SERVER["QUERY_STRING"];

switch ($query) {
    case "google":
        header("Location:https://google.com");
        exit();
        break;
    case "linkedin":
        header("Location:https://linkedin.com");
        exit();
        break;
    case "youtube":
        header("Location:https://youtube.com");
        exit();
        break;
    default:
        echo "We do not have any redirection for your query!";
        break;
}

?>
