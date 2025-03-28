<?php
    namespace App\Models;
    use CodeIgniter\Model;
    class Main extends Model
    {
    //--------------- FUNCIÓN PARA INSERTAR DATOS ---------------//
    public function __insert($tabla = NULL, $data = NULL)
    {
        $db = \Config\Database::connect();
        $query = $db -> table($tabla) -> insert($data);
        // $this->db->query();
        $query2 = $db->insertID();
        if ($query) {
          // $idQuery = $query2[0]->last_id;
            return $query2;
        } else {
            return FALSE;
        }
        $query -> close;
        $query = NULL;
    }
    //--------------- FUNCIÓN PARA ACTUALIZAR | EL REGISTRO | COMPARANDO SOLO UN CAMPO---------------//
    public function __update($tabla = NULL, $campo1 = NULL, $valor1 = NULL, $data = NULL)
    {
        $db = \Config\Database::connect();
        $query = $db -> table($tabla) -> where($campo1, $valor1) -> update($data);
        if ($query) {
            return "true";
        } else {
            return "false";
        }
        $query = null;
        $query -> close();
    }
    //--------------- FUNCIÓN PARA ACTUALIZAR | EL REGISTRO | COMPARANDO SOLO UN CAMPO---------------//
    public function __updateAll($tabla = NULL, $numeroCampos = NULL, $campo1 = NULL, $operation1 = NULL, $valor1 = NULL, $operator1 = NULL, $campo2 = NULL, $operation2 = NULL, $valor2 = NULL, $operator2 = NULL, $campo3 = NULL, $operation3 = NULL, $valor3 = NULL, $operator3 = NULL, $campo4 = NULL, $operation4 = NULL, $valor4 = NULL, $operator4 = NULL, $campo5 = NULL, $operation5 = NULL, $valor5 = NULL, $operator5 = NULL, $campo6 = NULL, $operation6 = NULL, $valor6 = NULL, $operator6 = NULL, $campo7 = NULL, $operation7 = NULL, $valor7 = NULL, $operator7 = NULL, $campo8 = NULL, $operation8 = NULL, $valor8 = NULL, $operator8 = NULL, $campo9 = NULL, $operation9 = NULL, $valor9 = NULL, $operator9 = NULL, $campo10 = NULL, $operation10 = NULL, $valor10 = NULL, $data = NULL)
    {
      $db = \Config\Database::connect();
        // CON WHERE
      if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
        if ($numeroCampos == 1) {
          $where = $campo1." ".$operation1." ".$valor1;
        } elseif ($numeroCampos == 2) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
        } elseif ($numeroCampos == 3) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
        } elseif ($numeroCampos == 4) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
        } elseif ($numeroCampos == 5) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
        } elseif ($numeroCampos == 6) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
        } elseif ($numeroCampos == 7) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
        } elseif ($numeroCampos == 8) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
        } elseif ($numeroCampos == 9) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
        } else {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
        }
      // SIN WHERE
      } else {
        $where = "";
      }
      $query = $db -> table($tabla) -> where($where) -> update($data);
      // $query = $db -> query("UPDATE ".$tabla." SET ".$data." WHERE ".$where);
      if ($query) {
        return "true";
      } else {
        return "false";
      }
      $query = null;
      $query -> close();
      // $querybuild = $db->getLastQuery();
      // echo $where ;
    }
    //--------------- FUNCIÓN PARA OBTENER | TODOS LOS REGISTROS | DE VARIAS TABLAS | COMPARANDO UNO O ALGUNOS CAMPOS | CON LIMITE | ORDENADOS O NO | AGRUPADOS O NO ---------------//
    public function __getAll($select = NULL, $tabla = NULL, $numeroCampos = NULL, $campo1 = NULL, $operation1 = NULL, $valor1 = NULL, $operator1 = NULL, $campo2 = NULL, $operation2 = NULL, $valor2 = NULL, $operator2 = NULL, $campo3 = NULL, $operation3 = NULL, $valor3 = NULL, $operator3 = NULL, $campo4 = NULL, $operation4 = NULL, $valor4 = NULL, $operator4 = NULL, $campo5 = NULL, $operation5 = NULL, $valor5 = NULL, $operator5 = NULL, $campo6 = NULL, $operation6 = NULL, $valor6 = NULL, $operator6 = NULL, $campo7 = NULL, $operation7 = NULL, $valor7 = NULL, $operator7 = NULL, $campo8 = NULL, $operation8 = NULL, $valor8 = NULL, $operator8 = NULL, $campo9 = NULL, $operation9 = NULL, $valor9 = NULL, $operator9 = NULL, $campo10 = NULL, $operation10 = NULL, $valor10 = NULL, $campoOrderBy = NULL, $order = NULL, $tope = NULL, $base = NULL, $campoGroupBy = NULL)
    {
      $db = \Config\Database::connect();
      // CON GROUP BY
      if (!empty($campoGroupBy)) {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '".$valor1."'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
              } else {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '".$valor1."'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
              } else {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
        // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '".$valor1."'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
              } else {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '".$valor1."'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
              } else {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> get();
            }
          }
        }
      // SIN GROUP BY
      } else {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '".$valor1."'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
              } else {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '".$valor1."'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
              } else {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
        // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '".$valor1."'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
              } else {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '".$valor1."'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
              } else {
                $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> get();
            }
          }
        }
      }
      $resultquery = $query -> getResult();
      if ($resultquery > 0) {
        return $query -> getResult();
      } else {
        return FALSE;
      }
      $query -> close;
      $query = NULL;
    }
    //--------------- FUNCIÓN PARA OBTENER | TODOS LOS REGISTROS | DE VARIAS TABLAS | COMPARANDO UNO O ALGUNOS CAMPOS TIPO STRING | CON LIMITE | ORDENADOS O NO | AGRUPADOS O NO ---------------//
    public function __getAllString($select = NULL, $tabla = NULL, $numeroCampos = NULL, $campo1 = NULL, $operation1 = NULL, $valor1 = NULL, $operator1 = NULL, $campo2 = NULL, $operation2 = NULL, $valor2 = NULL, $operator2 = NULL, $campo3 = NULL, $operation3 = NULL, $valor3 = NULL, $operator3 = NULL, $campo4 = NULL, $operation4 = NULL, $valor4 = NULL, $operator4 = NULL, $campo5 = NULL, $operation5 = NULL, $valor5 = NULL, $operator5 = NULL, $campo6 = NULL, $operation6 = NULL, $valor6 = NULL, $operator6 = NULL, $campo7 = NULL, $operation7 = NULL, $valor7 = NULL, $operator7 = NULL, $campo8 = NULL, $operation8 = NULL, $valor8 = NULL, $operator8 = NULL, $campo9 = NULL, $operation9 = NULL, $valor9 = NULL, $operator9 = NULL, $campo10 = NULL, $operation10 = NULL, $valor10 = NULL, $campoOrderBy = NULL, $order = NULL, $tope = NULL, $base = NULL, $campoGroupBy = NULL)
    {
      $db = \Config\Database::connect();
      // CON GROUP BY
      if (!empty($campoGroupBy)) {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." ".$valor1."";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2."";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3."";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4."";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5."";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6."";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7."";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8."";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9."";
              } else {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9." ".$operator9." ".$campo10." ".$operation10." ".$valor10."";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." ".$valor1."";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2."";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3."";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4."";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5."";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6."";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7."";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8."";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9."";
              } else {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9." ".$operator9." ".$campo10." ".$operation10." ".$valor10."";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
        // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." ".$valor1."";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2."";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3."";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4."";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5."";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6."";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7."";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8."";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9."";
              } else {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9." ".$operator9." ".$campo10." ".$operation10." ".$valor10."";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." ".$valor1."";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2."";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3."";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4."";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5."";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6."";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7."";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8."";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9."";
              } else {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9." ".$operator9." ".$campo10." ".$operation10." ".$valor10."";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> get();
            }
          }
        }
      // SIN GROUP BY
      } else {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." ".$valor1."";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2."";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3."";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4."";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5."";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6."";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7."";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8."";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9."";
              } else {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9." ".$operator9." ".$campo10." ".$operation10." ".$valor10."";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." ".$valor1."";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2."";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3."";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4."";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5."";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6."";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7."";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8."";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9."";
              } else {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9." ".$operator9." ".$campo10." ".$operation10." ".$valor10."";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
        // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." ".$valor1."";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2."";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3."";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4."";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5."";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6."";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7."";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8."";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9."";
              } else {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9." ".$operator9." ".$campo10." ".$operation10." ".$valor10."";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." ".$valor1."";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2."";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3."";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4."";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5."";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6."";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7."";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8."";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9."";
              } else {
                $where = $campo1." ".$operation1." ".$valor1." ".$operator1." ".$campo2." ".$operation2." ".$valor2." ".$operator2." ".$campo3." ".$operation3." ".$valor3." ".$operator3." ".$campo4." ".$operation4." ".$valor4." ".$operator4." ".$campo5." ".$operation5." ".$valor5." ".$operator5." ".$campo6." ".$operation6." ".$valor6." ".$operator6." ".$campo7." ".$operation7." ".$valor7." ".$operator7." ".$campo8." ".$operation8." ".$valor8." ".$operator8." ".$campo9." ".$operation9." ".$valor9." ".$operator9." ".$campo10." ".$operation10." ".$valor10."";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> get();
            }
          }
        }
      }
      $resultquery = $query -> getResult();
      if ($resultquery > 0) {
        return $query -> getResult();
      } else {
        return FALSE;
      }
      $query -> close;
      $query = NULL;
    }
      //--------------- FUNCIÓN PARA OBTENER | TODOS LOS REGISTROS | DE VARIAS TABLAS | COMPARANDO UNO O ALGUNOS CAMPOS CON LIKE | CON LIMITE | ORDENADOS O NO | AGRUPADOS O NO ---------------//
    public function __getAllLike($select = NULL, $tabla = NULL, $numeroCampos = NULL, $campo1 = NULL, $operation1 = NULL, $valor1 = NULL, $operator1 = NULL, $campo2 = NULL, $operation2 = NULL, $valor2 = NULL, $operator2 = NULL, $campo3 = NULL, $operation3 = NULL, $valor3 = NULL, $operator3 = NULL, $campo4 = NULL, $operation4 = NULL, $valor4 = NULL, $operator4 = NULL, $campo5 = NULL, $operation5 = NULL, $valor5 = NULL, $operator5 = NULL, $campo6 = NULL, $operation6 = NULL, $valor6 = NULL, $operator6 = NULL, $campo7 = NULL, $operation7 = NULL, $valor7 = NULL, $operator7 = NULL, $campo8 = NULL, $operation8 = NULL, $valor8 = NULL, $operator8 = NULL, $campo9 = NULL, $operation9 = NULL, $valor9 = NULL, $operator9 = NULL, $campo10 = NULL, $operation10 = NULL, $valor10 = NULL, $campoOrderBy = NULL, $order = NULL, $tope = NULL, $base = NULL, $campoGroupBy = NULL)
    {
      $db = \Config\Database::connect();
      // CON GROUP BY
      if (!empty($campoGroupBy)) {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '%".$valor1."%'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
              } else {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '%".$valor1."%'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
              } else {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
        // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '%".$valor1."%'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
              } else {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '%".$valor1."%'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
              } else {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> groupBy($campoGroupBy) -> get();
            }
          }
        }
      // SIN GROUP BY
      } else {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '%".$valor1."%'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
              } else {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '%".$valor1."%'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
              } else {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
        // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '%".$valor1."%'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
              } else {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> limit($tope, $base) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON WHERE
            if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
              if ($numeroCampos == 1) {
                $where = $campo1." ".$operation1." '%".$valor1."%'";
              } elseif ($numeroCampos == 2) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
              } elseif ($numeroCampos == 3) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
              } elseif ($numeroCampos == 4) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
              } elseif ($numeroCampos == 5) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
              } elseif ($numeroCampos == 6) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
              } elseif ($numeroCampos == 7) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
              } elseif ($numeroCampos == 8) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
              } elseif ($numeroCampos == 9) {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
              } else {
                $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
              }
            // SIN WHERE
            } else {
              $where = "";
            }
            if (!empty($where)) {
              $query = $db -> table($tabla) -> select($select) -> where($where) -> get();
            } else {
              $query = $db -> table($tabla) -> select($select) -> get();
            }
          }
        }
      }
      $resultquery = $query -> getResult();
      if ($resultquery > 0) {
        return $query -> getResult();
      } else {
        return FALSE;
      }
      $query -> close;
      $query = NULL;
    }
    //--------------- FUNCIÓN PARA OBTENER | TODOS LOS REGISTROS | DE VARIAS TABLAS | COMPARANDO UNO O ALGUNOS CAMPOS | CON LIMITE | ORDENADOS O NO | AGRUPADOS O NO ---------------//
    public function __getAllInner($select = NULL, $numeroTablas = NULL, $tabla1 = NULL, $tabla2 = NULL, $campo1Tabla = NULL, $campo2Tabla = NULL, $tabla3 = NULL, $campo3Tabla = NULL, $campo4Tabla = NULL, $tabla4 = NULL, $campo5Tabla = NULL, $campo6Tabla = NULL, $tabla5 = NULL, $campo7Tabla = NULL, $campo8Tabla = NULL, $tabla6 = NULL, $campo9Tabla = NULL, $campo10Tabla = NULL, $tabla7 = NULL, $campo11Tabla = NULL, $campo12Tabla = NULL, $tabla8 = NULL, $campo13Tabla = NULL, $campo14Tabla = NULL, $tabla9 = NULL, $campo15Tabla = NULL, $campo16Tabla = NULL, $tabla10 = NULL, $campo17Tabla = NULL, $campo18Tabla = NULL, $numeroCampos = NULL, $campo1 = NULL, $operation1 = NULL, $valor1 = NULL, $operator1 = NULL, $campo2 = NULL, $operation2 = NULL, $valor2 = NULL, $operator2 = NULL, $campo3 = NULL, $operation3 = NULL, $valor3 = NULL, $operator3 = NULL, $campo4 = NULL, $operation4 = NULL, $valor4 = NULL, $operator4 = NULL, $campo5 = NULL, $operation5 = NULL, $valor5 = NULL, $operator5 = NULL, $campo6 = NULL, $operation6 = NULL, $valor6 = NULL, $operator6 = NULL, $campo7 = NULL, $operation7 = NULL, $valor7 = NULL, $operator7 = NULL, $campo8 = NULL, $operation8 = NULL, $valor8 = NULL, $operator8 = NULL, $campo9 = NULL, $operation9 = NULL, $valor9 = NULL, $operator9 = NULL, $campo10 = NULL, $operation10 = NULL, $valor10 = NULL, $campoOrderBy = NULL, $order = NULL, $tope = NULL, $base = NULL, $campoGroupBy = NULL)
    {
      $db = \Config\Database::connect();
      $query = $db -> table($tabla1);
      $query -> select($select);
      // CON WHERE
      if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
        if ($numeroCampos == 1) {
          $where = $campo1." ".$operation1." '".$valor1."'";
        } elseif ($numeroCampos == 2) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
        } elseif ($numeroCampos == 3) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
        } elseif ($numeroCampos == 4) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
        } elseif ($numeroCampos == 5) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
        } elseif ($numeroCampos == 6) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
        } elseif ($numeroCampos == 7) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
        } elseif ($numeroCampos == 8) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
        } elseif ($numeroCampos == 9) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
        } else {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
        }
      // SIN WHERE
      } else {
        $where = "";
      }
      // CON GROUP BY
      if (!empty($campoGroupBy)) {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
        // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> get();
            }
          }
        }
      // SIN GROUP BY
      } else {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
          // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } else {
                // CON WHERE
                if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
                  if ($numeroCampos == 1) {
                    $where = $campo1." ".$operation1." '".$valor1."'";
                  } elseif ($numeroCampos == 2) {
                    $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
                  } elseif ($numeroCampos == 3) {
                    $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
                  } elseif ($numeroCampos == 4) {
                    $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
                  } elseif ($numeroCampos == 5) {
                    $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
                  } elseif ($numeroCampos == 6) {
                    $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
                  } elseif ($numeroCampos == 7) {
                    $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
                  } elseif ($numeroCampos == 8) {
                    $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
                  } elseif ($numeroCampos == 9) {
                    $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
                  } else {
                    $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
                  }
                // SIN WHERE
                } else {
                  $where = "";
                }
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> limit($tope, $base) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where)-> get();
            }
          }
        }
      }
      $resultquery = $query -> getResult();
      if ($resultquery > 0) {
        // echo "<pre>"; print_r($db ->getLastQuery()); die(); echo "</pre>";
        return $query -> getResult();
      } else {
        return FALSE;
      }
      $query = $db -> close;
      $query = $db -> NULL;
    }
      //--------------- FUNCIÓN PARA OBTENER | TODOS LOS REGISTROS | DE VARIAS TABLAS | COMPARANDO UNO O ALGUNOS CAMPOS CON LIKE | CON LIMITE | ORDENADOS O NO | AGRUPADOS O NO ---------------//
    public function __getAllInnerLike($select = NULL, $numeroTablas = NULL, $tabla1 = NULL, $tabla2 = NULL, $campo1Tabla = NULL, $campo2Tabla = NULL, $tabla3 = NULL, $campo3Tabla = NULL, $campo4Tabla = NULL, $tabla4 = NULL, $campo5Tabla = NULL, $campo6Tabla = NULL, $tabla5 = NULL, $campo7Tabla = NULL, $campo8Tabla = NULL, $tabla6 = NULL, $campo9Tabla = NULL, $campo10Tabla = NULL, $tabla7 = NULL, $campo11Tabla = NULL, $campo12Tabla = NULL, $tabla8 = NULL, $campo13Tabla = NULL, $campo14Tabla = NULL, $tabla9 = NULL, $campo15Tabla = NULL, $campo16Tabla = NULL, $tabla10 = NULL, $campo17Tabla = NULL, $campo18Tabla = NULL, $numeroCampos = NULL, $campo1 = NULL, $operation1 = NULL, $valor1 = NULL, $operator1 = NULL, $campo2 = NULL, $operation2 = NULL, $valor2 = NULL, $operator2 = NULL, $campo3 = NULL, $operation3 = NULL, $valor3 = NULL, $operator3 = NULL, $campo4 = NULL, $operation4 = NULL, $valor4 = NULL, $operator4 = NULL, $campo5 = NULL, $operation5 = NULL, $valor5 = NULL, $operator5 = NULL, $campo6 = NULL, $operation6 = NULL, $valor6 = NULL, $operator6 = NULL, $campo7 = NULL, $operation7 = NULL, $valor7 = NULL, $operator7 = NULL, $campo8 = NULL, $operation8 = NULL, $valor8 = NULL, $operator8 = NULL, $campo9 = NULL, $operation9 = NULL, $valor9 = NULL, $operator9 = NULL, $campo10 = NULL, $operation10 = NULL, $valor10 = NULL, $campoOrderBy = NULL, $order = NULL, $tope = NULL, $base = NULL, $campoGroupBy = NULL)
    {
      $db = \Config\Database::connect();
      $query = $db -> table($tabla1);
      $query -> select($select);
      // CON WHERE
      if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
        if ($numeroCampos == 1) {
          $where = $campo1." ".$operation1." '%".$valor1."%'";
        } elseif ($numeroCampos == 2) {
          $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
        } elseif ($numeroCampos == 3) {
          $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
        } elseif ($numeroCampos == 4) {
          $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
        } elseif ($numeroCampos == 5) {
          $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
        } elseif ($numeroCampos == 6) {
          $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
        } elseif ($numeroCampos == 7) {
          $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
        } elseif ($numeroCampos == 8) {
          $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
        } elseif ($numeroCampos == 9) {
          $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
        } else {
          $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
        }
      // SIN WHERE
      } else {
        $where = "";
      }
      // CON GROUP BY
      if (!empty($campoGroupBy)) {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
        // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> groupBy($campoGroupBy) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> groupBy($campoGroupBy) -> get();
            }
          }
        }
      // SIN GROUP BY
      } else {
        // CON ORDER BY
        if (!empty($campoOrderBy)) {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> orderBy($campoOrderBy, $order) -> get();
            }
          }
          // SIN ORDER BY
        } else {
          // CON LIMIT
          if (is_numeric($base) && $base >= 0) {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> limit($tope, $base) -> get();
              } else {
                // CON WHERE
                if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
                  if ($numeroCampos == 1) {
                    $where = $campo1." ".$operation1." '%".$valor1."%'";
                  } elseif ($numeroCampos == 2) {
                    $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%'";
                  } elseif ($numeroCampos == 3) {
                    $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%'";
                  } elseif ($numeroCampos == 4) {
                    $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%'";
                  } elseif ($numeroCampos == 5) {
                    $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%'";
                  } elseif ($numeroCampos == 6) {
                    $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%'";
                  } elseif ($numeroCampos == 7) {
                    $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%'";
                  } elseif ($numeroCampos == 8) {
                    $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%'";
                  } elseif ($numeroCampos == 9) {
                    $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%'";
                  } else {
                    $where = $campo1." ".$operation1." '%".$valor1."%' ".$operator1." ".$campo2." ".$operation2." '%".$valor2."%' ".$operator2." ".$campo3." ".$operation3." '%".$valor3."%' ".$operator3." ".$campo4." ".$operation4." '%".$valor4."%' ".$operator4." ".$campo5." ".$operation5." '%".$valor5."%' ".$operator5." ".$campo6." ".$operation6." '%".$valor6."%' ".$operator6." ".$campo7." ".$operation7." '%".$valor7."%' ".$operator7." ".$campo8." ".$operation8." '%".$valor8."%' ".$operator8." ".$campo9." ".$operation9." '%".$valor9."%' ".$operator9." ".$campo10." ".$operation10." '%".$valor10."%'";
                  }
                // SIN WHERE
                } else {
                  $where = "";
                }
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> limit($tope, $base) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where) -> limit($tope, $base) -> get();
            }
          // SIN LIMIT
          } else {
            // CON INNER
            if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
              if ($numeroTablas == 2) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 3) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 4) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 5) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 6) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 7) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 8) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 9) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> get();
              } elseif($numeroTablas == 10) {
                $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> get();
              } else {
                $query = $db -> table($tabla1) -> select($select) -> where($where) -> get();
              }
            // SIN INNER
            } else {
              $query = $db -> table($tabla1) -> select($select) -> where($where)-> get();
            }
          }
        }
      }
      $resultquery = $query -> getResult();
      if ($resultquery > 0) {
        return $query -> getResult();
      } else {
        return FALSE;
      }
      $query = $db -> close;
      $query = $db -> NULL;
    }
    //--------------- FUNCIÓN PARA OBTENER | SOLO UN REGISTRO | DE UNA TABLA | COMPARANDO UNO O ALGUNOS CAMPOS ---------------//
    public function __getRow($select = NULL, $tabla = NULL, $numeroCampos = NULL, $campo1 = NULL, $operation1 = NULL, $valor1 = NULL, $operator1 = NULL, $campo2 = NULL, $operation2 = NULL, $valor2 = NULL, $operator2 = NULL, $campo3 = NULL, $operation3 = NULL, $valor3 = NULL, $operator3 = NULL, $campo4 = NULL, $operation4 = NULL, $valor4 = NULL, $operator4 = NULL, $campo5 = NULL, $operation5 = NULL, $valor5 = NULL, $operator5 = NULL, $campo6 = NULL, $operation6 = NULL, $valor6 = NULL, $operator6 = NULL, $campo7 = NULL, $operation7 = NULL, $valor7 = NULL, $operator7 = NULL, $campo8 = NULL, $operation8 = NULL, $valor8 = NULL, $operator8 = NULL, $campo9 = NULL, $operation9 = NULL, $valor9 = NULL, $operator9 = NULL, $campo10 = NULL, $operation10 = NULL, $valor10 = NULL)
    {
        $db = \Config\Database::connect();
      // CON WHERE
      if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
        if ($numeroCampos == 1) {
          $where = $campo1." ".$operation1." '".$valor1."'";
        } elseif ($numeroCampos == 2) {
            $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
        } elseif ($numeroCampos == 3) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
        } elseif ($numeroCampos == 4) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
        } elseif ($numeroCampos == 5) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
        } elseif ($numeroCampos == 6) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
        } elseif ($numeroCampos == 7) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
        } elseif ($numeroCampos == 8) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
        } elseif ($numeroCampos == 9) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
        } else {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
        }
      // SIN WHERE
      } else {
        $where = "";
      }
        $query = $db -> table($tabla) -> select($select) -> where($where) -> get();
        $resultquery = $query -> getResult();
        if ($resultquery > 0) {
            return $query -> getRow();
        } else{
            return FALSE;
        }
      $query -> close;
      $query = NULL;
    }
    //--------------- FUNCIÓN PARA OBTENER | SOLO UN REGISTRO | DE VARIAS TABLAS | COMPARANDO UNO O ALGUNOS CAMPOS ---------------//
    public function __getRowInner($select = NULL, $numeroTablas = NULL, $tabla1 = NULL, $tabla2 = NULL, $campo1Tabla = NULL, $campo2Tabla = NULL, $tabla3 = NULL, $campo3Tabla = NULL, $campo4Tabla = NULL, $tabla4 = NULL, $campo5Tabla = NULL, $campo6Tabla = NULL, $tabla5 = NULL, $campo7Tabla = NULL, $campo8Tabla = NULL, $tabla6 = NULL, $campo9Tabla = NULL, $campo10Tabla = NULL, $tabla7 = NULL, $campo11Tabla = NULL, $campo12Tabla = NULL, $tabla8 = NULL, $campo13Tabla = NULL, $campo14Tabla = NULL, $tabla9 = NULL, $campo15Tabla = NULL, $campo16Tabla = NULL, $tabla10 = NULL, $campo17Tabla = NULL, $campo18Tabla = NULL, $numeroCampos = NULL, $campo1 = NULL, $operation1 = NULL, $valor1 = NULL, $operator1 = NULL, $campo2 = NULL, $operation2 = NULL, $valor2 = NULL, $operator2 = NULL, $campo3 = NULL, $operation3 = NULL, $valor3 = NULL, $operator3 = NULL, $campo4 = NULL, $operation4 = NULL, $valor4 = NULL, $operator4 = NULL, $campo5 = NULL, $operation5 = NULL, $valor5 = NULL, $operator5 = NULL, $campo6 = NULL, $operation6 = NULL, $valor6 = NULL, $operator6 = NULL, $campo7 = NULL, $operation7 = NULL, $valor7 = NULL, $operator7 = NULL, $campo8 = NULL, $operation8 = NULL, $valor8 = NULL, $operator8 = NULL, $campo9 = NULL, $operation9 = NULL, $valor9 = NULL, $operator9 = NULL, $campo10 = NULL, $operation10 = NULL, $valor10 = NULL)
    {
      $db = \Config\Database::connect();
      $query = $db -> table($tabla1);
      $query -> select($select);
      // CON WHERE
      if (is_numeric($numeroCampos) && !empty($numeroCampos) != 0) {
        if ($numeroCampos == 1) {
          $where = $campo1." ".$operation1." '".$valor1."'";
        } elseif ($numeroCampos == 2) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."'";
        } elseif ($numeroCampos == 3) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."'";
        } elseif ($numeroCampos == 4) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."'";
        } elseif ($numeroCampos == 5) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."'";
        } elseif ($numeroCampos == 6) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."'";
        } elseif ($numeroCampos == 7) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."'";
        } elseif ($numeroCampos == 8) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."'";
        } elseif ($numeroCampos == 9) {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."'";
        } else {
          $where = $campo1." ".$operation1." '".$valor1."' ".$operator1." ".$campo2." ".$operation2." '".$valor2."' ".$operator2." ".$campo3." ".$operation3." '".$valor3."' ".$operator3." ".$campo4." ".$operation4." '".$valor4."' ".$operator4." ".$campo5." ".$operation5." '".$valor5."' ".$operator5." ".$campo6." ".$operation6." '".$valor6."' ".$operator6." ".$campo7." ".$operation7." '".$valor7."' ".$operator7." ".$campo8." ".$operation8." '".$valor8."' ".$operator8." ".$campo9." ".$operation9." '".$valor9."' ".$operator9." ".$campo10." ".$operation10." '".$valor10."'";
        }
      // SIN WHERE
      } else {
        $where = "";
      }
      // CON INNER
      if(is_numeric($numeroTablas) && !empty($numeroTablas) !=0) {
        if ($numeroTablas == 2) {
          $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> where($where) -> get();
        } elseif($numeroTablas == 3) {
          $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> where($where) -> get();
        } elseif($numeroTablas == 4) {
          $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> where($where) -> get();
        } elseif($numeroTablas == 5) {
          $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> where($where) -> get();
        } elseif($numeroTablas == 6) {
          $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> where($where) -> get();
        } elseif($numeroTablas == 7) {
          $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> where($where) -> get();
        } elseif($numeroTablas == 8) {
          $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> where($where) -> get();
        } elseif($numeroTablas == 9) {
          $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> where($where) -> get();
        } elseif($numeroTablas == 10) {
          $query = $db -> table($tabla1) -> select($select) -> join($tabla2, $campo1Tabla.' = '.$campo2Tabla, 'inner') -> join($tabla3, $campo3Tabla.' = '.$campo4Tabla, 'inner') -> join($tabla4, $campo5Tabla.' = '.$campo6Tabla, 'inner') -> join($tabla5, $campo7Tabla.' = '.$campo8Tabla, 'inner') -> join($tabla6, $campo9Tabla.' = '.$campo10Tabla, 'inner') -> join($tabla7, $campo11Tabla.' = '.$campo12Tabla, 'inner') -> join($tabla8, $campo13Tabla.' = '.$campo14Tabla, 'inner') -> join($tabla9, $campo15Tabla.' = '.$campo16Tabla, 'inner') -> join($tabla10, $campo17Tabla.' = '.$campo18Tabla, 'inner') -> where($where) -> get();
        } else {
          $query = $db -> table($tabla1) -> select($select) -> where($where) -> get();
        }
      // SIN INNER
      } else {
        $query = $db -> table($tabla1) -> select($select) -> where($where) -> get();
      }
      $resultquery = $query -> getResult();
      if ($resultquery > 0) {
        return $query -> getRow();
      } else {
        return FALSE;
      }
      $query = $db -> close;
      $query = $db -> NULL;
    }
  }
// echo "<pre>"; print_r($db ->getLastQuery()); die(); echo "</pre>";