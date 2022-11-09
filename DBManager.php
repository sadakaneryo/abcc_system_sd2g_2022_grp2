<?php
    class DBManager {

        /*テスト接続
        $dsn = 'mysql:host=mysql***.***.*****;dbname=LA*******-********;charset=utf8mb4';
        $user = 'LA********';
        $password = 'P*********'; */



        public function dbConnect(){
            $pdo = new PDO('mysql:host=localhost;dbname=healthy_box;charset=utf8','webuser','abccsd2');
            return $pdo;
        }

        public function loginCheck($id,$pass){
            $pdo = $this->dbConnect();

            $sql = "SELECT * FROM users WHERE user_id = ?";

            $ps = $pdo->prepare($sql);
            $ps->bindValue(1, $id, PDO::PARAM_INT);

            $ps->execute();

            $searchArray = $ps->fetchAll();

            foreach($searchArray as $row){
                if(password_verify($pass, $row['user_password']) == true){
                    $_SESSION['mail'] = $row['user_mail'];
                    $_SESSION['name'] = $row['user_name'];

                    header('Location: menu.php');
                    break;
                }else{
                    header('Location: login.php');
                }
            }
        }

        public function insertUsers($password,$id,$sei,$mei,$code,$address,$number){
            $pdo = $this->dbConnect();

            $sql = "INSERT INTO users (user_password, user_id, sei, mei, post_code, user_address, phone_number) VALUES (?,?,?,?,?,?,?)";

            $ps = $pdo->prepare($sql);
            $ps->bindValue(1, password_hash($pass,PASSWORD_DEFAULT), PDO::PARAM_STR);
            $ps->bindValue(2, $id, PDO::PARAM_STR);
            $ps->bindValue(3, $sei, PDO::PARAM_STR);
            $ps->bindValue(4, $mei, PDO::PARAM_STR);
            $ps->bindValue(5, $code, PDO::PARAM_STR);
            $ps->bindValue(6, $address, PDO::PARAM_STR);
            $ps->bindValue(7, $number, PDO::PARAM_STR);

            $ps->execute();
        }

        public function searchAll(){
            
        }
    }
?>