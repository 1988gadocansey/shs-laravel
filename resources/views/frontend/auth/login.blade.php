<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Takoradi Polytechnic">
    <meta name="author" content="Takoradi Polytechnic">
    <title>E-School | Welcome</title>
    <meta name="msapplication-TileColor" content="#9f00a7">
    
  <!-- Favicons-->
  <link rel="icon" href="assets/favicon.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="assets/favicon.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="assets/favicon.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
   <!-- Styles -->
     
  <link href='{!! url( "logins/css/materialize.css")  !!}' type="text/css" rel="stylesheet" media="screen,projection">
  <link href='{!! url( "logins/css/style.css")  !!}' type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="logins/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="logins/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="logins/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="logins/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="blue-grey">
    <nav class="navbar navbar-default">
          

        <div class="collapse navbar-collapse" id="frontend-navbar-collapse">
             @if (config('locale.status') && count(config('locale.languages')) > 1)
           <ul id="profile-dropdown" class="dropdown-content">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ trans('menus.language-picker.language') }}
                            <span class="caret"></span>
                        </a>

                        @include('includes.partials.lang')
                          </ul>
                          <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Language<i class="mdi-navigation-arrow-drop-down right"></i></a>
               @endif   
        </div>
        
    </nav>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <div>
   <!-- if there are login errors, show them here -->
		 @if (count($errors) > 0)

                <div class="uk-form-row">
                    <div class="alert alert-danger" style="background-color: red;color: white">
                       
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li> {!!  $error  !!} </li>
                            @endforeach
                      </ul>
                </div>
              </div>
            @endif
  </div>
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
          {{ Form::open(['route' => 'auth.login', 'class' => 'form-horizontal']) }}
             {!! csrf_field() !!}
        <div class="row">
          <div class="input-field col s12 center">
              <img src="logins/images/login.png" alt="" class="" style="width:100px;height:auto">
            <p class="center login-form-text">{{ trans('labels.frontend.auth.login_box_title') }}</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
             {{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                   
              {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) }}
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            {{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) }}

            {{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => '']) }}
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              {{ Form::checkbox('remember') }} 
              <label for="remembedr-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
              <table>
                  <tr>
                      <td> {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-primary', 'style' => 'margin-right:15px']) }}</td>

                      <td>     {{ link_to('password/reset', trans('labels.frontend.passwords.forgot_password')) }}
             </td>
                  </tr>
              </table>
          </div>
        </div>
        <div class="row">
            <center><small style="font-size: 11px">&copy <?php echo  date('Y'); ?> | <a href="http://www.gadeksystems.com" target="_">www.gadeksystems.com</a></small></center>         
        </div>

        {{ Form::close() }}
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="logins/js/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="logins/js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="logins/js/prism.js"></script>
  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="logins/js/plugins.js"></script>
 
</body>
</html>
        