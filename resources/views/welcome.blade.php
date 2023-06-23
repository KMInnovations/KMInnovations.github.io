@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Mark's Measurements</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Business Growth</span>
                    <span class="info-box-number">
                        21
                    <small>%</small>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Customers</span>
                    <span class="info-box-number">12,465</span>
                </div>
            </div>
        </div>

        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Sales Members</span>
                <span class="info-box-number">760</span>
            </div>
        </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">New Projects</span>
                        <span class="info-box-number">2</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
            <div id="container_1"></div>
            <style>
            </style>
            <script>
                Highcharts.chart('container_1', {

                title: {
                    text: 'Businesses at a glance',
                    align: 'left'
                },

                subtitle: {
                    text: 'General revenue for Trailing Ten Months',
                    align: 'left'
                },

                yAxis: {
                    title: {
                        text: 'REVENUE'
                    }
                },

                xAxis: {
                    accessibility: {
                        rangeDescription: 'Range: 2014 to 2024'
                    }
                },

                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },

                plotOptions: {
                    series: {
                        label: {
                            connectorAllowed: false
                        },
                        pointStart: 2014
                    }
                },

                series: [{
                    name: 'Real Estate',
                    data: [43934, 48656, 65165, 81827, 112143, 142383,
                        171533, 165174, 155157, 161454, 154610]
                }, {
                    name: 'Excavating',
                    data: [24916, 37941, 29742, 29851, 32490, 30282,
                        38121, 36885, 33726, 34243, 31050]
                }, {
                    name: 'CPA Firm',
                    data: [11744, 30000, 16005, 19771, 20185, 24377,
                        32147, 30912, 29243, 29213, 25663]
                }, {
                    name: 'Operations & Maintenance',
                    data: [null, null, null, null, null, null, null,
                        null, 11164, 11218, 10077]
                }, {
                    name: 'Other',
                    data: [21908, 5548, 8105, 11248, 8989, 11816, 18274,
                        17300, 13053, 11906, 10073]
                }],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

                });
            </script>
        </div>
        <div class="col-md-6">
        <div id="container_2"></div>
            <script>
                // Retrieved from https://www.ssb.no/jord-skog-jakt-og-fiskeri/jakt
                Highcharts.chart('container_2', {
                    chart: {
                        type: 'areaspline'
                    },
                    title: {
                        text: 'Expense Crossover',
                        align: 'left'
                    },
                    subtitle: {
                        text: 'Points of overall Balance',
                        align: 'left'
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'left',
                        verticalAlign: 'top',
                        x: 120,
                        y: 70,
                        floating: true,
                        borderWidth: 1,
                        backgroundColor:
                            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
                    },
                    xAxis: {
                        plotBands: [{ // Highlight the two last years
                            from: 2021,
                            to: 2023,
                            color: 'rgba(68, 170, 213, .2)'
                        }]
                    },
                    yAxis: {
                        title: {
                            text: 'Quantity'
                        }
                    },
                    tooltip: {
                        shared: true,
                        headerFormat: '<b>Looking at {point.x}</b><br>'
                    },
                    credits: {
                        enabled: false
                    },
                    plotOptions: {
                        series: {
                            pointStart: 2010
                        },
                        areaspline: {
                            fillOpacity: 0.5
                        }
                    },
                    series: [{
                        name: 'Expenses',
                        data:
                            [
                                38000,
                                37300,
                                37892,
                                38564,
                                36770,
                                36026,
                                34978,
                                35657,
                                35620,
                                35971,
                                36409,
                                36435,
                                34643,
                                34956,
                                33199,
                                31136,
                                30835,
                                31611,
                                30666,
                                30319,
                                31766
                            ]
                    }, {
                        name: 'Profit',
                        data:
                            [
                                22534,
                                23599,
                                24533,
                                25195,
                                25896,
                                27635,
                                29173,
                                32646,
                                35686,
                                37709,
                                39143,
                                36829,
                                35031,
                                36202,
                                35140,
                                33718,
                                37773,
                                42556,
                                43820,
                                46445,
                                50048
                            ]
                    }]
                });

            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders This month</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Retention Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>New Customers YTD</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin.css"> -->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop