<?php
    namespace App\Controllers;
    use App\Models\Main;
    class Productos extends BaseController
    {
        //---------- TABLAS ----------//
        static $tbl_c = "tbl_boutique_colores";
        static $tbl_p = "tbl_boutique_productos";
        static $tbl_pt = "tbl_boutique_protal";
        static $tbl_ptcs = "tbl_boutique_protalcolstock";
        static $tbl_t = "tbl_boutique_tallas";
        static $tbl_ti = "tbl_boutique_tiendas";
        static $tbl_pti = "tbl_boutique_protie";
        //---------- CAMPOS ----------//
        static $th_p_i = "p_id";
        static $th_p_t = "p_token";
        static $th_p_a = "p_activo";
        static $th_pt_i = "pt_id";
        static $th_pt_p = "pt_producto";
        static $th_pt_t = "pt_talla";
        static $th_t_i = "t_id";
        static $th_t_a = "t_activo";
        static $th_t_t = "t_talla";
        static $th_ptcs_p = "ptcs_protal";
        static $th_ptcs_c = "ptcs_color";
        static $th_c_i = "c_id";
        static $th_c_c = "c_color";
        static $th_c_a = "c_activo";
        static $th_ti_n = "ti_nombre";
        static $th_ti_a = "ti_activo";
        //---------- VALORES ----------//
        static $var_0 = 0;
        static $var_1 = 1;
        static $var_2 = 2;
        static $var_5 = 5;
        static $var_12 = 12;
        static $var_16 = 16;
        static $equal = "=";
        static $true = TRUE;
        static $false = FALSE;
        static $empty = "";
        static $and = "AND";
        static $or = "OR";
        static $ASC = "ASC";
        static $DESC = "DESC";
        public function index()
        {
            if (!empty($_GET['pag'])) { // VALIDAMOS SI LA VARIABLE VIENE VACIA
                $page = $_GET['pag'];
            } else { // LA VARIABLE NO EXISTE | LE AGREGAMOS EL VALOR DE 0
                $page = self::$var_0;
            }
            if (!empty($page) && is_numeric($page) && $page > self::$var_0) { // VALIDAMOS SI LA VARIABLE VIENE VACIA | VALIDAMOS EL VALOR DE LA VARIABLE
                $base = ($page - self::$var_1)*self::$var_12;
            } else { // LA VARIABLE ESTÁ VACIA | REDIRIGIMOS A LA PÁGINA ACTUAL
                $base = self::$var_0;
            }
            $tope = self::$var_12;
            $modelmain = new Main;
            $select = "p_url, p_nombre, p_precioCompra, p_precioVenta, p_imagen, t_talla, c_color, ptcs_stock";
            $query_home['productos'] = $modelmain -> __getAllInner($select, self::$var_5, self::$tbl_p, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_p_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_p_i, self::$DESC, $tope, $base, self::$empty);
            $query_home['allProductos'] = $modelmain -> __getAllInner($select, self::$var_5, self::$tbl_p, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_p_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
            $query_home['gastoTotal'] = self::$var_0;
            $query_home['gananciaTotal'] = self::$var_0;
            if (!empty($query_home['allProductos'])) {
                $query_home['countProductos'] = count($query_home['allProductos']);
                for ($i=self::$var_0; $i < count($query_home['allProductos']); $i++) {
                    $query_home['gastoTotal'] += $query_home['allProductos'][$i] -> p_precioCompra * $query_home['allProductos'][$i] -> ptcs_stock;
                }
            } else {
                $query_home['countProductos'] = self::$var_0;
                $query_home['gastoTotal'] = self::$var_0;
            }
            if (!empty($query_home['allProductos'])) {
                for ($i=self::$var_0; $i < count($query_home['allProductos']); $i++) {
                    $query_home['gananciaTotal'] += $query_home['allProductos'][$i] ->p_precioVenta * $query_home['allProductos'][$i] -> ptcs_stock;
                }
            } else {
                $query_home['gananciaTotal'] = self::$var_0;
            }
            $query_home['pag'] = $page;
            $select = "ti_id, ti_nombre";
            $query_home['tiendas'] = $modelmain -> __getAll($select, self::$tbl_ti, self::$var_1, self::$th_ti_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_ti_n, self::$ASC, self::$empty, self::$empty, self::$empty);
            $select = "c_id, c_color";
            $query_home['colores'] = $modelmain -> __getAll($select, self::$tbl_c, self::$var_1, self::$th_c_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_c_c, self::$ASC, self::$empty, self::$empty, self::$empty);
            $select = "t_id, t_talla";
            $query_home['tallas'] = $modelmain -> __getAll($select, self::$tbl_t, self::$var_1, self::$th_t_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
            // echo "<pre>"; print_r($query_home); die(); echo "</pre>";
            return view('header')
                .view('productos/dashboard', $query_home)
                .view('footer');
        }
        public function create()
        {
            $modelmain = new Main;        
            $query_producto['p_nombre'] = trim(mb_strtoupper($this -> request -> getPost('nProducto'), "UTF-8"));
            if (!empty($query_producto['p_nombre'])) {
                $query_producto['p_url'] = trim(mb_strtolower(__replace_space($query_producto['p_nombre']), "UTF-8"));
                $query_producto['p_precioCompra'] = trim(mb_strtoupper($this -> request -> getPost('pCompra'), "UTF-8"));
                $query_producto['p_ganancia'] = trim(mb_strtoupper($this -> request -> getPost('gProducto'), "UTF-8"));
                $query_producto['p_precioVenta'] = trim(mb_strtoupper($this -> request -> getPost('vProducto'), "UTF-8"));
                // $query_form['p_imagen'] = trim(mb_strtoupper($this -> request -> getPost('iProducto'), "UTF-8"));
                $query_form['ptcs_stock'] = trim(mb_strtoupper($this -> request -> getPost('caProducto'), "UTF-8"));
                $query_form['pti_tienda'] = trim(mb_strtoupper($this -> request -> getPost('pTienda'), "UTF-8"));
                $query_form['ptcs_color'] = trim(mb_strtoupper($this -> request -> getPost('pColor'), "UTF-8"));
                $query_form['pt_talla'] = trim(mb_strtoupper($this -> request -> getPost('pTalla'), "UTF-8"));
                $nameFile = mb_strtolower(__replace_space(__replace($query_producto['p_url']."_".$query_form['ptcs_color']."_".$query_form['pt_talla'])), "UTF-8");
                $carpeta = "images/productos";
                if (!file_exists($carpeta)) {
                    mkdir($carpeta, 0777, true);
                }
                //Abrimos el directorio de destino
                $file = opendir($carpeta);
                if (!empty($_FILES['iProducto']['name'])) {
                    move_uploaded_file($_FILES['iProducto']['tmp_name'],"$carpeta/$nameFile".".webp");
                    $url_img_Foto = $nameFile.".webp";
                } else {
                    $url_img_Foto = "producto.webp";
                }
                //Cerramos el directorio de destino
                closedir($file);
                $query_producto['p_imagen'] = $url_img_Foto;
                do { // ASIGNAMOS UN TOKEN AL REGISTRO Y VALIDAMOS QUE NO EXISTA UN TOKEN IGUAL EN LA BASE DE DATOS
                    $query_helper_header = __generatorCode(self::$var_16, self::$true, self::$true, self::$true, self::$false);
                    $select = "p_token";
                    $query_code = $modelmain -> __getRow($select, self::$tbl_p, self::$var_1, self::$th_p_t, self::$equal, $query_helper_header, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                } while (!empty($query_code));
                $query_producto['p_token'] = trim($query_helper_header);
                $query_producto['p_token_encrypt'] = trim(hash('whirlpool', $query_producto['p_token']));
                $query_producto['p_fcompra'] = trim($this -> request -> getPost('fProducto'));
                $query_producto['p_activo'] = self::$var_1;
                $query_insertProducto = $modelmain -> __insert(self::$tbl_p, $query_producto);
                // echo "<pre>"; print_r($query_insertProducto); echo "</pre>"; die();            
                $select = "p_id";
                $query_getProducto = $modelmain -> __getRow($select, self::$tbl_p, self::$var_1, self::$th_p_t, self::$equal, $query_producto['p_token'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $select = "t_id";
                $query_talla = $modelmain -> __getRow($select, self::$tbl_t, self::$var_1, self::$th_t_t, self::$equal, $query_form['pt_talla'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_proTal['pt_producto'] = $query_getProducto -> p_id;
                $query_proTal['pt_talla'] = $query_talla -> t_id;
                $query_proTal['pt_activo'] = self::$var_1;
                $query_insertProTal = $modelmain -> __insert(self::$tbl_pt, $query_proTal);
                $select = "ti_id";
                $query_tienda = $modelmain -> __getRow($select, self::$tbl_ti, self::$var_1, self::$th_ti_n, self::$equal, $query_form['pti_tienda'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_proTie['pti_producto'] = $query_getProducto -> p_id;
                $query_proTie['pti_tienda '] = $query_tienda -> ti_id;
                $query_proTie['pti_activo'] = self::$var_1;
                $query_insertProTal = $modelmain -> __insert(self::$tbl_pti, $query_proTie);
                $select = "pt_id";
                $query_getProtal = $modelmain -> __getRow($select, self::$tbl_pt, self::$var_2, self::$th_pt_p, self::$equal, $query_getProducto -> p_id, self::$and, self::$th_pt_t, self::$equal, $query_talla -> t_id, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $select = "c_id";
                $query_color = $modelmain -> __getRow($select, self::$tbl_c, self::$var_1, self::$th_c_c, self::$equal, $query_form['ptcs_color'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_ptcs['ptcs_protal'] = $query_getProtal -> pt_id;
                $query_ptcs['ptcs_color'] = $query_color -> c_id;
                $query_ptcs['ptcs_stock'] = $query_form['ptcs_stock'];
                $query_ptcs['ptcs_activo'] = self::$var_1;
                $query_insertProTal = $modelmain -> __insert(self::$tbl_ptcs, $query_ptcs);
                $query_alert['alert_icon'] = "success";
                $query_alert['alert_title'] = "LISTO";
                $query_alert['alert_text'] = "Se agrego correctamente el producto.";
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