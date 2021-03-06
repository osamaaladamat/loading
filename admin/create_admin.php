<?php
session_start();

include_once 'inc/connection.php'; ?>


<?php 

if(!isset($_SESSION['superadmin'])){
    header('location:index.php');
}

?>

<?php
if(isset($_POST['submit'])){
    
$fName     = $_POST['firstName'];
$lName     = $_POST['lastName'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$cPassword = $_POST['confirmPassword'];

if($_POST['password']===$_POST['confirmPassword']){

$query = "insert into admins(admin_firstname, admin_lastname, admin_email, admin_password) 
          values ('$fName ','$lName','$email','$password')";
       
mysqli_query($conn, $query);

$sucss = "The account has been created successfully";
}
else{ $pass = "Your password not matching";}
   
}

?>

<?php include ('inc/header.php') ?>
<div class="page-body">

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Create Admin</h3>  
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Admin </li>
                    <li class="breadcrumb-item active">Create Admin </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5> Add Admin</h5>
                    <br>
                 
                    <h5><?php if(isset($sucss)){echo "<div class='alert alert-success'> $sucss</div>";}?></h5>
                    <h5><?php if(isset($pass)){echo "<div class='alert alert-danger'> $pass</div>";}?></h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Account</a></li>
                        
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <form class="needs-validation user-add" action="" method="post" >
                                <h4>Account Details</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> First Name</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="firstName" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> Last Name</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom1" name="lastName" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom2" name="email" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span> Password</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom3" name="password" type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> Confirm Password</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4" name="confirmPassword" type="password" required="">
                                </div>
                            
                                            
                                          
                           <div class="row justify-content-end col-12 mr-5 mb-2">
                <button  type="submit" name="submit" class="btn btn-primary">Create</button>
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
<!-- Container-fluid Ends-->

</div>

<?php include ('inc/footer.php') ?>


