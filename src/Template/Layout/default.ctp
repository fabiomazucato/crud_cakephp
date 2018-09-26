<?php echo $this->Html->docType() ?>
<html lang="pt-br">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>Aplicacação de Avaliação</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PAT - Programa mais água para todos">
    <meta name="author" content="CERB/CTIC - https://www.cerb.ba.gov.br">

    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <?php echo $this->Html->css('bootstrap.min.css') ?>
    <?php echo $this->Html->css('font-awesome/css/font-awesome.min.css') ?>
    <?php echo $this->Html->css('style.css') ?>
    <?php echo $this->Html->css('dataTables.bootstrap4.min.css') ?>
    <?php echo $this->Html->css('../js/assets/plugins/datetimepicker/css/daterangepicker.css') ?>
    <?php echo $this->Html->css('../plugins/jstree/style.css') ?>

    <?php echo $this->Html->script('modernizr.min.js') ?> 
    <?php echo $this->Html->script('jquery.min.js') ?> 
    <?php echo $this->Html->script('moment.min.js') ?> 

</head>

<body class="adminbody">

    <div id="main">
        <?php echo $this->element('Layout/head') ?>
        <?php echo $this->element('Layout/menu') ?>

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <?php echo $this->Flash->render() ?>
                <?php echo $this->fetch('content') ?>
            </div>
        </div>
        <?php echo $this->element('Layout/footer') ?>
    </div>
    <!-- END main -->

    <?php echo $this->Html->script('popper.min.js') ?> 
    <?php echo $this->Html->script('bootstrap.min.js') ?> 

    <?php echo $this->Html->script('detect.js') ?> 
    <?php echo $this->Html->script('fastclick.js') ?> 
    <?php echo $this->Html->script('jquery.blockUI.js') ?> 
    <?php echo $this->Html->script('jquery.nicescroll.js') ?> 

    <!-- App js -->
    <?php echo $this->Html->script('pikeadmin.js') ?> 

    <!-- BEGIN Java Script for this page -->
    <?php echo $this->Html->script('Chart.min.js') ?> 
    <?php echo $this->Html->script('DataTables/jquery.dataTables.min.js') ?> 
    <?php echo $this->Html->script('DataTables/dataTables.bootstrap4.min.js') ?> 

    <!-- Counter-Up-->
    <?php echo $this->Html->script('assets/plugins/waypoints/lib/jquery.waypoints.min.js') ?> 
    <?php echo $this->Html->script('assets/plugins/counterup/jquery.counterup.min.js') ?> 
    <!-- Date -->
    <?php echo $this->Html->script('assets/plugins/datetimepicker/js/moment.min.js') ?> 
    <?php echo $this->Html->script('assets/plugins/datetimepicker/js/daterangepicker.js') ?> 
    <?php echo $this->Html->script('../plugins/jstree/jstree.min.js') ?> 

    <script>
        $(document).ready(function() {
            // data-tables
            $('#example1').DataTable();

            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        } );        
    </script>

    <script>
    var ctx1 = document.getElementById("lineChart").getContext('2d');
    var lineChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: '#3EB9DC',
                data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
            }, {
                label: 'Dataset 2',
                backgroundColor: '#EBEFF3',
                data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
            }]

        },
        options: {
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });


    var ctx2 = document.getElementById("pieChart").getContext('2d');
    var pieChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            datasets: [{
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                label: 'Dataset 1'
            }],
            labels: [
            "Red",
            "Orange",
            "Yellow",
            "Green",
            "Blue"
            ]
        },
        options: {
            responsive: true
        }

    });


    var ctx3 = document.getElementById("doughnutChart").getContext('2d');
    var doughnutChart = new Chart(ctx3, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                label: 'Dataset 1'
            }],
            labels: [
            "Red",
            "Orange",
            "Yellow",
            "Green",
            "Blue"
            ]
        },
        options: {
            responsive: true
        }

    });
</script>
    

</body>
</html>

