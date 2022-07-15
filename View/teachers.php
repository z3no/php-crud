<?php
declare(strict_types=1);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>Name</th>-->
<!--        <th>Email</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!---->
<!--    --><?php //foreach($test as $student): ?>
<!--        <tr>-->
<!--            <td>--><?php //echo $student->getId(); ?><!--</td>-->
<!--            <td>--><?php //echo $student->getName(); ?><!--</td>-->
<!--            <td>--><?php //echo $student->getEmail(); ?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->
<!--<button type="button" class="btn btn-primary">Primary</button>-->


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <title>CRUD</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
<!--            <button  class="btn btn-success mt-2" data-toggele="modal" data-target="#create"><i class="fa.fa-plus"></i>+ Add</button>-->
            <!-- Button trigger modal -->
            <button type="button"  class="btn btn-success mt-2" data-toggle="modal" data-target="#exampleModal">
                <i class="fa.fa-plus"></i>+ Add
            </button>
            <table class="table table-striped table-hover mt-2">
                <thead class="thead-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Write</th>
                <th>Delete</th>

                </thead>
                <tbody>
                <?php foreach($allTeachers as $teacher): ?>
                        <tr>
                         <td><?php echo $teacher->getId(); ?></td>
                        <td><?php echo $teacher->getName(); ?></td>
                         <td><?php echo $teacher->getEmail(); ?></td>
                            <td><a href="" class="btn btn-success mt-2"><i class="fa fa-edit"></i></a></td>
                            <td><a href="" class="btn btn-danger mt-2"><i class="fa fa-trash-alt"></i></a></td>
                     </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <small>Name</small>
                        <label>
                            <input type="text" class="form-control" name="name">
                        </label>
                    </div>
                    <div class="form-group">
                        <small>Email</small>
                        <label>
                            <input type="text" class="form-control" name="email">
                        </label>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="add">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




























