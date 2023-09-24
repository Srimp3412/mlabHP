<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css\template.css">
        <link rel="stylesheet" href="css\header.css">
    </head>
    <body>
    <header>
    <div id="nav">
      <nav id="navbar">
        <ul class="h4">
          <li><a href="{% url 'about' %}">- ABOUT US</a></li>
          <li><a href="{% url 'research' %}">- RESEARCH</a></li>
          <li><a href="{% url 'members' %}">- MEMBERS</a></li>
          <li><a href="{% url 'join' %}">- JOIN US</a></li>
          <li><a href="{% url 'news' %}">- NEWS</a></li>
          <li><a href="{% url 'contact' %}">- CONTACT</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
        <h1>@yield('title')</h1>
        <p>test</p>
        <div class="content">
            @yield('content')
        </div>
    </body>
</main>
</html>