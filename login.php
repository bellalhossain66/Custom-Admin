<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Admin LogIn</b>
        </div>
        <div class="card">
            <div class="card-body login-card-body">

                <form action="javascript:void(0)" method="post">
                    <div class="input-group notice justify-content-md-center" style="display: none;">
                        <span class="notice-text"></span>
                    </div><br>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control username" placeholder="User name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block loginsubmit">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./plugins/jquery/jquery.min.js"></script>
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./dist/js/adminlte.min.js"></script>
</body>

</html>
<script>
    $(document).on('click', '.loginsubmit', function() {
        var username = $('.username').val();
        var password = $('.password').val();
        var loginsubmit = 0;
        $.ajax({
            method: 'POST',
            url: 'loginAdmin.php',
            data: {
                loginsubmit: loginsubmit,
                username: username,
                password: password
            },
            success: function(data) {
                if (data == 'done') {
                    $('.notice').show();
                    $('.notice-text').html('<span class="text-success">successfully loging...</span>')
                    setTimeout(function() {
                        window.location.href = './index.php';
                    }, 3000)
                } else {
                    $('.notice').show();
                    $('.notice-text').html('<span class="text-danger">' + data + '</span>')
                }
            },
            error: function(err) {
                $('.notice').show();
                $('.notice-text').html('<span class="text-danger">try again!</span>')
            }
        })
    })
</script>