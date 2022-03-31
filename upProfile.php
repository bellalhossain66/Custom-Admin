<?php include 'header.php' ?>
<?php include 'side.php' ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile Update</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active">Profile Update</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group notice">
                            <span class="notice-text"></span>
                        </div>
                        <div class="form-group">
                            <label for="inputUsername">User Name</label>
                            <input type="text" id="inputUsername" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control bg-success username-update-submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Password Update</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group notice2">
                            <span class="notice-text2"></span>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">New Password</label>
                            <input type="text" id="inputPassword" class="form-control" placeholder="Enter new password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control bg-success password-update-submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>
<script>
    $(document).on('click', '.username-update-submit', function() {
        var username = $('#inputUsername').val();
        var usernameupdatesubmit = 0;
        $.ajax({
            method: 'POST',
            url: 'updateproinsert.php',
            data: {
                usernameupdatesubmit: usernameupdatesubmit,
                username: username
            },
            success: function(data) {
                if (data == 'done') {
                    $('.notice').show();
                    $('.notice-text').html('<span class="text-success">Successfull</span>')
                } else {
                    $('.notice').show();
                    $('.notice-text').html('<span class="text-danger">' + data + '</span>')
                }
            },
            error: function(err) {
                $('.notice').show();
                $('.notice-text').html('<span class="text-success">Try Again!</span>')
            }
        })
    })
    $(document).on('click', '.password-update-submit', function() {
        var password = $('#inputPassword').val();
        var passwordupdatesubmit = 0;
        $.ajax({
            method: 'POST',
            url: 'updateproinsert.php',
            data: {
                passwordupdatesubmit: passwordupdatesubmit,
                password: password
            },
            success: function(data) {
                if (data == 'done') {
                    $('.notice2').show();
                    $('.notice-text2').html('<span class="text-success">Successfull</span>')
                } else {
                    $('.notice2').show();
                    $('.notice-text2').html('<span class="text-danger">' + data + '</span>')
                }
            },
            error: function(err) {
                $('.notice2').show();
                $('.notice-text2').html('<span class="text-success">Try Again!</span>')
            }
        })
    })
</script>