<?PHP 

include_once('./database/connection.php');

class User extends Connection {

    function __construct(){
        parent::__construct();
    }

    public function register($name, $email, $password){
        try {
            $new_password = password_hash($password, PASSWORD_DEFAULT);

            $statement = $this->connection->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password) ");

            $statement->bindParam(":name", $name);
            $statement->bindParam(":email", $email);
            $statement->bindParam(":password", $new_password);

            $statement->execute();

            return $statement;

        } catch (PDOException $e) {
           echo $e->getMessage(); 
        }
    }

    public function login($email, $password){
       try{
          $statement = $this->connection->prepare("SELECT * FROM users WHERE email=:email LIMIT 1");
          $statement->execute(array(':email' => $email));
          $user = $statement->fetch(PDO::FETCH_ASSOC);
          if($statement->rowCount() > 0)
          {
             if(password_verify($password, $user['password'])){
                $_SESSION['user_session'] = $user['id'];
                return true;
             }else{
                return false;
             }
          }else{
              return false;
          }
       }catch(PDOException $e){
           echo $e->getMessage();
       }
   }
    

    
}