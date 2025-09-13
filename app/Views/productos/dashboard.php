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
                                        <input type="text" class="form-control dNone" id="vProducto" name="vProducto">
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
    <div class="modal fade" id="venderProducto" aria-hidden="true" aria-labelledby="venderProducto" tabindex="-1">
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
                                <div class="col" style="display: none">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="vproducto" name="vproducto">
                                    </div>
                                </div>
                                <div class="col">
                                    <input class="form-control" list="nombreClie" id="vCliente" name="vCliente" placeholder="Nombre del cliente" required>
                                    <datalist id="nombreClie">
                                        <?php foreach ($clientes as $cliente) { ?>
                                            <option value="<?= ucwords(mb_strtolower($cliente->cl_apellido . " " . $cliente->cl_nombre, "UTF-8")) ?> | <?= $cliente->cl_whatsapp ?>">
                                            <?php } ?>
                                    </datalist>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="vPago" name="vPago" aria-label="Tipo de pago" required>
                                            <?php foreach ($tipoPagos as $pago) { ?>
                                                <option value="<?= $pago->tp_id ?>"><?= ucfirst(mb_strtolower($pago->tp_nombre, "UTF-8")) ?></option>
                                            <?php } ?>
                                        </select>
                                        <label for="vPago">Tipo de pago</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="fVenta" name="fVenta" required>
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
    <div class="modal fade" id="ApartarProducto" aria-hidden="true" aria-labelledby="ApartarProducto" tabindex="-1">
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
                                <div class="col" style="display: none;">
                                    <div class="form-floating">
                                        <input type="text" id="aproducto" name="aproducto">
                                    </div>
                                </div>
                                <div class="col">
                                    <input class="form-control" list="nombreClie" id="vCliente" name="vCliente" placeholder="Nombre del cliente" required>
                                    <datalist id="nombreClie">
                                        <?php foreach ($clientes as $cliente) { ?>
                                            <option value="<?= ucwords(mb_strtolower($cliente->cl_apellido . " " . $cliente->cl_nombre, "UTF-8")) ?> | <?= $cliente->cl_whatsapp ?>">
                                            <?php } ?>
                                    </datalist>
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
    <h1 class="h2 text-success">
        Gasto total $ <?= number_format($gastoTotal, 2); ?><small><sup>MXN</sup></small>
    </h1>
    <h1 class="h2 text-success">
        Ganancia total $ <?= number_format($gananciaTotal, 2); ?><small><sup>MXN</sup></small>
    </h1>
    <a id="btn_data_list" href="#" class="btn-atom"><i class="fa-solid fa-list"></i> Lista</a>
    <a id="btn_data_grid" href="#" class="btn-atom"><i class="fa-solid fa-grip"></i> Grid</a>
</div>
<?php if (!empty($productos)): ?>
    <div id="data_list" class="row row-cols-1 row-cols-md-6 g-4">
        <div class="input-group mb-3">
            <input id="searchInputList" type="text" class="form-control" placeholder="Search">
            <button class="btn btn-success" type="submit">Buscar</button>
        </div>
        <div class="col-md-12 table-responsive">
            <table id="myTable" class="table" data-bs-theme="dark" style="table-layout: fixed">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Características</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td>
                                <img src="<?= base_url() ?>public/images/productos/<?= $producto->p_imagen ?>" alt="<?= $producto->p_nombre ?>" title="<?= $producto->p_nombre ?>" width="10%">
                            </td>
                            <td>
                                <h6 class="card-text text-secondary">
                                    <a href="<?= base_url() ?>productos/<?= $producto->p_url ?>" class="text-secondary"><?= ucfirst(mb_strtolower($producto->p_nombre, "UTF-8")) ?></a>
                                </h6>
                            </td>
                            <td>
                                <h6 class="card-title text-success">$<?= number_format($producto->p_precioVenta, 2) ?> <small><sup>MXN</sup></small></h6>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text text-light"><small>Disponible: <?= $producto->ptcs_stock ?></small></p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text text-light"><small>Color: <?= ucfirst(mb_strtolower($producto->c_color, "UTF-8")) ?></small></p>
                                    </div>
                                    <div class="col">
                                        <p class="card-text text-light"><small>Talla: <?= $producto->t_talla ?></small></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row text-center">
                                    <div class="col">
                                        <button value="<?= $producto->p_id ?>" class="btnVenta btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#venderProducto">Vender</button>
                                    </div>
                                    <div class="col">
                                        <button value="<?= $producto->p_id ?>" class="btnApartar btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#ApartarProducto">Apartar</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="data_grid" class="row row-cols-1 row-cols-md-6 g-4">
        <div class="input-group mb-3">
            <input id="searchInputGrid" type="text" class="form-control" placeholder="Search">
            <button class="btn btn-success" type="submit">Buscar</button>
        </div>
        <?php foreach ($productos as $producto): ?>
            <div class="col-s-6 col-xs-2 card-container">
                <div class="card h-100">
                    <img src="<?= base_url() ?>public/images/productos/<?= $producto->p_imagen ?>" class="card-img-top" alt="<?= $producto->p_nombre ?>" title="<?= $producto->p_nombre ?>">
                    <div class="card-body">
                        <h5 class="card-title text-success">$<?= number_format($producto->p_precioVenta, 2) ?> <small><sup>MXN</sup></small></h5>
                        <div class="row">
                            <div class="col">
                                <h2 class="card-text text-secondary">
                                    <a href="<?= base_url() ?>productos/<?= $producto->p_url ?>" class="text-secondary" style="text-decoration: none;"><?= ucfirst(mb_strtolower($producto->p_nombre, "UTF-8")) ?></a>
                                </h2>
                                <div class="col float-right">
                                    <h6 class="card-text text-light">
                                        <small>Disponible: <?= $producto->ptcs_stock ?></small>
                                    </h6>
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
                        <br>
                        <div class="row text-center">
                            <div class="col">
                                <button value="<?= $producto->p_id ?>" class="btnVenta btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#venderProducto">Vender</button>
                            </div>
                            <div class="col">
                                <button value="<?= $producto->p_id ?>" class="btnApartar btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#ApartarProducto">Apartar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>
<!-- <div class="row mt-5">
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
</div> -->
<script>
    // Usamos $(document).ready() para asegurar que el DOM esté completamente cargado
    $(document).ready(function() {
        $(".btnVenta").click(function() {
            $("#vproducto").val($(this).val());
        });
        $(".btnApartar").click(function() {
            $("#aproducto").val($(this).val());
        });
        $("#data_grid").hide();
        $("#btn_data_list").click(function() {
            $("#data_list").show();
            $("#data_grid").hide();
        });
        // Seleccionamos el input de búsqueda y la tabla con selectores jQuery
        const $searchInputList = $('#searchInputList');
        const $table = $('#myTable');
        const $rows = $table.find('tbody tr'); // Buscamos todas las filas dentro del tbody
        // Añadimos un escuchador de eventos 'keyup' al input de búsqueda
        $searchInputList.on('keyup', function() {
            const filter = $searchInputList.val().toLowerCase(); // Obtenemos el valor del input en minúsculas
            $rows.each(function() { // Iteramos sobre cada fila usando $.each()
                const $row = $(this); // Convertimos la fila actual a un objeto jQuery
                // Obtenemos el texto de todas las celdas de la fila y lo concatenamos
                // .text() en jQuery obtiene el texto combinado de todos los elementos hijos
                const textContent = $row.text().toLowerCase();
                // Comprobamos si el texto de búsqueda está contenido en el texto de la fila
                if (textContent.indexOf(filter) > -1) {
                    // $row.removeClass('hide'); // Mostrar la fila
                    $row.show(); // Mostrar la fila
                } else {
                    // $row.addClass('hide'); // Ocultar la fila
                    $row.hide(); // Ocultar la fila
                }
            });
        });
        $("#btn_data_grid").click(function() {
            $("#data_list").hide();
            $("#data_grid").show();
        });
        const $searchInputGrid = $('#searchInputGrid');
        const $productCards = $('#data_grid .card-container'); // Selecciona todos los div que contienen las cards
        const $noResultsMessage = $('#noResultsMessage');
        $searchInputGrid.on('keyup', function() {
            const filter = $searchInputGrid.val().toLowerCase();
            let foundResults = false;
            $productCards.each(function() {
                const $card = $(this); // El div col-md-3, etc. que contiene la card
                // Obtenemos el texto relevante para la búsqueda dentro de cada tarjeta
                // Esto incluye nombre, precio, stock, color, talla.
                // Ajusta los selectores si quieres buscar en menos elementos.
                const cardText = $card.find('.card-body').text().toLowerCase();

                if (cardText.indexOf(filter) > -1) {
                    $card.show(); // Muestra la tarjeta
                    foundResults = true;
                } else {
                    $card.hide(); // Oculta la tarjeta
                }
            });

            // Muestra u oculta el mensaje de "no resultados"
            if (foundResults) {
                $noResultsMessage.hide();
            } else {
                $noResultsMessage.show();
            }
        });
    });
</script>