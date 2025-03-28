    <div class="container mt-5">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h1 class="featurette-heading txtAtom"><?=$apartados -> p_nombre?></h1>
                <p>
                    <span class="text-muted">
                        <br><span class="txtAtom">Talla:</span> <?=$apartados -> t_talla?>
                        <br><span class="txtAtom">Color:</span> <?=$apartados -> c_color?>
                        <br><span class="txtAtom">Fecha de apartado:</span> <?=__convertDateToLetter($apartados -> a_fecha)?>
                        <br><span class="txtAtom">Precio de venta:</span> $<?=number_format($apartados -> p_precioVenta, 2)?>
                        <br><span class="txtAtom">Abono:</span> $<?=number_format($totalAbonos[0] -> totalAbonos, 2)?>
                        <br><br>
                        <span class="txtAtom">Resta:</span> <?php $flag = $apartados -> p_precioVenta - $totalAbonos[0] -> totalAbonos; echo "$".number_format($flag, 2);?>
                        <br><br>
                        <?php
                            $fecha_apartado = new DateTime($apartados -> a_fecha);
                            // Sumar 15 días a la fecha del apartado
                            $fecha_apartado -> modify('+16 days');
                            $date15 = $fecha_apartado -> format('Y-m-d');
                            // Obtener la fecha actual
                            $date2 = new DateTime(date('Y-m-d'));
                            // Calcular la diferencia en días
                            $intervalo = $date2->diff($fecha_apartado);
                            $flag = $intervalo->days;
                            // Imprimir la diferencia
                            echo 'Faltan <span class="txtAtom">'.$flag.'</span> días para terminar de pagar';
                        ?> 
                    </span>
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="<?=$apartados -> p_imagen?>" role="img" aria-label="<?=$apartados -> p_nombre?>" preserveAspectRatio="xMidYMid slice" focusable="false"><title><?=$apartados -> p_nombre?></title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"><?=$apartados -> p_nombre?></text></svg>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button class="btn btn-sm btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#addApartado"><i class="fa-solid fa-plus"></i> Agregar abono</button>
                    </div>
                </div>
                <div class="modal fade" id="addApartado" aria-hidden="true" aria-labelledby="addApartado" tabindex="-1">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Nuevo Abono</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form action="<?=base_url()?>abonos/create" method="post" class="form-horizontalrizontal auth-form my-4">
                                        <div class="row">
                                            <input type="text" class="form-control dNone" id="abCliente" name="abCliente" value="<?=$apartados -> cl_id?>" readonly>
                                            <input type="text" class="form-control dNone" id="abApartado" name="abApartado" value="<?=$apartados -> a_id?>" readonly>
                                            <input type="text" class="form-control dNone" id="abProducto" name="abProducto" value="<?=$apartados -> p_id?>" readonly>
                                            <input type="text" class="form-control dNone" id="abPrecio" name="abPrecio" value="<?=$apartados -> p_precioVenta?>" readonly>
                                            <div class="col">
                                                <div class="form-floating">
                                                    <select class="form-select" id="abPago" name="abPago" aria-label="Tipo de pago">
                                                        <?php foreach ($tipoPagos as $pago){ ?>
                                                            <option value="<?=$pago -> tp_id?>"><?=ucfirst(mb_strtolower($pago -> tp_nombre, "UTF-8"))?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <label for="abPago">Tipo de pago</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating">
                                                    <input type="date" class="form-control" id="abFecha" name="abFecha">
                                                    <label for="abFecha">Fecha del abono</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating">
                                                    <input type="time" class="form-control" id="abHora" name="abHora">
                                                    <label for="abHora">Hora del abono</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="abCantidad" name="abCantidad">
                                                    <label for="abCantidad">Monto del abono</label>
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
        </div>
        <div class="row mt-5">
            <?php if (!empty($abonos)) {
                foreach ($abonos as $abono){ ?>
                    <div class="col-lg-3 mt-3">
                        <div class="cardAbonos">
                            <h2 class="text-center txtAtom">$<?=number_format($abono -> ab_cantidad, 2)?></h2>
                            <p>
                                Tipo de pago: <?=$abono -> tp_nombre?>
                                <br>
                                Fecha de pago: <?=__convertDateToLetter($abono -> ab_fecha)?> a las <?=$abono -> ab_hora?>
                            </p>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>