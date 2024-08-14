<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div class="container">
        <div>
            <h3>New Contact Form</h3>
            @if (session('success')) <div class="alert alert-success"> {{session('success')}} </div> @endif
            <form action="{{route('contact.post')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="name">Your Phone Number</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label for="name">Your Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address">
                </div>
                <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Store Contact">
                </div>
        </div>
    </div>
    </body>

</html>