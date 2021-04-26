<?PHP 

require_once __DIR__.'./require.php';


use Twig\Loader\FilesystemLoader as FilesystemLoader;
use Twig\Environment as Environment;



$router = new Router(new Request);


$router->get('/', function() {
    $loader = new FilesystemLoader('views');
    $twig = new Environment($loader);
    return $twig->render('index.php');

});

$router->get('/login', function() {

    $loader = new FilesystemLoader('views');
    $twig = new Environment($loader);

    return $twig->render('login.php');

});

$router->get('/register', function() {

    $loader = new FilesystemLoader('views');
    $twig = new Environment($loader);

    return $twig->render('register.php');

});



$router->post('/login', function($request){
    $user = new User();
    $email = trim($request->getBody()['email']);
    $password = trim($request->getBody()['password']);
    $save = $user->login($email, $password);

    $loader = new FilesystemLoader('views');
    $twig = new Environment($loader);

    if($save == 1 ){
        return $twig->render('home.php');
    }else{
        $message = ['message' => 'Invalid user credentials'];
        return $twig->render('login.php', $message);
    }
    
});


$router->get('/home', function($request){
    $session = $_SESSION['user_session'];
    $loader = new FilesystemLoader('views');
    $twig = new Environment($loader);

    return $twig->render('home.php', ['session' => $session]);
});
