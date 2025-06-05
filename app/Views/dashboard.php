<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        Dashboard
    </h1>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col text-center">
                        <h3>Ingresos <br>$<?= (!empty($ingresoTotal) ? number_format($ingresoTotal, 2) : '') ?><sup><small>MXN</small></sup></h3>
                    </div>
                    <div class="col text-center">
                        <h1>-</h1>
                    </div>
                    <div class="col text-center">
                        <h3>Egresos <br>$<?= (!empty($egresoTotal) ? number_format($egresoTotal, 2) : '') ?><sup><small>MXN</small></sup></h3>
                    </div>
                    <div class="col text-center">
                        <h1>=</h1>
                    </div>
                    <div class="col text-center <?= (!empty($ingresoTotal - $egresoTotal > 0) ? 'text-green' : 'text-red') ?>"><br>
                        <h1>$<?= number_format($ingresoTotal - $egresoTotal, 2) ?><sup><small>MXN</small></sup></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <h4 class="header-title mt-0 text-center">Historial de Ingresos</h4>
                    </div>
                    <div class="col-8">
                        <button id="reportA" class="btn btn-sm btn-outline-secondary" type="button">Año</button>
                        <button id="reportC" class="btn btn-sm btn-outline-secondary" type="button">Cuatrimestre</button>
                        <button id="reportT" class="btn btn-sm btn-outline-secondary" type="button">Trimestre</button>
                        <button id="reportB" class="btn btn-sm btn-outline-secondary" type="button">Bimestre</button>
                        <button id="reportM" class="btn btn-sm btn-outline-secondary" type="button">Mes</button>
                        <button id="reportQ" class="btn btn-sm btn-outline-secondary" type="button">Quincena</button>
                        <button id="reportS" class="btn btn-sm btn-outline-secondary" type="button">Semana</button>
                        <button id="reportD" class="btn btn-sm btn-outline-secondary" type="button">Día</button>
                    </div>
                </div>
                <div class="row">
                    <div class="chart-demo m-0">
                        <div id="IngresosEgresos" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#reportD").click(function() {
            $('#IngresosEgresos').html('<center class="mt-5"><i class="fa-solid fa-spinner fa-spin-pulse" style="color: #4285f4; font-size:250px"></i></center>');
            $.ajax({
                url: "<?= base_url() ?>ajax/get-ventas-dia",
                type: "post",
                dataType: "html",
                beforeSend: function(r) {},
                success: function(r) {
                    if (0 != (r = JSON.parse(r)).status) {
                        optionsDia = {
                            series: [{
                                name: "Reporte diario de ventas",
                                data: r.ingresos.map(item => parseFloat(item.total_ingreso)) // Usamos map para construir el array de datos
                            }],
                            chart: {
                                height: 650,
                                type: 'line',
                                dropShadow: {
                                    enabled: true,
                                    color: '#000',
                                    top: 18,
                                    left: 7,
                                    blur: 10,
                                    opacity: 0.2
                                },
                                zoom: {
                                    enabled: false
                                },
                                toolbar: {
                                    show: false
                                }
                            },
                            colors: ['#34a853'],
                            dataLabels: {
                                enabled: true,
                                formatter: function(val, opts) {
                                    return Intl.NumberFormat('es-MX', {
                                        style: 'currency',
                                        currency: 'MXN'
                                    }).format(val);
                                },
                            },
                            stroke: {
                                curve: 'smooth'
                            },
                            title: {
                                text: 'Reporte diario de ventas',
                                align: 'left'
                            },
                            grid: {
                                borderColor: '#000000',
                                row: {
                                    colors: ['#212529'],
                                    opacity: 0.5
                                },
                            },
                            markers: {
                                size: 1
                            },
                            xaxis: {
                                categories: r.ingresos.map(item => item.i_fecha), // Usamos map para construir el array de categorías
                                title: {
                                    text: 'Día'
                                }
                            },
                            yaxis: {
                                title: {
                                    text: 'Pesos'
                                },
                                // min y max deben ser dinámicos basados en tus datos
                                // Ejemplo:
                                min: Math.min(...r.ingresos.map(item => parseFloat(item.total_ingreso))),
                                max: Math.max(...r.ingresos.map(item => parseFloat(item.total_ingreso)))
                            },
                            legend: {
                                position: 'top',
                                horizontalAlign: 'right',
                                floating: true,
                                offsetY: -25,
                                offsetX: -5
                            },
                            tooltip: {
                                enabled: true,
                                x: {
                                    show: false,
                                },
                                theme: false,
                                y: {
                                    formatter: function(val, opts) {
                                        return Intl.NumberFormat('es-MX', {
                                            style: 'currency',
                                            currency: 'MXN'
                                        }).format(val);
                                    },
                                },
                            },
                        };
                        var chart = new ApexCharts(document.querySelector("#IngresosEgresos"), optionsDia).render();
                    } else {
                        $('#IngresosEgresos').html('<center class="mt-5"><h4>Lo sentimos hubo un error. Intentalo nuevamente</h4></center>');
                    }
                },
                error: function(a) {
                    $('#IngresosEgresos').html('<center class="mt-5"><h4>Lo sentimos hubo un error. Intentalo nuevamente</h4></center>');
                },
            });
        });
    });
    var optionsIngresosEgresos = {
        series: [{
                name: "Ingresos",
                data: [<?php foreach ($reporteIngresosEgresos as $ingreso) {
                            echo $ingreso['ingresoTotal'] . ",";
                        } ?>]
            },
            {
                name: "Egresos",
                data: [<?php foreach ($reporteIngresosEgresos as $egreso) {
                            echo $egreso['egresoTotal'] . ",";
                        } ?>]
            }
        ],
        chart: {
            height: 650,
            type: 'line',
            dropShadow: {
                enabled: true,
                color: '#212529',
                top: 18,
                left: 7,
                blur: 10,
                opacity: 0.5
            },
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            }
        },
        colors: ['#34a853', '#ea4335'],
        dataLabels: {
            enabled: true,
            formatter: function(val, opts) {
                return Intl.NumberFormat('es-MX', {
                    style: 'currency',
                    currency: 'MXN'
                }).format(val);
            },
        },
        stroke: {
            curve: 'smooth'
        },
        title: {
            text: '',
            align: 'left'
        },
        grid: {
            borderColor: '#ffffff',
            row: {
                colors: ['#212529'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        markers: {
            size: 1
        },
        xaxis: {
            categories: [<?php foreach ($reporteIngresosEgresos as $row) {
                                echo "'" . __getMonth($row['fecha']) . "',";
                            } ?>],
            // categories: ['Septiembre', 'Octubre', 'Noviembre', 'Diciembre', 'Enero', 'Febrero', 'Marzo', 'Abril', ' Mayo', 'Junio', 'Julio', 'Agosto'],
            title: {
                text: 'Mes'
            }
        },
        yaxis: {
            title: {
                text: 'Pesos'
            },
            min: <?= (!empty($min) ? $min : '0') ?>,
            max: <?= (!empty($max) ? $max : '10000') ?>
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            floating: true,
            offsetY: -5,
            offsetX: -5
        },
        tooltip: {
            enabled: true,
            x: {
                show: false,
            },
            theme: false,
            y: {
                formatter: function(val, opts) {
                    return Intl.NumberFormat('es-MX', {
                        style: 'currency',
                        currency: 'MXN'
                    }).format(val);
                },
            },
        },
    };
    var chartIngresosEgresos = new ApexCharts(document.querySelector("#IngresosEgresos"), optionsIngresosEgresos).render();
</script>