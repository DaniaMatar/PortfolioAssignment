
<?php

class LoginUser {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $this->hashPassword($password); // Hash the password during construction
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPasswordHash() {
        return $this->password;
    }

    private function hashPassword($password) {
        // You should use a secure hashing algorithm (e.g., password_hash) in a real-world scenario
        // For demonstration purposes, we'll use md5 here, but it's not secure for actual passwords
        return md5($password);
    }
}

?>

?>