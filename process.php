<?php
require_once './factory/DorkHandlerFactory.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_input']) && isset($_POST['engine'])) {
    $inputHandler = DorkHandlerFactory::create($_POST['engine']);
    $userInput = $_POST['user_input'];
    $inputHandler->processInput($userInput);
    echo "Data processed successfully!";
} else {
    echo "Invalid request.";
}
