
<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layouts.head')
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN #header -->
		@include('admin.layouts.header')
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		@include('admin.layouts.sidebar')
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		@yield('content')
		<!-- END #content -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
		<!-- BEGIN theme-panel -->
	  @include('admin.layouts.footer')
	<!-- END theme-panel -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
  @include('admin.layouts.script')
	<!-- ================== END page-js ================== -->
	
</body>
</html>
