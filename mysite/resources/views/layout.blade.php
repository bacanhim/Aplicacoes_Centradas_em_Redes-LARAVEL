<!DOCTYPE html>

<html>
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">

</head>
<body style="padding: 20px;">


<!-- NAV BAR -->
<div style="height:100px;" class="topnav">
    <nav>
      <a href="/" class="dropbtn">Index</a>
      <a href="/contact" style="margin-top:10px;" class="dropbtn">Contactos</a>
      <a href="/about" style="margin-top:10px;" class="dropbtn">Sobre</a>
      <a href="/projects" style="margin-top:10px;" class="dropbtn">Projects</a>
    </nav>
</div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>

