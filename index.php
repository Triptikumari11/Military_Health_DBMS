<html>
<head>
	<title>DHM</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
     .form-control {
    border-radius: 0.75rem;
}
</style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>
<style >
    body{
    background: -webkit-linear-gradient(left, #555d2a, #a07070);
    }
    .register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 105%;
    border-radius: 10px;
    }
</style>
</head>

<!------ Include the above in your HEAD tag ---------->
<body >
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Military Healthcare</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	

<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-3 register-left" style="margin-top: 10%;right: 5%">
                        <img src="data:image/jpeg;base64,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" alt=""/>
                        <h3>Jai Hind</h3>
                       
                    </div>
                    <div class="col-md-9 register-right" style="margin-top: 40px;left: 80px;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Receptionist</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">New Registration</h3>
                                <form method="post" action="func2.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="index1.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/>
                                    </div>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Doctor</h3>
                                <form method="post" action="func1.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Admin</h3>
                                <form method="post" action="func3.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>

  