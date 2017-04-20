<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Slim 3</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../public/assets/css/bulma.css">
        <link rel="stylesheet" href="../public/assets/css/main.css">
    </head>
    <body>
    <div id="app">
        <!-- Vue -->
        <nav class="nav">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item">
                        <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
                    </a>
                </div>

                <div class="nav-center">
                </div>

                <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
                <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
                <span class="nav-toggle">
            <span></span>
                <span></span>
                <span></span>
                </span>

                <!-- This "nav-menu" is hidden on mobile -->
                <!-- Add the modifier "is-active" to display it on mobile -->
                <div class="nav-right nav-menu">
                    <router-link to="/" tag="a" class="nav-item">Home</router-link>
                    <router-link to="/post" tag="a" class="nav-item">Post</router-link>
                    <a href="/slim3vue/public/other" class="nav-item">Other</a>

                </div>
            </div>
        </nav>
        <div class="container">
            <router-view></router-view>
        </div>
    </div> <!-- end #app -->

        <script type="text/javascript" src="../public/assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../public/assets/js/main.js"></script>
        <script type="text/javascript" src="../public/assets/js/script.js"></script>
    </body>
</html>
