<?php
use App\Models\Product;

class MainController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    // Page "About"
    public function about()
    {
        $this->render('about');
    }

    // Page 404
    public function notFound()
    {
        http_response_code(404);
        $this->render('404');
    }

    // Méthode pour inclure une vue
    protected function render($view, $data = [])
    {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "View not found: $view";
        }
    }
}
