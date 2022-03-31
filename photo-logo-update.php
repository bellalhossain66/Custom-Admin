<?php
include 'header.php';
include 'side.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Photo-Logo Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active">Photo-Logo</li>
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
                        <h3 class="card-title">Photo-Logo Data</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="notice text-center" style="display: none;">
                            <span class="notice-text"></span><br>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <form class="login-form" action="javascript:void(0);" method="post">
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputName">Favicon Logo</label>
                                                    <input type="file" class="imgLink" accept="image/*" onchange="previewFileimg()">
                                                    <div class="chatimg-div mt-3">
                                                        <img id="chatimg" class="w-50 h-50">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="btn btn-success photo-logo-submit" action="favicon">Submit</span>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <form class="login-form" action="javascript:void(0);" method="post">
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputName">Header Logo</label>
                                                    <input type="file" class="imgLinkh" accept="image/*" onchange="previewFileimgh()">
                                                    <div class="chatimg-divh mt-3">
                                                        <img id="chatimgh" class="w-50 h-50">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="btn btn-success photo-logo-submit" action="header">Submit</span>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <form class="login-form" action="javascript:void(0);" method="post">
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputName">Banner Photo 1</label>
                                                    <input type="file" class="imgLink1" accept="image/*" onchange="previewFileimg1()">
                                                    <div class="chatimg-div1 mt-3">
                                                        <img id="chatimg1" class="w-50 h-50">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="btn btn-success photo-logo-submit" action="banner">Submit</span>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <form class="login-form" action="javascript:void(0);" method="post">
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputName">Banner Photo 2</label>
                                                    <input type="file" class="imgLink2" accept="image/*" onchange="previewFileimg2()">
                                                    <div class="chatimg-div2 mt-3">
                                                        <img id="chatimg2" class="w-50 h-50">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="btn btn-success photo-logo-submit" action="banner2">Submit</span>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <form class="login-form" action="javascript:void(0);" method="post">
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputName">Banner Photo 3</label>
                                                    <input type="file" class="imgLink3" accept="image/*" onchange="previewFileimg3()">
                                                    <div class="chatimg-div3 mt-3">
                                                        <img id="chatimg3" class="w-50 h-50">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="btn btn-success photo-logo-submit" action="banner3">Submit</span>
                                            </td>
                                        </form>
                                    </tr>
                                    <tr>
                                        <form class="login-form" action="javascript:void(0);" method="post">
                                            <td>
                                                <div class="form-group">
                                                    <label for="inputName">Banner Photo 4</label>
                                                    <input type="file" class="imgLink4" accept="image/*" onchange="previewFileimg4()">
                                                    <div class="chatimg-div4 mt-3">
                                                        <img id="chatimg4" class="w-50 h-50">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="btn btn-success photo-logo-submit" action="banner4">Submit</span>
                                            </td>
                                        </form>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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

    function previewFileimgh() {
        var extension = $('.imgLinkh').val().split('.').pop().toLowerCase();
        $('.chatimg-divh').show();
        var preview = document.getElementById('chatimgh');
        var file = document.querySelector('.imgLinkh').files[0];
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

    function previewFileimg1() {
        var extension = $('.imgLink1').val().split('.').pop().toLowerCase();
        $('.chatimg-div1').show();
        var preview = document.getElementById('chatimg1');
        var file = document.querySelector('.imgLink1').files[0];
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

    function previewFileimg2() {
        var extension = $('.imgLink2').val().split('.').pop().toLowerCase();
        $('.chatimg-div2').show();
        var preview = document.getElementById('chatimg2');
        var file = document.querySelector('.imgLink2').files[0];
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

    function previewFileimg3() {
        var extension = $('.imgLink3').val().split('.').pop().toLowerCase();
        $('.chatimg-div3').show();
        var preview = document.getElementById('chatimg3');
        var file = document.querySelector('.imgLink3').files[0];
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

    function previewFileimg4() {
        var extension = $('.imgLink4').val().split('.').pop().toLowerCase();
        $('.chatimg-div4').show();
        var preview = document.getElementById('chatimg4');
        var file = document.querySelector('.imgLink4').files[0];
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
    $(document).on('click', '.photo-logo-submit', function() {
        var action = $(this).attr('action');
        var image2 = $('.imgLink').val();
        var image = '';
        if (image2 == '') {
            image2 = $('.imgLinkh').val();
            if (image2 == '') {
                image2 = $('.imgLink1').val();
                if (image2 == '') {
                    image2 = $('.imgLink2').val();
                    if (image2 == '') {
                        image2 = $('.imgLink3').val();
                        if (image2 == '') {
                            image2 = $('.imgLink4').val();
                            if (image2 != '') {
                                image = $('.imgLink4').prop("files")[0];
                            }
                        } else {
                            image = $('.imgLink3').prop("files")[0];
                        }
                    } else {
                        image = $('.imgLink2').prop("files")[0];
                    }
                } else {
                    image = $('.imgLink1').prop("files")[0];
                }
            } else {
                image = $('.imgLinkh').prop("files")[0];
            }
        } else {
            image = $('.imgLink').prop("files")[0];
        }
        var form_data = new FormData();
        form_data.append("image", image);
        form_data.append("action", action);
        $.ajax({
            method: 'POST',
            url: 'photologoinsert.php',
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