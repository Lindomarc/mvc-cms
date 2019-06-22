<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Dashboard v.2</title>

    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/assets/admin/css/animate.css" rel="stylesheet">
    <link href="/assets/admin/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            {% include 'Admin/Elements/navbar.ctp' %}
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">

                        {% include 'Admin/Elements/navbar-header.ctp' %}

                    </div>

                    {% include 'Admin/Elements/navbar-links.ctp' %}

                </nav>
            </div>
            <div class="wrapper wrapper-content">

                {% include 'Admin/Elements/content.ctp' %}

            </div>
            <div class="footer">

                {% include 'Admin/Elements/footer.ctp' %}

            </div>
        </div>
        <div id="right-sidebar">

            {% include 'Admin/Elements/right-sidebar.ctp' %}

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/assets/admin/js/jquery-3.1.1.min.js"></script>
    <script src="/assets/admin/js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/assets/admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="/assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/assets/admin/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/assets/admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/assets/admin/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="/assets/admin/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="/assets/admin/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="/assets/admin/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/assets/admin/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/assets/admin/js/inspinia.js"></script>
    <script src="/assets/admin/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/assets/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="/assets/admin/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="/assets/admin/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="/assets/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/assets/admin/js/demo/sparkline-demo.js"></script>

</body>

</html>