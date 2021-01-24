

<?php

class LoginControler
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function isRequired()
    {
        $requiredFields = array('username', 'password');
        foreach ($requiredFields as $field) {
            if ($_POST['' . $field . ''] == '') {
                return false;
            }
        }
        return true;
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
        $_SESSION['id_user'] = $row->id;
        $_SESSION['username'] = $row->username;
        $_SESSION['password'] = $row->password;
    }

    public function logoutUser()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['id_user']);
        unset($_SESSION['username']);
        unset($_SESSION['password']);
    }
}