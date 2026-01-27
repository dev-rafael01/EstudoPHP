<?php
namespace app\Controllers\Errors;

use App\Core\Controller;

 class HttpErrorController extends Controller
 {                 //Não encontrado
    public function notFound()
    {
        $this->views('errors/404');
    }
                    //Erro do Servidor Interno
    public function internalServerError(){
        $this->views('errors/500');
    }
                    // não autorizado
    public function aunauthorized(){
        http_response_code(403);
        $this->views('errors/403');
    }
 }

?>