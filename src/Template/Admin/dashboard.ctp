<div class="portlet-back"></div>
<div class="admin">
    <div class="row admin-inner portlet">
        <div class="row">
            <div class="portlet-title white-text col s12 m6 l6">
                <h5><?php echo __('Dashboard') ?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card panel">
                    <div class="card-content green-text">
                        <span class="card-title activator">
                            <i class="material-icons left">assignment_returned</i><?php echo __('Payments received') ?>
                        </span>
                        <p><?php echo __('Payments received your clients') ?></p>
                        <br>
                        <h4 class="right-align light">+R$ <span id="count-box0">12745.23</span></h4>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m4 l4">
                <div class="card panel">
                    <div class="card-content blue-text">
                        <span class="card-title activator">
                            <i class="material-icons left">account_balance_wallet</i><?php echo __('Cash in account') ?>
                        </span>
                        <p><?php echo __("Money in your PayMe account") ?></p>
                        <br>
                        <h4 class="right-align light">R$ <span id="count-box1">590.49</span></h4>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m4 l4">
                <div class="card panel">
                    <div class="card-content red-text ">
                        <span class="card-title activator">
                            <i class="material-icons left">credit_card</i><?php echo __('Debited cash') ?>
                        </span>
                        <p><?php echo __('Payments debited in your account') ?></p>
                        <br>
                        <h4 class="right-align light">-R$ <span id="count-box2">613.47</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">
                            <?php echo __('Active/Expense') ?>
                        </span>
                        <p class="grey-text accent-4"><?php echo __('Historic in your accounts and dependents') ?></p>
                        <br>
                        <canvas id="canvas" style="height: 400px;"></canvas>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m6 l6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">
                            <?php echo __('Historic') ?>
                        </span>
                        <p class="grey-text accent-4"><?php echo __('Data generals') ?></p>
                        <br>
                        <canvas id="chart-access" style="height: 400px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><?php echo __('Clients') ?></span>
                        <table class="bordered responsive-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price offers</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Alvin</td>
                                    <td>R$ 1.22</td>
                                    <td class="green-text"><i class="material-icons left">done</i>Registered</td>
                                </tr>
                                <tr>
                                    <td>Alan</td>
                                    <td>R$ 1.22</td>
                                    <td class="orange-text accent-4"><i class="material-icons left">warning</i>Pending</p></td>
                                </tr>
                                <tr>
                                    <td>Jonathan</td>
                                    <td>R$ 1.22</td>
                                    <td class="orange-text accent-4"><i class="material-icons left">warning</i>Pending</p></td>
                                </tr>
                                <tr>
                                    <td>Shannon</td>
                                    <td>R$ 1.22</td>
                                    <td class="green-text"><i class="material-icons left">done</i>Registered</p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><?php echo __('Gateway Available') ?></span>
                        <table class="bordered responsive-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Iugu</td>
                                    <td>Active</td>
                                    <td class="green-text accent-4"><i class="material-icons left green-text">arrow_upward</i>R$ 0.87</td>
                                </tr>
                                <tr>
                                    <td>PagSeguro</td>
                                    <td>Active</td>
                                    <td class="green-text accent-4"><i class="material-icons left green-text">arrow_upward</i>R$ 3.76</td>
                                </tr>
                                <tr>
                                    <td>PayPal</td>
                                    <td>Inative</td>
                                    <td class="red-text accent-4"><i class="material-icons left red-text">arrow_downward</i>R$ 7.00</td>
                                </tr>
                                <tr>
                                    <td>MasterCard</td>
                                    <td>Active</td>
                                    <td class="green-text accent-4"><i class="material-icons left green-text">arrow_upward</i>R$ 9.99</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->Html->script('Libs/countUp/countUp.min.js') ?>
<?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js') ?>
<?php echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js') ?>
<script>
    var lineChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                    label: 'Active',
                    borderColor: '#283593',
                    backgroundColor: '#283593',
                    fill: false,
                    data: [12, 19, 3, 5, 2, 3, 10],
                    yAxisID: 'y-axis-1',
            }, {
                    label: 'Expenses',
                    borderColor: '#ff3d00',
                    backgroundColor: '#ff3d00',
                    fill: false,
                    data: [1, 29, 3, 10, 17, 13, 10],
                    yAxisID: 'y-axis-2'
            }]
    };
    
    
    var barChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                        label: 'Expenses',
                        borderColor: '#f50057',
                        backgroundColor: '#f50057',
                        borderWidth: 1,
                        data: [20, 300, 123, 43, 99, 231, 100]
                    },{
                        label: 'Actives',
                        borderColor: '#283593',
                        backgroundColor: '#283593',
                        borderWidth: 1,
                        data: [20, 300, 123, 43, 99, 231, 131]
                    }]

    };
    
    

    var ctx = document.getElementById('canvas').getContext('2d');
    window.myLine = Chart.Line(ctx, {
            data: lineChartData,
            options: {
                responsive: true,
                legend: {
                        position: 'bottom',
                },
                scales: {
                    yAxes: [
                        { type: 'linear', display: true, position: 'left', id: 'y-axis-1' }, 
                        { type: 'linear', display: true, position: 'right', id: 'y-axis-2'}
                    ],
                }
            }
    });
    
    
    var ctx = document.getElementById('chart-access').getContext('2d');
    window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                    responsive: true,
                    legend: {
                            position: 'bottom',
                    },
            }
    });

$(document).ready(function(){
    
    var options = {
      useEasing: true,
      useGrouping: true,
      separator: ',',
      decimal: '.',
    };
    
    var textBox0 = $('#count-box0').text();
    var textBox1 = $('#count-box1').text();
    var textBox2 = $('#count-box2').text();
                   $('#count-box0, #count-box1, #count-box2').text('0.00');
    
    setTimeout(function(){
        var box0 = new CountUp('count-box0', 0, textBox0, 2, 2.5, options).start();
        var box1 = new CountUp('count-box1', 0, textBox1, 2, 2.5, options).start();
        var box2 = new CountUp('count-box2', 0, textBox2, 2, 2.5, options).start();
    }, 1000);
});
</script>