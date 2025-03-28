<?php
    namespace App\Controllers;
    use App\Models\Main;
    class Apartados extends BaseController
    {
        //---------- TABLAS ----------//
        static $tbl_a = "tbl_boutique_apartados";
        static $tbl_ab = "tbl_boutique_abonos";
        static $tbl_p = "tbl_boutique_productos";
        static $tbl_cl = "tbl_boutique_clientes";
        static $tbl_tp = "tbl_boutique_tipospago";
        static $tbl_c = "tbl_boutique_colores";
        static $tbl_pt = "tbl_boutique_protal";
        static $tbl_ptcs = "tbl_boutique_protalcolstock";
        static $tbl_t = "tbl_boutique_tallas";
        static $tbl_i = "tbl_boutique_ingresos";
        //---------- CAMPOS ----------//
        static $th_a_i = "a_id";
        static $th_a_t = "a_token";
        static $th_a_p = "a_producto";
        static $th_a_c = "a_cliente";
        static $th_a_f = "a_fecha";
        static $th_a_a = "a_activo";
        static $th_p_i = "p_id";
        static $th_p_n = "p_nombre";
        static $th_p_a = "p_activo";
        static $th_cl_i = "cl_id";
        static $th_cl_ap = "cl_apellido";
        static $th_cl_a = "cl_activo";
        static $th_tp_i = "tp_id";
        static $th_tp_a = "tp_activo";
        static $th_pt_i = "pt_id";
        static $th_pt_p = "pt_producto";
        static $th_pt_t = "pt_talla";
        static $th_t_i = "t_id";
        static $th_ptcs_p = "ptcs_protal";
        static $th_ptcs_c = "ptcs_color";
        static $th_c_i = "c_id";
        static $th_ab_i = "ab_id";
        static $th_ab_a = "ab_apartado";
        static $th_ab_tp = "ab_tipoPago";
        static $th_ab_ac = "ab_activo";
        static $th_i_t = "i_token";
        //---------- VALORES ----------//
        static $var_0 = 0;
        static $var_1 = 1;
        static $var_2 = 2;
        static $var_5 = 5;
        static $var_7 = 7;
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
        public function index()
        {
            if (!empty($_GET['pag'])) { // VALIDAMOS SI LA VARIABLE VIENE VACIA
                $page = $_GET['pag'];
            } else { // LA VARIABLE NO EXISTE | LE AGREGAMOS EL VALOR DE 0
                $page = self::$var_0;
            }
            if (!empty($page) && is_numeric($page) && $page > self::$var_0) { // VALIDAMOS SI LA VARIABLE VIENE VACIA | VALIDAMOS EL VALOR DE LA VARIABLE
                $base = ($page - self::$var_1)*self::$var_15;
            } else { // LA VARIABLE ESTÁ VACIA | REDIRIGIMOS A LA PÁGINA ACTUAL
                $base = self::$var_0;
            }
            $tope = self::$var_15;
            $modelmain = new Main;
            $select = "a_token, a_fecha, a_hora, p_nombre, t_talla, c_color, p_precioVenta, p_imagen, cl_nombre, cl_apellido, cl_whatsapp";
            $query_home['allApartados'] = $modelmain -> __getAllInner($select, self::$var_7, self::$tbl_a, self::$tbl_p, self::$th_a_p, self::$th_p_i, self::$tbl_cl, self::$th_a_c, self::$th_cl_i, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_a_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
            $query_home['apartados'] = $modelmain -> __getAllInner($select, self::$var_7, self::$tbl_a, self::$tbl_p, self::$th_a_p, self::$th_p_i, self::$tbl_cl, self::$th_a_c, self::$th_cl_i, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_a_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_a_f, self::$DESC, $tope, $base, self::$empty);
            // $query_home['allApartados'] = "";
            // $query_home['apartados'] ="";
            if (!empty($query_home['allApartados'])) {
                $query_home['countApartados'] = count($query_home['allApartados']);
            } else {
                $query_home['countApartados'] = self::$var_0;
            }
            $query_home['pag'] = $page;
            $select = "p_id, p_nombre, t_talla, c_color, p_precioVenta";
            $query_home['productos'] = $modelmain -> __getAllInner($select, self::$var_5, self::$tbl_p, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_p_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_p_n, self::$ASC, self::$empty, self::$empty, self::$empty);
            $select = "cl_id, cl_nombre, cl_apellido";
            $query_home['clientes'] = $modelmain -> __getAll($select, self::$tbl_cl, self::$var_1, self::$th_cl_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_cl_ap, self::$ASC, self::$empty, self::$empty, self::$empty);
            $select = "tp_id, tp_nombre";
            $query_home['tipoPagos'] = $modelmain -> __getAll($select, self::$tbl_tp, self::$var_1, self::$th_tp_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
            // echo "<pre>"; print_r($query_home); die(); echo "</pre>";
            return view('header')
                .view('apartados/dashboard', $query_home)
                .view('footer');
        }
        public function create()
        {
            $modelmain = new Main;        
            $query_form['a_producto'] = trim($this -> request -> getPost('aproducto'));
            if (!empty($query_form['a_producto'])) {
                do { // ASIGNAMOS UN TOKEN AL REGISTRO Y VALIDAMOS QUE NO EXISTA UN TOKEN IGUAL EN LA BASE DE DATOS
                    $query_helper_header = __generatorCode(self::$var_16, self::$true, self::$true, self::$true, self::$false);
                    $select = "a_token";
                    $query_code = $modelmain -> __getRow($select, self::$tbl_a, self::$var_1, self::$th_a_t, self::$equal, $query_helper_header, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                } while (!empty($query_code));
                $query_form['a_token'] = trim($query_helper_header);
                $query_form['a_tokenEncrypt'] = trim(hash('whirlpool', $query_form['a_token']));
                $select = "p_id, p_nombre, t_talla, c_color,";
                $query_home['producto'] = $modelmain -> __getRowInner($select, self::$var_5, self::$tbl_p, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_p_i, self::$equal, $query_form['a_producto'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_form['a_cliente'] = trim($this -> request -> getPost('aCliente'));
                $select = "cl_id, cl_nombre, cl_apellido, cl_whatsapp";
                $query_home['clientes'] = $modelmain -> __getRow($select, self::$tbl_cl, self::$var_1, self::$th_cl_i, self::$equal, $query_form['a_cliente'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_form['a_fecha'] = trim($this -> request -> getPost('aFecha'));
                $query_form['a_hora'] = trim($this -> request -> getPost('aHora'));
                $query_form['a_activo'] = self::$var_1;
                $query_insertApartado = $modelmain -> __insert(self::$tbl_a, $query_form);
                // $select = "a_id";
                // $query_apartado = $modelmain -> __getRow($select, self::$tbl_a, self::$var_1, self::$th_a_t, self::$equal, $query_form['a_token'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_abono['ab_apartado '] = $query_insertApartado;
                $query_abono['ab_tipoPago'] = trim($this -> request -> getPost('aPago'));
                $query_abono['ab_cantidad'] = trim($this -> request -> getPost('aCantidad'));
                $query_abono['ab_hora'] = date('H:i:s');
                $query_abono['ab_fecha'] = trim($this->request->getPost('aFecha'));
                $query_abono['ab_activo'] = self::$var_1;
                $query_insertAbono = $modelmain -> __insert(self::$tbl_ab, $query_abono);
                do { // ASIGNAMOS UN TOKEN AL REGISTRO Y VALIDAMOS QUE NO EXISTA UN TOKEN IGUAL EN LA BASE DE DATOS
                    $query_ingreso['i_token'] = __generatorCode(self::$var_16, self::$true, self::$true, self::$true, self::$false);
                    $select = "i_token";
                    $query_code = $modelmain->__getRow($select, self::$tbl_i, self::$var_1, self::$th_i_t, self::$equal, $query_ingreso['i_token'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                } while (!empty($query_code));
                $query_ingreso['i_token_encrypt'] = trim(hash('whirlpool', $query_ingreso['i_token']));
                $query_ingreso['i_ingreso'] = trim($this -> request -> getPost('aCantidad'));
                $query_ingreso['i_fecha'] = trim($this->request->getPost('aFecha'));
                $query_ingreso['i_hora'] = date('H:i:s');
                $query_ingreso['i_flag'] = self::$var_0;
                $query_ingreso['i_id_v_a'] = $query_insertAbono;
                $query_ingreso['i_activo'] = self::$var_1;
                $query_insertIngreso = $modelmain->__insert(self::$tbl_i, $query_ingreso);
                $query_update['p_activo'] = self::$var_0;
                $query_updateProducto = $modelmain -> __update(self::$tbl_p, self::$th_p_i, $query_form['a_producto'], $query_update);
                $query_alert['alert_icon'] = "success";
                $query_alert['alert_title'] = "LISTO";
                $query_alert['alert_text'] = "Se agrego correctamente el apartado.";
                $query_alert['alert_ruta'] = "ruta";
                // if (!empty($query_home['clientes'] -> cl_whatsapp)) {
                //     $query_alert['alert_url'] = "https://wa.me/".$query_home['clientes'] -> cl_whatsapp."?text=¡*".ucfirst(mb_strtolower($query_home['clientes'] -> cl_apellido, "UTF-8"))." ".ucfirst(mb_strtolower($query_home['clientes'] -> cl_nombre, "UTF-8"))."*, muchas gracias por elegir *Boutique Blue*! Estamos seguros de que tu *".$query_home['producto'] -> p_nombre."* en talla *".$query_home['producto'] -> t_talla."* color *".$query_home['producto'] -> c_color."* será tu nuevo favorito.%0A%0A*¿Ya pensaste en cómo lo combinarás?*%0A%0A*_¡Te esperamos pronto para mostrarte nuestras nuevas colecciones!_*%0A%0A*_YoSoyBlue_*";
                // } else {
                //     $query_alert['alert_url'] = "";
                // }
                return view('header')
                .view('white')
                .view('popup/popupWhatsApp', $query_alert)
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
        public function read($apartado = NULL)
        {
            if (!empty($apartado)) {
                $modelmain = new Main;        
                $select = "a_id, a_token, a_fecha, a_hora, p_nombre, t_talla, c_color, p_id, p_precioVenta, p_imagen, cl_id, cl_nombre, cl_apellido, cl_whatsapp";
                $query_home['apartados'] = $modelmain ->  __getRowInner($select, self::$var_7, self::$tbl_a, self::$tbl_p, self::$th_a_p, self::$th_p_i, self::$tbl_cl, self::$th_a_c, self::$th_cl_i, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_2, self::$th_a_t, self::$equal, $apartado, self::$and, self::$th_a_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                if (!empty($query_home['apartados'])) {
                    $select = "SUM(ab_cantidad) AS totalAbonos";
                    $query_home['totalAbonos'] = $modelmain -> __getAll($select, self::$tbl_ab, self::$var_2, self::$th_ab_a, self::$equal, $query_home['apartados'] -> a_id, self::$and, self::$th_ab_ac, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                    $select = "ab_cantidad, ab_hora, ab_fecha, tp_nombre";
                    $query_home['abonos'] = $modelmain ->  __getAllInner($select, self::$var_2, self::$tbl_ab, self::$tbl_tp, self::$th_ab_tp, self::$th_tp_i, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_2, self::$th_ab_a, self::$equal, $query_home['apartados'] -> a_id, self::$and, self::$th_ab_ac, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_ab_i, self::$DESC, self::$empty, self::$empty, self::$empty);
                    $select = "tp_id, tp_nombre";
                    $query_home['tipoPagos'] = $modelmain -> __getAll($select, self::$tbl_tp, self::$var_1, self::$th_tp_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                    return view('header')
                        .view('apartados/read', $query_home)
                        .view('footer');
                    // echo "<pre>"; print_r($query_abonos); die(); echo "</pre>";
                } else {
                    return redirect() -> to(base_url('apartados'));
                }
            } else {
                return redirect() -> to(base_url('apartados'));
            }
        }
    }