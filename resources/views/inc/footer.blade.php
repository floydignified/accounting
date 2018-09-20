<footer>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/donut.js')}}"></script>
        <script src="{{asset('js/redirect.js')}}"></script>

        <script src="{{asset('js/lib/chart-js/Chart.bundle.js')}}"></script>
        <script src="{{asset('js/dashboard.js')}}"></script>
        <script src="{{asset('js/widgets.js')}}"></script>
        <script src="{{asset('jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/lib/vector-map/jquery.vmap.js')}}"></script>
        <script src="{{asset('js/lib/vector-map/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
        <script src="{{asset('js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('js/lib/chart-js/Chart.bundle.js')}}"></script>
        <script src="{{asset('js/lib/chart-js/chartjs-init.js')}}"></script>

        <!-- Alert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        
        <!--  flot-chart js -->
        <script src="{{asset('js/lib/flot-chart/excanvas.min.js')}}"></script>
        <script src="{{asset('js/lib/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('js/lib/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('js/lib/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('js/lib/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('js/lib/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('js/lib/flot-chart/jquery.flot.crosshair.js')}}"></script>
        <script src="{{asset('js/lib/flot-chart/curvedLines.js')}}"></script>
        <script src="{{asset('js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('js/lib/flot-chart/flot-chart-init.js')}}"></script>
        <script>
                ( function ( $ ) {
                "use strict";

                jQuery( '#vmap' ).vectorMap( {
                        map: 'world_en',
                        backgroundColor: null,
                        color: '#ffffff',
                        hoverOpacity: 0.7,
                        selectedColor: '#1de9b6',
                        enableZoom: true,
                        showTooltip: true,
                        values: sample_data,
                        scaleColors: [ '#1de9b6', '#03a9f5' ],
                        normalizeFunction: 'polynomial'
                } );
                } )( jQuery );


        </script>
</footer>