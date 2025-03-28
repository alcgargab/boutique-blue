<?php
    namespace App\Controllers;
    class Blue extends BaseController
    {
        //---------- TABLAS ----------//
        //---------- CAMPOS ----------//
        //---------- VALORES ----------//

        public function index(): string
        {
            // echo "<pre>"; print_r('hola'); echo "</pre>"; die();
            return view('header')
                .view('dashboard')
                .view('footer');
        }
    }
