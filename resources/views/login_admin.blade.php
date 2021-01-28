<!DOCTYPE html>
<html>
<head>
  <title>Admin Sign-In</title>
    <!--meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

     <style>
.login-form {
    width: 340px;
    margin: 50px auto;
}
.login-form form {        
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.input-group-addon .fa {
    font-size: 18px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
.bottom-action {
    font-size: 14px;
}
</style>

  <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;
}
</style>
</head>
<body>
  
  <div class="container py-5">
  	<!-- @if(Session::has('success'))
		    <div class="alert alert-success">
		        {{Session::get('success')}}
		    </div>
		@endif -->
		
    <div class="row">
        <div class="col-md-12">
            
            <!--h2 class="text-center mb-5"> Register Sign Up</h2-->
            <div class="row">
                <div class="col-md-6 mx-auto">
                    
                    <div class="login-form">
               <form action="{{url('login_new_admin')}}" method="POST"> 
               	@if(Session::has('fail'))
		    <div class="alert alert-danger">
		        {{Session::get('fail')}}
		    </div>
		@endif
                {{ csrf_field() }}
                    <h2 class="text-center">Sign In</h2>   
                    <div class="form-group">
                      <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fa fa-user"></span>
                                </span>                    
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                            
                                    
                        </div>
                    </div>
                <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-lock"></i>
                                </span>                    
                            </div>
  
                            <input type="password" class="form-control" name="password"placeholder="Password" required="required">
                        </div>
                    </div>        
                    <div class="form-group">
                        <button  type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                    <div class="bottom-action clearfix">
                        <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                        <a href="#" class="float-right">Forgot Password?</a>
                    </div>        
                </form>
            </div>
                </div>
            </div>
            

        </div>
       
    </div>
 
</div>
</div>


</body>
</html>