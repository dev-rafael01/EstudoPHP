<?php

 class NotFoundController extends Controller
 {
    public function index()
    {
        $this->views('404/404');
    }
 }

?>