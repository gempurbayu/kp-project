@include('partials._head')
    <body>
    @include('partials._nav')

        <div class="container">
            
        @yield('content')
        
        @include('partials._footer')
        </div>
        @include('partials.javascript')
    </body>
</html>
