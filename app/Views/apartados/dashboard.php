<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        <?=$countApartados?> Apartados
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button class="btn btn-sm btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#addApartado"><i class="fa-solid fa-plus"></i> Agregar apartado</button>
        </div>
    </div>
    <div class="modal fade" id="addApartado" aria-hidden="true" aria-labelledby="addApartado" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Nuevo Apartado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="<?=base_url()?>apartados/create" method="post" class="form-horizontalrizontal auth-form my-4">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="aproducto" name="aproducto" aria-label="Selecciona el producto">
                                            <?php foreach ($productos as $producto){ ?>
                                                <option value="<?=$producto -> p_id?>"><?=ucfirst(mb_strtolower($producto -> p_nombre." ".$producto -> t_talla." ".$producto -> c_color." | $".$producto -> p_precioVenta, "UTF-8"))?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="aproducto">Selecciona el producto</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="aCliente" name="aCliente" aria-label="Nombre del cliente">
                                            <?php foreach ($clientes as $cliente){ ?>
                                                <option value="<?=$cliente -> cl_id?>"><?=ucfirst(mb_strtolower($cliente -> cl_apellido." ".$cliente -> cl_nombre, "UTF-8"))?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="aCliente">Nombre del cliente</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="aPago" name="aPago" aria-label="Tipo de pago">
                                            <?php foreach ($tipoPagos as $pago){ ?>
                                                <option value="<?=$pago -> tp_id?>"><?=ucfirst(mb_strtolower($pago -> tp_nombre, "UTF-8"))?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="aPago">Tipo de pago</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="aFecha" name="aFecha">
                                        <label for="aFecha">Fecha del apartado</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="aCantidad" name="aCantidad">
                                        <label for="aCantidad">Monto del apartado</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="submit" class="btn btn-outline-success blueR float-right" value="Agregar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php if (!empty($apartados)): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Fecha del apartado</th>
                    <th>Días faltantes</th>
                    <th>Producto</th>
                    <th>Talla</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Cliente</th>
                    <!-- <th>WhastApp</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($apartados as $apartado): ?>
                    <tr>
                        <td nowrap><?=__convertDateToLetter($apartado -> a_fecha). " a las ". $apartado -> a_hora."hrs"?></td>
                        
                        <td nowrap>
                            <?php
                                $fecha_apartado = new DateTime($apartado -> a_fecha);
                                // Sumar 15 días a la fecha del apartado
                                $fecha_apartado -> modify('+16 days');
                                // $date15 = $fecha_apartado -> format('Y-m-d');
                                // Obtener la fecha actual
                                $date2 = new DateTime(date('Y-m-d'));
                                // Calcular la diferencia en días
                                $intervalo = $date2->diff($fecha_apartado);
                                // echo "<pre>"; print_r($intervalo); die(); echo "</pre>";
                                $flag = $intervalo->days;
                                if($intervalo->invert == 0){
                                    echo "Faltan ".$flag." días";
                                } else {
                                    echo "Vencido hace ".$flag." días";
                                }
                                // Imprimir la diferencia
                            ?>
                        </td>
                        <td nowrap>
                            <img src="<?= base_url() ?>public/images/productos/<?= $apartado->p_imagen ?>" alt="<?= $apartado->p_nombre ?>" title="<?= $apartado->p_nombre ?>" width="5%">
                            <a href="<?=base_url()?>apartados/read/<?=$apartado -> a_token?>"><?=ucfirst(mb_strtolower($apartado -> p_nombre, "UTF-8"))?></a></td>
                        <td nowrap><?=strtoupper(mb_strtoupper($apartado -> t_talla, "UTF-8"))?></td>
                        <td nowrap><?=ucfirst(mb_strtolower($apartado -> c_color, "UTF-8"))?></td>
                        <td nowrap>$ <?=number_format($apartado -> p_precioVenta, 2)?></td>
                        <td nowrap><?=ucwords(mb_strtolower($apartado -> cl_apellido." ".$apartado -> cl_nombre, "UTF-8"))?></td>
                        <!-- <td><?=$apartado -> cl_whatsapp?></td> -->
                    </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <td colspan="6">Total de apartados</td>
                    <td colspan="2">
                        <?php
                            $ventaTotal = 0;
                            for ($i=0; $i < count($apartados); $i++) {
                                $ventaTotal += $apartados[$i] -> p_precioVenta;
                            }
                            echo "$ ".number_format($ventaTotal, 2);
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php endif ?>
</div>
<div class="row mt-5">
    <div class="col-12">
        <?php if ($countApartados != 0) {
            $totalrows = 15;
            $pagLeads = ceil($countApartados/$totalrows);
            if ($pagLeads > 1) { ?>
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php echo $pag <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="<?=base_url()?>apartados?pag=<?=$pag -1?>">Previus</a></li>
                    <?php for ($i=1; $i <= $pagLeads; $i++) { ?>
                        <li class="page-item <?php echo $pag == $i ? 'active' : '' ?>"><a class="page-link" href="<?=base_url()?>apartados?pag=<?=$i?>"><?php print_r($i);?></a></li>
                    <?php } ?>
                    <li class="page-item <?php echo $pag >= $pagLeads ? 'disabled' : '' ?>"><a class="page-link" href="<?=base_url()?>apartados?pag=<?=$pag +1?>">Next</a></li>
                </ul>
            <?php } else { ?>
            <?php }
        } ?>
    </div>
</div>