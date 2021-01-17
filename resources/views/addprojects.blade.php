@extends('test')
{{-- <html> --}}
<head>
	<title>New Project - PLUSTIC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/brand/favicon.png">

</head>

@section ('Header')
	<h1>Add New Project</h1>
@endsection
@section ('Content')
<body>
	<h1>Add New Project</h1>
	<h4>Because we love plastic that much!</h4>
 
	<a href="/projects">Back to Projects page</a>
	
	<br/>
	<br/>
 
	<form action="/projects/manage" method="post">
		{{ csrf_field() }}
		Nama Project:<input type="text" name="nama_project" required="required"> <br/> <br/>
		
        <label for="tipe_project">Jenis Project:</label>
            <select name="tipe_project" id="tipe_project" required="required">
                <option disabled selected value> -- Pilih Jenis Project -- </option>
                <option value="Government">Government</option>
                <option value="Organization">Organization</option>
                <option value="Private">Private</option>
            </select>
        <br/>
		<br/>
        Keterangan Project:<textarea name="keterangan_project" required="required"
        style="margin: 0px; width: 485px; height: 98px;"></textarea> <br/> <br/>
		<input type="submit" value="Submit">
	</form>
@endsection
{{--  
</body>
</html> --}}