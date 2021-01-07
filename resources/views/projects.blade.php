<!DOCTYPE html>
<html>
<head>
	<title>Our Projects - PLUSTIC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/brand/favicon.png">
</head>
<body>

	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
	<a href="/">< Back</a>
    <h1>Our Projects</h1>
    <h3>List of our plastic-friendly projects.</h3>
    <h4>Our projects consists of:</h4>
    
    <table border="1">
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
	</table>

	<p>Search projects:</p>
	<form action="/projects/search-projects" method="GET">
		<input type="text" name="searchprojects" placeholder="Search Projects" value="{{ old('searchprojects') }}">
		<input type="submit" value="Search">
	</form>

	{{ $projects->links() }}
	<br/>
	<h2>Want to create more amazing project with us?</h2>
	<a href="/projects/add-projects">Click here!</a>

</body>
</html>