<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('admin.layout.top')
</head>
<body>


        <!-- Left Panel -->  
            @include('admin.layout.sidebar')
        <!-- Left Panel -->

               


    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            @include('admin.layout.navbar')

        </header>
        
        <!-- /header -->
        <div class="container">
                
            @yield('content')
             
        </div>
       

    </div>

    
   <!-- @include('admin.layout.footer')-->

    
    @include('admin.layout.down')

</body>
</html>
