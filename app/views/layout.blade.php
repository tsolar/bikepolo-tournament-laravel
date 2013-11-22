<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/font-awesome.min.css') }}
        {{ HTML::style('css/bpt.css') }}

        <!--[if IE 7]>
        {{ HTML::style('css/font-awesome-ie7.min.css') }}
        <![endif]-->
        {{ HTML::style('css/bootstrap-theme.min.css') }}
        {{ HTML::style('css/select2.css') }}
        {{ HTML::style('css/default.css') }}

        {{ HTML::script('js/jquery.form.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        {{ HTML::script('html5shiv') }}
        {{ HTML::script('respond.min') }}
        <![endif]-->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <p>Hello world! This is HTML5 Boilerplate.</p>

        <div class="loading">
            <p>
                <i class="icon-spinner icon-spin"></i>&nbsp;
                <?php echo trans('Loading...'); ?>
            </p>
        </div>
        <!-- Wrap all page content here -->
        <div id="wrap">

            @include('main_menu')

            <!-- Begin page content -->
            <div class="container">
                <div id="header" class="page-header hide">
                    <h1>
                        HEADER
                        <?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?>
                    </h1>
                </div>

                <div id="content" class="row">
                    <?php // echo $this->Session->flash(); ?>
                    <?php // echo $this->Session->flash('auth'); ?>
                    <?php //echo $this->fetch('content'); ?>
                    @if(Session::has('success'))
                    <div class="alert-box success">
                        <h2>{{ Session::get('success') }}</h2>
                    </div>
                    @endif
                    @if(Session::has('error'))
                    <div class="alert-box error">
                        <h2>{{ Session::get('error') }}</h2>
                    </div>
                    @endif

                    @yield('content')
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="container">
                footer!
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        {{ HTML::script('js/select2.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/holder.js') }}
        {{ HTML::script('js/Placeholders.min.js') }}

        <script>
            $(function() {
                $('td.actions a').on('click', function() {
                    //$('.loading').css('top', $(document).scrollTop()).show();
                });
                $('button[type="submit"]').on('click', function() {
                    //$('.loading').css('top', $(document).scrollTop()).show();
                });
                $('a.show-loading').on('click', function() {
                    $('.loading').css('top', $(document).scrollTop()).show();
                });

                $('select').select2().removeAttr('required');
                $('.select2-container').removeClass('form-control');
                $('input[type="file"]').removeClass('form-control');
                $('table').addClass('table');
            })

            $(document).ready(function() {
                $('.loading').fadeOut();
            });
        </script>
        <?php //echo $this->element('sql_dump'); ?>


        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function() {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X');
            ga('send', 'pageview');
        </script>

        @yield('script')
    </body>
</html>
