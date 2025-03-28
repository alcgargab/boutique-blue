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

        //---------- VALORES ----------//
        static $th_v_i = "v_id";
        static $th_v_t = "v_token";
        static $th_v_p = "v_producto";
        static $th_v_c = "v_cliente";
        static $th_v_pa = "v_pago";
        static $th_v_Yf = "Year(v_fecha)";
        static $th_v_Mf = "MONTH(v_fecha)";
        static $th_v_a = "v_activo";
        static $var_1 = 1;
        static $var_8 = 8;
        static $equal = "=";
        static $empty = "";
        public function getVentasAnio()
        {
            // if ($_POST['size']) {
            //     $size = $_POST['size'];
            // } else {
            //     $size = 25;
            // }
            $modelmain = new Main;
            $select = "v_id, SUM(p_precioVenta) as ventaTotal, v_fecha";
            $query_home['reportVentas'] = $modelmain->__getAllInner($select, self::$var_8, self::$tbl_v, self::$tbl_p, self::$th_v_p, self::$th_p_i, self::$tbl_cl, self::$th_v_c, self::$th_cl_i, self::$tbl_tp, self::$th_v_pa, self::$th_tp_i, self::$tbl_pt, self::$th_p_i, self::$th_pt_p, self::$tbl_t, self::$th_t_i, self::$th_pt_t, self::$tbl_ptcs, self::$th_ptcs_p, self::$th_pt_i, self::$tbl_c, self::$th_c_i, self::$th_ptcs_c, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$var_1, self::$th_v_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_v_Yf);
            if (!empty($query_home['reportVentas'])) {
                $query_result['Status'] = 1;
                foreach ($query_home['reportVentas'] as $row) { // RECORREMOS EL ARRAY
                    $query_result['reportVentas'][$row->v_id]['v_id'] = $row->v_id;
                    $query_result['reportVentas'][$row->v_id]['ventaTotal'] = $row->ventaTotal;
                    $query_result['reportVentas'][$row->v_id]['v_fecha'] = __getYear($row->v_fecha);
                }
            } else { // LA VARIABLE NO EXISTE | LE AGREGAMOS EL VALOR DE 0
                $query_result['Status'] = 0;
            }
            echo json_encode($query_result);
            exit(0);
        }
    }
