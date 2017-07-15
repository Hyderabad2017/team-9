<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Blood Bank</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['user_name'])||isset($_SESSION['buyer_user_name'])) {
                    ?>
                    <li><a href = "home1.php"><span class = "glyphicon glyphicon-home"></span> Home </a></li>
                 <?php   if(isset($_SESSION['user_name'])){ ?>
                    <li><a href = "seller_account1.php"><span class = "glyphicon glyphicon-cog"></span> Settings </a></li>
                    <li><a href = "seller_profile.php"><span class = "glyphicon glyphicon-user"></span> Profile</a></li>
                 <?php } ?>
                    <?php if(isset($_SESSION['buyer_user_name'])) { ?>
                     <li><a href = "buyer_account.php"><span class = "glyphicon glyphicon-cog"></span> Settings </a></li>
                    <li><a href = "buyer_profile.php"><span class = "glyphicon glyphicon-user"></span> Profile</a></li>
                    <?php } ?>
                    
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>