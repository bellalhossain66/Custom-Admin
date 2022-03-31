<?php include 'header.php' ?>
<?php include 'side.php' ?>

<link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active">All Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sn.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th style="width: 40%">Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                 $i=0;
                        $product = '0';
                        $query = "SELECT * FROM `product_ad`";
                        $result = $db->select($query);
                        if ($result) {
                            foreach ($result as $product){
                                $i++;
                                ?>
                               
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <img src="./image/product/<?php echo $product['image'] ?>" width="100" height="">
                                    </td>
                                    <td><?php echo $product['name'] ?></td>
                                    <td><?php echo $product['description'] ?></td>
                                    <td>
                                        <span class="btn btn-sm btn-danger deleteProduct" proId="<?php echo $product['id'] ?>"><i class="fa fa-trash"></i></span>
                                    </td>
                                </tr> <?php
                            }
                        }
                        ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>
<script src="./plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    $(document).on('click', '.deleteProduct', function(){
        var proId = $(this).attr('proId');
        var deleteProduct = 0;
        $.ajax({
            method: 'POST',
            url: 'addproductinsert.php',
            data: {
                deleteProduct: deleteProduct,
                proId: proId
            },
            success: function(data){
                location.reload();
            }
        })
    })
</script>