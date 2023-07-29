
   @include('layouts.partial._header')


<body id="page-top">

    <div id="wrapper">
        @include('layouts.partial._sidebar')
    
        <div id="content-wrapper" class="d-flex flex column">

            <div id="content">
                @include('layouts.partial._topbar')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
           @include('layouts.partial._footer')
        </div>
        
    </div>
    @include('layouts.partial._logout-modal')
</body>
</html>
