<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Bootstrap PHP Modal CRUD</title>
</head>
<body>
    <!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <label for="completeName">Name</label>
        <input type="text" class="form-control" id="completeName" placeholder="Enter your name">
    </div>
    <div class="form-group">
        <label for="completeEmail">Email</label>
        <input type="email" class="form-control" id="completeEmail" placeholder="Enter your email">
    </div>
    <div class="form-group">
        <label for="completeMobile">Mobile</label>
        <input type="text" class="form-control" id="completeMobile" placeholder="Enter your mobile">
    </div>
    <div class="form-group">
        <label for="completePlace">Place</label>
        <input type="email" class="form-control" id="completePlace" placeholder="Enter your place">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal" onclick="addUser()">Submit</button>
        <button type="button" class="btn btn-danger">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container my-3">
    <h1 class="text-center">PHP CRUD operations using Bootstrap Modal</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completeModal">Add New user</button>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>