<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <h3>Update Contact</h3>

            <form action=" {{route('contact.put', $contact->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Update Your Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $contact->name }}">
                </div>
                <div class="form-group">
                    <label for="name">Update Your Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $contact->email }}">
                </div>
                <div class="form-group">
                    <label for="name">Update Your Phone Number</label>
                    <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}">
                </div>
                <div class="form-group">
                    <label for="name">Update Your Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $contact->address }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Update Contact">
                </div>
        </div>
    </div>
</body>

</html>