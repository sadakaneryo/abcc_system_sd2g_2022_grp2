<?php
    class DBManager {

        public function dbConnect(){
            $pdo = new PDO('mysql:host=mysql208.phy.lolipop.lan;dbname=LAA1417400-healthybox;charset=utf8mb4','LAA1417400','Pass0000');
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

        public function searchWashoku(){
            $pdo = $this->dbConnect();

            $sql = "SELECT * FROM bento WHERE jpn = 1";
            $selectdata = $pdo->query($sql);
            foreach($selectdata as $row){
                echo ;
            }
        }

        public function searchYoushoku(){
            $pdo = $this->dbConnect();

            $sql = "SELECT * FROM bento WHERE jpn = 0";
            $selectdata = $pdo->query($sql);
            foreach($selectdata as $row){
                echo ;
            }
        }

        public function insertOrders(){
            $pdo = $this->dbConnect();

            $sql = "INSERT INTO orders (orders_id, user_id,) VALUES (?,?,)";

            $ps = $pdo->prepare($sql);
            $ps->bindValue(1, password_hash($pass,PASSWORD_DEFAULT), PDO::PARAM_STR);
            $ps->bindValue(2, $id, PDO::PARAM_STR);
           

            $ps->execute();
        }

        public function searchBento(){
            $sql = "SELECT * FROM bento WHERE bento_name LIKE ?";
            $ps = $pdo->prepare($sql);
            $ps->bindValue(1,'%'.$_POST['search'].'%',PDO::PARAM_STR);
            $ps->execute();
            $result = $ps->fetchAll();
            echo "検索キーワード：".$_POST['search']."<br>";
            foreach($result as $row){
                echo ;
            }
            if(count($result)==0){
                echo ;
            }
        }
    }
?>