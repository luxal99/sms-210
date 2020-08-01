<?php
include 'header.php'
?>

<link rel="stylesheet" href="../assets/css/registration.css">
<link rel="stylesheet" href="assets/node_modules/bs-stepper/dist/css/bs-stepper.min.css">
<script src="assets/node_modules/bs-stepper/dist/js/bs-stepper.min.js"></script>

<body>
    <div class=" login-container">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm login-div">
                <div id="stepper1" class="bs-stepper">
                    <div class="bs-stepper-header">
                        <div class="step" data-target="#test-l-1">
                            <button type="button" class="btn step-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Credential information</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#test-l-2">
                            <button type="button" class="btn step-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">User information</span>
                            </button>
                        </div>
                        <div class="line"></div>

                    </div>
                    <div class="bs-stepper-content">
                        <div id="test-l-1" class="content">
                            <div class="step-form">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </form>
                                <button class="login-btn next-btn" onclick="stepper1.next()">Next</button>

                            </div>

                        </div>
                        <div id="test-l-2" class="content">
                        <div class="step-form">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full name">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                    </div>
                                </form>
                                <button class="previous-btn" onclick="stepper1.previous()">Previous</button>
                                <button class="login-btn next-btn" style="margin-left: 1em;">Save</button>

                            </div>

                        </div>
                        <div id="test-l-3" class="content">
                            <p class="text-center">test 3</p>
                            <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                            <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>

    <script type="" src="assets/js/stepper.js"></script>
</body>