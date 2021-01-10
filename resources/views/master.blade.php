<html>
<head>
	<title>PLUSTIC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset("img/iconPlustic.png")}}">
</head>
<body>
 
	<header>
	<a href="/">< Back</a>
		<h2>Preferences</h2>
		<nav>
			<a href="/preferences">Preferences</a>
			|
			<a href="/preferences/contactus">Contact Us</a>
			|
			<a href="/preferences/tos">Terms of Service</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="/">PLUSTIC</a>. 2020</p>
	</footer>
 
</body>
</html>