<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>

    <!-- Uncompressed JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

    <!-- Insert this within your head tag and after foundation.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />

    <!-- Insert social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

</head>

<body>
<header>
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-3 medium-2 logo-div">
                <div class="logo-background">
                    <a class="main-link" href="{{ route('main') }}" type="submit">
                        <img src="{{ URL::asset('images/Brickin-It2.png') }}" alt="Lego Logo">
                    </a>
                </div>
            </div>
            <div class="cell small-12 large-10">
                <div class="center">
                    <h1 class="title-1">BRICKIN'IT</h1>
                    <h1 class="title-2">BRICKIN'IT</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="grid-container main-menu">
    <div class="grid-x">
        <div class="cell small-12 button-container">
            <div class="div-gap"></div>
            <div class="main-button"><a class="main-link" href="{{ route('all-sets') }}" type="submit"><h2 class="button-text">Sets</h2></a></div>
            <div class="div-gap"></div>
        </div>
        <div class="cell small-12 button-container">
            <div class="div-gap"></div>
            <div class="main-button"><a class="main-link" href="{{ route('login') }}" type="submit"><h2 class="button-text">Collections</h2></a></div>
            <div class="div-gap"></div>
        </div>
        <div class="cell small-12 button-container">
            <div class="div-gap"></div>
            <div class="main-button"><a class="main-link" href="{{ route('login') }}" type="submit"><h2 class="button-text">User</h2></a></div>
            <div class="div-gap"></div>
        </div>
    </div>
</div>
</body>
</html>
