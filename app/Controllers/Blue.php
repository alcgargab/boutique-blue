<?php
    namespace App\Controllers;
    class Blue extends BaseController
    {
        //---------- TABLAS ----------//
        //---------- CAMPOS ----------//
        //---------- VALORES ----------//

        public function index(): string
        {
            return view('header')
                .view('dashboard')
                .view('footer');
        }
    }
