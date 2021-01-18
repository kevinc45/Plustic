@extends('test')
{{-- <!DOCTYPE html>
<html> --}}
<head>
	<title>Blog - PLUSTIC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/brand/favicon.png">
</head>
@section('Header')
<h1 style="color:white">Blog</h1>
@endsection
@section('Content')
	<h1>Blog</h1>
<h2>Read our stories.</h2>	

<div class="card" style="width: 80%; margin-left:auto; margin-right:auto; margin-bottom:30px;">
	<img class="card-img-top" src="../../assets/img/theme/kaufmann-mercantile-a7Woj8W6J0s-unsplash.jpg" alt="Card image cap">
	<div class="card-body">
	  <h5 class="card-title">PLUSTIC Bantu Tanaman Rumah Tumbuh!</h5>
	  <p class="card-text">Sudah cek beberapa projek terbaru dari PLUSTIC? Kami mau membantu kamu dan
		  banyak keluarga-keluarga lain untuk mewujudkan lingkungan yang bebas plastik.</p>
	  <a href="/blog/blog-1" class="btn btn-primary">Baca lebih lanjut</a>
	</div>
  </div>

  <div class="card" style="width: 80%; margin-left:auto; margin-right:auto; margin-bottom:30px;">
	<img class="card-img-top" src="../../assets/img/theme/dustan-woodhouse-RUqoVelx59I-unsplash.jpg" alt="Card image cap">
	<div class="card-body">
	  <h5 class="card-title">Hilangkan Sampah di Lingkungan Sekitar bersama PLUSTIC!</h5>
	  <p class="card-text">Sudah cek beberapa projek terbaru dari PLUSTIC? Kami mau membantu kamu dan
		banyak keluarga-keluarga lain untuk mewujudkan lingkungan yang bebas plastik.</p>
	  <a href="#" class="btn btn-primary">Baca lebih lanjut</a>
	</div>
  </div>

@endsection
{{-- <body> --}}
{{-- 
</body>
</html> --}}