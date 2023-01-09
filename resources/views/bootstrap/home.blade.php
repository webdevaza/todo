<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Tasks!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
            .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
            .fa-anchor,.fa-coffee {font-size:200px}
        </style>
    </head>
    
    <body>

    <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="/" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
                <a href="/tasks" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">My tasks</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Other features</a>
            </div>

        <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
                <a href="tasks" class="w3-bar-item w3-button w3-padding-large">My tasks</a>
                <a href="#" class="w3-bar-item w3-button w3-padding-large">Other features</a>
            </div>
        </div>
        
        <!-- Header -->
        <header class="w3-container w3-blue w3-center" style="padding:128px 16px">
            <h1 class="w3-margin w3-jumbo">PLAN WHAT TO DO,<br> DO WHAT YOU PLAN!</h1>
            <h4>{{$quote}}</h4>
            <a href="{{route('user.create')}}" class="w3-button w3-white w3-padding-large w3-large w3-margin-top">Get Started</a>
        </header>

        <!-- First Grid -->
        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird">
                <h1>Plan what to do</h1>
                <h5 class="w3-padding-32">Planning has always been a good way to solve everyday problems. There may be a lot of things to do, places to go, people to meet, etc. All those things can be very important. Therefore it's good to plan all the time.</h5>

                <p class="w3-text-grey">Since people are quite forgetful, keeping records, taking notes is one of the best ways to be successful every day. Just by writing down we can make good plans, calculate expenses, memorize, etc. Life is history and history is useful just when information is written and saved correctly, precisely.</p>
                </div>

                <div class="w3-third w3-center">
                <i class="fa fa-anchor w3-padding-64 w3-text-blue"></i>
                </div>
            </div>
        </div>

        <!-- Second Grid -->
        <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-third w3-center">
                <i class="fa fa-coffee w3-padding-64 w3-text-blue w3-margin-right"></i>
                </div>

                <div class="w3-twothird">
                <h1>Do what you plan</h1>
                <h5 class="w3-padding-32">Planning is good. But completing planned tasks is much better than just planning and doing nothing. Planning in mind is not as efficient as planning in written form. That's why never hesitate to write your plans!</h5>

                <p class="w3-text-grey">Laziness is a really strong trait. It stops people all the time. Perhaps it is useful when you need to save energy. But usually it is harmful. But making plans in a written form is one of the good ways to win laziness. It motivates and gives extra strength.</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-container w3-padding-64 w3-center w3-opacity">  
            <div class="w3-xlarge w3-padding-32">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
            <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        </footer>

        <script>
        // Used to toggle the menu on small screens when clicking on the menu button
            function myFunction() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
    </body>
</html>