<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    
    <style>
        .main-header-nkk1{
            background-color:#48b1bf;
            color:black;
            padding:10px;
            text-align:center;
            margin:0;
        }
    </style>

    <title>Assignment 1</title>
  </head>
  <body>
  
    <h1 class="main-header-nkk1">This website is built by Nilam Kumar Kalita (1815127) </h1>


    <!-- NAV BAR HERE -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">NKK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/LearningPHP/assignments/" target="_blank">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/LearningPHP/assignments/assignment1.php" target="_blank">Assignment 1 </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/LearningPHP/assignments/assignment2.php" target="_blank"> Assignment 2</a>   
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/LearningPHP/assignments/assignment3.php" target="_blank"> Assignment 3</a>   
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="max-width:1000px;margin-top:50px;">
        <form action="/LearningPHP/assignments/assignment1.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter a number here:</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tableNo" placeholder="eg: 9" required>
            </div>
            <button type="submit" class="btn btn-primary" name="tbSubBtn">Submit</button>
        </form>

    </div>


    <?php
        if( $_SERVER['REQUEST_METHOD']=='POST'){
            if( isset($_POST['tbSubBtn']) ){
                $num= $_POST['tableNo'];

                echo '<div class="container" style="max-width:300px">';
                echo "<p>Here is your multiplication table for <b> $num </b> </p>";

                echo '<table class="table table-striped">
                <tbody>';
                
                for($x=1;$x<=10;$x++){
                    echo '<tr>
                        <td >'.$num.'</td>
                        <td>  *  </td>
                        <td>'. $x .'</td>
                        <td>  =  </td>
                        <td>'. $x*$num .'</td>
                    </tr>';
                }

                echo '</tbody>
                </table>';

                echo '</div>';
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

