<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ $title }}</title>

  <link rel="stylesheet" href="{{ asset('assets/lib/lumen/css/bootstrap.css') }}">
  <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
  @if(!empty($new_post))
  <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css') }}">
  @endif

  @if(!empty($posts_calendar))
  <link rel="stylesheet" href="{{ asset('assets/lib/fullcalendar/fullcalendar.min.css') }}">
  @endif

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>



  <div class="main-wrapper">

    <div class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin">{{ Config::get('app.title') }}</a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">

        <ul class="nav navbar-nav">
          <li><a href="/networks">Networks</a></li>
        </ul>

        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Posts <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/post/new">New</a></li>
              <li><a href="/posts">List</a></li>
              <li><a href="/posts/calendar">Calendar</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Schedules <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/schedules/new">New</a></li>
              <li><a href="/schedules">List</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/account">Account</a></li>
              <li><a href="/settings">Settings</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>


    <div class="container">
    @yield('content')
    </div>

  </div>


  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/lib/lumen/js/bootstrap.js') }}"></script>

  @if(!empty($new_post))
  <script src="{{ asset('assets/js/moment.min.js') }}"></script>
  <script src="{{ asset('assets/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/new_post.js') }}"></script>
  @endif

  @if(!empty($posts_calendar))
  <script src="{{ asset('assets/js/moment.min.js') }}"></script>
  <script src="{{ asset('assets/lib/fullcalendar/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('assets/js/posts_calendar.js') }}"></script>
  @endif
</body>
</html>
