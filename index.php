<?php
include('common_head.php');
?>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Start HTML document-->
<!DOCTYPE html>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--HTML-->
<html lang="en">

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Head-->


<!-- Mirrored from designlayout.xyz/MaterialMe/html/color1/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jul 2017 05:27:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicon icon-->
    <link href="themes/favicon.png" type="image/png" rel="icon">
    <!--Browser navbar color for mobile-->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1a54de">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1a54de">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1a54de">
    <!--Page title-->
    <title>Dashboard - MaterialMe</title>
    <!-- CSS  -->
    <!--google material design icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css" rel="stylesheet" />
    <!--materializecss css-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" />
    <!--chartist-->
    <link href="plugins/chartist/dist/chartist.min.css" type="text/css" rel="stylesheet" />
    <!--morris.js-->
    <link href="plugins/morris.js/morris.css" type="text/css" rel="stylesheet" />
    <!--Custom css-->
    <link href="css/app-style.css" type="text/css" rel="stylesheet" />
    <!--page theme css-->
    <link href="themes/app-theme.css" type="text/css" rel="stylesheet" />
</head>
<!-- End head-->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--body-->

<body>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- pre page loader-->
    <div id="pre-page-loader">
        <div id="pre-page-loader-center">
            <div id="pre-page-loader-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
                <div class="object" id="object_six"></div>
                <div class="object" id="object_seven"></div>
                <div class="object" id="object_eight"></div>
                <div class="object" id="object_big"></div>
            </div>
        </div>
    </div>
    <!--End pre page loader-->
    <!--Navbar-->
    <?php include('navigation.php');?>
    <!--End navbar-->
    <!--Left sidebar-->
    <?php include('sidebar.php');?>
    <!--End left sidebar-->
    <!--Page Body-->
    <main>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--Page body content-->
        <div class="section me-page-body">
            <!--Dashboard analytics-->
            <div class="row center m-b-no">
                <div class="col s12 m6 l3 me-sl">
                    <div class="card">
                        <div class="card-content dash-nav-box">
                            <span class="card-title dash-nav-title">Total Visitors</span>
                            <p class="dash-nav-body"><i class="material-icons text-teal">supervisor_account</i><span>4585</span></p>
                            <p class="dash-nav-footer">100 From Last 20 Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 me-sl">
                    <div class="card">
                        <div class="card-content dash-nav-box">
                            <span class="card-title dash-nav-title">Total Registrations</span>
                            <p class="dash-nav-body"><i class="material-icons text-green">group_work</i><span>800</span></p>
                            <p class="dash-nav-footer">10 From Last 20 Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 me-sl">
                    <div class="card">
                        <div class="card-content dash-nav-box">
                            <span class="card-title dash-nav-title">Total Orders</span>
                            <p class="dash-nav-body"><i class="material-icons text-deep-purple">shopping_cart</i><span>45</span></p>
                            <p class="dash-nav-footer">10 From Last 20 Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 me-sl">
                    <div class="card">
                        <div class="card-content dash-nav-box">
                            <span class="card-title dash-nav-title">Total Earnings</span>
                            <p class="dash-nav-body"><i class="material-icons text-pink">monetization_on</i><span>5000</span></p>
                            <p class="dash-nav-footer">100 From Last 20 Hours</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End dashboard analytics-->

            <!--First graph section-->
            <div class="row m-b-no">
                <div class="col s12 m12 l6" style="height:400px">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title dark4">Total Visitors</span>
                            <div class="ct-chart ct-golden-section" id="chartist-example1" style="height:280px"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6" style="height:400px">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title dark4">Total Registrations</span>
                            <div class="ct-chart ct-golden-section" id="chartist-example2" style="height:280px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End first graph section-->

            <!--Second graph section-->
            <div class="row m-b-no">
                <div class="col s12 m12 l6" style="height:400px">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title dark4">Total View</span>
                            <div class="ct-chart ct-golden-section" id="chartist-example3" style="height:280px"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title dark4">Total Clicks</span>
                            <div id="morris-example4" style="height:280px"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--End second graph section-->

            <!--Recent registrations table-->
            <div class="row m-b-no">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title dark4">Recent Registrations</span>
                            <table class="responsive-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>IP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Johan doe</td>
                                        <td>example@gmail.com</td>
                                        <td>India</td>
                                        <td>192.168.1.1</td>
                                    </tr>
                                    <tr>
                                        <td>Johan doe1</td>
                                        <td>example1@gmail.com</td>
                                        <td>United Kingdom</td>
                                        <td>192.168.1.2</td>
                                    </tr>
                                    <tr>
                                        <td>Johan doe2</td>
                                        <td>example2@gmail.com</td>
                                        <td>France</td>
                                        <td>192.168.1.3</td>
                                    </tr>
                                    <tr>
                                        <td>Johan doe3</td>
                                        <td>example3@gmail.com</td>
                                        <td>India</td>
                                        <td>192.168.1.4</td>
                                    </tr>
                                    <tr>
                                        <td>Johan doe4</td>
                                        <td>example@gmail.com</td>
                                        <td>Russia</td>
                                        <td>192.168.1.5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end recent registrations table-->
        </div>
        <!--End page body content-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </main>
    <!--End page body-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--Footer-->
    <footer class="page-footer white" id="me-footer">
        <div class="footer-copyright">
            <div class="left copyright-text">
                &copy; MaterialMe
            </div>
            <div class="right resources-box">
                <ul>
                    <li><a href="#">Terms of Ser.</a></li>
                    <li><a href="#">SLA</a></li>
                    <li><a href="#">Pri. &amp; terms</a></li>
                    <li id="scroll-top-dash"><i class="material-icons">arrow_upward</i></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--End footer-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--  Scripts-->

    <!-- Jquery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Materializecss js -->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--chartist-->
    <script type="text/javascript" src="plugins/chartist/dist/chartist.min.js"></script>
    <!--morris chart-->
    <script type="text/javascript" src="plugins/morris.js/morris.min.js"></script>
    <script type="text/javascript" src="plugins/morris.js/raphael.min.js"></script>
    <!-- Custom Js -->
    <script type="text/javascript" src="js/init.js"></script>
    <!--Chart demo-->
    <script type="text/javascript">
        /* line chart */
        new Chartist.Line('#chartist-example1', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            series: [
                [12, 9, 7, 8, 5],
                [2, 1, 3, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: true,
            chartPadding: {
                right: 40
            }
        });

        /* Bar chart */
        var chartistBarData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            series: [
                [5, 4, 3, 7, 5, 10, 3],
                [3, 2, 9, 5, 4, 6, 4]
            ]
        };

        var chartistBarDataOptions = {
            seriesBarDistance: 10
        };

        var chartistBarResponsiveOptions = [
            ['screen and (max-width: 640px)', {
                seriesBarDistance: 5,
                axisX: {
                    labelInterpolationFnc: function(value) {
                        return value[0];
                    }
                }
            }]
        ];
        new Chartist.Bar('#chartist-example2', chartistBarData, chartistBarDataOptions, chartistBarResponsiveOptions);

        /* Pie chart */
        var piedata = {
            series: [5, 3, 4]
        };

        var sum = function(a, b) {
            return a + b
        };

        new Chartist.Pie('#chartist-example3', piedata, {
            labelInterpolationFnc: function(value) {
                return Math.round(value / piedata.series.reduce(sum) * 100) + '%';
            }
        });

        /* Donut chart */
        Morris.Donut({
            element: 'morris-example4',
            data: [{
                label: "Download Sales",
                value: 12
            }, {
                label: "In-Store Sales",
                value: 30
            }, {
                label: "Mail-Order Sales",
                value: 20
            }],
            resize: true,
            colors: ['#d70206', '#f05b4f', '#f4c63d']
        });
    </script>

    <!--End scripts-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
</body>
<!--End body--></html>
<!--End HTML-->
<!-- //////////////////////////////////////////////////////////////////////////// -->