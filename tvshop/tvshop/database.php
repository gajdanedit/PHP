<?php


class database {

    private $db = null;

    public function __construct($host, $username, $pass, $db) {
        $this->db = new mysqli($host, $username, $pass, $db);
    }

    public function login($username, $pass) {

        $stmt = $this->db->prepare('SELECT * FROM users WHERE users.felhasznalonev LIKE ?;');

        $stmt->bind_param("s", $username);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            var_dump($row, $pass);
            if ($pass == $row['jelszo']) {

                $_SESSION['felhasznalonev'] = $row['felhasznalonev'];
                $_SESSION['login'] = true;
                return true;
            }
        } else {
            $_SESSION['felhasznalonev'] = '';
            $_SESSION['login'] = false;
            return false;
        }
        $result->free_result();
        return false;
    }

    public function regist($email, $username, $pass) {
        $stmt = $this->db->prepare("INSERT INTO users(id, email, felhasznalonev, jelszo) VALUES (NULL,?,?,?)");
        $stmt->bind_param("sss", $email, $username, $pass);

        try {
            if ($stmt->execute()) {
                $_SESSION['login'] = true;
                //header("location: index.php");
            }
        } catch (Exception $e) {
            return false;
            echo 'Error: ' . $e->getMessage();
        }
        return true;
    }
}

