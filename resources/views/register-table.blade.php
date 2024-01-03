<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Custom Styles */
        .nav-link {
            color: white;
            /* Your desired text color */
        }

        .navbar {
            background-color: #343a40;
            color: white;
            /* Dark Background Color */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: white;
            /* Text Color */
        }

        .navbar-toggler-icon {
            background-color: white;
            /* Toggler Icon Color */
        }

        .table {
            margin-top: 20px;
        }

        th,
        td {
            color: #343a40;
            /* Text Color */
        }

        th {
            background-color: #17a2b8;
            /* Header Background Color */
            color: white;
            /* Header Text Color */
        }

        .toggle-container {
            position: relative;
            width: 60px;
            height: 30px;
        }

        input[type="checkbox"] {
            display: none;
        }

        label {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="checkbox"]:checked+label .thumb {
            transform: translateX(100%);
        }

        .thumb {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        input[type="checkbox"]:checked+label .thumb {
            transform: translateX(100%);
        }

        .toggle-container {
            position: relative;
            width: 60px;
            height: 30px;
        }

        <style>.existing-image {
            max-width: 110px;
            max-height: 120px;
            margin-right: 5px;
        }

        .table-image {
            max-width: 50px;
            max-height: 50px;
            margin-right: 5px;
        }

        .btn {
            padding-left: .5rem;
        }
    </style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-secondary">
       
        <a class="navbar-brand" href="#">FORM_VALIDATION</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/register') }}">Register <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/register_table') }}">TABLE <span
                            class="sr-only">(current)</span></a>
                </li>
        </div>
    </nav>
    <div class="container">
    <table class="table">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
 
        <tr>
            <td>{{ $data['id'] }}</td>
            <td>{{ $data['name'] }}</td>
            <td>{{ $data['email'] }}</td>
            <td><a href="{{route('logoutF')}}" onclick='event.preventDefualt(); document.getElementById('logout-form').submit();' aria-hidden='true'>logout 
        <form action="{{route('logoutF')}}" id="logout-form" method="post">

        @csrf
        </form>
        </a></td>
        </tr>


   
    </tbody>
</table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-5mFToAs24m8V/zVePxU8FScUBdjorlqUpk1uHZ4i9TkzMz5pFZBTAjuEA9DLjx3t"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JzjwPEX3qL8iUZgq9eR+4z2pCVg3bPXs/WnpD+2e8OFq2AdDlAapCOIS0eijGqz7"
        crossorigin="anonymous"></script>
</body>

</html>