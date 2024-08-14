<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3>All Contacts</h3>
        @if (session('success')) <div class="alert alert-success"> {{session('success')}} </div> @endif
        @if (session('error')) <div class="alert alert-danger"> {{session('error')}} </div> @endif
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <form class="col-5" method="GET" action="">
                    <select class="form-select" name="sort_by" onchange="this.form.submit()">
                        <option value="">Sort By</option>
                        <option value="name_asc" {{ request('sort_by') == 'name_asc' ? 'selected' : '' }}>Name (A-Z)
                        </option>
                        <option value="name_desc" {{ request('sort_by') == 'name_desc' ? 'selected' : '' }}>Name (Z-A)
                        </option>
                        <option value="date_asc" {{ request('sort_by') == 'date_asc' ? 'selected' : '' }}>Date (Oldest
                            First)</option>
                        <option value="date_desc" {{ request('sort_by') == 'date_desc' ? 'selected' : '' }}>Date (Newest
                            First)</option>
                    </select>
                </form>
                <form class="d-flex col-6" role="search">
                    <input class="form-control me-3" name="search" type="search" placeholder="Search by Name or Email"
                        aria-label="Search">
                    <button class="btn btn-outline-success col-3" type="submit">Search</button>
                </form>
            </div>
    </div>
    </nav>
    <table class="container table table-striped table-bordered border-info-subtle table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
        </thead>
        @foreach($contacts as $contact)
        <tbody>
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{\Carbon\Carbon::parse($contact->created_at)->diffForHumans()}}</td>
                <td>{{\Carbon\Carbon::parse($contact->updated_at)->diffForHumans()}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>