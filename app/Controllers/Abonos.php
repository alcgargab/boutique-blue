<?php
    namespace App\Controllers;
    use App\Models\Main;
    class Abonos extends BaseController
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
        static $tbl_v = "tbl_boutique_ventas";
        static $tbl_i = "tbl_boutique_ingresos";
        //---------- CAMPOS ----------//
        static $th_a_i = "a_id";
        static $th_a_t = "a_token";
        static $th_a_p = "a_producto";
        static $th_a_c = "a_cliente";
        static $th_a_a = "a_activo";
        static $th_p_i = "p_id";
        static $th_p_a = "p_activo";
        static $th_cl_i = "cl_id";
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
        static $th_v_t = "v_token";
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
        static $true = true;
        static $false = false;
        static $empty = "";
        static $and = "AND";
        static $or = "OR";
        static $ASC = "ASC";
        static $DESC = "DESC";
        public function index()
        {
            
        }
        public function create()
        {
            $modelmain = new Main;
            $query_form['ab_apartado'] = trim($this -> request -> getPost('abApartado'));
            if (!empty($query_form['ab_apartado'])) {
                $query_form['ab_tipoPago'] = trim($this -> request -> getPost('abPago'));
                $query_precio = trim($this -> request -> getPost('abPrecio'));
                $query_form['ab_cantidad'] = trim($this -> request -> getPost('abCantidad'));
                $query_form['ab_hora'] = trim($this -> request -> getPost('abHora'));
                $query_form['ab_fecha'] = trim($this -> request -> getPost('abFecha'));
                $query_form['ab_activo'] = self::$var_1;
                $select = "SUM(ab_cantidad) AS totalAbonos";
                $query_home['totalAbonos'] = $modelmain -> __getAll($select, self::$tbl_ab, self::$var_2, self::$th_ab_a, self::$equal, $query_form['ab_apartado'], self::$and, self::$th_ab_ac, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $flag = $query_precio -($query_form['ab_cantidad'] + $query_home['totalAbonos'][0] -> totalAbonos);
                $query_venta['v_producto'] = trim($this -> request -> getPost('abProducto'));
                $select = "p_id, p_nombre, t_talla, c_color,";
                $query_home['producto'] = $modelmain -> __getRowInner($select, self::$var_5, self::$tbl_p, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_p_i, self::$equal, $query_venta['v_producto'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_venta['v_cliente'] = trim($this -> request -> getPost('abCliente'));
                $select = "cl_id, cl_nombre, cl_apellido, cl_whatsapp";
                $query_home['clientes'] = $modelmain -> __getRow($select, self::$tbl_cl, self::$var_1, self::$th_cl_i, self::$equal, $query_venta['v_cliente'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_insertAbono = $modelmain -> __insert(self::$tbl_ab, $query_form);
                do { // ASIGNAMOS UN TOKEN AL REGISTRO Y VALIDAMOS QUE NO EXISTA UN TOKEN IGUAL EN LA BASE DE DATOS
                    $query_ingreso['i_token'] = __generatorCode(self::$var_16, self::$true, self::$true, self::$true, self::$false);
                    $select = "i_token";
                    $query_code = $modelmain->__getRow($select, self::$tbl_i, self::$var_1, self::$th_i_t, self::$equal, $query_ingreso['i_token'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                } while (!empty($query_code));
                $query_ingreso['i_token_encrypt'] = trim(hash('whirlpool', $query_ingreso['i_token']));
                $query_ingreso['i_ingreso'] = trim($this->request->getPost('abCantidad'));
                $query_ingreso['i_fecha'] = trim($this->request->getPost('abFecha'));
                $query_ingreso['i_hora'] = date('H:i:s');
                $query_ingreso['i_flag'] = self::$var_0;
                $query_ingreso['i_id_v_a'] = $query_insertAbono;
                $query_ingreso['i_activo'] = self::$var_1;
                $query_insertIngreso = $modelmain->__insert(self::$tbl_i, $query_ingreso);
                if ($flag == 0) {
                    do { // ASIGNAMOS UN TOKEN AL REGISTRO Y VALIDAMOS QUE NO EXISTA UN TOKEN IGUAL EN LA BASE DE DATOS
                        $query_helper_header = __generatorCode(self::$var_16, self::$true, self::$true, self::$true, self::$false);
                        $select = "v_token";
                        $query_code = $modelmain -> __getRow($select, self::$tbl_v, self::$var_1, self::$th_v_t, self::$equal, $query_helper_header, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                    } while (!empty($query_code));
                    $query_venta['v_token'] = trim($query_helper_header);
                    $query_venta['v_tokenEncrypt'] = trim(hash('whirlpool', $query_venta['v_token']));
                    $query_venta['v_pago'] = $query_form['ab_tipoPago'];
                    $query_venta['v_fecha'] = $query_form['ab_fecha'];
                    $query_venta['v_hora'] = $query_form['ab_hora'];
                    $query_venta['v_activo'] = self::$var_1;
                    $query_insertVenta = $modelmain -> __insert(self::$tbl_v, $query_venta);
                    $query_venta['v_producto'] = trim($this -> request -> getPost('abProducto'));
                    $query_update['a_activo'] = self::$var_0;
                    $query_updateApartado = $modelmain -> __update(self::$tbl_a, self::$th_a_i, $query_form['ab_apartado'], $query_update);
                    $query_alert['alert_icon'] = "success";
                    $query_alert['alert_title'] = "Felicidades";
                    $query_alert['alert_text'] = "Se terminó de pagar la totalidad del producto";
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
                    $query_alert['alert_icon'] = "success";
                    $query_alert['alert_title'] = "LISTO";
                    $query_alert['alert_text'] = "Se agrego correctamente el abono.";
                    $query_alert['alert_ruta'] = "ruta";
                    // if (!empty($query_home['clientes'] -> cl_whatsapp)) {
                    //     $query_alert['alert_url'] = "https://wa.me/".$query_home['clientes'] -> cl_whatsapp."?text=¡Hola *".ucfirst(mb_strtolower($query_home['clientes'] -> cl_apellido, "UTF-8"))." ".ucfirst(mb_strtolower($query_home['clientes'] -> cl_nombre, "UTF-8"))."*! ¡Muchas gracias por tu abono de *_$".number_format($query_form['ab_cantidad'], 2)."_* a cuenta de tu *".$query_home['producto'] -> p_nombre."* en talla *".$query_home['producto'] -> t_talla."* color *".$query_home['producto'] -> c_color."*!%0A%0A¡Estás cada vez más cerca de disfrutar de esta pieza!%0A%0ASolo te faltan *_$".number_format($flag, 2)."_* para completar tu compra.%0A%0A¡Te esperamos pronto para finalizar!%0A%0A*_YoSoyBlue_*";
                    // } else {
                    //     $query_alert['alert_url'] = "";
                    // }
                    return view('header')
                        .view('white')
                        .view('popup/popupWhatsApp', $query_alert)
                        .view('footer');
                }
            }
        }
    }