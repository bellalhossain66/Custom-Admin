<?php include 'header.php' ?>
<?php include 'side.php' ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Update</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active">Product Update</li>
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
                        <h3 class="card-title">Add Product</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="login-form" action="javascript:void(0);" method="post">
                            <div class="form-group notice" style="display: none">
                                <span class="notice-text"></span>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Product Name</label>
                                <input type="text" id="inputName" class="form-control" placeholder="Product Name">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Product Description</label>
                                <textarea id="inputDescription" class="form-control" rows="4" placeholder="Product description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">Product Photo</label>
                                <input type="file" name="image" class="imgLink" accept="images/*" onchange="previewFileimg()">
                                <div class="chatimg-div mt-3">
                                    <img id="chatimg" class="w-50 h-50">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control bg-success add-product-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>

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
    $(document).on('click', '.add-product-submit', function() {
        var name = $('#inputName').val();
        var description = $('#inputDescription').val();
        var image = $('.imgLink').prop("files")[0];
        var form_data = new FormData();
        form_data.append("image", image);
        form_data.append("name", name);
        form_data.append("description", description);
        $.ajax({
            method: 'POST',
            url: 'addproductinsert.php',
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
                $('.notice-text').html('<span class="text-success">Try Again!!</span>')
            }
        })
    })
</script>