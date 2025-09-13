<?php
    namespace App\Controllers;
    use App\Models\Main;
    class Gastos extends BaseController
    {
        //---------- TABLAS ----------//
        static $tbl_g = "tbl_boutique_gastos";
        static $tbl_cg = "tbl_boutique_categoriagastos";
        //---------- CAMPOS ----------//
        static $th_g_i = "g_id";
        static $th_g_c = "g_categoria";
        static $th_g_f = "g_fgasto";
        static $th_g_a = "g_activo";
        static $th_cg_i = "cg_id";
        static $th_cg_n = "cg_nombre";
        static $th_cg_a = "cg_activo";
        //---------- VALORES ----------//
        static $var_0 = 0;
        static $var_1 = 1;
        static $var_2 = 2;
        static $var_5 = 5;
        static $var_15 = 15;
        static $var_16 = 16;
        static $equal = "=";
        static $true = TRUE;
        static $false = FALSE;
        static $empty = "";
        static $and = "AND";
        static $or = "OR";
        static $ASC = "ASC";
        static $DESC = "DESC";
        public function index(): string
        {
            if (!empty($_GET['pag'])) { // VALIDAMOS SI LA VARIABLE VIENE VACIA
                $page = $_GET['pag'];
            } else { // LA VARIABLE NO EXISTE | LE AGREGAMOS EL VALOR DE 0
                $page = self::$var_0;
            }
            if (!empty($page) && is_numeric($page) && $page > self::$var_0) { // VALIDAMOS SI LA VARIABLE VIENE VACIA | VALIDAMOS EL VALOR DE LA VARIABLE
                $base = ($page - self::$var_1)*self::$var_5;
            } else { // LA VARIABLE ESTÁ VACIA | REDIRIGIMOS A LA PÁGINA ACTUAL
                $base = self::$var_0;
            }
            $tope = self::$var_15;
            $modelmain = new Main;
            $select = "g_nombre, g_cantidad, g_precio, g_fgasto, cg_nombre";
            $query_home['gastos'] = $modelmain -> __getAllInner($select, self::$var_2, self::$tbl_g, self::$tbl_cg, self::$th_g_c, self::$th_cg_i, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_g_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_g_f, self::$DESC, $tope, $base, self::$empty);
            $query_home['allGastos'] = $modelmain -> __getAllInner($select, self::$var_2, self::$tbl_g, self::$tbl_cg, self::$th_g_c, self::$th_cg_i, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_g_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
            $query_home['gastoTotal'] = self::$var_0;
            if (!empty($query_home['allGastos'])) {
                $query_home['countGastos'] = count($query_home['allGastos']);
                for ($i=self::$var_0; $i < count($query_home['allGastos']); $i++) {
                    $query_home['gastoTotal'] += $query_home['allGastos'][$i] -> g_precio * $query_home['allGastos'][$i] -> g_cantidad;
                }
            } else {
                $query_home['countGastos'] = self::$var_0;
                $query_home['gastoTotal'] = self::$var_0;
            }
            $select = "cg_id, cg_nombre";
            $query_home['categorias'] = $modelmain -> __getAll($select, self::$tbl_cg, self::$var_1, self::$th_cg_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_cg_n, self::$ASC, self::$empty, self::$empty, self::$empty);
            $query_home['cat'] = $modelmain -> __getAll($select, self::$tbl_cg, self::$var_1, self::$th_cg_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
            if (!empty($query_home['cat'])) {
                for ($i=1; $i <= count($query_home['cat']); $i++) { 
                    $select = "g_cantidad, g_precio";
                    $query_home['g'.$i] = $modelmain -> __getAll($select, self::$tbl_g, self::$var_2, self::$th_g_a, self::$equal, self::$var_1, self::$and, self::$th_g_c, self::$equal, $i, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                    $query_home['gT'.$i] = self::$var_0;
                    if (!empty($query_home['g'.$i])) {
                        for ($ii=self::$var_0; $ii < count($query_home['g'.$i]); $ii++) {
                            $query_home['gT'.$i] += $query_home['g'.$i][$ii] -> g_precio * $query_home['g'.$i][$ii] -> g_cantidad;
                        }
                    } else {
                        $query_home['gT'.$i] = self::$var_0;
                    }
                    if (!empty($query_home['gT'.$i]) && $query_home['gT'.$i] != self::$var_0) {
                        $query_home['gTP'.$i] = number_format(($query_home['gT'.$i]/$query_home['gastoTotal'])*100, 2);
                    } else{
                        $query_home['gTP'.$i] = self::$var_0;
                    }
                }
            }
            // echo "<pre>"; print_r($query_home); die(); echo "</pre>";
            $query_home['pag'] = $page;
            
            return view('header')
                .view('gastos/dashboard', $query_home)
                .view('footer');
        }
        public function create()
        {
            $modelmain = new Main;
            $query_form['g_nombre'] = trim(mb_strtoupper($this -> request -> getPost('nGasto'), "UTF-8"));
            if (!empty($query_form['g_nombre'])) {
                $query_form['g_categoria'] = trim(mb_strtoupper($this -> request -> getPost('categoriaGasto'), "UTF-8"));
                $select = "cg_id";
                $query_getGasto = $modelmain -> __getRow($select, self::$tbl_cg, self::$var_1, self::$th_cg_n, self::$equal, $query_form['g_categoria'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_form['g_categoria'] = $query_getGasto -> cg_id;
                $query_form['g_cantidad'] = trim(mb_strtoupper($this -> request -> getPost('caGasto'), "UTF-8"));
                $query_form['g_precio'] = trim(mb_strtoupper($this -> request -> getPost('pGasto'), "UTF-8"));
                $query_form['g_fgasto'] = trim($this -> request -> getPost('fGasto'));
                $query_form['g_activo'] = self::$var_1;
                $query_insertProducto = $modelmain -> __insert(self::$tbl_g, $query_form);
                $query_alert['alert_icon'] = "success";
                $query_alert['alert_title'] = "LISTO";
                $query_alert['alert_text'] = "Se agrego correctamente el gasto.";
                $query_alert['alert_ruta'] = "ruta";
                return view('header')
                .view('white')
                .view('popup/popupTime', $query_alert)
                .view('footer');
            } else {
                $query_alert['alert_icon'] = "error";
                $query_alert['alert_title'] = "ATENCIÓN";
                $query_alert['alert_text'] = "Ocurrio un error. Intentalo nuevamente.";
                $query_alert['alert_ruta'] = "ruta";
                return view('header')
                .view('white')
                .view('popup/popupTime', $query_alert)
                .view('footer');
            }
        }
    }