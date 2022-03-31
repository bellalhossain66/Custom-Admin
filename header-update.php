<?php
include 'header.php';
include 'side.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Header Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active">Header Data</li>
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
                        <h3 class="card-title">Header Update</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tbody class="header-option-load"></tbody>
                        </table>
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
    $(document).on('click', '.header-show-hide-btn', function(){
        var headerOption = $(this).attr('header-option');
        var action = $(this).attr('action');
        var headershowhidebtn = 0;
        $.ajax({
            method: 'post',
            url: 'headershowhideinsert.php',
            data: {
                headershowhidebtn: headershowhidebtn,
                headerOption: headerOption,
                action: action
            },
            success: function(data){
                $('.header-option-load').load('headerOptionSection.php');
            },
            error: function(err){
                $('.header-option-load').load('headerOptionSection.php');
            }
        })
    })
</script>