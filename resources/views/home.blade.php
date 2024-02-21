<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		@include('layoutsHomepage.css')

    </head>
	<body>
		<!-- HEADER -->
		@include('layoutsHomepage.header')
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		@include('layoutsHomepage.nav')
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		@include('layoutsHomepage.section-shopnow')
		<!-- /SECTION -->

		<!-- SECTION -->
		@yield('content')
		<!-- /SECTION -->

		<!-- SECTION -->

		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		@include('layoutsHomepage.newsletter')
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		@include('layoutsHomepage.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		@include('layoutsHomepage.jQueryPlugins')

	</body>
</html>
