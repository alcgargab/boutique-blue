<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        <?= $countVentas ?> Ventas
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button class="btn btn-sm btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#addVenta"><i class="fa-solid fa-plus"></i> Agregar venta</button>
        </div>
    </div>
    <div class="modal fade" id="addVenta" aria-hidden="true" aria-labelledby="addVenta" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Venta Nuevo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="<?= base_url() ?>ventas/create" method="post" class="form-horizontalrizontal auth-form my-4">
                            <div class="row">
                                <!-- <div class="col">
                                    <label for="vproducto" class="form-label">Producto</label>
                                    <input class="form-control" list="pVenta" id="vproducto" name="vproducto" placeholder="Producto">
                                    <datalist id="pVenta">
                                        <?php foreach ($productos as $producto) { ?>
                                            <option value="<?= ucfirst(mb_strtolower($producto->p_nombre . " " . $producto->t_talla . " " . $producto->c_color, "UTF-8")) ?>">
                                        <?php } ?>
                                    </datalist>
                                </div>
                                <div class="col">
                                    <label for="vCliente" class="form-label">Nombre del cliente</label>
                                    <input class="form-control" list="cVenta" id="vCliente" name="vCliente" placeholder="Nombre del cliente">
                                    <datalist id="cVenta">
                                        <?php foreach ($clientes as $cliente) { ?>
                                            <option value="<?= ucwords(mb_strtolower($cliente->cl_apellido . " " . $cliente->cl_nombre, "UTF-8")) ?>">
                                        <?php } ?>
                                    </datalist>
                                </div> -->
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="vproducto" name="vproducto" aria-label="Selecciona el producto">
                                            <?php foreach ($productos as $producto) { ?>
                                                <option value="<?= $producto->p_id ?>"><?= ucwords(mb_strtolower($producto->p_nombre . " " . $producto->t_talla . " " . $producto->c_color . " | $" . $producto->p_precioVenta, "UTF-8")) ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="vproducto">Selecciona el producto</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="vCliente" name="vCliente" aria-label="Nombre del cliente">
                                            <?php foreach ($clientes as $cliente) { ?>
                                                <option value="<?= $cliente->cl_id ?>"><?= ucwords(mb_strtolower($cliente->cl_apellido . " " . $cliente->cl_nombre, "UTF-8")) ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="vCliente">Nombre del cliente</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="vPago" name="vPago" aria-label="Tipo de pago">
                                            <?php foreach ($tipoPagos as $pago) { ?>
                                                <option value="<?= $pago->tp_id ?>"><?= ucfirst(mb_strtolower($pago->tp_nombre, "UTF-8")) ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="vPago">Tipo de pago</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="fVenta" name="fVenta">
                                        <label for="fVenta">Fecha de la venta</label>
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
<div class="row mt-3 row-cols-1 row-cols-md-12 g-4">
    <?php if (!empty($ventas)): ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha de la venta</th>
                        <th>Producto</th>
                        <th>Talla</th>
                        <th>Color</th>
                        <th>Precio</th>
                        <th>Cliente</th>
                        <!-- <th>WhastApp</th> -->
                        <th>Tipo de pago</th>
                        <th>CRUD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ventas as $venta): ?>
                        <tr>
                            <td nowrap><?= __convertDateToLetter($venta->v_fecha) . " a las " . $venta->v_hora . "hrs" ?></td>
                            <td nowrap>
                                <img src="<?= base_url() ?>public/images/productos/<?= $venta->p_imagen ?>" alt="<?= $venta->p_nombre ?>" title="<?= $venta->p_nombre ?>" width="5%">
                                <a href="<?= base_url() ?>ventas/read/<?= $venta->v_token ?>">
                                    <?= ucfirst(mb_strtolower($venta->p_nombre, "UTF-8")) ?>
                                </a>
                            </td>
                            <td nowrap><?= strtoupper(mb_strtoupper($venta->t_talla, "UTF-8")) ?></td>
                            <td nowrap><?= ucfirst(mb_strtolower($venta->c_color, "UTF-8")) ?></td>
                            <td nowrap>$ <?= number_format($venta->p_precioVenta, 2) ?></td>
                            <td nowrap><?= ucwords(mb_strtolower($venta->cl_apellido . " " . $venta->cl_nombre, "UTF-8")) ?></td>
                            <!-- <td nowrap><?= $venta->cl_whatsapp ?></td> -->
                            <td nowrap><?= ucfirst(mb_strtolower($venta->tp_nombre, "UTF-8")) ?></td>
                            <td nowrap><a href="<?= base_url() ?>ventas/delete/<?= $venta->v_token ?>" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <td colspan="8"></td>
                    </tr>
                    <tr>
                        <td colspan="6">Total de ventas</td>
                        <td colspan="2">$ <?= number_format($ingresoTotal, 2); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php endif ?>
</div>
<div class="row mt-3">
    <div class="col-12">
        <?php if ($countVentas != 0) {
            $totalrows = 16;
            $pagLeads = ceil($countVentas / $totalrows);
            if ($pagLeads > 1) { ?>
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php echo $pag <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="<?= base_url() ?>ventas?pag=<?= $pag - 1 ?>">Previus</a></li>
                    <?php for ($i = 1; $i <= $pagLeads; $i++) { ?>
                        <li class="page-item <?php echo $pag == $i ? 'active' : '' ?>"><a class="page-link" href="<?= base_url() ?>ventas?pag=<?= $i ?>"><?php print_r($i); ?></a></li>
                    <?php } ?>
                    <li class="page-item <?php echo $pag >= $pagLeads ? 'disabled' : '' ?>"><a class="page-link" href="<?= base_url() ?>ventas?pag=<?= $pag + 1 ?>">Next</a></li>
                </ul>
            <?php } else { ?>
        <?php }
        } ?>
    </div>
</div>