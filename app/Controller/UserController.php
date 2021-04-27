<?PHP

//include_once('');
namespace App\Controller;

use App\Helpers\Render as Render;

class UserController {


    public static function display(){
        $render = new Render();
        echo $render->view('index.twig', []);
    }

    public function register(){
        
    }

    public function login(){
        
    }

    public function logout(){
        
    }
}