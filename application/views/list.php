<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                $success = $this->session->userdata('success');
                if($success != ""){
                ?>
                <div class="alert alert-success text-center"> <?php echo $success?> </div>
                <?php 
                }
                ?>
                <?php 
                $failure = $this->session->userdata('failure');
                if($failure != ""){
                ?>
                <div class="alert alert-danger text-center"> <?php echo $failure?> </div>
                <?php 
                }
                ?>
            </div>
        </div>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6">
                <h2 class="fw-bold">View Employee</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="<?php echo base_url().'user/create';?>" class="btn btn-primary">Create Employee</a>
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-md-10 mx-auto">
                <table class="table table-bordered table-hover bg-white shadow-sm rounded">
                    <thead class="table-dark">
                        <tr>
                            <!-- <th>Id</th> -->
                            <th>Name</th>
                            <th>Email</th>
                            <th width="80">Edit</th>
                            <th width="100">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($users)) { foreach($users as $user) {?>
                        <tr>
                            <!-- <td> <?php echo $user['id']?> </td> -->
                            <td> <?php echo $user['name']?> </td>
                            <td> <?php echo $user['email']?> </td>
                            <td>
                                <a href="<?php echo base_url().'User/edit/'.$user['id'];?>" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'User/delete/'.$user['id'];?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php }} else { ?>
                        <tr>
                            <td colspan="5" class="text-center">No Records Found</td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
