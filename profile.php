<?php include 'header.php' ?>
<?php include 'side.php' ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <?php
                        $profile = '0';
                        $query = "SELECT * FROM `admin` WHERE `username`='$_COOKIE[admin99]'";
                        $result = $db->select($query);
                        if ($result) {
                            $profile = $result->fetch_assoc();
                        }
                        ?>
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="./image/<?php echo $profile['image'] ?>" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center"><?php echo $profile['name'] ?></h3>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Username</b> <a class="float-right"><?php echo $profile['username'] ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Password</b> <a class="float-right"><?php echo $profile['password'] ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone</b> <a class="float-right"><?php echo $profile['phone'] ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right"><?php echo $profile['email'] ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="float-right"><?php echo $profile['address'] ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>