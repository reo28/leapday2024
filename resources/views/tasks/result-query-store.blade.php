<!DOCTYPE html>
<html>
<head>
    <title>import</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" onclick="window.location='/dashboard'" type="button">Dashboard</button>
                <button class="btn btn-primary" onclick="window.location='/import-store-page'" type="button">Import more Stores</button>
              </div>   
        </div>
    </div>
            @if ($errors->any())
            <div class="alert alert-danger">
	        <ul>
		        @foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		    @endforeach
	        </ul>
            </div>
            @endif
    <div>
    <form class="d-flex justify-content-md-end bg-light" type= "get" action= "/search-stores">
        <div class="d-grid gap-2 d-md-flex ">
            <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success justify-content-md-end" type="submit">Search</button>
        </div>
    </form>
        <table class="table table-bordered mt-3">
            <tr>
                <th colspan="3">
                    List Of Stores
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach($stores as $store)
            <tr>
                <td>{{ $store->id }}</td>
                <td>{{ $store->name }}</td>
                <td>{{ $store->adress }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>