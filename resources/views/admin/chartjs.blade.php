<div id="app" class=" ">
    <section class="content-header">、
        <!-- breadcrumb start -->
        <ol class="breadcrumb" style="margin-right: 30px;">
            <li><a href="http://demo.laravel-admin.org"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
        <!-- breadcrumb end --></section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-info">
                    <h4>Chartjs</h4>
                    <a href="https://github.com/laravel-admin-extensions/chartjs" target="_blank">https://github.com/laravel-admin-extensions/chartjs</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bar chart</h3>
                        <div class="box-tools pull-right">
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="chartjs-size-monitor"
                             style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="bar" style="width: 649px; display: block; height: 323px;" width="1298" height="646"
                                class="chartjs-render-monitor"></canvas>
                    </div>
                    <!-- /.box-body -->
                </div>


            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Scatter chart</h3>
                        <div class="box-tools pull-right">
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="chartjs-size-monitor"
                             style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="scatter" style="width: 649px; display: block; height: 323px;" width="1298"
                                height="646" class="chartjs-render-monitor"></canvas>
                    </div>
                    <!-- /.box-body -->
                </div>


            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Line chart</h3>
                        <div class="box-tools pull-right">
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="chartjs-size-monitor"
                             style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="line" style="width: 649px; display: block; height: 323px;" width="1298" height="646"
                                class="chartjs-render-monitor"></canvas>
                    </div>
                    <!-- /.box-body -->
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Doughnut chart</h3>
                        <div class="box-tools pull-right">
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="chartjs-size-monitor"
                             style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="doughnut" style="width: 649px; display: block; height: 323px;" width="1298"
                                height="646" class="chartjs-render-monitor"></canvas>
                    </div>
                    <!-- /.box-body -->
                </div>


            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart.js Combo Bar Line Chart</h3>
                        <div class="box-tools pull-right">
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="chartjs-size-monitor"
                             style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="bar-line" style="width: 649px; display: block; height: 323px;" width="1298"
                                height="646" class="chartjs-render-monitor"></canvas>
                    </div>
                    <!-- /.box-body -->
                </div>


            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chart.js Line Chart - Stacked Area</h3>
                        <div class="box-tools pull-right">
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="chartjs-size-monitor"
                             style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                 style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="line-stacked" style="width: 649px; display: block; height: 323px;" width="1298"
                                height="646" class="chartjs-render-monitor"></canvas>
                    </div>
                    <!-- /.box-body -->
                </div>


            </div>
        </div>

    </section>
</div>
<div class="modal" tabindex="-1" role="dialog" id="app-admin-actions-feedback">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="title" name="title" value="" class="form-control title action"
                               placeholder="输入 Title" required="1">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" value="" class="form-control email action"
                               placeholder="输入 Email">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control content action" rows="5"
                                  placeholder="输入 Content"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Created at</label>
                        <input style="width: 100%" type="text" id="created_at" name="created_at" value=""
                               class="form-control created_at action" placeholder="输入 Created at">
                    </div>
                    <div class="form-group">
                        <label>Count</label>
                        <input style="width: 200px; text-align: right;" type="text" id="count" name="count" value=""
                               class="form-control count action" placeholder="输入 Count">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal" tabindex="-1" role="dialog" id="app-admin-actions-system">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <h4 class="modal-title">系统设置</h4>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label>网站名称</label>
                        <input type="text" id="name" name="name" value="" class="form-control name action"
                               placeholder="输入 网站名称">
                    </div>
                    <div class="form-group">
                        <label>网站介绍</label>
                        <textarea name="desc" class="form-control desc action" rows="5"
                                  placeholder="输入 网站介绍"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    $(function () {

        function randomScalingFactor() {
            return Math.floor(Math.random() * 100)
        }

        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };

        var barChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Dataset 1',
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        var ctx = document.getElementById('bar').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Bar Chart'
                }
            }
        });
    });
</script>
<script>

</script>
<script>
    $(function () {
        function randomScalingFactor() {
            return Math.floor(Math.random() * 100)
        }

        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };

        var ctx = document.getElementById("scatter").getContext('2d');
        var scatterChart = new Chart(ctx, {
            type: 'scatter',
            data: {
                datasets: [{
                    label: 'My First dataset',
                    borderColor: window.chartColors.red,
                    data: [{
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }]
                }, {
                    label: 'My Second dataset',
                    borderColor: window.chartColors.blue,
                    data: [{
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }, {
                        x: randomScalingFactor(),
                        y: randomScalingFactor(),
                    }]
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        type: 'linear',
                        position: 'bottom'
                    }]
                }
            }
        });
    });
</script>
<script>

</script>
<script>
    $(function () {

        function randomScalingFactor() {
            return Math.floor(Math.random() * 100)
        }

        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };

        var config = {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                    fill: false,
                }, {
                    label: 'My Second dataset',
                    fill: false,
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Chart.js Line Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

        var ctx = document.getElementById('line').getContext('2d');
        new Chart(ctx, config);
    });
</script>
<script>

</script>
<script>
    $(function () {

        function randomScalingFactor() {
            return Math.floor(Math.random() * 100)
        }

        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.orange,
                        window.chartColors.yellow,
                        window.chartColors.green,
                        window.chartColors.blue,
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    'Red',
                    'Orange',
                    'Yellow',
                    'Green',
                    'Blue'
                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Doughnut Chart'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        };

        var ctx = document.getElementById('doughnut').getContext('2d');
        new Chart(ctx, config);
    });
</script>
<script>

</script>
<script>
    $(function () {

        function randomScalingFactor() {
            return Math.floor(Math.random() * 100)
        }

        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };

        var chartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                type: 'line',
                label: 'Dataset 1',
                borderColor: window.chartColors.blue,
                borderWidth: 2,
                fill: false,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                type: 'bar',
                label: 'Dataset 2',
                backgroundColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                borderColor: 'white',
                borderWidth: 2
            }, {
                type: 'bar',
                label: 'Dataset 3',
                backgroundColor: window.chartColors.green,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        var ctx = document.getElementById('bar-line').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Chart.js Combo Bar Line Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: true
                }
            }
        });
    });
</script>
<script>

</script>
<script>
    $(function () {

        function randomScalingFactor() {
            return Math.floor(Math.random() * 100)
        }

        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };

        var config = {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    borderColor: window.chartColors.red,
                    backgroundColor: window.chartColors.red,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                }, {
                    label: 'My Second dataset',
                    borderColor: window.chartColors.blue,
                    backgroundColor: window.chartColors.blue,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                }, {
                    label: 'My Third dataset',
                    borderColor: window.chartColors.green,
                    backgroundColor: window.chartColors.green,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                }, {
                    label: 'My Third dataset',
                    borderColor: window.chartColors.yellow,
                    backgroundColor: window.chartColors.yellow,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Chart.js Line Chart - Stacked Area'
                },
                tooltips: {
                    mode: 'index',
                },
                hover: {
                    mode: 'index'
                },
                scales: {
                    xAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        stacked: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

        var ctx = document.getElementById('line-stacked').getContext('2d');
        new Chart(ctx, config);
    });
</script>
<script>

</script>
<script data-exec-on-popstate="">

    $(function () {
        $('.auto-refresh-trigger').off('click').on('click', function () {

            if (typeof $.admin.autoRefresh !== 'undefined') {
                window.clearInterval($.admin.autoRefresh);
                delete ($.admin.autoRefresh)

                $(".auto-refresh .interval-text").html('');
            }

            $.admin.autoRefresh = window.setInterval(function () {
                $.admin.reload();
                $.admin.toastr.success('刷新成功 !', '', {positionClass: "toast-bottom-right"});
            }, $(this).data('interval') * 1000);

            $(".auto-refresh .interval-text").html($(this).html());

            $(".auto-refresh i").removeClass("fa-play").addClass("fa-pause refresh-pause");
        });

        $('.auto-refresh').off('click').on('click', '.refresh-pause', function (e) {
            e.preventDefault();

            $(".auto-refresh i").addClass("fa-play").removeClass("fa-pause refresh-pause");

            if (typeof $.admin.autoRefresh !== 'undefined') {
                window.clearInterval($.admin.autoRefresh);
                delete ($.admin.autoRefresh)

                $(".auto-refresh .interval-text").html('');
            }
        });

        var actionResolver = function (response) {
            if (typeof response !== 'object') {
                return $.admin.swal({type: 'error', title: 'Oops!'});
            }

            var then = function (then) {
                if (then.action == 'refresh') {
                    $.admin.reload();
                }

                if (then.action == 'download') {
                    window.open(then.value, '_blank');
                }

                if (then.action == 'redirect') {
                    $.admin.redirect(then.value);
                }
            };

            if (typeof response.swal === 'object') {
                var alert = $.admin.swal(response.swal);

                if (response.then) {
                    then(response.then);
                }
            }

            if (typeof response.toastr === 'object') {
                $.admin.toastr[response.toastr.type](response.toastr.content, '', response.toastr.options);

                if (response.then) {
                    then(response.then);
                }
            }
        };

        var actionCatcher = function (request) {
            if (request && typeof request.responseJSON === 'object') {
                $.admin.toastr.error(request.responseJSON.message, '', {
                    positionClass: "toast-bottom-center",
                    timeOut: 10000
                }).css("width", "500px")
            }
        };

        (function ($) {
            $('.clear-cache').off('click').on('click', function () {
                var data = $(this).data();
                Object.assign(data, []);

                var process = $.admin.swal({
                    "type": "question",
                    "showCancelButton": true,
                    "showLoaderOnConfirm": true,
                    "confirmButtonText": "\u63d0\u4ea4",
                    "cancelButtonText": "\u53d6\u6d88",
                    "title": "\u786e\u8ba4\u6e05\u9664\u7f13\u5b58",
                    "text": "",
                    preConfirm: function (input) {
                        return new Promise(function (resolve, reject) {
                            Object.assign(data, {
                                _token: $.admin.token,
                                _action: 'App_Admin_Actions_ClearCache',
                                _input: input,
                            });

                            $.ajax({
                                method: 'POST',
                                url: 'https://demo.laravel-admin.org/_handle_action_',
                                data: data,
                                success: function (data) {
                                    resolve(data);
                                },
                                error: function (request) {
                                    reject(request);
                                }
                            });
                        });
                    }
                }).then(function (result) {
                    if (typeof result.dismiss !== 'undefined') {
                        return Promise.reject();
                    }

                    if (typeof result.status === "boolean") {
                        var response = result;
                    } else {
                        var response = result.value;
                    }

                    return response;

                });
                process.then(actionResolver).catch(actionCatcher);
            });
        })(jQuery);

        $('.email.action').inputmask({"alias": "email"});
        $('.created_at.action').parent().datetimepicker({
            "format": "YYYY-MM-DD HH:mm:ss",
            "locale": "zh-CN",
            "allowInputToggle": true
        });
        $('.count.action').inputmask({"alias": "integer"});

        (function ($) {
            $('.feedback').off('click').on('click', function () {
                var data = $(this).data();
                var modalId = $(this).attr('modal');
                Object.assign(data, []);

                $('#' + modalId).modal('show');
                $('#' + modalId + ' form').off('submit').on('submit', function (e) {
                    e.preventDefault();
                    var form = this;
                    var process = new Promise(function (resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_Feedback',
                        });

                        var formData = new FormData(form);
                        for (var key in data) {
                            formData.append(key, data[key]);
                        }

                        $.ajax({
                            method: 'POST',
                            url: 'https://demo.laravel-admin.org/_handle_action_',
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                resolve(data);
                                if (data.status === true) {
                                    $('#' + modalId).modal('hide');
                                }
                            },
                            error: function (request) {
                                reject(request);
                            }
                        });
                    });
                    process.then(actionResolver).catch(actionCatcher);
                });
            });
        })(jQuery);


        (function ($) {
            $('.system').off('click').on('click', function () {
                var data = $(this).data();
                var modalId = $(this).attr('modal');
                Object.assign(data, []);

                $('#' + modalId).modal('show');
                $('#' + modalId + ' form').off('submit').on('submit', function (e) {
                    e.preventDefault();
                    var form = this;
                    var process = new Promise(function (resolve, reject) {
                        Object.assign(data, {
                            _token: $.admin.token,
                            _action: 'App_Admin_Actions_System',
                        });

                        var formData = new FormData(form);
                        for (var key in data) {
                            formData.append(key, data[key]);
                        }

                        $.ajax({
                            method: 'POST',
                            url: 'https://demo.laravel-admin.org/_handle_action_',
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                resolve(data);
                                if (data.status === true) {
                                    $('#' + modalId).modal('hide');
                                }
                            },
                            error: function (request) {
                                reject(request);
                            }
                        });
                    });
                    process.then(actionResolver).catch(actionCatcher);
                });
            });
        })(jQuery);

        function launchFullscreen(element) {
            if (element.requestFullscreen) {
                element.requestFullscreen();
            } else if (element.mozRequestFullScreen) {
                element.mozRequestFullScreen();
            } else if (element.msRequestFullscreen) {
                element.msRequestFullscreen();
            } else if (element.webkitRequestFullscreen) {
                element.webkitRequestFullScreen();
            }
        }

        function exitFullscreen() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            }
        }

        $('.nav-fullscreen').click(function () {
            if (document.fullscreenElement) {
                exitFullscreen();
            } else {
                launchFullscreen(document.body)
            }
        });

        $('.container-refresh').off('click').on('click', function () {
            $.admin.reload();
            $.admin.toastr.success('刷新成功 !', '', {positionClass: "toast-top-center"});
        });
    });
</script>

<canvas id="myChart" width="400" height="400"></canvas>
<script>
    $(function () {
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    });
</script>
