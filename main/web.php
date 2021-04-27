<?PHP 

namespace Main;

use Main\Controls\Router as Router;
use Main\Controls\Request as Request;

use App\Controller\UserController as UserController;

$user = new UserController();


$router = new Router(new Request);

$router->get('/', UserController::display());