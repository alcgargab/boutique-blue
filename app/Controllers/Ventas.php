<?php
    namespace App\Controllers;
    use App\Models\Main;
    class Ventas extends BaseController
    {
        //---------- TABLAS ----------//
        static $tbl_v = "tbl_boutique_ventas";
        static $tbl_ab = "tbl_boutique_abonos";
        static $tbl_a = "tbl_boutique_apartados";
        static $tbl_p = "tbl_boutique_productos";
        static $tbl_cl = "tbl_boutique_clientes";
        static $tbl_tp = "tbl_boutique_tipospago";
        static $tbl_c = "tbl_boutique_colores";
        static $tbl_pt = "tbl_boutique_protal";
        static $tbl_ptcs = "tbl_boutique_protalcolstock";
        static $tbl_t = "tbl_boutique_tallas";
        static $tbl_i = "tbl_boutique_ingresos";
        //---------- CAMPOS ----------//
        static $th_ab_i = "ab_id  ";
        static $th_a_i = "a_id ";
        static $th_a_p = "a_producto  ";
        static $th_v_i = "v_id";
        static $th_v_t = "v_token";
        static $th_v_p = "v_producto";
        static $th_v_c = "v_cliente";
        static $th_v_pa = "v_pago";
        static $th_v_f = "MONTH(v_fecha)";
        static $th_v_a = "v_activo";
        static $th_p_i = "p_id";
        static $th_p_a = "p_activo";
        static $th_p_n = "p_nombre";
        static $th_cl_i = "cl_id";
        static $th_cl_n = "cl_nombre";
        static $th_cl_ap = "cl_apellido";
        static $th_cl_a = "cl_activo";
        static $th_tp_i = "tp_id";
        static $th_tp_a = "tp_activo";
        static $th_pt_i = "pt_id";
        static $th_pt_p = "pt_producto";
        static $th_pt_t = "pt_talla";
        static $th_t_i = "t_id";
        static $th_ptcs_i = "ptcs_id";
        static $th_ptcs_p = "ptcs_protal";
        static $th_ptcs_c = "ptcs_color";
        static $th_c_i = "c_id";
        static $th_i_t = "i_token";
        static $th_i_v_a = "i_id_v_a";
        static $th_i_f = "MONTH(i_fecha)";
        static $th_i_a = "i_activo";
        //---------- VALORES ----------//
        static $var_0 = 0;
        static $var_1 = 1;
        static $var_2 = 2;
        static $var_5 = 5;
        static $var_8 = 8;
        static $var_10 = 10;
        static $var_15 = 15;
        static $var_16 = 16;
        static $var_100 = 100;
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
                $base = ($page - self::$var_1)*self::$var_100;
            } else { // LA VARIABLE ESTÁ VACIA | REDIRIGIMOS A LA PÁGINA ACTUAL
                $base = self::$var_0;
            }
            $tope = self::$var_100;
            $modelmain = new Main;
            $select = "v_token, v_fecha, v_hora, p_nombre, t_talla, c_color, p_precioVenta, p_imagen, cl_nombre, cl_apellido, cl_whatsapp, tp_nombre, ptcs_stock";
            $query_home['allVentas'] = $modelmain -> __getAllInner($select, self::$var_8, self::$tbl_v, self::$tbl_p, self::$th_v_p, self::$th_p_i, self::$tbl_cl, self::$th_v_c, self::$th_cl_i, self::$tbl_tp, self::$th_v_pa, self::$th_tp_i, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_v_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_v_i, self::$DESC, self::$empty, self::$empty, self::$empty);
            $query_home['ventas'] = $modelmain -> __getAllInner($select, self::$var_8, self::$tbl_v, self::$tbl_p, self::$th_v_p, self::$th_p_i, self::$tbl_cl, self::$th_v_c, self::$th_cl_i, self::$tbl_tp, self::$th_v_pa, self::$th_tp_i, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_v_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_v_i, self::$DESC, $tope, $base, self::$empty);
            // $select = "SUM(p_precioVenta) as ventaTotal, v_fecha";
            // $query_home['reportVentas'] = $modelmain->__getAllInner($select, self::$var_10, self::$tbl_v, self::$tbl_p, self::$th_v_p, self::$th_p_i, self::$tbl_cl, self::$th_v_c, self::$th_cl_i, self::$tbl_tp, self::$th_v_pa, self::$th_tp_i, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$tbl_a, self::$th_p_i, self::$th_a_p, self::$tbl_ab, self::$th_a_i, self::$th_ab_i, self::$var_1, self::$th_v_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_v_f);
            
            $select = "SUM(i_ingreso) as ingresoTotal, i_fecha";
            $query_home['reportVentas'] = $modelmain->__getAll($select, self::$tbl_i, self::$var_1, self::$th_i_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_i_f);
            $query_home['ingresoTotal'] = self::$var_0;

            $select = "COUNT(v_id) as ventasTotales, v_fecha";
            $query_home['ventasTotales'] = $modelmain->__getAll($select, self::$tbl_v, self::$var_1, self::$th_v_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_v_f);
            $query_home['ingresoTotal'] = self::$var_0;
            
            
            // echo "<pre>"; print_r($query_home['ventasTotales']); die(); echo "</pre>";
            if (!empty($query_home['allVentas'])) {
                $query_home['countVentas'] = count($query_home['allVentas']);
                for ($i=self::$var_0; $i < count($query_home['allVentas']); $i++) {
                    $query_home['ingresoTotal'] += $query_home['allVentas'][$i] -> p_precioVenta * $query_home['allVentas'][$i] -> ptcs_stock;
                }
            } else {
                $query_home['countVentas'] = self::$var_0;
                $query_home['ingresoTotal'] = self::$var_0;
            }
            $query_home['pag'] = $page;
            $select = "p_id, p_nombre, t_talla, c_color, p_precioVenta";
            $query_home['productos'] = $modelmain -> __getAllInner($select, self::$var_5, self::$tbl_p, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_p_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_p_n, self::$ASC, self::$empty, self::$empty, self::$empty);
            $select = "cl_id, cl_nombre, cl_apellido";
            $query_home['clientes'] = $modelmain -> __getAll($select, self::$tbl_cl, self::$var_1, self::$th_cl_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_cl_ap, self::$ASC, self::$empty, self::$empty, self::$empty);
            $select = "tp_id, tp_nombre";
            $query_home['tipoPagos'] = $modelmain -> __getAll($select, self::$tbl_tp, self::$var_1, self::$th_tp_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
            // echo "<pre>"; print_r($query_home['allVentas']); die(); echo "</pre>";
            return view('header')
                .view('ventas/dashboard', $query_home)
                .view('footer');
        }
        public function read($venta = NULL)
        {
            if(!empty($venta)){
                $modelmain = new Main;
                $select = "v_token, v_fecha, p_id, p_nombre, p_precioVenta, p_imagen, t_talla, c_color, cl_id, cl_nombre, cl_apellido, cl_whatsapp, tp_nombre";
                $query_home['venta'] = $modelmain-> __getRowInner($select, self::$var_8, self::$tbl_v, self::$tbl_tp, self::$th_v_pa, self::$th_tp_i, self::$tbl_cl, self::$th_v_c, self::$th_cl_i, self::$tbl_p, self::$th_v_p, self::$th_p_i, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_pt_t, self::$th_t_i, self::$tbl_ptcs, self::$th_pt_i, self::$th_ptcs_p, self::$tbl_c, self::$th_ptcs_c, self::$th_c_i, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_2, self::$th_v_t, self::$equal, $venta, self::$and, self::$th_v_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                // echo "<pre>"; print_r($query_home); die(); echo "</pre>";
                if (!empty($query_home['venta'])) {
                    $select = "cl_id, cl_nombre, cl_apellido";
                    $query_home['clientes'] = $modelmain->__getAll($select, self::$tbl_cl, self::$var_1, self::$th_cl_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                    return view('header')
                        . view('ventas/read', $query_home)
                        . view('footer');
                } else {
                    return redirect()->to(base_url('ventas'));
                }
            } else {
                return redirect()->to(base_url('ventas'));
            }
        }
        public function create()
        {
            $modelmain = new Main;
            $query_form['v_producto'] = trim($this -> request -> getPost('vproducto'));
            if (!empty($query_form['v_producto'])) {
               $select = "p_id, p_nombre, t_talla, c_color, p_precioVenta, ptcs_id , ptcs_stock";
               $query_home['producto'] = $modelmain -> __getRowInner($select, self::$var_5, self::$tbl_p, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_p_i, self::$equal, $query_form['v_producto'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                $query_form['v_cliente'] = trim($this -> request -> getPost('vCliente'));
                $select = "cl_id, cl_nombre, cl_apellido, cl_whatsapp";
                $query_home['clientes'] = $modelmain -> __getRow($select, self::$tbl_cl, self::$var_1, self::$th_cl_i, self::$equal, $query_form['v_cliente'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                do { // ASIGNAMOS UN TOKEN AL REGISTRO Y VALIDAMOS QUE NO EXISTA UN TOKEN IGUAL EN LA BASE DE DATOS
                    $query_helper_header = __generatorCode(self::$var_16, self::$true, self::$true, self::$true, self::$false);
                    $select = "v_token";
                    $query_code = $modelmain -> __getRow($select, self::$tbl_v, self::$var_1, self::$th_v_t, self::$equal, $query_helper_header, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                } while (!empty($query_code));
                $query_form['v_token'] = trim($query_helper_header);
                $query_form['v_tokenEncrypt'] = trim(hash('whirlpool', $query_form['v_token']));
                $query_form['v_pago'] = trim($this -> request -> getPost('vPago'));
                $query_form['v_fecha'] = trim($this -> request -> getPost('fVenta'));
                $query_form['v_hora'] = date('H:i:s');
                $query_form['v_activo'] = self::$var_1;
                if ($query_home['producto'] ->ptcs_stock == 1) {
                    $query_update['p_activo'] = self::$var_0;
                    $query_UpdateProducto = $modelmain -> __update(self::$tbl_p, self::$th_p_i, $query_form['v_producto'], $query_update);
                } else {
                    $query_update['ptcs_stock'] = $query_home['producto']->ptcs_stock - 1;
                    $query_UpdateProducto = $modelmain->__update(self::$tbl_ptcs, self::$th_ptcs_i, $query_home['producto'] ->ptcs_id, $query_update);
                }
                $query_insertVenta = $modelmain -> __insert(self::$tbl_v, $query_form);
                do { // ASIGNAMOS UN TOKEN AL REGISTRO Y VALIDAMOS QUE NO EXISTA UN TOKEN IGUAL EN LA BASE DE DATOS
                    $query_ingreso['i_token'] = __generatorCode(self::$var_16, self::$true, self::$true, self::$true, self::$false);
                    $select = "i_token";
                    $query_code = $modelmain->__getRow($select, self::$tbl_i, self::$var_1, self::$th_i_t, self::$equal, $query_ingreso['i_token'], self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                } while (!empty($query_code));
                $query_ingreso['i_token_encrypt'] = trim(hash('whirlpool', $query_ingreso['i_token']));
                $query_ingreso['i_ingreso'] = $query_home['producto']->p_precioVenta;
                $query_ingreso['i_fecha'] = $query_form['v_fecha'];
                $query_ingreso['i_hora'] = $query_form['v_hora'];
                $query_ingreso['i_flag'] = self::$var_1;
                $query_ingreso['i_id_v_a'] = $query_insertVenta;
                $query_ingreso['i_activo'] = self::$var_1;
                $query_insertIngreso = $modelmain->__insert(self::$tbl_i, $query_ingreso);
                $query_alert['alert_icon'] = "success";
                $query_alert['alert_title'] = "LISTO";
                $query_alert['alert_text'] = "Se agrego correctamente la venta.";
                $query_alert['alert_ruta'] = "ruta";
                // if (!empty($query_home['clientes'] -> cl_whatsapp)) {
                //     $textMessageWhatsApp = "https://wa.me/".$query_home['clientes'] -> cl_whatsapp."?text=¡*".ucfirst(mb_strtolower($query_home['clientes'] -> cl_apellido, "UTF-8"))." ".ucfirst(mb_strtolower($query_home['clientes'] -> cl_nombre, "UTF-8"))."*, muchas gracias por elegir *Boutique Blue*! Estamos seguros de que tu *".$query_home['producto'] -> p_nombre."* en talla *".$query_home['producto'] -> t_talla."* color *".$query_home['producto'] -> c_color."* será tu nuevo favorito.%0A%0A*¿Ya pensaste en cómo lo combinarás?*%0A%0A*_¡Te esperamos pronto para mostrarte nuestras nuevas colecciones!_*%0A%0A*_YoSoyBlue_*";
                //     $content = 'Felicidades Tenemos una n ueva venta, da clic<a href="textMessageWhatsApp"> aquí </a>para enviar el WhatsApp al cliente';
                //     $sendMail = $this-> send_mail($content);
                // }
                // echo "<pre>"; print_r($sendMail); die(); echo "</pre>";
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
        public function delete($venta = NULL)
        {
            if (!empty($venta)) {
                $modelmain = new Main;
                $select = "v_id, v_token, v_producto";
                $query_venta = $modelmain -> __getRow($select, self::$tbl_v, self::$var_1, self::$th_v_t, self::$equal, $venta, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty);
                if (!empty($query_venta)) {
                    $query_updateV['v_activo'] = self::$var_0;
                    $query_deleteV = $modelmain -> __update(self::$tbl_v, self::$th_v_t, $venta, $query_updateV);
                    $query_updateI['i_activo'] = self::$var_0;
                    $query_deleteI = $modelmain->__update(self::$tbl_i, self::$th_i_v_a, $query_venta -> v_id, $query_updateI);
                    $query_updateP['p_activo'] = self::$var_1;
                    $query_deleteP = $modelmain -> __update(self::$tbl_p, self::$th_p_i, $query_venta -> v_producto, $query_updateP);
                    $query_alert['alert_icon'] = "success";
                    $query_alert['alert_title'] = "LISTO";
                    $query_alert['alert_text'] = "Se elimino correctamente la venta.";
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
            } else {
                return redirect() -> to(base_url('ventas'));
            }
        }
        public function send_mail($content = NULL)
        {
            $email = service('email');
            // $email->setFrom('', '');
            $email->setSubject('Boutique Blue | Nueva venta');
            $email->setMessage($content);
            // $email->setTo('');
            $estatus_msg = $email->send();
            if ($estatus_msg) {
                return json_encode(1);
            } else {
                // return $email->printDebugger(['headers']);
                $error = $email->printDebugger(array('headers'));
                return json_encode($error);

                // return json_encode(0);
            }
        }
    }