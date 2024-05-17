<?php
session_start();

if (!isset($_SESSION['userId'])) {
    header('location:login.php');
    exit();
}

require "assets/function.php";
require 'assets/db.php';

$notice = "";
if (isset($_POST['saveSetting'])) {
    if ($con->query("UPDATE users SET email='{$_POST['email']}', password='{$_POST['password']}' WHERE id='{$_SESSION['userId']}'")) {
        $_SESSION['notice'] = "Successfully Saved";
        header("location:accountSetting.php");
        exit();
    } else {
        $notice = "<div class='alert alert-danger'>Error is: " . $con->error . "</div>";
    }
}

if (isset($_SESSION['notice'])) {
    $notice = "<div class='alert alert-success'>" . $_SESSION['notice'] . "</div>";
    unset($_SESSION['notice']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo siteTitle(); ?></title>
    <?php require "assets/autoloader.php"; ?>
    <style type="text/css">
        <?php include 'css/customStyle.css'; ?>
    </style>
</head>
<body style="background: #ECF0F5;padding:0;margin:0">
<div class="dashboard" style="position: fixed;width: 18%;height: 100%;background:#ccd7db">
    <div style="background:#3C8DBC;padding: 10.3px 3px;color:white;font-size: 25pt;text-align: left;padding: 10px 14px 10px;text-shadow: 1px 1px 8px black">
        <a href="index.php" style="color: white;text-decoration: none; font-family:'Bahnschrift'"><?php echo strtoupper(siteName()); ?></a>
    </div>
    <div>
        <div style="background:#ffffff;color: black;padding: 14px 8px;border-left: 3px solid #000000;">
            <span><i class="fa fa-dashboard fa-fw"></i> Dashboard</span>
        </div>
        <div class="nav-item">
            <ul class="nav nav-pills blue nav-stacked">
                <li role="presentation"><a href="index.php">Home</a></li>
                <li role="presentation"><a href="inventory.php">Inventory</a></li>
                <li role="presentation"><a href="addnew.php">Add New Items</a></li>
                <li role="presentation"><a href="reports.php">Reports</a></li>
            </ul>
        </div><br>
    </div>
    <div style="background:#ffffff;color: black;padding: 14px 8px;border-left: 3px solid #000000;">
        <span><i class="fa fa-globe fa-fw"></i> Other Menu</span>
    </div>
    <div class="nav-item">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="profile.php">Profile Settings</a></li>
            <li role="presentation" class="active"><a href="accountSetting.php">Account Settings</a></li>
        </ul>
    </div>
</div>
<div class="marginLeft">
    <div style="color:white;background:#3C8DBC;padding: 0px 0px 20px">
        <div class="pull-right flex rightAccount" style="padding-right: 11px;padding: 7px;">
            <div><img src="photo/<?php echo $user['pic']; ?>" style='width: 41px;height: 33px;' class='img-circle'></div>
            <div style="padding: 8px"><?php echo ucfirst($user['name']); ?></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="account" style="display: none;">
        <div style="background: #3C8DBC;padding: 22px;" class="center">
            <img src="photo/<?php echo $user['pic']; ?>" style='width: 100px;height: 100px; margin:auto;' class='img-circle img-thumbnail'>
            <br><br>
            <span style="font-size: 13pt;color:#CEE6F0"><?php echo $user['name']; ?></span><br>
            <span style="color: #CEE6F0;font-size: 10pt">Member Since:<?php echo $user['date']; ?></span>
        </div>
        <div style="padding: 11px;">
            <a href="profile.php"><button class="btn btn-default" style="border-radius:0">Profile</button></a>
            <a href="logout.php"><button class="btn btn-default pull-right" style="border-radius: 0">Sign Out</button></a>
        </div>
    </div>
    <div class="content2">
        <ol class="breadcrumb ">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Account Settings</li>
        </ol>
        <?php echo $notice ?>
        <div style="width: 55%;margin: auto;padding: 22px;" class="well well-sm center">
            <h4>Login Setting</h4><hr>
            <form method="POST">
                <div class="form-group">
                    <label for="some" class="col-form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" id="some" required>
                </div>
                <div class="form-group">
                    <label for="some" class="col-form-label">Password</label>
                    <input type="password" name="password" value="<?php echo $user['password']; ?>" class="form-control" id="some" required>
                </div>
                <div class="center">
                    <button class="btn btn-primary btn-sm btn-block" name="saveSetting">Save Setting</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $(".rightAccount").click(function(){
            $(".account").fadeToggle();
        });
    });
</script>
