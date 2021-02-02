<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Online Assigments</title>
</head>
<body id="main-body">
    <header id="main-header">
        <nav id="main-nav-container">
            <ul id="main-nav-ul-left">
                <li>
                    <a id="home" href="home">Home</a>
                </li>
                <li>
                    <a id="classroom" href="classroom">Classroom</a>
                </li>
                <li>
                    <a id="assignments" href="assignments">Assignments</a>
                </li>
                <li>
                    <a id="mail" href="mail">Mail</a>
                </li>
                <li>
                    <a id="lessons" href="lessons">Lessons</a>
                </li>
            </ul>
            <ul id="main-nav-ul-right">
                <li>
                    <a id="contacts" href="contacts">Contacts</a>
                </li>
                <li>
                    <a id="myaccount" href="myaccount">My Account</a>
                </li>
                <li>
                    <a id="login" href="login">Login</a>
                </li>
                <li>
                    <a id="register" href="register">Register</a>
                </li>
                <li>
                    <a id="logout" href="logout">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
  @yield('content')
</body>
</html>
