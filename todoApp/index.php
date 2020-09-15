<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="./script/script.js"></script>
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
</head>
<body>
    <div class="container">
        <!-- header -->
        <?php include 'header.php';?>
        <!-- add new todo -->
        <div class="form-group">
            <label for="input_todo" class="label-add-todo">Add new todo</label>
            <input type="text" class="form-control col-md-3" id="input_todo" placeholder="Add to do">
        </div>
        <button id="add" class="btn btn-primary mb-4">Add</button>
        <!-- show list todo -->
        <?php include 'readTodo.php'?>
    </div>
    
</body>
</html>
