<?php require('encabezado.php'); ?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("get_defect_data.php");
$con = connection();

// Función para obtener datos de las tablas
function getDefectData($con, $table, $column) {
    $sql = "SELECT $column, COUNT(*) as count FROM $table GROUP BY $column";
    $query = mysqli_query($con, $sql);

    $defects = [];
    $counts = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $defects[] = $row[$column];
        $counts[] = $row['count'];
    }
    return ['defects' => $defects, 'counts' => $counts];
}

// Obtener datos de defectos
$data_miscellaneous = getDefectData($con, 'miscellaneous', 'defect1');
$data_assembly = getDefectData($con, 'assembly', 'defect1');
$data_paint = getDefectData($con, 'paint', 'defect1');
$data_paint2 = getDefectData($con, 'paint2', 'defect1');
$data_drums = getDefectData($con, 'drums', 'defect');
$data_preparation = getDefectData($con, 'preparation', 'defect');
$data_shipping = getDefectData($con, 'shipping', 'defect');

// Obtener datos de inspectores
$data_inspector_miscellaneous = getDefectData($con, 'miscellaneous', 'number');
$data_inspector_paint = getDefectData($con, 'paint', 'number');
$data_inspector_paint2 = getDefectData($con, 'paint2', 'number');

$data_num_inspector_assembly = getDefectData($con, 'assembly', 'number');
$data_num_inspector_drums = getDefectData($con, 'drums', 'number');
$data_num_inspector_preparation = getDefectData($con, 'preparation', 'num_inspector2');
$data_num_inspector_shipping = getDefectData($con, 'shipping', 'num_inspector2');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRUMS - Defects & Inspector Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .chart-container {
            width: 100%;
            max-width: 400px;
            margin: 20px;
        }
        .charts-row {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <!-- Agrupar gráficas relacionadas -->
    <div class="charts-row">
        <div class="chart-container">
            <canvas id="defectsChartMiscellaneous"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="inspectorChartMiscellaneous"></canvas>
        </div>
    </div>

    <div class="charts-row">
        <div class="chart-container">
            <canvas id="defectsChartAssembly"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="numInspectorChartAssembly"></canvas>
        </div>
    </div>

    <div class="charts-row">
        <div class="chart-container">
            <canvas id="defectsChartPaint"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="inspectorChartPaint"></canvas>
        </div>
    </div>

    <div class="charts-row">
        <div class="chart-container">
            <canvas id="defectsChartPaint2"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="inspectorChartPaint2"></canvas>
        </div>
    </div>

    <div class="charts-row">
        <div class="chart-container">
            <canvas id="defectsChartDrums"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="numInspectorChartDrums"></canvas>
        </div>
    </div>

    <div class="charts-row">
        <div class="chart-container">
            <canvas id="defectsChartPreparation"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="numInspectorChartPreparation"></canvas>
        </div>
    </div>

    <div class="charts-row">
        <div class="chart-container">
            <canvas id="defectsChartShipping"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="numInspectorChartShipping"></canvas>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Datos para las gráficas de defectos
        var chartsData = {
            'defectsChartMiscellaneous': {
                data: <?php echo json_encode($data_miscellaneous); ?>,
                title: 'Defects Count (Miscellaneous)'
            },
            'defectsChartAssembly': {
                data: <?php echo json_encode($data_assembly); ?>,
                title: 'Defects Count (Assembly)'
            },
            'defectsChartPaint': {
                data: <?php echo json_encode($data_paint); ?>,
                title: 'Defects Count (Paint)'
            },
            'defectsChartPaint2': {
                data: <?php echo json_encode($data_paint2); ?>,
                title: 'Defects Count (Paint2)'
            },
            'defectsChartDrums': {
                data: <?php echo json_encode($data_drums); ?>,
                title: 'Defects Count (Drums)'
            },
            'defectsChartPreparation': {
                data: <?php echo json_encode($data_preparation); ?>,
                title: 'Defects Count (Preparation)'
            },
            'defectsChartShipping': {
                data: <?php echo json_encode($data_shipping); ?>,
                title: 'Defects Count (Shipping)'
            }
        };

        // Datos para las gráficas de inspectores
        var inspectorChartsData = {
            'inspectorChartMiscellaneous': {
                data: <?php echo json_encode($data_inspector_miscellaneous); ?>,
                title: 'Top Oper (Miscellaneous)'
            },
            'inspectorChartPaint': {
                data: <?php echo json_encode($data_inspector_paint); ?>,
                title: 'Top Oper (Paint)'
            },
            'inspectorChartPaint2': {
                data: <?php echo json_encode($data_inspector_paint2); ?>,
                title: 'Top Oper (Paint2)'
            },
            'numInspectorChartAssembly': {
                data: <?php echo json_encode($data_num_inspector_assembly); ?>,
                title: 'Top Oper (Assembly - Num Inspector 2)'
            },
            'numInspectorChartDrums': {
                data: <?php echo json_encode($data_num_inspector_drums); ?>,
                title: 'Top Oper (Drums - Num Inspector 2)'
            },
            'numInspectorChartPreparation': {
                data: <?php echo json_encode($data_num_inspector_preparation); ?>,
                title: 'Top Inspectors (Preparation - Num Inspector 2)'
            },
            'numInspectorChartShipping': {
                data: <?php echo json_encode($data_num_inspector_shipping); ?>,
                title: 'Top Inspectors (Shipping - Num Inspector 2)'
            }
        };

        // Función para crear gráficos de defectos
        function createChart(chartId, data, title) {
            var ctx = document.getElementById(chartId).getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.defects,
                    datasets: [{
                        label: title,
                        data: data.counts,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: title
                        }
                    }
                }
            });
        }

        // Función para crear gráficos de inspectores
        function createInspectorChart(chartId, data, title) {
            var ctx = document.getElementById(chartId).getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.defects,
                    datasets: [{
                        label: title,
                        data: data.counts,
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: title
                        }
                    }
                }
            });
        }

        // Crear todas las gráficas de defectos con título
        Object.keys(chartsData).forEach(function(chartId) {
            createChart(chartId, chartsData[chartId].data, chartsData[chartId].title);
        });

        // Crear todas las gráficas de inspectores con título
        Object.keys(inspectorChartsData).forEach(function(chartId) {
            createInspectorChart(chartId, inspectorChartsData[chartId].data, inspectorChartsData[chartId].title);
        });
    });
    </script>
</body>
</html>

<?php require('pie.php'); ?>
