<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
         <div class="col-md-6">
            <h3 class="display-4 mb-5">Add New User</h3>

            <form action="saveUser.php" method="POST">
            <div class="form-group mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div> 
            <div class="formgroup mb-3">
                <label for="">Age</label>
                <input type="number" name="age" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Gender</label>
                <div class="row justify-content-center">
                <div class="col-md-4">
                    <input type="radio" value="Male" name="gender">
                    <label for="">Male</label>
                </div>
                <div class="col-md-4">
                    <input type="radio" value="Female" name="gender">
                    <label for="">Female</label>
                </div>
                </div>
            </div>
            <div class="formgroup">
                <label for="" class="form-label">Address</label>
                <textarea name="address" id="" cols="20" rows="5" class="form-control"></textarea>
            </div>
            
            <div class="row">
                <button type="submit" class="btn btn-primary mt-3 float-right">Save</button>
            </div>
            </form>
         </div>
        </div>
    </div>
</body>
</html>