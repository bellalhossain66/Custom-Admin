<?php
include 'header.php';
include 'side.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Personal Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active">Personal Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Personal Data</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                            <?php
                            $profile = '0';
                            $query = "SELECT * FROM `admin` WHERE `username`='$_COOKIE[admin99]'";
                            $result = $db->select($query);
                            if ($result) {
                                $profile = $result->fetch_assoc();
                            }
                            ?>
                        <form class="login-form" action="javascript:void(0);" method="post">
                            <div class="form-group notice" style="display: none;">
                                <span class="notice-text text-center h3"></span>
                            </div>
                            <div class="form-group">
                                <label for="inputName">My Photo</label>
                                <input type="file" name="image" class="imgLink" accept="image/*" onchange="previewFileimg()">
                                <div class="chatimg-div mt-3">
                                    <img id="chatimg" class="w-50 h-50">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Full Name</label>
                                <input type="text" id="inputName" class="form-control" value="<?php echo $profile['name'] ?>" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">Phone</label>
                                <input type="text" id="inputPhone" class="form-control" value="<?php echo $profile['phone'] ?>" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Email</label>
                                <input type="text" id="inputEmail" class="form-control" value="<?php echo $profile['email'] ?>" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">Address</label>
                                <input type="text" id="inputAddress" class="form-control" value="<?php echo $profile['address'] ?>" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control bg-success personal-data-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include 'footer.php'
?>

<script>
    function previewFileimg() {
        var extension = $('.imgLink').val().split('.').pop().toLowerCase();
            $('.chatimg-div').show();
            var preview = document.getElementById('chatimg');
            var file = document.querySelector('.imgLink').files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                preview.src = reader.result;
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
    }
    $(document).on('click', '.personal-data-submit', function() {
        var name = $('#inputName').val();
        var phone = $('#inputPhone').val();
        var email = $('#inputEmail').val();
        var address = $('#inputAddress').val();
        var image = $('.imgLink').prop("files")[0];
        var form_data = new FormData();
        form_data.append("image", image);
        form_data.append("name", name);
        form_data.append("phone", phone);
        form_data.append("address", address);
        form_data.append("email", email);
        $.ajax({
            method: 'POST',
            url: 'updateprofileinsert.php',
            data: form_data,
            cache: false,
            contentType: false,
            processData: false,
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
</script>