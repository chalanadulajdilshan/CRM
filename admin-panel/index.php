<?php
include '../class/include.php';
include './auth.php';
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- <body data-layout="horizontal" data-topbar="colored"> -->
        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php
            include './header.php';
            ?>

            <!-- Left Sidebar End -->
 <div class="main-content">
            <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Files</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Files</a></li>
                                            <li class="breadcrumb-item active">All Files</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2" style="position: relative;">
                                            <div id="total-revenue-chart" style="min-height: 40px;">
                                                <div id="apexchartszdi6ym3t" class="apexcharts-canvas apexchartszdi6ym3t apexcharts-theme-light" style="width: 70px; height: 40px;"><svg id="SvgjsSvg1271" width="70" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <g id="SvgjsG1273" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs1272">
                                                                <linearGradient id="SvgjsLinearGradient1277" x1="0" y1="0" x2="0" y2="1">
                                                                    <stop id="SvgjsStop1278" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                                    <stop id="SvgjsStop1279" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                                    <stop id="SvgjsStop1280" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                                </linearGradient>
                                                                <clipPath id="gridRectMaskzdi6ym3t">
                                                                    <rect id="SvgjsRect1283" width="74" height="40" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMaskzdi6ym3t">
                                                                    <rect id="SvgjsRect1284" width="74" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <line id="SvgjsLine1282" x1="0" y1="0" x2="0" y2="40" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="url(#SvgjsLinearGradient1277)" filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                            <g id="SvgjsG1299" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                <g id="SvgjsG1300" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g>
                                                            </g>
                                                            <g id="SvgjsG1302" class="apexcharts-grid">
                                                                <g id="SvgjsG1303" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                    <line id="SvgjsLine1305" x1="0" y1="0" x2="70" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1306" x1="0" y1="8" x2="70" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1307" x1="0" y1="16" x2="70" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1308" x1="0" y1="24" x2="70" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1309" x1="0" y1="32" x2="70" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1310" x1="0" y1="40" x2="70" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG1304" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                <line id="SvgjsLine1312" x1="0" y1="40" x2="70" y2="40" stroke="transparent" stroke-dasharray="0"></line>
                                                                <line id="SvgjsLine1311" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line>
                                                            </g>
                                                            <g id="SvgjsG1285" class="apexcharts-bar-series apexcharts-plot-series">
                                                                <g id="SvgjsG1286" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0">
                                                                    <path id="SvgjsPath1288" d="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" pathFrom="M 1.5909090909090908 40L 1.5909090909090908 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 1.5909090909090908 40" cy="30" cx="7.954545454545454" j="0" val="25" barHeight="10" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1289" d="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" pathFrom="M 7.954545454545454 40L 7.954545454545454 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 7.954545454545454 40" cy="13.600000000000001" cx="14.318181818181817" j="1" val="66" barHeight="26.4" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1290" d="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" pathFrom="M 14.318181818181817 40L 14.318181818181817 40L 17.5 40L 17.5 40L 17.5 40L 14.318181818181817 40" cy="23.6" cx="20.68181818181818" j="2" val="41" barHeight="16.4" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1291" d="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" pathFrom="M 20.68181818181818 40L 20.68181818181818 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 20.68181818181818 40" cy="4.399999999999999" cx="27.045454545454543" j="3" val="89" barHeight="35.6" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1292" d="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" pathFrom="M 27.045454545454543 40L 27.045454545454543 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 27.045454545454543 40" cy="14.8" cx="33.40909090909091" j="4" val="63" barHeight="25.2" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1293" d="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" pathFrom="M 33.40909090909091 40L 33.40909090909091 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 33.40909090909091 40" cy="30" cx="39.772727272727266" j="5" val="25" barHeight="10" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1294" d="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" pathFrom="M 39.772727272727266 40L 39.772727272727266 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 39.772727272727266 40" cy="22.4" cx="46.136363636363626" j="6" val="44" barHeight="17.6" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1295" d="M 46.136363636363626 40L 46.136363636363626 32L 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 46.136363636363626 40L 46.136363636363626 32L 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z" pathFrom="M 46.136363636363626 40L 46.136363636363626 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 46.136363636363626 40" cy="32" cx="52.499999999999986" j="7" val="20" barHeight="8" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1296" d="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" pathFrom="M 52.499999999999986 40L 52.499999999999986 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 52.499999999999986 40" cy="25.6" cx="58.863636363636346" j="8" val="36" barHeight="14.4" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1297" d="M 58.863636363636346 40L 58.863636363636346 24L 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 58.863636363636346 40L 58.863636363636346 24L 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z" pathFrom="M 58.863636363636346 40L 58.863636363636346 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 58.863636363636346 40" cy="24" cx="65.2272727272727" j="9" val="40" barHeight="16" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1298" d="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskzdi6ym3t)" pathTo="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" pathFrom="M 65.2272727272727 40L 65.2272727272727 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 65.2272727272727 40" cy="18.4" cx="71.59090909090907" j="10" val="54" barHeight="21.6" barWidth="3.1818181818181817"></path>
                                                                </g>
                                                                <g id="SvgjsG1287" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine1313" x1="0" y1="0" x2="70" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1314" x1="0" y1="0" x2="70" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG1315" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG1316" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG1317" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                        <rect id="SvgjsRect1281" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG1301" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG1274" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 71px; height: 41px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                                            <p class="text-muted mb-0">Total Students</p>
                                        </div>
                                        <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2" style="position: relative;">
                                            <div id="orders-chart" style="min-height: 46px;">
                                                <div id="apexchartslahwj8sz" class="apexcharts-canvas apexchartslahwj8sz apexcharts-theme-light" style="width: 45px; height: 46px;"><svg id="SvgjsSvg1318" width="45" height="46" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <g id="SvgjsG1320" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs1319">
                                                                <clipPath id="gridRectMasklahwj8sz">
                                                                    <rect id="SvgjsRect1322" width="51" height="47" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMasklahwj8sz">
                                                                    <rect id="SvgjsRect1323" width="49" height="49" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1324" class="apexcharts-radialbar">
                                                                <g id="SvgjsG1325">
                                                                    <g id="SvgjsG1326" class="apexcharts-tracks">
                                                                        <g id="SvgjsG1327" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                            <path id="apexcharts-radialbarTrack-0" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.258536585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"></path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG1329">
                                                                        <g id="SvgjsG1331" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath1332" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 7.886204749611055 27.248309913566267" fill="none" fill-opacity="0.85" stroke="rgba(52,195,143,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.390243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="252" data:value="70" index="0" j="0" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 7.886204749611055 27.248309913566267"></path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle1330" r="13.23658536585366" cx="22.5" cy="22.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1333" x1="0" y1="0" x2="45" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1334" x1="0" y1="0" x2="45" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1321" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 46px; height: 47px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                                            <p class="text-muted mb-0">Orders</p>
                                        </div>
                                        <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2" style="position: relative;">
                                            <div id="customers-chart" style="min-height: 46px;">
                                                <div id="apexcharts9pdo8ly8h" class="apexcharts-canvas apexcharts9pdo8ly8h apexcharts-theme-light" style="width: 45px; height: 46px;"><svg id="SvgjsSvg1335" width="45" height="46" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <g id="SvgjsG1337" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs1336">
                                                                <clipPath id="gridRectMask9pdo8ly8h">
                                                                    <rect id="SvgjsRect1339" width="51" height="47" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMask9pdo8ly8h">
                                                                    <rect id="SvgjsRect1340" width="49" height="49" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1341" class="apexcharts-radialbar">
                                                                <g id="SvgjsG1342">
                                                                    <g id="SvgjsG1343" class="apexcharts-tracks">
                                                                        <g id="SvgjsG1344" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                            <path id="apexcharts-radialbarTrack-0" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.258536585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"></path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG1346">
                                                                        <g id="SvgjsG1348" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                            <path id="SvgjsPath1349" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 17.751690086433737 37.11379525038895" fill="none" fill-opacity="0.85" stroke="rgba(91,115,232,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.390243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="198" data:value="55" index="0" j="0" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 17.751690086433737 37.11379525038895"></path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle1347" r="13.23658536585366" cx="22.5" cy="22.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1350" x1="0" y1="0" x2="45" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1351" x1="0" y1="0" x2="45" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1338" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 46px; height: 47px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                                            <p class="text-muted mb-0">Customers</p>
                                        </div>
                                        <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2" style="position: relative;">
                                            <div id="growth-chart" style="min-height: 40px;">
                                                <div id="apexchartsmdtt5z9kh" class="apexcharts-canvas apexchartsmdtt5z9kh apexcharts-theme-light" style="width: 70px; height: 40px;"><svg id="SvgjsSvg1352" width="70" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                        <g id="SvgjsG1354" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                            <defs id="SvgjsDefs1353">
                                                                <linearGradient id="SvgjsLinearGradient1358" x1="0" y1="0" x2="0" y2="1">
                                                                    <stop id="SvgjsStop1359" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                                    <stop id="SvgjsStop1360" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                                    <stop id="SvgjsStop1361" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                                </linearGradient>
                                                                <clipPath id="gridRectMaskmdtt5z9kh">
                                                                    <rect id="SvgjsRect1364" width="74" height="40" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMaskmdtt5z9kh">
                                                                    <rect id="SvgjsRect1365" width="74" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <line id="SvgjsLine1363" x1="0" y1="0" x2="0" y2="40" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="url(#SvgjsLinearGradient1358)" filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                            <g id="SvgjsG1380" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                                <g id="SvgjsG1381" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g>
                                                            </g>
                                                            <g id="SvgjsG1383" class="apexcharts-grid">
                                                                <g id="SvgjsG1384" class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                    <line id="SvgjsLine1386" x1="0" y1="0" x2="70" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1387" x1="0" y1="8" x2="70" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1388" x1="0" y1="16" x2="70" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1389" x1="0" y1="24" x2="70" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1390" x1="0" y1="32" x2="70" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                    <line id="SvgjsLine1391" x1="0" y1="40" x2="70" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                </g>
                                                                <g id="SvgjsG1385" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                                <line id="SvgjsLine1393" x1="0" y1="40" x2="70" y2="40" stroke="transparent" stroke-dasharray="0"></line>
                                                                <line id="SvgjsLine1392" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line>
                                                            </g>
                                                            <g id="SvgjsG1366" class="apexcharts-bar-series apexcharts-plot-series">
                                                                <g id="SvgjsG1367" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0">
                                                                    <path id="SvgjsPath1369" d="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" pathFrom="M 1.5909090909090908 40L 1.5909090909090908 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 1.5909090909090908 40" cy="30" cx="7.954545454545454" j="0" val="25" barHeight="10" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1370" d="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" pathFrom="M 7.954545454545454 40L 7.954545454545454 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 7.954545454545454 40" cy="13.600000000000001" cx="14.318181818181817" j="1" val="66" barHeight="26.4" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1371" d="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" pathFrom="M 14.318181818181817 40L 14.318181818181817 40L 17.5 40L 17.5 40L 17.5 40L 14.318181818181817 40" cy="23.6" cx="20.68181818181818" j="2" val="41" barHeight="16.4" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1372" d="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" pathFrom="M 20.68181818181818 40L 20.68181818181818 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 20.68181818181818 40" cy="4.399999999999999" cx="27.045454545454543" j="3" val="89" barHeight="35.6" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1373" d="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" pathFrom="M 27.045454545454543 40L 27.045454545454543 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 27.045454545454543 40" cy="14.8" cx="33.40909090909091" j="4" val="63" barHeight="25.2" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1374" d="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" pathFrom="M 33.40909090909091 40L 33.40909090909091 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 33.40909090909091 40" cy="30" cx="39.772727272727266" j="5" val="25" barHeight="10" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1375" d="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" pathFrom="M 39.772727272727266 40L 39.772727272727266 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 39.772727272727266 40" cy="22.4" cx="46.136363636363626" j="6" val="44" barHeight="17.6" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1376" d="M 46.136363636363626 40L 46.136363636363626 35.2L 49.318181818181806 35.2L 49.318181818181806 35.2L 49.318181818181806 40L 49.318181818181806 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 46.136363636363626 40L 46.136363636363626 35.2L 49.318181818181806 35.2L 49.318181818181806 35.2L 49.318181818181806 40L 49.318181818181806 40z" pathFrom="M 46.136363636363626 40L 46.136363636363626 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 46.136363636363626 40" cy="35.2" cx="52.499999999999986" j="7" val="12" barHeight="4.8" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1377" d="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" pathFrom="M 52.499999999999986 40L 52.499999999999986 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 52.499999999999986 40" cy="25.6" cx="58.863636363636346" j="8" val="36" barHeight="14.4" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1378" d="M 58.863636363636346 40L 58.863636363636346 36.4L 62.045454545454525 36.4L 62.045454545454525 36.4L 62.045454545454525 40L 62.045454545454525 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 58.863636363636346 40L 58.863636363636346 36.4L 62.045454545454525 36.4L 62.045454545454525 36.4L 62.045454545454525 40L 62.045454545454525 40z" pathFrom="M 58.863636363636346 40L 58.863636363636346 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 58.863636363636346 40" cy="36.4" cx="65.2272727272727" j="9" val="9" barHeight="3.6" barWidth="3.1818181818181817"></path>
                                                                    <path id="SvgjsPath1379" d="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmdtt5z9kh)" pathTo="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" pathFrom="M 65.2272727272727 40L 65.2272727272727 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 65.2272727272727 40" cy="18.4" cx="71.59090909090907" j="10" val="54" barHeight="21.6" barWidth="3.1818181818181817"></path>
                                                                </g>
                                                                <g id="SvgjsG1368" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                            </g>
                                                            <line id="SvgjsLine1394" x1="0" y1="0" x2="70" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1395" x1="0" y1="0" x2="70" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                            <g id="SvgjsG1396" class="apexcharts-yaxis-annotations"></g>
                                                            <g id="SvgjsG1397" class="apexcharts-xaxis-annotations"></g>
                                                            <g id="SvgjsG1398" class="apexcharts-point-annotations"></g>
                                                        </g>
                                                        <rect id="SvgjsRect1362" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                        <g id="SvgjsG1382" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                        <g id="SvgjsG1355" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                        <div class="apexcharts-yaxistooltip-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 71px; height: 41px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                                            <p class="text-muted mb-0">Growth</p>
                                        </div>
                                        <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        
                        
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Student Id</th>
                                                <th>Full Name</th>
                                                <th>Nic</th>
                                                <th>Phone Number</th>
                                                <th>Course Name</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>


                                         
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>

                    </div> <!-- container-fluid -->
                </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->




        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <script src="plugin/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="ajax/js/file.js" type="text/javascript"></script>
        <script src="ajax/js/status-update.js" type="text/javascript"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>