<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->

	<head>

		<meta charset="utf-8" />
		<title>Inteligencia Productiva - @yield('title')</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="Sistema de Inteligencia Productiva MIPRO" name="description" />
		<meta content="Ministerio de Industrias y Productividad" name="author" />

		@section('head')
			<!-- ================== BEGIN BASE CSS STYLE ================== -->
			<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
			<link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
			<!-- ================== END BASE CSS STYLE ================== -->
		@show

		<!-- ================== BEGIN BASE CSS STYLE ================== -->
		@section('start_css')
			<link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
			<link href="{{ asset('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
			<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/theme/default.css') }}" rel="stylesheet" id="theme" />
            <link href="{{ asset('css/inteligencia.css') }}" rel="stylesheet" />
		@show
		<!-- ================== END BASE CSS STYLE ================== -->

		<!-- ================== BEGIN BASE JS ================== -->
		@section('start_js')
			<script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
		@show
		<!-- ================== END BASE JS ================== -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	</head>

	<body>

    <div id="page-container" class="fade">
			@include ('layouts.menu')
			@yield ('contenido')
			@include ('layouts.common_modals')
			@include ('layouts.footer')
    </div>

		@section('end_js')
			<!-- ================== BEGIN BASE JS ================== -->
			<script src="{{ asset('plugins/jquery/jquery-1.9.1.min.js') }}"></script>
			<script src="{{ asset('plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
			<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
			<!--[if lt IE 9]>
			  <script src="{{ asset('crossbrowserjs/html5shiv.js') }}"></script>
			  <script src="{{ asset('crossbrowserjs/respond.min.js') }}"></script>
			  <script src="{{ asset('crossbrowserjs/excanvas.min.js') }}"></script>
			<![endif]-->
			<script src="{{ asset('plugins/jquery-cookie/jquery.cookie.js') }}"></script>
			<script src="{{ asset('plugins/scrollMonitor/scrollMonitor.js') }}"></script>
			<!-- ================== END BASE JS ================== -->
			<script src="{{ asset('plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
		    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
		    <script src="{{ asset('plugins/DataTables/js/jquery.dataTables.js') }}"></script>
		    <script src="{{ asset('plugins/DataTables/js/dataTables.responsive.js') }}"></script>
		    <script src="{{ asset('js/table-manage-responsive.demo.min.js') }}"></script>
		    <script src="{{ asset('js/SelectBusqueda/selectsBusquedaAvanzada.js') }}"></script>
		    <script src="{{ asset('js/custom-mipro.js') }}"></script>
		    <script src="{{ asset('js/apps.js') }}"></script>
		    <script src="{{ asset('js/dashboard.js') }}"></script>

		@show

	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>

	<script type="text/javascript">
		
		function botonesRequeridos(){
			var sipoc =  document.getElementById('selectSipoc').value;
			var ambit = document.getElementById('selectAmbit').value;

			if( sipoc == 0 && ambit == 0){
				alert('Por favor, seleccione un Ámbito ó un Eslabón');
				return false;
			}
			if( sipoc > 0 || ambit > 0){
				return true;
			}
			
		}

	</script>

	@yield('init_scripts')

	</body>
</html>