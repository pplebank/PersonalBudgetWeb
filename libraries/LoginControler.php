
<?php

class LoginControler
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
        $data['password'] = $_POST['password'];
        return $data;
    }

    public function login($data)
    {
        $this->db->query("SELECT * FROM users
									WHERE username = :username
									AND password = :password
		");

        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            $this->setUserData($row);
            return true;
        } else {
            return false;
        }

    }

    public function setUserData($row)
    {
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_id'] = $row->id;
        $_SESSION['username'] = $row->username;
        $_SESSION['password'] = $row->password;
    }

    public function logoutUser()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['password']);
    }
}