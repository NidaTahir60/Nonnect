
        @include('planning_portal.partials.style')

    </head>
    <body data-mobile-nav-style="classic">
        <div class="box-layout">
            <!-- start header -->
            @include('planning_portal.partials.header')
            <!-- end header -->
            <!-- start banner -->
            @yield('content')
            <!-- end sticky column -->

            @include('planning_portal.partials.footer')
        </div>
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>


        <!-- end scroll progress -->
        <!-- javascript libraries -->
        @include('planning_portal.partials.script')
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

