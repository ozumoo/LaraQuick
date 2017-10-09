<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Dashboard - Ace Admin</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css')}}" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css')}}" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="{{ asset('assets/css/ace-ie.min.css')}}" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="{{ asset('assets/js/ace-extra.min.js') }} "></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('assets/js/respond.min.js') }}"') }} ></script>
        <![endif]-->
    </head>

    <body class="no-skin">
        <script type="text/javascript">
            try{ace.settings.loadState('main-container')}catch(e){}
        </script>
       {{--  header --}}
        @include('admin.layouts.header')
        <div class="main-container ace-save-state" id="main-container">

            {{-- sidebar --}}
            @include('admin.layouts.sidebar')


            <div class="main-content">
                <div class="main-content-inner">

                    <div class="page-content">
                        @include('admin.layouts.settings')
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                @yield('content')

                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
            @include('admin.layouts.footer')
        </div>
    </body>
</html>
