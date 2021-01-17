@extends('test')
{{-- <!DOCTYPE html>
<html>--}}
<head>
    <title>About Us - PLUSTIC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/brand/favicon.png">
</head>
@section('Header')
<h1>About Us</h1>
@endsection
@section('Content')
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
    h4 {
        font-size: 20px;
        font-family: Helvetica;
        color: #37F08D;
        font-weight: Bold;
}

    p,li {
        font-family: Verdana;
}

    h1, h3 {
        color: #E8A95A;
        font-family: system-ui;
    }
</style>
{{-- <body> --}}
    <div>
    {{-- <a href="/"><img src="{{ asset('argon') }}/img/brand/LogoPlusticPNG.png" class="center" alt="Logo PLUSTIC.ID" width="50%"></a> --}}
    <h1><center>About Us</h1>
    <h3><center>An Environment-Loving Group of People.</h3>
    
    <img src="{{ asset('argon') }}/img/resource/aboutus.jpg" alt="Gambar About Us" class="center" width="100%">
    </div>
    <!--<p>Tanggal hari ini : {{ $currdate }}</p>-->

    <h4>Visi:</h4>
    <p>
        Menjadikan plastik sebagai teman lingkungan yang dapat didaur ulang untuk kepentingan masyarakat
        bersama.
    </p>

    <h4>Misi:</h4>
    <ol>
        <li>Mengurangi limbah plastik bekas pemakaian rumah tangga,</li>
        <li>Mengajak masyarakat Indonesia untuk dapat tertarik dalam mengurangi limbah plastik, dan</li>
        <li>Memperkenalkan organisasi-organisasi pecinta lingkungan kepada masyarakat luas.</li>
    </ol>
@endsection
{{-- </body>
</html> --}}