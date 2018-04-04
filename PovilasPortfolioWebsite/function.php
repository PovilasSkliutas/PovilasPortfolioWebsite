<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL| E_STRICT);

?>

<?php

// apsirasome funkcija -conectToDatabase - 'prisijungiame prie mysql duomenu bazes'
function connectToDatabase () {
    $userName = 'root';
    $password = 'poviskliu0190';
    $url = 'mysql:host=localhost;dbname=contact_form';
    $pdo = new PDO($url, $userName, $password);
    $pdo->exec('SET NAMES UTF8');
    return($pdo);
    };

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    contactSubmit($name, $email, $message);
    // apsirasome funkcija -contactSubmit- 'ikeliame contact duomenis i duomenu baze'
    function contactSubmit($Name, $Email, $Message) {
        $pdo = connectToDatabase ();
        $sql = 'INSERT INTO contacts SET name = :Name, email = :Email, message = :Message';
        $query = $pdo->prepare($sql);
        // var_dump($sql);die();
        $query->execute([
            'Name' => $Name,
            'Email' => $Email,
            'Message' => $Message
        ]);

    header("Refresh:1; url=index.php#contacts");
    };


    // // Initialize variables to null.
    // $nameError ="";
    // $emailError ="";
    // $messageError ="";
    // // On submitting form below function will execute.
    // if(isset($_POST['submit'])){
    //
    //     $name_regex = "/^([a-zA-Z\s]{3,16})+$/i";
    //     if (empty($_POST["Name"])) {
    //         $nameError = "Name is required";
    //     } else {
    //         $name = test_input($_POST["Name"]);
    //         // check name only contains letters and whitespace
    //         if (!preg_match($name_regex,$name)) {
    //             $nameError = "Only letters and white space allowed";
    //         }
    //     }
    //
    //     $email_exp = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
    //     if (empty($_POST["Email"])) {
    //         $emailError = "Email is required";
    //     } else {
    //         $email = test_input($_POST["Email"]);
    //         // check if e-mail address syntax is valid or not
    //         if (!preg_match($email_exp,$email)) {
    //             $emailError = "Invalid email format";
    //         }
    //     }
    //
    //     $message_regex = "/^[0-9a-zA-Z\s]+$/i";
    //     if (empty($_POST["Message"])) {
    //         $messageError = "Name is required";
    //     } else {
    //         $name = test_input($_POST["Message"]);
    //         // check name only contains letters and whitespace
    //         if (!preg_match($message_regex,$message)) {
    //             $messageError = "Only letters and white space allowed";
    //         }
    //     }
    // }
    //
    // function test_input($data) {
    // $data = trim($data);
    // $data = stripslashes($data);
    // $data = htmlspecialchars($data);
    // return $data;
    // }
    // //php code ends here



?>
