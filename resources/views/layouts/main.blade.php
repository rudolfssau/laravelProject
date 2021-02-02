<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Online Assigments</title>
</head>
<body>
    <header>
        <nav>
            <ul id="main-nav-ul">
                <li>
                    <a href="home">Home</a>
                </li>
                <li>
                    <a href="classroom">Classroom</a>
                </li>
                <li>
                    <a href="assignments">Assignments</a>
                </li>
                <li>
                    <a href="mail">OS-Mail</a>
                </li>
                <li>
                    <a href="lessons">Lessons</a>
                </li>
            </ul>
        </nav>
    </header>
  @yield('content')
</body>
</html>
