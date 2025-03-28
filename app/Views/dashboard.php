<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        Dashboard
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button class="btn btn-sm btn-outline-secondary" type="button">
                Share
            </button>
            <button class="btn btn-sm btn-outline-secondary" type="button">
                Export
            </button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1" type="button">
            <svg class="bi">
                <use xlink:href="#calendar3">
                </use>
            </svg>
            This week
        </button>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="header-title mt-0 text-center">0</h4>
        <div class="chart-demo m-0">
            <div id="chart" class="apex-charts"></div>
        </div>
    </div>
</div>
<h2>
    Section title
</h2>
<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">
                    #
                </th>
                <th scope="col">
                    Header
                </th>
                <th scope="col">
                    Header
                </th>
                <th scope="col">
                    Header
                </th>
                <th scope="col">
                    Header
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1,001
                </td>
                <td>
                    random
                </td>
                <td>
                    data
                </td>
                <td>
                    placeholder
                </td>
                <td>
                    text
                </td>
            </tr>
            <tr>
                <td>
                    1,002
                </td>
                <td>
                    placeholder
                </td>
                <td>
                    irrelevant
                </td>
                <td>
                    visual
                </td>
                <td>
                    layout
                </td>
            </tr>
            <tr>
                <td>
                    1,003
                </td>
                <td>
                    data
                </td>
                <td>
                    rich
                </td>
                <td>
                    dashboard
                </td>
                <td>
                    tabular
                </td>
            </tr>
            <tr>
                <td>
                    1,003
                </td>
                <td>
                    information
                </td>
                <td>
                    placeholder
                </td>
                <td>
                    illustrative
                </td>
                <td>
                    data
                </td>
            </tr>
            <tr>
                <td>
                    1,004
                </td>
                <td>
                    text
                </td>
                <td>
                    random
                </td>
                <td>
                    layout
                </td>
                <td>
                    dashboard
                </td>
            </tr>
            <tr>
                <td>
                    1,005
                </td>
                <td>
                    dashboard
                </td>
                <td>
                    irrelevant
                </td>
                <td>
                    text
                </td>
                <td>
                    placeholder
                </td>
            </tr>
            <tr>
                <td>
                    1,006
                </td>
                <td>
                    dashboard
                </td>
                <td>
                    illustrative
                </td>
                <td>
                    rich
                </td>
                <td>
                    data
                </td>
            </tr>
            <tr>
                <td>
                    1,007
                </td>
                <td>
                    placeholder
                </td>
                <td>
                    tabular
                </td>
                <td>
                    information
                </td>
                <td>
                    irrelevant
                </td>
            </tr>
            <tr>
                <td>
                    1,008
                </td>
                <td>
                    random
                </td>
                <td>
                    data
                </td>
                <td>
                    placeholder
                </td>
                <td>
                    text
                </td>
            </tr>
            <tr>
                <td>
                    1,009
                </td>
                <td>
                    placeholder
                </td>
                <td>
                    irrelevant
                </td>
                <td>
                    visual
                </td>
                <td>
                    layout
                </td>
            </tr>
            <tr>
                <td>
                    1,010
                </td>
                <td>
                    data
                </td>
                <td>
                    rich
                </td>
                <td>
                    dashboard
                </td>
                <td>
                    tabular
                </td>
            </tr>
            <tr>
                <td>
                    1,011
                </td>
                <td>
                    information
                </td>
                <td>
                    placeholder
                </td>
                <td>
                    illustrative
                </td>
                <td>
                    data
                </td>
            </tr>
            <tr>
                <td>
                    1,012
                </td>
                <td>
                    text
                </td>
                <td>
                    placeholder
                </td>
                <td>
                    layout
                </td>
                <td>
                    dashboard
                </td>
            </tr>
            <tr>
                <td>
                    1,013
                </td>
                <td>
                    dashboard
                </td>
                <td>
                    irrelevant
                </td>
                <td>
                    text
                </td>
                <td>
                    visual
                </td>
            </tr>
            <tr>
                <td>
                    1,014
                </td>
                <td>
                    dashboard
                </td>
                <td>
                    illustrative
                </td>
                <td>
                    rich
                </td>
                <td>
                    data
                </td>
            </tr>
            <tr>
                <td>
                    1,015
                </td>
                <td>
                    random
                </td>
                <td>
                    tabular
                </td>
                <td>
                    information
                </td>
                <td>
                    text
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    var options = {
        series: [{
            name: 'Net Profit',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: 'Revenue',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
            name: 'Free Cash Flow',
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                borderRadius: 5,
                borderRadiusApplication: 'end'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        yaxis: {
            title: {
                text: '$ (thousands)'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$ " + val + " thousands"
                }
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#chart"), options).render();
</script>