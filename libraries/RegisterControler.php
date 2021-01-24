
<?php

class RegisterControler
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData()
    {

        $data = array();
        $data['username'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['password2'] = $_POST['password2'];
        return $data;
    }
    public function isRequired()
    {
        $requiredFields = array('username', 'email', 'password', 'password2');
        foreach ($requiredFields as $field) {
            if ($_POST['' . $field . ''] == '') {
                return false;
            }
        }
        return true;
    }

    public function isValidEmail($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function isMailAlreadyUsed($email)
    {

        $this->db->query("SELECT * FROM users WHERE email = :email");

        $this->db->bind(':email', $email);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function isLoginAlreadyUsed($username)
    {

        $this->db->query("SELECT * FROM users WHERE username = :username");

        $this->db->bind(':username', $username);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function passwordsMatch($pw1, $pw2)
    {
        if ($pw1 == $pw2) {
            return true;
        } else {
            return false;
        }
    }

    public function registerUser($data)
    {
        $this->db->query('INSERT INTO users (username, email, password)
                                        VALUES (:username, :email, :password)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
