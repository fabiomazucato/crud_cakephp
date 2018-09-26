<html>
    <head>
        <meta charset="utf-8">
        <title>Bootstrap 3 Form Builder</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="/css/form-build/bootstrap.min.css" rel="stylesheet">
        <link href="/css/form-build/custom.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row clearfix">
                <!-- Components -->
                <div class="col-md-6">
                    <h2>Drag & Drop components</h2>
                    <hr>
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="formtabs">
                            <!-- Tab nav -->
                        </ul>
                        <form class="form-horizontal" id="components" role="form">
                            <fieldset>
                                <div class="tab-content">
                                    <!-- Tabs of snippets go here -->
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- / Components -->
                <!-- Building Form. -->
                <div class="col-md-6">
                    <div class="clearfix">
                        <h2>Your Form</h2>
                        <hr>
                        <div id="build">
                            <form id="target" class="form-horizontal">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- / Building Form. -->
            </div>
        </div> <!-- /container -->

        <script src="/js/form-build/main-built.js" ></script>
        <script data-main="/js/form-build/main-built" src="/js/form-build/require.js" ></script>
    </body>
</html>