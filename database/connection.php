<?PHP 

session_start();

require_once __DIR__.'../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

class Connection {
    
    private $host = "localhost";
    private $username = "root";
    private $password = "mysql";
    private $database = "pestgram";

    protected $connection;

    public function __construct()
    {
        try {

            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $this->connection;
    }
}