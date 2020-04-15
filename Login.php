<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/Team/AIR Logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="CSS/aquamarine.css">
</head>

<body>
  <div class="text-center text-white h-120 align-items-center d-flex asd" style="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5" style="">
          <div class="row">
            <div class="col-md-10" style="">
              <div class="col-md-12 mt-5 mx-auto" style="">
                <div class="col-md-11 card input-group bg-white offset-md-1" style="	height: 400px;">
                  <div class="row form-group">
                    <div class="col-md-12 input-group-prepe">
                      <img class="img-fluid d-block m-3" src="assets/Team/AIR Logo.png" width="100"></div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-12" style="">
                          <form action="action-login.php" method="post">
                              <h2 class="text-primary"><b>LOGIN</b></h2>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group mb-2">
                                    <div class="input-group border">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                          <i class="fa fa-fw fa fa-user-o"></i>
                                        </span>
                                      </div>
                                      <input type="text" class="form-control-sm" name="username" placeholder="Staff Id" required="required">
                                    </div>
                                    <small class="form-text text-right text-danger"><i><b>
                              <?php 
                              if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "failed"){
                                  echo "Login failed! Invalid username and password!";
                                }else if($_GET['pesan'] == "logout"){
                                  echo "You have successfully logged out";
                                }else if($_GET['pesan'] == "not_logged_in"){
                                  echo "You must be logged in to access the page";
                                }
                              }
                              ?>
                              </b></i></small>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group border">
                                  <div class="input-group-prepend ">
                                    <span class="input-group-text" id="basic-addon1">
                                      <i class="fa fa-fw fa fa-key"></i>
                                    </span>
                                  </div>
                                  <input type="password" class="form-control-sm" name="password" id="myInput" placeholder="Password" required="required">
                              <div class="form-text text-right text-secondary fa fa-fw fa fa-low-vision mt-2 " required="required"  onclick="myFunction()" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();">
                            </div>
                              </div>
                              </div>
                              <script>
                                function mouseoverPass(obj) {
                                var obj = document.getElementById('myInput');
                                obj.type = "text";
                              }
                              function mouseoutPass(obj) {
                                var obj = document.getElementById('myInput');
                                obj.type = "password";
                              }
                              function myFunction() {
                              var x = document.getElementById("myInput");
                              if (x.type === "password") {
                                x.type = "text";
                              } else {
                                x.type = "password";
                              }
                            }
                              </script>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group mb-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend ">
                                          <span class="input-group-text" id="basic-addon1">
                                          <i class="now-ui-icons ui-1_email-85 lg"></i>
                                        </span>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-light rounded btn-lg text-primary mb-3 bg-aquamarine" style=""><b class="text-white">Submit</b></button>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group mb-2">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7" style=""><img class="p-0 col-md-12 d-none d-md-block" src="assets/Background/tes.png" style="" width="800"></div>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>

</html>