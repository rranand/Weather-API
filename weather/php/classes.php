<?php
error_reporting(0);

date_default_timezone_set('Asia/Kolkata');

    class login {

        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function check($username, $password) {
            $query = "SELECT * FROM user_profile WHERE username='$username' AND password='$password';";
            $data = mysqli_query($this->conn, $query);

            if (mysqli_num_rows($data) == 0) {
                return false;
            } else {
                return true;
            }
        }

        public function existance($username, $email) {
            $query = "SELECT * FROM user_profile WHERE username='$username' OR email='$email';";
            $data = mysqli_query($this->conn, $query);

            if (mysqli_num_rows($data)==0) {
                return false;
            } else {
                return true;
            }
        }

        public function create($name, $email, $username, $password) {
            $query = "INSERT INTO user_profile (name, email, username, password) VALUES ('$name', '$email', '$username', '$password');";
            mysqli_query($this->conn, $query);

            $flag = true;
            $arr = array(0=>"a", 1=>"b", 2=>"c", 3=>"d", 4=>"e", 5=>"f", 6=>"g", 7=>"h", 8=>"i", 9=>"j", 10=>"k", 11=>"l", 12=>"m", 13=>"n", 14=>"o", 15=>"p", 16=>"q", 17=>"r", 18=>"s", 19=>"t", 20=>"u", 21=>"v", 22=>"w", 23=>"x", 24=>"y", 25=>"z", 26=>"A", 27=>"B", 28=>"C", 29=>"D", 30=>"E", 31=>"F", 32=>"G", 33=>"H", 34=>"I", 35=>"J", 36=>"K", 37=>"L", 38=>"M", 39=>"N", 40=>"O", 41=>"P", 42=>"Q", 43=>"R", 44=>"S", 45=>"T", 46=>"U", 47=>"V", 48=>"W", 49=>"X", 50=>"Y", 51=>"Z", 52=>"9", 53=>"1", 54=>"2", 55=>"3", 56=>"4", 57=>"5", 58=>"6", 59=>"7", 60=>"8");

            while ($flag) {
                $api = '';
                for ($x = 0; $x < 100; $x++) {
                    $v = rand(0, 60);
                    $api=$api.$arr[$v];
                }
                $query = "SELECT * FROM api_data WHERE token='$api';";
                $data = mysqli_query($this->conn, $query);
                $datetime_variable = new DateTime();
                $datetime_formatted = date_format($datetime_variable, 'Y-m-d H:i:s');

                if (mysqli_num_rows($data) == 0) {
                    $flag = false;
                    $query = "INSERT INTO api_data (username, token, purchased) VALUES ('$username', '$api', '$datetime_formatted');";
                    mysqli_query($this->conn, $query);
                }
            }
        }

        public function getProfile($username) {
            $query = "SELECT * FROM user_profile WHERE username='$username';";
            $data = mysqli_fetch_assoc(mysqli_query($this->conn, $query));
            return json_encode($data);
        }

        public function getAPIProfile($username) {
            $query = "SELECT * FROM api_data WHERE username='$username';";
            $data = mysqli_fetch_assoc(mysqli_query($this->conn, $query));
            return json_encode($data);
        }

        public function upgradeAC($username) {
            $date = date('Y-m-d H:i:s');
            mysqli_query($this->conn, "UPDATE api_data SET type=1, purchased='$date' WHERE username='$username';");
        }

        public function getPass($username, $email) {
            $query = "SELECT password,name FROM user_profile WHERE username='$username' AND email='$email';";
            $data = mysqli_query($this->conn, $query);

            return $data;
        }
    }

    class api {

        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function validateApi($token) {
            $query = "SELECT * FROM api_data WHERE token='$token' AND calls>0;";
            $data = mysqli_query($this->conn, $query);

            $pur = mysqli_fetch_assoc(mysqli_query($this->conn, "SELECT purchased FROM api_data WHERE token='$token';"))['purchased'];
            $date = strtotime(date('Y-m-d H:i:s'));
            $pur = strtotime($pur . '+7 days');

            if ($date >= $pur) {
                mysqli_query($this->conn, "UPDATE api_data SET type=0 WHERE token='$token'");
            }

            if (mysqli_num_rows($data) == 0) {
                return false;
            } else {
                return true;
            }
        }

        public function getData($token, $city) {

            $type = mysqli_fetch_assoc(mysqli_query($this->conn, "SELECT type FROM api_data WHERE token='$token';"))['type'];

            if ($type) {
                $q2 = "SELECT * FROM weather_data_pre WHERE city = '$city'";
                $data = mysqli_query($this->conn, $q2);

                if (mysqli_num_rows($data) == 0) {
                    return json_encode(array(
                            "Message" => "Invalid City!!!",
                    ));
                }
                mysqli_query($this->conn, "UPDATE api_data SET total_calls= total_calls+1 WHERE token='$token';");
                $arr = array();
                while ($row=mysqli_fetch_assoc($data)) {
                    $arr[] = $row;
                }
                return json_encode($arr);

            } else {
                $q1 = "UPDATE api_data SET calls = calls - 1 WHERE token='$token'";
                $q2 = "SELECT * FROM weather_data WHERE city = '$city'";
                $data = mysqli_query($this->conn, $q2);

                if (mysqli_num_rows($data) == 0) {
                    return json_encode(array(
                            "Message" => "Invalid City!!!",
                    ));
                }
                mysqli_query($this->conn, "UPDATE api_data SET total_calls= total_calls+1 WHERE token='$token';");
                mysqli_query($this->conn, $q1);
                $arr[] = mysqli_fetch_assoc($data);
                return json_encode($arr);
            }
        }

        public function getCity() {
            $q = "SELECT city FROM weather_data;";
            $data = mysqli_query($this->conn, $q);

            $arr = array();
            while ($row=mysqli_fetch_assoc($data)) {
                 $arr[] = $row;
            }
            return json_encode($arr);
        }
    }

    class contact {

        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function addDet($name, $email, $subject, $message) {
            $q = "INSERT INTO contact_data (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message');";
            mysqli_query($this->conn, $q);
        }

        public function getDet() {
            $q = "SELECT * FROM contact_data;";
            $arr = array();
            $data = mysqli_query($this->conn, $q);
            while ($row=mysqli_fetch_assoc($data)) {
                $arr[] = $row;
            }
            return json_encode($arr);
        }

        public function search($search) {
            $q = "SELECT * FROM contact_data WHERE email='$search';";
            $arr = array();
            $data = mysqli_query($this->conn, $q);
            while ($row=mysqli_fetch_assoc($data)) {
                $arr[] = $row;
            }
            return json_encode($arr);
        }
    }

    class admin_profile {

        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function check($username, $password) {
            $query = "SELECT * FROM admin_profile WHERE username='$username' AND password='$password';";
            $data = mysqli_query($this->conn, $query);

            if (mysqli_num_rows($data) == 0) {
                return false;
            } else {
                return true;
            }
        }

        public function fortable() {
            $q1 = "SELECT up.name, up.username, up.email, ad.type, ad.calls FROM user_profile up JOIN api_data ad ON (up.username = ad.username);";
            $data = mysqli_query($this->conn, $q1);
            $arr = array();
            while ($row=mysqli_fetch_assoc($data)) {
                $arr[] = $row;
            }
            return json_encode($arr);
        }

        public function userData($username) {
            $q1 = "SELECT up.name, up.username, up.email, ad.type, ad.calls, ad.total_calls, ad.token, ad.purchased FROM user_profile up JOIN api_data ad ON (up.username = ad.username) AND ad.username = '$username';";
            $arr = array();
            $data = mysqli_query($this->conn, $q1);
            while ($row=mysqli_fetch_assoc($data)) {
                $arr[] = $row;
            }
            return json_encode($arr);
        }

        public function searchTable($search, $acc) {
            if ($acc==2) {
                if (strlen($search) >0) {
                    $q1 = "SELECT DISTINCT up.username, up.name, up.email, ad.type, ad.calls FROM user_profile up JOIN api_data ad ON (up.username = ad.username) AND (ad.username = '$search' OR up.email = '$search' OR up.name = '$search');";
                } else {
                    $q1 = "SELECT up.name, up.username, up.email, ad.type, ad.calls FROM user_profile up JOIN api_data ad ON (up.username = ad.username);";
                }
            } else {
                if (strlen($search) >0) {
                    $q1 = "SELECT DISTINCT up.username, up.name, up.email, ad.type, ad.calls FROM user_profile up JOIN api_data ad ON (up.username = ad.username) AND type = '$acc' AND (ad.username = '$search' OR up.email = '$search' OR up.name = '$search');";
                } else {
                    $q1 = "SELECT DISTINCT up.username, up.name, up.email, ad.type, ad.calls FROM user_profile up JOIN api_data ad ON (up.username = ad.username) AND type = '$acc';";
                }
            }
            $d1 = mysqli_query($this->conn, $q1);

            $arr = array();
            while ($row=mysqli_fetch_assoc($d1)) {
                $arr[] = $row;
            }
            return json_encode($arr);
        }
    }
?>