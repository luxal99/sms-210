<?php
    include 'header.php'
?>

<link rel="stylesheet" href="assets/css/index.css">
<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm login-div">
                <div class="text-center">
                    <img src="assets/img/Palacky_University_Olomouc_logo.png" width="300px" alt="" class="img-fluid">
                </div>
                <div class="form-div">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="login-btn">Login</button>
                        </div>
                    </form>
                </div>
                <div class="text-center">
                   <h6><a href="pages/registration.php">Create account <i class="fa fa-arrow-right"></i></a></h6>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
</body>

</html>