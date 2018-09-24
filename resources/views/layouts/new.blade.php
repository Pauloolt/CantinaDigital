<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cantina Digital</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
</head>
<body>
  @yield('test')
	<footer class="footer">
			<div class="container-fluid">
					<p class="copyright pull-right">
							&copy; <script>document.write(new Date().getFullYear())</script> Ana Félix, Douglas e Paulo Tavares
			</div>
	</footer>
</body>



    <!--   Core JS Files   -->
    <script src="{{asset('js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{asset('js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{asset('js/demo.js')}}"></script>


</html>
