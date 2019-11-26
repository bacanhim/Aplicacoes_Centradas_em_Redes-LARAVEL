<!DOCTYPE html>

<html>

<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">


</head>
<div class="container">

    <body style="padding: 20px">

        <!-- NAVBAR -->
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/contact">
                        Contact
                    </a>

                    <a class="navbar-item" href="/about">
                        About
                    </a>

                    <a class="navbar-item" href="/projects">
                        Projetos
                    </a>
                    <a class="navbar-item" href="/articles">
                        Articles
                    </a>
                </div>
            </div>
        </nav>


        <!-- CONTENT -->
        @yield('content')


        <!-- FOOTER -->
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong>UNI - ACR</strong> by <a href="https://www.instagram.com/cmiguellz/?hl=pt">CMIGUELLZ</a>.
                </p>
            </div>
        </footer>
</div>


</body>
<style>
    .is-complete {
        text-decoration: line-through;
    }

</style>

</html>
