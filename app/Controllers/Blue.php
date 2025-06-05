<?php
    namespace App\Controllers;
    use App\Models\Main;
    class Blue extends BaseController
    {
        //---------- TABLAS ----------//
        static $tbl_i = "tbl_boutique_ingresos";
        static $tbl_g = "tbl_boutique_gastos";
        //---------- CAMPOS ----------//
        static $th_i_a = "i_activo";
        static $th_i_f = "MONTH(i_fecha)";
        static $th_g_a = "g_activo";
        static $th_g_f = "MONTH(g_fgasto)";
        //---------- VALORES ----------//
        static $var_1 = 1;
        static $equal = "=";
        static $empty = "";
        static $ASC = "ASC";
        static $DESC = "DESC";
        public function index(): string
        {
        $modelmain = new Main;
        $select = "SUM(i_ingreso) as ingresoTotal, i_fecha";
        $query_home['reporteIngresos'] = $modelmain->__getAll($select, self::$tbl_i, self::$var_1, self::$th_i_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_i_f);
        if (!empty($query_home['reporteIngresos'])) {
            $ingresos = array_column($query_home['reporteIngresos'], 'ingresoTotal');
            $queryMaxIngreso = max($ingresos);
            $queryMinIngreso = min($ingresos);
        }
        $select = "SUM(g_precio*g_cantidad) as egresoTotal, g_fgasto";
        $query_home['reporteEgresos'] = $modelmain->__getAll($select, self::$tbl_g, self::$var_1, self::$th_g_a, self::$equal, self::$var_1, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$empty, self::$th_g_f);
        if (!empty($query_home['reporteEgresos'])) {
            $egresos = array_column($query_home['reporteEgresos'], 'egresoTotal');
            $queryMaxEgreso = max($egresos);
            $queryminEgreso = min($egresos);
        }
        $query_home['min'] = ($queryMinIngreso < $queryminEgreso) ? $queryMinIngreso : $queryminEgreso;
        $query_home['max'] = ($queryMaxIngreso > $queryMaxEgreso)?$queryMaxIngreso:$queryMaxEgreso;
        $reporte = array();
        $query_ingresoTotal = $query_egresoTotal = 0;
        // Procesar ingresos
        foreach ($query_home['reporteIngresos'] as $ingreso) {
            $fecha = date('Y-m', strtotime($ingreso->i_fecha));
            if (!isset($reporte[$fecha])) {
                $reporte[$fecha] = array('ingresoTotal' => 0, 'egresoTotal' => 0, 'fecha' => $fecha);
            }
            $reporte[$fecha]['ingresoTotal'] += $ingreso->ingresoTotal;
            $query_ingresoTotal += $ingreso->ingresoTotal;
        }
        // Procesar egresos
        foreach ($query_home['reporteEgresos'] as $egreso) {
            $fecha = date('Y-m', strtotime($egreso->g_fgasto));
            if (!isset($reporte[$fecha])) {
                $reporte[$fecha] = array('ingresoTotal' => 0, 'egresoTotal' => 0, 'fecha' => $fecha);
            }
            $reporte[$fecha]['egresoTotal'] += $egreso->egresoTotal;
            $query_egresoTotal += $egreso->egresoTotal;
        }
        // Ordenar por fecha
        ksort($reporte);
        // Reindexar el array para tener índices numéricos
        $reporte = array_values($reporte);
        $query_home['ingresoTotal'] = $query_ingresoTotal;
        $query_home['egresoTotal'] = $query_egresoTotal;
        $query_home['reporteIngresosEgresos'] = $reporte;
        return view('header')
                .view('dashboard', $query_home)
                .view('footer');
        }
    }
