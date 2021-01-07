<!DOCTYPE html>
<html>
<head>
    <title>Edit Project - PLUSTIC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/brand/favicon.png">
</head>
<body>
 
    <h1>Edit Project</h1>
	<h4>Make it more awesome!</h4>
 
	<a href="/projects">Back to Projects page</a>
	
	<br/>
	<br/>
 
	@foreach($projects as $p)
	<form action="/projects/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_project" value="{{ $p->id_project }}"> <br/>

        Nama Project:<input type="text" name="nama_project" required="required"
        value="{{ $p->nama_project}}"> <br/> <br/>
		
        <label for="tipe_project">Jenis Project:</label>
            <select name="tipe_project" id="tipe_project" required="required">
                <option value="Government"
                {{ old('tipe_project', $p->tipe_project) == 'Government' ? 'selected': '' }}>
                    Government
                </option>
                <option value="Organization"
                {{ old('tipe_project', $p->tipe_project) == 'Organization' ? 'selected': '' }}>
                Organization
                </option>
                <option value="Private"
                {{ old('tipe_project', $p->tipe_project) == 'Private' ? 'selected': '' }}>
                Private
                </option>
            </select>
        <br/>
		<br/>

        Keterangan Project:<textarea name="keterangan_project" required="required"
        style="margin: 0px; width: 485px; height: 98px;">{{ $p->keterangan_project }}</textarea> <br/> <br/>
		
        <input type="submit" value="Update">
	</form>
	@endforeach
		
 
</body>
</html>