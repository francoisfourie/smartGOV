<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Update Staff</title>
    <style>
        .input {
            display: block;
            border: 2px solid #ccc;
            width: 98%;
            padding: 10px;
            margin-left: 10px;
            margin-right: 10px;
            height: 44px;
            border-radius: 5px;
        }
        label {
            font-size: 16px;
            margin-left: 10px;
        }

        .btn1 {
            float: right;
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            width: 20%;
            margin-top: 10px;
            margin-bottom: 10px;
            border: none;
        }

        .btn2 {
            float: right;
            background: #555;
            color: #fff;
            border-radius: 5px;
            width: 100%;
            border: none;
            height: 35px;
        }

        .btn {
            float: right;
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            width: 20%;
            margin-top: 10px;
            margin-bottom: 10px;
            border: none;
        }

        .btn:hover, .btn1:hover{
            opacity: .7;
        }
        .error {
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        /* margin: 20px auto; */
        margin-top: 0px;
        }

        .success {
        background: #D4EDDA;
        color: #40754C;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        /* margin: 20px auto; */
        margin-top: 0px;
        }
    </style>
</head>
<?php
 session_start(); 
 include "conn.php";
 $currentUser = $_SESSION['currentUser'];
 $email = $_SESSION['update_id'];
 if(empty($currentUser)) $currentUser = "Default User";

if(isset($_POST['btn_submit']))
{
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $role = $_POST['role'];
    if($role == "Blocked"){
        $sql1 = "UPDATE login_details SET statuss='$role' WHERE email='$email'";
    }else{
        $sql1 = "UPDATE login_details SET role='$role', statuss='Active' WHERE email='$email'";
    }					
    
    if ($conn->query($sql1) === TRUE) {

        $_SESSION['email_subject'] = "Account Updated Successfully";
        $_SESSION['email_email'] = $email;
        $_SESSION['email_body'] = "<h5>Hello <br><br>Your account has been updated successfully.</h5>";
        $_SESSION['location'] = "<script>location.href = 'thankyou.php?'</script>";
        // echo"<script>location.href = 'send_email.php?'</script>";
        $_SESSION['msg1'] = "Thank You!";
        $_SESSION['msg2'] = "Account updated successfully.";
        $_SESSION['msg3'] = "<script>location.href = 'add_staff.php?'</script>";
        echo"<script>location.href = 'send_email.php?'</script>";
    } else {
        header("Location: update-role.php?error=Something Went Wrong!!! Please Try Again."); exit();  
    }
}    

if(isset($_POST['btn_update'])){
    $_SESSION['update_id'] = $_POST['btn_update'];
    echo"<script>location.href = 'update_role.php?'</script>";
}
    
?>

<body>
<form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
            <img src="img/logo.PNG" style="width:200px; height:100px;"></i></div>
            <div class="list-group list-group-flush my-3">
                <!-- ------------------------------------------------------------------------------------------ -->
                <a style="margin-top: -25px;" href="applications2.php" class="list-group-item list-group-item-action bg-transparent second-text"><i
                    ></i>Applications</a>
                <a style="margin-top: -25px;" href="#" class="list-group-item list-group-item-action bg-transparent second-text"><i
                    ></i>Application Details</a>
                <a style="margin-top: -25px;" href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i
                    ></i>Add Staff</a>
                <!-- ------------------------------------------------------------------------------------------ -->
                <a href="login.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <i class="fas fa-user me-2"></i><b><?php echo $currentUser  ?></b>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">

                <div class="row my-5">
                <h3 class="fs-4 mb-3">Update Staff Member Role</h3>
                <div class="content" style="border: 1px solid; width: 98%; margin-left: 10px; border-radius: 10px; margin-top: 5px;">
                <!-- --------------------------------DISPLAY ERROR AND SUCCESS MESSAGE-------------------------------- -->
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                <label style="margin-top: 10px;"><b>Role</b></label>
                <select name='role' class='input'>
                <option value='1'>Stage 1</option>   <option value="2">Stage 2</option> <option value='3'>Stage 3 - Admin</option>
                <option value='Blocked'>Block Account</option>
                </select>
                <label></label>
                <button type="submit" class="btn1" name="btn_submit">Submit</button>
                <a type="submit" class="btn" href="add_staff.php">Back</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    </form>
</body>

</html>