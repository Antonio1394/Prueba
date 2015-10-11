<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>

<div class="container">

@include('includes.header')
@yield('contenido')

<footer>
	
	@include('includes.footer')
</footer>

</div>
</body>
</html>