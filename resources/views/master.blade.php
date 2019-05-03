<!DOCTYPE html>
<!-- 
Template Name: Conquer - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.3
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from www.keenthemes.com/preview/conquer/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 23 May 2014 03:00:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8"/>
<title>Rateinc Prueba | @yield('title')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/bootstrap-toastr/toastr.min.css')}}"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- INICIO ICONOS CLINICA-->
<link href="{{ asset('font_clinica/flaticon.css') }}" rel="stylesheet" type="text/css"/>
<!-- FIN ICONOCOS CLINICA-->

<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
@stack('css-head')
<style type="text/css">
	/*
    input, textarea, .mayusculas{
        text-transform:uppercase;
    }
*/
</style>
<!-- END PAGE LEVEL PLUGIN STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="{{ asset('assets/css/style-conquer.css') }} " rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/style.css') }} " rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/style-responsive.css') }} " rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/plugins.css') }} " rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/pages/tasks.css') }} " rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/themes/default.css') }} " rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset('assets/css/custom.css') }} " rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

<link rel="shortcut icon" href="favicon.html"/>
<style type="text/css" media="screen"> </style>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		{{-- 
		<a class="navbar-brand" href="index-2.html">
		<img src=" {{ asset('assets/img/logo.png') }}" alt="logo" class="img-responsive"/>
		</a>
		 --}}
		<!-- buscador
		<form class="search-form search-form-header" role="form" action="http://www.keenthemes.com/preview/conquer/index.html">
			<div class="input-icon right">
				<i class="fa fa-search"></i>
				<input type="text" class="form-control input-medium input-sm" name="query" placeholder="Search...">
			</div>
		</form>
		-->
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="{{ asset('assets/img/menu-toggler.png') }}" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			
			
			<!-- END TODO DROPDOWN -->
			<!-- linea de separacion "|"
			<li class="devider">
				 &nbsp;
			</li>
			-->
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<!--
				<img alt="" src="assets/img/avatar3_small.jpg"/>
				-->
                {{--
				@if(Auth::user()->tipo_usuario_id != 3)
                    <i class="fa fa-user" style="color: white !important;"><strong>{{ Auth::user()->name }}</strong> </i>
				@else
					<i class="fa fa-user" style="color: white !important;">{{ Auth::user()->name }}</i>
                    {{ Auth::user()->name }}
				@endif
                --}}

				<!--
				<span class="username">
					@if(Auth::check())
						{{ Auth::user()->name }}
					@else
						Sin Sesión
					@endif
				</span>
				-->
                @if (Auth::user())
                    <strong style="color:white;">{{ Auth::user()->name }}</strong>
                @else
                	<strong style="color:white;">Login o Registrarme</strong>
                @endif
				<i class="fa fa-angle-down" ></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						@if (!Auth::user())
						
							<a href="{{ url('/login') }}"><i class="fa fa-user"></i> Login</a>
							<a href="{{ url('/register') }}"><i class="fa fa-user"></i> Registrarme</a>
						
						@else
							<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			                    <i class="fa fa-key"></i> Log Out</a>

			                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
			                    {{ csrf_field() }}
			                </form>
			            @endif
					</li>
			</ul>
		</li>
		<!-- END USER LOGIN DROPDOWN -->
	</ul>
	<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<div class="clearfix">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				
				<li id="home" class="">
					<a id="home-a" href="{{ asset('/encuesta') }}">
						<i class="fa fa-check-square"></i>
						<span class="title">
							Encuesta
						</span>
					</a>
				</li>
				@if( Auth::user())
				<li id="informe" class="">
					<a id="informe-a" href="{{ asset('/informe') }}">
						<i class="fa fa-files-o"></i>
						<span class="title">
							Informe
						</span>
					</a>
				</li>
				@endif
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
</div>
<!-- END SIDEBAR -->
@yield('content')
<!-- BEGIN CONTENT -->

<!-- END CONTENT -->


</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
<div class="footer-inner">
	 {{ date('Y') }} &copy; Rateinc Prueba
</div>
<div class="footer-tools">
	<span class="go-top">
		<i class="fa fa-angle-up"></i>
	</span>
</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="{{ asset('assets/plugins/jquery-1.10.2.min.js') }} " type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>

<script src="{{asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-validation/dist/localization/messages_es.min.js')}}"></script>

<script src="{{asset('assets/plugins/bootstrap-toastr/toastr.min.js')}}"></script>
<script src="{{asset('assets/scripts/ui-toastr.js')}}"></script>
<!-- END CORE PLUGINS -->
{{--
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.peity.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-knob/js/jquery.knob.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="{{ asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
--}}
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/scripts/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/scripts/index.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/scripts/tasks.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@stack('script-footer')
<script type="text/javascript">

    optionsToastr = {
        "closeButton": true,
        "debug": true,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
		"preventDuplicates": true,
		"preventOpenDuplicates": true
    }

	//cambia un entero a formato moneda
	function formatMoney(number, places, symbol, thousand, decimal) {
		//revisando si es numero
		//console.log(number);
		if (!isNaN(number)){
			number = number || 0;
			places = !isNaN(places = Math.abs(places)) ? places : 0;
			symbol = symbol !== undefined ? symbol : "";
			thousand = thousand || ".";
			decimal = decimal || ",";
			var negative = number < 0 ? "-" : "",
			i = parseInt(number = Math.abs(+number || 0).toFixed(places), 10) + "",
			j = (j = i.length) > 3 ? j % 3 : 0;
			return symbol + negative + (j ? i.substr(0, j) + thousand : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousand) + (places ? decimal + Math.abs(number - i).toFixed(places).slice(2) : "");
		}
		else{
			toastr["warning"]("Solo se permiten numeros");
			number = number.replace(/[^\d\.]*/g, '');
			return formatMoney(number);
		}
	}

jQuery(document).ready(function() {
	

   //App.init(); // initlayout and core plugins
   /*
   Index.init();
   
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initPeityElements();
   Index.initKnowElements();
   Index.initDashboardDaterange();
   Tasks.initDashboardWidget();
   */
});

</script>
<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->

<!-- Mirrored from www.keenthemes.com/preview/conquer/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 23 May 2014 03:02:02 GMT -->
</html>