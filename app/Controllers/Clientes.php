<?php
    namespace App\Controllers;
    use App\Models\Main;
    class Clientes extends BaseController
    {
        //---------- TABLAS ----------//
        static $tbl_cl = "tbl_boutique_clientes";
        //---------- CAMPOS ----------//
        static $th_cl_i = "cl_id";
        static $th_cl_t = "cl_token";
        static $th_cl_te = "cl_telefono";
        static $th_cl_w = "cl_whatsapp";
        static $th_cl_a = "cl_activo";
        //---------- VALORES ----------//
        static $var_0 = 0;
        static $var_1 = 1;
        static $var_2 = 2;
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
            $select = "cl_token, cl_nombre, cl_apellido, cl_telefono, cl_whatsapp";
            $query_home['clientes'] = $modelmain -> __getAll($select, self::$tbl_cl, self::$var_1, self::$th_cl_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_cl_i, self::$DESC, $tope, $base, self::$empty);
            $query_home['allClientes'] = $modelmain -> __getAll($select, self::$tbl_cl, self::$var_1, self::$th_cl_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
            if (!empty($query_home['allClientes'])) {
                $query_home['countClientes'] = count($query_home['allClientes']);
            } else {
                $query_home['countClientes'] = self::$var_0;
            }
            $query_home['pag'] = $page;
            return view('header')
                .view('clientes/dashboard', $query_home)
                .view('footer');
        }
        public function create()
        {
            $modelmain = new Main;
            $query_form['cl_nombre'] = trim(mb_strtoupper($this -> request -> getPost('nCliente'), "UTF-8"));
            if (!empty($query_form['cl_nombre'])) {
            $query_form['cl_apellido'] = trim(mb_strtoupper($this -> request -> getPost('aCliente'), "UTF-8"));
            $query_form['cl_telefono'] = trim($this -> request -> getPost('cTelefono'));
            $query_form['cl_whatsapp'] = trim($this -> request -> getPost('cWhatsapp'));
                do { // ASIGNAMOS UN TOKEN AL REGISTRO Y VALIDAMOS QUE NO EXISTA UN TOKEN IGUAL EN LA BASE DE DATOS
                    $query_helper_header = __generatorCode(self::$var_16, self::$true, self::$true, self::$true, self::$false);
                    $select = "cl_token";
                    $query_code = $modelmain -> __getRow($select, self::$tbl_cl, self::$var_1, self::$th_cl_t, self::$equal, $query_helper_header, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                } while (!empty($query_code));
                $query_cliente = $modelmain -> __getRow($select, self::$tbl_cl, self::$var_2, self::$th_cl_te, self::$equal, $query_form['cl_telefono'], self::$and, self::$th_cl_w, self::$equal, $query_form['cl_whatsapp'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                if (empty($query_cliente)) {
                    $query_form['cl_token'] = trim($query_helper_header);
                    $query_form['cl_tokenEncrypt'] = trim(hash('whirlpool', $query_form['cl_token']));
                    $query_form['cl_fecha'] = date('Y-m-d');
                    $query_form['cl_hora'] = date('H:i:s');
                    $query_form['cl_activo'] = self::$var_1;
                    $query_insert = $modelmain -> __insert(self::$tbl_cl, $query_form);
                    $query_alert['alert_icon'] = "success";
                    $query_alert['alert_title'] = "LISTO";
                    $query_alert['alert_text'] = "Se agrego correctamente el cliente.";
                    $query_alert['alert_ruta'] = "ruta";
                    // if (!empty($query_form['cl_whatsapp'])) {
                        //     $query_alert['alert_url'] = "https://wa.me/".$query_form['cl_whatsapp']."?text=Hola ¡*".ucwords(mb_strtolower($query_form['cl_apellido'], "UTF-8"))." ".ucwords(mb_strtolower($query_form['cl_nombre'], "UTF-8"))."*, bienvenid@ a la familia de la *Boutique Blue*!";
                        // } else {
                            //     $query_alert['alert_url'] = "";
                            // }
                } else {
                    $query_alert['alert_icon'] = "error";
                    $query_alert['alert_title'] = "ATENCIÓN";
                    $query_alert['alert_text'] = "El número de teléfono ya se encuentra registrado.";
                    $query_alert['alert_ruta'] = "ruta";
                }
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
        public function read($apartado)
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
                        .view('clientes/read', $query_home)
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