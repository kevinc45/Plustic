<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Contact Us!')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
	
	<table border="1">
		<tr>
			<td>Email</td>
			<td>heythere@plustic.com</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>+6231234567</td>
		</tr>
	</table>
 
@endsection