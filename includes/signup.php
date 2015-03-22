<?php  if(isset($_GET['ref'])) echo $_SESSION['ref']= $_GET['ref'];?>


 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }
  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>

<div class="col-md-9 col-sm-9">
            <h1>Rigister</h1>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal form-without-legend" name="regform" role="form" method=post  action=register.php>
                    <div class="form-group">
                      <label for="email" class="col-lg-4 control-label">Your Name  <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input name='fullname'  class="form-control" id="email" value="<?php echo @$_GET['name'];?>"  type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Your Username: <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input  class="form-control" id="password" name='username' type="text" value="<?php echo @$_GET['username'];?>"  >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Define Password: <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type=password name='password' class="form-control" id="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Retype Password: <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type=password name=password2 class="form-control" id="password" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Your E-mail Address: <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input  type=text name='email' class="form-control" id="password"  value="<?php echo @$_GET['email'];?>" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Retype Your E-mail: <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type=text name=email1 class="form-control" id="password" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-8">
                       
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <button type="submit" class="btn btn-primary">Register</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                        <hr>
                       
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4 col-sm-4 pull-right">
                  <div class="form-info">
                    <h2><em>Important</em> Information</h2>
                    <p>PLEASE PUT YOUR ALL INFORMATION CORRECTLY AND DONT SHARE WITH ANYONE.</p>

                    </div>
                </div>
              </div>
            </div>
          </div>