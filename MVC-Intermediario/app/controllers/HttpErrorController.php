<?php

 class HttpErrorController extends Controller
 {                 //Não encontrado
    public function NotFound()
    {
        $this->views('errors/404');
    }
                    //Erro do Servidor Interno
    public function InternalServerError(){
        $this->views('errors/500');
    }
                    // não autorizado
    public function aunauthorized(){
        http_response_code(403);
        $this->views('errors/403');
    }
 }

?>