<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        <?= $countApartados ?> Apartados
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
                        <form action="<?= base_url() ?>apartados/create" method="post" class="form-horizontalrizontal auth-form my-4">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="aproducto" name="aproducto" aria-label="Selecciona el producto">
                                            <?php foreach ($productos as $producto) { ?>
                                                <option value="<?= $producto->p_id ?>"><?= ucfirst(mb_strtolower($producto->p_nombre . " " . $producto->t_talla . " " . $producto->c_color . " | $" . $producto->p_precioVenta, "UTF-8")) ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="aproducto">Selecciona el producto</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="aCliente" name="aCliente" aria-label="Nombre del cliente">
                                            <?php foreach ($clientes as $cliente) { ?>
                                                <option value="<?= $cliente->cl_id ?>"><?= ucfirst(mb_strtolower($cliente->cl_apellido . " " . $cliente->cl_nombre, "UTF-8")) ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="aCliente">Nombre del cliente</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="aPago" name="aPago" aria-label="Tipo de pago">
                                            <?php foreach ($tipoPagos as $pago) { ?>
                                                <option value="<?= $pago->tp_id ?>"><?= ucfirst(mb_strtolower($pago->tp_nombre, "UTF-8")) ?></option>
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
<div class="row row-cols-1 row-cols-md-12 g-4">
    <?php if (!empty($apartados)): ?>
        <input type="text" id="countResult" class="dNone" value="<?= count($apartados) ?>">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha del apartado</th>
                        <th>Días faltantes</th>
                        <th>Producto</th>
                        <th>Talla</th>
                        <th>Color</th>
                        <th>Abonos</th>
                        <th>Precio</th>
                        <th>Faltante</th>
                        <th>Cliente</th>
                        <!-- <th>WhastApp</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($apartados); $i++) { ?>
                        <tr>
                            <td nowrap><?= __convertDateToLetter($apartados[$i]->a_fecha) . " a las " . $apartados[$i]->a_hora . "hrs" ?></td>
                            <td nowrap>
                                <?php
                                $fecha_apartado = new DateTime($apartados[$i]->a_fecha);
                                // Sumar 15 días a la fecha del apartado
                                $fecha_apartado->modify('+16 days');
                                // $date15 = $fecha_apartado -> format('Y-m-d');
                                // Obtener la fecha actual
                                $date2 = new DateTime(date('Y-m-d'));
                                // Calcular la diferencia en días
                                $intervalo = $date2->diff($fecha_apartado);
                                $flag = $intervalo->days;
                                // Imprimir la diferencia
                                if ($intervalo->invert == 0) {
                                    echo "Faltan " . $flag . " días";
                                } else {
                                    echo "Vencido hace " . $flag . " días";
                                }
                                ?>
                            </td>
                            <td nowrap>
                                <img src="<?= base_url() ?>public/images/productos/<?= $apartados[$i]->p_imagen ?>" alt="<?= $apartados[$i]->p_nombre ?>" title="<?= $apartados[$i]->p_nombre ?>" width="5%">
                                <a href="<?= base_url() ?>apartados/read/<?= $apartados[$i]->a_token ?>"><?= ucfirst(mb_strtolower($apartados[$i]->p_nombre, "UTF-8")) ?></a>
                            </td>
                            <td nowrap><?= strtoupper(mb_strtoupper($apartados[$i]->t_talla, "UTF-8")) ?></td>
                            <td nowrap><?= ucfirst(mb_strtolower($apartados[$i]->c_color, "UTF-8")) ?></td>
                            <td nowrap>$ <?= number_format($apartados[$i]->abonoTotal, 2) ?></td>
                            <td nowrap>$ <?= number_format($apartados[$i]->p_precioVenta, 2) ?></td>
                            <td nowrap>$ <?php $result = $apartados[$i]->p_precioVenta - $apartados[$i]->abonoTotal;
                                            echo number_format($result, 2) ?></td>
                            <td nowrap><?= ucwords(mb_strtolower($apartados[$i]->cl_apellido . " " . $apartados[$i]->cl_nombre, "UTF-8")) ?> <i class="fa-brands fa-whatsapp"></i> <a href="https://wa.me/<?= $apartados[$i]->cl_whatsapp ?>" target="__blank" class="phoneFormat<?= $i ?>"><?= $apartados[$i]->cl_whatsapp ?></a></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="9"></td>
                    </tr>
                    <tr>
                        <td colspan="7">Total de apartados</td>
                        <td colspan="2">
                            <?php
                            $ventaTotal = 0;
                            for ($i = 0; $i < count($apartados); $i++) {
                                $ventaTotal += $apartados[$i]->p_precioVenta - $apartados[$i]->abonoTotal;
                            }
                            echo "$ " . number_format($ventaTotal, 2);
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php endif ?>
</div>
<div class="row mt-5">
    <div class="col-12">
        <?php if ($countApartados != 0) {
            $totalrows = 15;
            $pagLeads = ceil($countApartados / $totalrows);
            if ($pagLeads > 1) { ?>
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php echo $pag <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="<?= base_url() ?>apartados?pag=<?= $pag - 1 ?>">Previus</a></li>
                    <?php for ($i = 1; $i <= $pagLeads; $i++) { ?>
                        <li class="page-item <?php echo $pag == $i ? 'active' : '' ?>"><a class="page-link" href="<?= base_url() ?>apartados?pag=<?= $i ?>"><?php print_r($i); ?></a></li>
                    <?php } ?>
                    <li class="page-item <?php echo $pag >= $pagLeads ? 'disabled' : '' ?>"><a class="page-link" href="<?= base_url() ?>apartados?pag=<?= $pag + 1 ?>">Next</a></li>
                </ul>
            <?php } else { ?>
        <?php }
        } ?>
    </div>
</div>