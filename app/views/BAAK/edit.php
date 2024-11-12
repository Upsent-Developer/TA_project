<?php include 'app/templates/header.php'; ?>

<div class="main-panel">
    <div class="content-wrapper">

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Edit Data BAAK</h4>
            <p class="card-description text-center">Form untuk mengedit data BAAK</p>
            <form method="POST" action="" class="forms-sample">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $baak['nama']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $baak['username']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $baak['password']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $baak['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_telepon">No Telepon</label>
                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon" value="<?php echo $baak['no_telepon']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <a href="index.php" class="btn btn-light">Kembali</a>
            </form>
        </div>
    </div>
</div>
    </div>
</div>

<?php include 'app/templates/footer.php'; ?>



