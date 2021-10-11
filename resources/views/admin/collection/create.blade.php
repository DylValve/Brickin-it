<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Brickin' It</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

        .top-bar, .top-bar ul {
            background-color: #D5DBDB !important;
        }

        .flex {
            display: flex
        }

        .items-table {

        }

        .items-table td {
            color: #717D7E;

            border-right: 1px solid #BFC9CA;
            border-left: 1px solid #BFC9CA;
        }

        .items-table tr {
            background-color: #F4F6F6;
        }

        .items-table tr:nth-child(even) {
            background-color: #D5DBDB;
        }

        .items-table th {
            border-top: 1px solid #AAB7B8;
            border-bottom: 1px solid #AAB7B8;
            border-right: 1px solid #BFC9CA;
            border-left: 1px solid #BFC9CA;
            background-color: #AAB7B8;
        }

        .items-table .text-right {
            padding-right: 3rem;
        }

        .price-align {
            padding: 0 10px !important;
        }

        h1 {
            margin: 20px 0px !important;
        }

        img{
            width: 180px;
        }
    </style>


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css"
          integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"
            integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
</head>
<body class="antialiased">
<div class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">Collections</li>
            <li><a href="{{route('themes.index')}}">THEMES</a></li>
            <li><a href="{{route('sets.index')}}">SETS</a></li>
            <li><a href="{{route('collections.index')}}">All Collections</a></li>
            <li><a href="{{route('collections.create')}}">Add Collection</a></li>
        </ul>
    </div>
</div>
<div class="mt-8 mx-auto">
    <table class="w-75">
        <tbody>
        <tr>
            <td class="flex justify-center">
                <form method="POST" action="{{route('collections.store')}}">
                    @csrf
                    <ol>
                        <label for="collectionName">Name:</label>
                        <input type="text" id="collectionName" name='name' value="{{old('name')}}">
                        <label for="collectionUserId">UserId:</label>
                        <input type="number" id="collectionUserId" name='user_id' value="{{old('user_id')}}">


                    </ol>
                    <button class="button button-primary" type="submit">Submit</button>
                </form>
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td>
                @if ($errors->any())
                    <div class="label alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </td>
        </tr>
        </tfoot>
    </table>

</div>
</body>
</html>

