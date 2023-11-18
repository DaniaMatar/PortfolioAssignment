<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'pass' => $_POST['pass'],
        'sex' => $_POST['sex'],
        'ageGroup' => $_POST['ageGroup'],
        'language' => $_POST['language'],
        'captcha' => isset($_POST['cbcaptcha']) ? 'true' : 'false'
    );

    $json_data = json_encode($data, JSON_PRETTY_PRINT);

    $file_path = 'info.json';
    file_put_contents($file_path, $json_data);

    header('Location: ../pages/page.html');
    exit;
}
?>
