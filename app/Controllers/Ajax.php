<?php
    namespace App\Controllers;
    use App\Models\Main;
    class Ajax extends BaseController
    {
        //---------- TABLAS ----------//
        static $tbl_v = "tbl_boutique_ventas";
        static $tbl_p = "tbl_boutique_productos";
        static $tbl_cl = "tbl_boutique_clientes";
        static $tbl_tp = "tbl_boutique_tipospago";
        static $tbl_c = "tbl_boutique_colores";
        static $tbl_pt = "tbl_boutique_protal";
        static $tbl_ptcs = "tbl_boutique_protalcolstock";
        static $tbl_t = "tbl_boutique_tallas";
        static $tbl_i = "tbl_boutique_ingresos";
        //---------- CAMPOS ----------//
        static $th_p_i = "p_id";
        static $th_cl_i = "cl_id";
        static $th_tp_i = "tp_id";
        static $th_pt_i = "pt_id";
        static $th_pt_p = "pt_producto";
        static $th_t_i = "t_id";
        static $th_c_i = "c_id";
        static $th_pt_t = "pt_talla";
        static $th_ptcs_p = "ptcs_protal";
        static $th_ptcs_c = "ptcs_color";
        static $th_i_a = "i_activo";
        static $th_i_f = "i_fecha";
        static $th_i_Yf = "Year(i_fecha)";
        static $th_i_Mf = "MONTH(i_fecha)";
        static $th_v_i = "v_id";
        static $th_v_t = "v_token";
        static $th_v_p = "v_producto";
        static $th_v_c = "v_cliente";
        static $th_v_pa = "v_pago";
        static $th_v_a = "v_activo";
        //---------- VALORES ----------//
        static $var_0 = 0;
        static $var_1 = 1;
        static $var_3 = 3;
        static $var_8 = 8;
        static $equal = "=";
        static $empty = "";
        static $and = "AND";
        static $or = "OR";
        static $ASC = "ASC";
        static $DESC = "DESC";
        public function get_ventas_dia()
        {
            $modelmain = new Main;
            $select = "i_fecha, SUM(i_ingreso) AS total_ingreso";
            $query_home['ingresos'] = $modelmain->__getAll($select, self::$tbl_i, self::$var_3, self::$th_i_a, self::$equal, self::$var_1, self::$and, self::$th_i_Yf, self::$equal, date('Y'), self::$and, self::$th_i_Mf, self::$equal, date('m'), self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_i_f, self::$ASC, self::$empty, self::$empty, self::$th_i_f);
            (!empty($query_home['ingresos']))? $query_home['status'] = 1: $query_home['status'] = 0;
            // echo "<pre>"; print_r($query_home); echo "</pre>"; die();
            echo json_encode($query_home);
            exit(0);
        }
    }
