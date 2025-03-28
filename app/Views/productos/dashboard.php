<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        <?= $countProductos ?> Productos
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button class="btn btn-sm btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#addProducto"><i class="fa-solid fa-plus"></i> Agregar producto</button>
        </div>
    </div>
    <div class="modal fade" id="addProducto" aria-hidden="true" aria-labelledby="addProducto" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Producto Nuevo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="<?= base_url() ?>productos/create" method="post" class="form-horizontalrizontal auth-form my-4" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nProducto" name="nProducto" placeholder="Nombre del producto" required>
                                        <label for="nProducto">Nombre del producto</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="caProducto" name="caProducto" placeholder="Cantidad" required>
                                        <label for="caProducto">Cantidad</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="pCompra" name="pCompra" placeholder="Precio de compra" required>
                                        <label for="pCompra">Precio de compra</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="iProducto" name="iProducto" accept="image/*">
                                        <label for="iProducto">Imagen del producto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label for="pTienda" class="form-label">Tienda</label>
                                    <input class="form-control" list="tProducto" id="pTienda" name="pTienda" placeholder="Nombre de la tienda">
                                    <datalist id="tProducto">
                                        <?php foreach ($tiendas as $tienda) { ?>
                                            <option value="<?= ucfirst(mb_strtolower($tienda->ti_nombre, "UTF-8")) ?>">
                                            <?php } ?>
                                    </datalist>
                                </div>
                                <div class="col">
                                    <label for="pColor" class="form-label">Color</label>
                                    <input class="form-control" list="cProducto" id="pColor" name="pColor" placeholder="Color del producto">
                                    <datalist id="cProducto">
                                        <?php foreach ($colores as $color) { ?>
                                            <option value="<?= ucfirst(mb_strtolower($color->c_color, "UTF-8")) ?>">
                                            <?php } ?>
                                    </datalist>
                                </div>
                                <div class="col">
                                    <label for="pTalla" class="form-label">Talla</label>
                                    <input class="form-control" list="taProducto" id="pTalla" name="pTalla" placeholder="Talla del producto">
                                    <datalist id="taProducto">
                                        <?php foreach ($tallas as $talla) { ?>
                                            <option value="<?= strtoupper(mb_strtolower($talla->t_talla, "UTF-8")) ?>">
                                            <?php } ?>
                                    </datalist>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="fProducto" name="fProducto">
                                        <label for="fProducto">Fecha de la compra</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gProducto" name="gProducto" value="45">
                                        <label for="gProducto">Ganancia</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <h2>Venta: <span id="PrecioVenta" class="text-success"></span></h2>
                                        <input type="number" class="form-control dNone" id="vProducto" name="vProducto" value="">
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
    <h1 class="h2 text-success">
        Gasto total $ <?= number_format($gastoTotal, 2); ?><small><sup>MXN</sup></small>
    </h1>
    <h1 class="h2 text-success">
        Ganancia total $ <?= number_format($gananciaTotal, 2); ?><small><sup>MXN</sup></small>
    </h1>
</div>
<div class="row row-cols-1 row-cols-md-6 g-4">
    <?php if (!empty($productos)):
        foreach ($productos as $producto): ?>
            <div class="col-s-6 col-xs-2">
                <div class="card h-100">
                    <img src="<?= base_url() ?>public/images/productos/<?= $producto->p_imagen ?>" class="card-img-top" alt="<?= $producto->p_nombre ?>" title="<?= $producto->p_nombre ?>">
                    <div class="card-body">
                        <h5 class="card-title text-success">$<?= number_format($producto->p_precioVenta, 2) ?> <small><sup>MXN</sup></small></h5>
                        <div class="row">
                            <div class="col">
                                <h2 class="card-text text-secondary"><a href="<?= base_url() ?>productos/<?= $producto->p_url ?>" class="text-secondary" style="text-decoration: none;"><?= ucfirst(mb_strtolower($producto->p_nombre, "UTF-8")) ?></small></a></h2>
                                <div class="col float-right">
                                    <h6 class="card-text text-light"><small>Disponible: <?= $producto->ptcs_stock ?></small></h6>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6 class="card-text text-light"><small>Color: <?= ucfirst(mb_strtolower($producto->c_color, "UTF-8")) ?></small></h6>
                                    </div>
                                    <div class="col">
                                        <h6 class="card-text text-light"><small>Talla: <?= $producto->t_talla ?></small></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</div>
<div class="row mt-5">
    <div class="col-12">
        <?php if ($countProductos != 0) {
            $totalrows = 12;
            $pagLeads = ceil($countProductos / $totalrows);
            if ($pagLeads > 1) { ?>
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php echo $pag <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="<?= base_url() ?>productos?pag=<?= $pag - 1 ?>">Previus</a></li>
                    <?php for ($i = 1; $i <= $pagLeads; $i++) { ?>
                        <li class="page-item <?php echo $pag == $i ? 'active' : '' ?>"><a class="page-link" href="<?= base_url() ?>productos?pag=<?= $i ?>"><?php print_r($i); ?></a></li>
                    <?php } ?>
                    <li class="page-item <?php echo $pag >= $pagLeads ? 'disabled' : '' ?>"><a class="page-link" href="<?= base_url() ?>productos?pag=<?= $pag + 1 ?>">Next</a></li>
                </ul>
            <?php } else { ?>
        <?php }
        } ?>
    </div>
</div>