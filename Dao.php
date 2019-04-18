
<?php
  require_once 'KLogger.php';

  class Dao {
  private $host = "us-cdbr-iron-east-03.cleardb.net";
  private $db = "heroku_841708bb5d1affd";
  private $user = "b10ee247af263d";
  private $pass = "6538787d";



  protected $logger;

  public function __construct () {
    $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
  }
  public function getConnection () {
    $this->logger->LogDebug("Getting a connection.");
    try {
      $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
            $this->pass);
    } catch (Exception $e) {
      $this->logger->LogError(__CLASS__ . "::" . __FUNCTION__ . " The database exploded " . print_r($e,1));
      echo print_r($e,1);
      exit;
    }
    return $conn;
  }

  public function getComments () {
    $conn = $this->getConnection();
    return $conn->query("select comment, date_created  from comment order by date_created desc", PDO::FETCH_ASSOC);
  }


  public function getUser ($email) {
    $this->logger->LogWarn("Getting User [{$email}]");
    $conn = $this->getConnection();
    $q = $conn->prepare("SELECT count(email) from users where email = :email");
    $q->bindParam(":email", $email);
    $q->execute();
    $user= $q->fetchColumn();
    return $user;
  }

   public function getUserID($email, $password){
     $this->logger->LogWarn("Getting User [{$email}]");
     $conn = $this->getConnection();
     $q = $conn->prepare("SELECT ID FROM users where email = :email And password=:password");
     $q->bindParam(":email",$email);
     $q->bindParam(":password", $password);
     $q->execute();
     $user = $q->setFetchMode(PDO::FETCH_ASSOC);
     $user = $q->fetch();
     return $user;
   }

  public function saveUser ($email, $password, $repassword) {
    $this->logger->LogInfo("Getting password [{$email}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into users (email, password, repassword) values (:email, :password, :repassword)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":email", $email);
    $q->bindParam(":password", $password);
    $q->bindParam(":repassword", $repassword);
    $q->execute();
  }

  public function verify_Password($email, $password){
    $this->logger->LogInfo("Getting Password [{$email}]");
    $conn = $this->getConnection();
    $q = $conn->prepare("SELECT count(email) from users where email = :email And password= :password");
    $q->bindParam(":email", $email);
    $q->bindParam(":password", $password);
    $q->execute();
    $password = $q->fetchColumn();
    return $password;
  }

  public function saveComment ($comment) {
    $this->logger->LogInfo("Saving a comment [{$comment}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into comment (comment, user_id) values (:comment, 1)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":comment", $comment);
    $q->execute();
  }

}
?>
