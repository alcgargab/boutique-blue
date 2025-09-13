<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        <?= $countGastos ?> Gastos
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button class="btn btn-sm btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#addGasto"><i class="fa-solid fa-plus"></i> Agregar gasto</button>
        </div>
    </div>
    <div class="modal fade" id="addGasto" aria-hidden="true" aria-labelledby="addGasto" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Gasto Nuevo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="<?= base_url() ?>gastos/create" method="post" class="form-horizontalrizontal auth-form my-4">
                            <div class="row">
                                <div class="col">
                                    <!-- <label for="pTienda" class="form-label">Tienda</label> -->
                                    <input class="form-control" list="cgasto" id="categoriaGasto" name="categoriaGasto" placeholder="Tipo de gasto" required>
                                    <datalist id="cgasto">
                                        <?php foreach ($categorias as $categoria) { ?>
                                            <option value="<?= ucfirst(mb_strtolower($categoria->cg_nombre, "UTF-8")) ?>">
                                            <?php } ?>
                                    </datalist>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nGasto" name="nGasto" placeholder="Nombre del gasto" required>
                                        <label for="nGasto">Nombre del gasto</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="caGasto" name="caGasto" placeholder="Cantidad" required>
                                        <label for="caGasto">Cantidad</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="pGasto" name="pGasto" placeholder="Precio del gasto" required>
                                        <label for="pGasto">Precio del gasto</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="fGasto" name="fGasto">
                                        <label for="fGasto">Fecha del gasto</label>
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
</div>
<div class="row">
    <?php if (!empty($cat)) {
        for ($i = 0; $i < count($cat); $i++) { ?>
            <div class="col-2 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 text-center"><?= ucfirst(mb_strtolower($cat[$i]->cg_nombre, "UTF-8")) ?></h4>
                        <div class="chart-demo m-0">
                            <div id="cat<?= $i + 1 ?>" class="apex-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php if (!empty($gastos)): ?>
        <table id="tableGastos" class="table">
            <thead>
                <tr>
                    <th>Fecha del gasto</th>
                    <th>Categoria</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Precio Total</th>
                </tr>
            </thead>
            <!-- <tbody>
                <?php foreach ($gastos as $gasto): ?>
                    <tr>
                        <td><?= __convertDateToLetter($gasto->g_fgasto) ?></td>
                        <td><?= ucfirst(mb_strtolower($gasto->cg_nombre, "UTF-8")) ?></td>
                        <td><?= ucfirst(mb_strtolower($gasto->g_nombre, "UTF-8")) ?></td>
                        <td><?= ucfirst(mb_strtolower($gasto->g_cantidad, "UTF-8")) ?></td>
                        <td>$ <?= number_format($gasto->g_precio, 2) ?></td>
                        <td>$ <?= number_format($gasto->g_cantidad * $gasto->g_precio, 2) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody> -->
        </table>
    <?php endif ?>
</div>
<div class="row mt-5">
    <div class="col-12">
        <?php if ($countGastos != 0) {
            $totalrows = 5;
            $pagLeads = ceil($countGastos / $totalrows);
            if ($pagLeads > 1) { ?>
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php echo $pag <= 1 ? 'disabled' : '' ?>"><a class="page-link" href="<?= base_url() ?>gastos?pag=<?= $pag - 1 ?>">Previus</a></li>
                    <?php for ($i = 1; $i <= $pagLeads; $i++) { ?>
                        <li class="page-item <?php echo $pag == $i ? 'active' : '' ?>"><a class="page-link" href="<?= base_url() ?>gastos?pag=<?= $i ?>"><?php print_r($i); ?></a></li>
                    <?php } ?>
                    <li class="page-item <?php echo $pag >= $pagLeads ? 'disabled' : '' ?>"><a class="page-link" href="<?= base_url() ?>gastos?pag=<?= $pag + 1 ?>">Next</a></li>
                </ul>
            <?php } else { ?>
        <?php }
        } ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $("#tableGastos").DataTable({
            $.ajax({
                url: "<?= base_url() ?>ajax/get_gastos",
                type: "post",
                dataType: "html",
                beforeSend: function(r) {},
                success: function(r) {},
                error: function(a) {
                    $('#IngresosEgresos').html('<center class="mt-5"><h4>Lo sentimos hubo un error. Intentalo nuevamente</h4></center>');
                },
            })
        });
    });




    // $(document).ready(__data);
    // //--------------- CLICK ---------------//
    // function __data() {
    //     var table = $("#tableGastos").DataTable({
    //         
    //     });
    // }
    var cat1 = {
        series: [<?= $gTP1 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#4285f4'],
        labels: ['$<?= number_format($gT1, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat1"), cat1).render();
    var cat2 = {
        series: [<?= $gTP2 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#ea4335'],
        labels: ['$<?= number_format($gT2, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat2"), cat2).render();
    var cat3 = {
        series: [<?= $gTP3 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#fbbc05'],
        labels: ['$<?= number_format($gT3, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat3"), cat3).render();
    var cat4 = {
        series: [<?= $gTP4 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#34a853'],
        labels: ['$<?= number_format($gT4, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat4"), cat4).render();
    var cat5 = {
        series: [<?= $gTP5 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#4285f4'],
        labels: ['$<?= number_format($gT5, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat5"), cat5).render();
    var cat6 = {
        series: [<?= $gTP6 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#ea4335'],
        labels: ['$<?= number_format($gT6, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat6"), cat6).render();
    var cat7 = {
        series: [<?= $gTP7 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#fbbc05'],
        labels: ['$<?= number_format($gT7, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat7"), cat7).render();
    var cat8 = {
        series: [<?= $gTP8 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#34a853'],
        labels: ['$<?= number_format($gT8, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat8"), cat8).render();
    var cat9 = {
        series: [<?= $gTP9 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#4285f4'],
        labels: ['$<?= number_format($gT9, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat9"), cat9).render();
    var cat10 = {
        series: [<?= $gTP10 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#ea4335'],
        labels: ['$<?= number_format($gT10, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat10"), cat10).render();
    var cat11 = {
        series: [<?= $gTP11 ?>],
        chart: {
            height: 400,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '60%',
                }
            },
        },
        stroke: {
            lineCap: "round",
        },
        colors: ['#fbbc05'],
        labels: ['$<?= number_format($gT11, 2) ?> MXN'],
    };
    var chart = new ApexCharts(document.querySelector("#cat11"), cat11).render();
</script>