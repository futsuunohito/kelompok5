

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/background.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="js/button.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />

<body class="background">
    <!-- <div class="row">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="col-md-3 col-md-offset-1"><a href="{{ route('seeker.login')}}" class="btn btn-warning form-control button-text">me as a SEEKER !</a></div>
        <div class="col-md-3"><a href="{{ route('employer.login')}}" class="btn btn-primary form-control button-text">me as a HELPER !</a></div>
    </div>

 -->

<div class="container">
	<div class="row">
      <div class="col-md-9 col-md-offset-4">
        <div class="material-button-anim">
          <ul class="list-inline" id="options">
            <li class="option">
              <button class="material-button option1" type="button">
                <a href="{{ route('seeker.login')}}"><span class="button-text" aria-hidden="true"> Helper </span></a>
              </button>
            </li>
            <li class="option">
              <button class="material-button option2" type="button">
                <a href="#" target="_blank"><span class="fa fa-envelope-o button-text" aria-hidden="true"></span></a>
              </button>
            </li>
            <li class="option">
              <button class="material-button option3" type="button">
                <a href="{{ route('employer.login')}}"><span class="button-text" aria-hidden="true"> Seeker </span></a>
              </button>
            </li>
          </ul>
          <button class="material-button material-button-toggle" type="button">
            <span class="button-text" aria-hidden="true">LOGIN AS</span>
          </button>
        </div>
      </div>
	</div>
</div>

</body>