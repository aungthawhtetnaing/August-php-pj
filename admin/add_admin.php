<?php
    session_start();
    include 'connect.php';
    include 'function.php';
        if(isset($_POST['register'])){
        $user_name=$_POST['username'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirmpassword'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $errors=array(
        'username'=>'',
        'password'=>'',
        'confirm_password'=>'',
        'match_password'=>'',
        'email'=>'',
        'phone'=>'',);
    if($user_name==''){$errors['username']='User Name must be enter';}
    else{if(strlen($user_name)<3){$errors['username']='User Name need to be longer';}}
    if($confirm_password==''){$errors['confirm_password']='This field could not be empty';} 
    else{if($password!=$confirm_password){$errors['password']='Password do not match';}}
    if($password==''){$errors['password']='This field could not not be empty';}
    else{if(strlen($password)<3){$errors['password']='Password Need to be longer';}}
    if($email==''){$errors['email']='This field could not be empty Email';}
    if($phone==''){$errors['phone']='This field could not be empty Phone';}
    foreach($errors as $key=>$value){
        if(empty($value)){unset($errors[$key]);}
    }
    if(empty($errors)){
        create_accu1(); //for function
    }
}
?>

<!DOCTYPE html>
<html>
<head>

   <title>August (Drinks & Fried Chicken)</title>
     <link rel="shortcut icon" href="photo/logo1.jpg">

</head>
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css"/>
<script type="text/javascript" src="style/jquery.min.js"></script>
<script type="text/javascript" src="style/popper.min.js"></script>
<script type="text/javascript" src="style/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/icon/css/font-awesome.min.css"/>
<style type="text/css">
     
 
    .page {
            background:lightblue;
            display: flex;
            flex-direction: column;
            height: calc(auto );
            position: absolute;
            place-content: center;
            width: calc(100%  );

        }
        @media (max-width: 767px) {
            .page {
                height: auto;
                margin-bottom: -20px;
                padding-bottom: -20px;
            }
        }
    #letter{
        color:black;
        font-size:20px;
    }
    #box{
    border-radius: 15px;
     border: 2px solid #0095B6;

 
    }
    #box1{
        border: 3px solid #0095B6;
    }
    .title{
        margin-left: 300px;
        color: black;
    }
    #submit{
        width: 100%
        
    }
    .end{
        text-align: center;
        color: black;
    }
</style>
<body>
 <div class="page">
                    <h1 class="title">Create an account</h1>                          
<div class="container" >
  <div class="row" >

<div class="col-lg-6 col-md-8 mx-auto">
<form method="post" class="form-horizontal" >

        
    

        <div class="form-group row">
        <label class="col-sm-4" ><i class="fa fa-user" style="font-size:23px"> &nbsp;<b id="letter" >User Name</b></i></label>
        <div class="col-sm-12">
        <input type="text" name="username" class="form-control" id="box" value="<?php if(isset($user_name)){echo $user_name;}  ?>"/>
        <label class="text-danger"><?php echo isset($errors['username'])? $errors['username']:'';?></label>
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-4" id="letter"><i class="fa fa-key">&nbsp;Password</i></label>
        <div class="col-sm-12">
        <input type="password" name="password" class="form-control" id="box"  value="<?php echo isset($password)?$password:''; ?>"/>
        <label class="text-danger"><?php echo isset($errors['password'])? $errors['password']:''; ?></label>
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-6" id="letter"><i class="fa fa-key">&nbsp;Confirm Password</i></label>
        <div class="col-sm-12">
        <input type="password" name="confirmpassword" class="form-control" id="box" value="<?php echo isset($confirm_password)?$confirm_password:''; ?>"/>
        <label class="text-danger"><?php echo isset ($errors['confirm_password'])? $errors['confirm_password']:''; ?></label>
        <label class="text-danger"><?php echo isset($errors['match_password'])? $errors['match_password']:''?> </label>
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-2" id="letter"><i class="  fa fa-envelope">&nbsp;Email</i></label>
        <div class="col-sm-12">
        <input type="email" name="email" class="form-control" id="box" value="<?php echo isset($email)?$email:'' ?>"/>
        <label class="text-danger"><?php echo isset($errors['email'])? $errors['email']:'' ?></label>
        </div>
        </div>

        <div class="form-group row">
        <label class="col-sm-2" id="letter"><i class="fa fa-phone">&nbsp;Phone</i></label>
        <div class="col-sm-12">
        <input type="text" name="phone" class="form-control" id="box" value="<?php echo isset($phone)?$phone:'' ?>"/>
        <label class="text-danger"><?php echo isset($errors['phone'])? $errors['phone']:'' ?></label>
        </div>
        </div>


        <div class="form-group row">
        <div class=" col-sm-12">

        <button type="submit" class="btn btn-success btn-lg btn-block"  name="register" >Sign Up</button><br>
<div><a href="admin_list.php"> <p style="margin-left: 44%; font-size: 20px;color: black;text-decoration: none; "><i class=" fa fa-arrow-left"></i>&nbsp;Back</p></a></div>
          </div>
        </div>
</div><!--col --->

 
</form>

</div><!--row end-->

            </div><!--container end-->
            <div >
        </div>       
</body>
</html>