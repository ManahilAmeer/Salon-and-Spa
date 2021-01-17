<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bel Salone</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Custom fonts for this template-->
        <link href="{{asset('/customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="{{asset('/customAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
        <link rel="stylesheet" href="{{asset('/customAuth/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/customAuth/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('/customAuth/css/templatemo-style.css')}}" />
        <style>
            .flex-container {
                display: flex;
                flex-flow: row wrap;
            }
            .sidebar {
                padding-bottom: 15%;
                border: 2px solid #e75480;
                background-color: lightgray;
                height: 100%;
                overflow: auto;
                flex-grow: 1;
            }
            .sidebar a {
                display: block;
                font-weight: 600; 
                font-size: 20px;
                width:100%; 
                height: 10%; 
                background-color: pink;
                text-decoration: none;
                text-align: left;
                border-bottom: 2px solid #e75480;
                padding: 16px;
            }
                /* Active/current link */
            .sidebar a:active {
                background-color: #e75480;
                color: white;
            }
            /* Responsive layout - makes a one column layout instead of a two-column layout */
            @media (max-width: 800px) {
            .flex-container {
                flex-direction: column;
                }
            }
            /*On screens that are less than 700px wide, make the sidebar into a topbar*/
            @media screen and (max-width: 1200px) {
                .sidebar {
                    width: 100%;
                    height: 100%;
                    position: relative;
                }
                .sidebar a {float: left;}
            }
            /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
            @media screen and (max-width: 400px) {
                .sidebar a {
                    text-align: center;
                    float: none;
                }
            } 
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                border-radius: 50%;
            }
        </style>    
    </head>
    <body>  
        <header>
            <div style="padding: 5px 0px; background-color:lightgray;">
                <h1 align="center" style= "color:#e75480">Bel Salone</h1>
                <h6 align="center" style="padding-left: 120px">We'll Style You'll Smile</h6>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light" style="padding: 5px 20px; background-color:#e75480;">
                <a class="navbar-brand" href="#" style="font-weight: 900; font-family: RozhaOne; font-size: 30px; color: white">Bel ₻ Salone</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" style="font-weight: 700; font-size: 20px">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-weight: 700; font-size: 20px;">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="font-weight: 700; font-size: 20px;">About</a>
                        </li>
                    </ul>
                    <div>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="font-weight: 700; font-size: 20px;">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" style="font-weight: 700; font-size: 20px;">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div>
            @yield('content')
            @yield('sidebarMenu')
        </div>
        <footer class="page-row row">
            <div class="cell">
                <h4>Footer</h4>
            </div>
        </footer>
    </body>
</html>