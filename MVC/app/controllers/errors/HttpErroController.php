<?php


class HttpErroController extends Controller
{
    public function NotFound()
    {
        http_response_code(404);
        $this->view('errors/404');
    }
    public function InternalServerErro()
    {
        http_response_code(500);
        $this->view('errors/404');
    }
    public function aunauthorized()
    {
        http_response_code(403);
        $this->view('errors/403');
    }
}



?>