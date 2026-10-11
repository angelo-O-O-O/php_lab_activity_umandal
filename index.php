<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
$full_name = $_POST['name'];
$email_address = $_POST['email'];

$sql = "INSERT INTO users(name, email) VALUES('$full_name','$email_address')";

$result = $conn->query($sql);

if($result){
      
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MySQL User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="d-flex align-items-center justify-content-center m-5">
        <h1 class="fw-bold">User Management System</h1>
    </header>
    
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 shadow-sm">
                <h4>Add New User</h4>

                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter full Name" required>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Email Address" required>
                    </div>

                    <button class="bg-primary text-light w-100 py-2 border-0" type="submit">Submit</button>
                </form>
            </div>

            <div class="col-md-6 shadow-sm">
                <h4>Registered Users</h4>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="fw-bold">
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>