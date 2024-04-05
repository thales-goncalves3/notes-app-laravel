<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="flex flex-col h-screen">

    <style>
        

        .chart-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            width: 80vw;
        }

        
    </style>

    @include('layouts.header')

    <div class="container items-center">
        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const dataFromPHP = <?php echo json_encode($resume); ?>;

        const data = {
            labels: [
                'Feitas',
                'Em andamento',
            ],
            datasets: [{
                label: 'Tarefas',
                data: [dataFromPHP.finalizada, dataFromPHP.emAndamento],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                ],
                hoverOffset: 1
            }]
        };





        const canvas = document.getElementById('myChart');


        new Chart(canvas.getContext('2d'), {
            type: 'pie',
            data: data,

        });
    </script>

</body>

</html>