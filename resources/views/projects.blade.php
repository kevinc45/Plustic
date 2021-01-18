@extends('test')
{{-- <!DOCTYPE html>
<html>--}}
<head>
	<title>Our Projects - PLUSTIC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/brand/favicon.png">
</head>
{{-- <body> --}}
	@section('Header')
	<h1 style="color:white">Projects</h1>	
	@endsection
@section('Content')
<style type="text/css">
	.pagination li{
		float: left;
		list-style-type: none;
		margin:5px;
	}
</style>
<h1>Our Projects</h1>
<h3>List of our plastic-friendly projects.</h3>
<h4 style="padding-bottom:15px">Our projects consists of:</h4>

{{-- <table border="1">
	<tr>
		<th>ID Project</th>
		<th>Nama Project</th>
		<th>Jenis</th>
		<th>Keterangan</th>
	</tr>
	@foreach($projects as $p)
	<tr>
		<td>{{ $p->id_project }}</td>
		<td>{{ $p->nama_project }}</td>
		<td>{{ $p->tipe_project }}</td>
		<td>{{ $p->keterangan_project }}</td>
		<td>
			<a href="/projects/edit-projects/{{ $p->id_project }}">Edit</a>
			
			<a href="/projects/delete-projects/{{ $p->id_project }}">Delete</a>
		</td>
	</tr>
	@endforeach
</table> --}}

<div class="card">
	<div class="card-header border-0">
	  <div class="row align-items-center">
		<div class="col">
		  <h3 class="mb-0">Projects</h3>
		</div>
		<div class="col text-right">
		  {{-- <a href="#!" class="btn btn-sm btn-primary">See all</a> --}}
		</div>
	  </div>
	</div>
	<div class="table-responsive">
	  <!-- Projects table -->
	  <table class="table align-items-center table-flush">
		<thead class="thead-light">
		  <tr>
			<th scope="col">ID Project</th>
			<th scope="col">Nama Project</th>
			<th scope="col">Jenis</th>
			<th scope="col">Keterangan</th>
			<th scope="col">Action</th>
		  </tr>
		</thead>
		<tbody>
			@foreach($projects as $p)
			<tr>
				<th scope="row">
				{{ $p->id_project }}
			</th>
				<td>{{ $p->nama_project }}</td>
				<td>{{ $p->tipe_project }}</td>
				<td>{{ $p->keterangan_project }}</td>
				<td>
					<a href="/projects/edit-projects/{{ $p->id_project }}">Edit</a>
				
					<a href="/projects/delete-projects/{{ $p->id_project }}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	  </table>
	</div>
  </div>

<p>Search projects:</p>
<form action="/projects/search-projects" method="GET">
	<input type="text" name="searchprojects" placeholder="Search Projects" value="{{ old('searchprojects') }}">
	<input type="submit" value="Search">
</form>

{{ $projects->links() }}
<br/>
<h2>Want to create more amazing project with us?</h2>
<a href="/projects/add-projects">Click here!</a>
@endsection
	
{{-- 
</body>
</html> --}}