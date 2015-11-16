<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Larvavel Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <!--Content Font-->
    <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!--Handwritten Font-->
    <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Home StyleSheet-->
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header class="page-header">
        <i id="settings-toggle" class="fa fa-cogs fa-2x"></i>
        <form id="settings">
            <ul>
                <li>
                    Select a background color: <input type="color" name="color1" id="colorBG" value="#ffffff">
                    <br>
                    Select a foreground color: <input type="color" name="color2" id="colorFG" value="#000000">
                    <br>
                    <input id="set-color" type="submit" onclick="return false"/>
                </li>
            </ul>
        </form>

        <div class="title text-center">
            <h1 style="font-weight: 800">Greetings owner of {{ Auth::user()->email }}</h1>
        </div>
        <a href="auth/logout">Logout</a>
    </header>
<!--header-->
    <form method="post" action="update/{{ Auth::user()->id  }}">
        {!! csrf_field() !!}
        <div id="wrapper" class="container">
            <div class="notes col-md-3">
                <textarea name="notes" placeholder="Enter your first note: ">@foreach ($notes as $note){{ $note }}@endforeach</textarea>
            </div>
            <div class="websites col-md-3">
                <h4>Websites: </h4>
                @for($i = 0; $i < sizeof($websites); $i++)
                    <input name="websites[]" class="link" value="{{  $websites[$i] }}" onclick="
                        window.open(
                             this.value,
                            '_blank' // <- This is what makes it open in a new window.
                        );"
                    ><br>
                @endfor
                <input name="websites[]"><br>
            </div>
            <div class="images col-md-3">
                <p>Images Please:</p>
            </div>
            <div class="tbd col-md-3">
                <textarea id="construct" name="tbd" class="text-center" rows="8"></textarea>
            </div>
        </div>
        <div class="text-center">
            <input id="submit" type="submit">
        </div>
    </form>
<!--content-->
    <footer class="footer">
        <p class="text-center text-muted">
            &copy; Illegal Chocolate {{ date("Y") }}
        </p>
    </footer>
<!--footer-->
    <!--jQuery-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/colorize.js"></script>
    <script src="js/tbd.js"></script>
</body>
</html>
