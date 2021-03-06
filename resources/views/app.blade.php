<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title')</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('assets/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('assets/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <ul id="master" class="dropdown-content">
    <li><a href="{{url('master/currency')}}">Currency</a></li>
    <li><a href="{{url('master/country')}}">Country</a></li>
    <li><a href="{{url('master/language')}}">Language</a></li>
    <li><a href="{{url('master/airport')}}">Airport</a></li>
  </ul>
  <ul id="cron" class="dropdown-content">
    <li><a href="{{url('cronGetCurrency')}}">Currency</a></li>
    <li><a href="{{url('cronGetCountry')}}">Country</a></li>
    <li><a href="{{url('cronGetLanguage')}}">Language</a></li>
    <li><a href="{{url('cronGetAirport')}}">Airport</a></li>
  </ul>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{url('master/country')}}" class="brand-logo">Flight<b>Airline</b></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="master">Master<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="cron">Cron<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h2 class="header center orange-text">@yield('title')</h2>
      @yield('content')
    </div>
  </div>

  <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="{{asset('assets/js/materialize.min.js')}}"></script>
  <script src="{{asset('assets/js/init.js')}}"></script>
  @yield('js')

  </body>
</html>
