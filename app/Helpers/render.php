<?PHP

namespace App\Helpers;

use Twig\Loader\FilesystemLoader as FilesystemLoader;
use Twig\Environment as Environment;

class Render {

    private $loader;
    private $twig;

    public function __construct(){
        $this->loader = new FilesystemLoader('./views');
        $this->twig = new Environment($this->loader);
    }

    public function view($file, $array){
        return $this->twig->render($file, $array);
    }
}