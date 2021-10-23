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
        .span-number{
            color:#0047AB;
        }
    </style>

    <title>Assignment 2</title>
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
        <form action="/LearningPHP/assignments/assignment2.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter scholar no here:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="schno" placeholder="eg: 1815127" required>
            </div>
            <button type="submit" class="btn btn-primary" name="schSubBtn">Submit</button>
        </form>

    </div>

    <?php

        if( $_SERVER['REQUEST_METHOD']=='POST'){
            if( isset($_POST['schSubBtn']) ){
                // demo schno 1815127                
                $schno= $_POST['schno'];

                $valid=true;
                $errMsg="";

                // length is 7
                $schnoLen= strlen($schno);
                if( $schnoLen != 7 ){
                    $valid=false;
                    $errMsg= "Length must be 7";
                }

                // check if all are digits
                for($i=0;$i<7;$i++){
                    if( $valid==false )
                        break;
                    if( $schno[$i]<'0' || $schno[$i]>'9' ){
                        $valid=false;
                        $errMsg= "Input can have only digits";
                        break;
                    }
                }

                // 67 to 21 year
                if( $valid==true ){
                    $year= (int)($schno[0].$schno[1]);
                    if( $year<67 && $year>21  ){
                        $valid=false;
                        $errMsg="Year should be between 1967 and 2021 (both inclusive).";
                    }elseif( $year>=67 && $year<=99 ){
                        $year= 1900+$year;
                    }else{
                        $year= 2000+$year;
                    }
                }

                // 1 or 2 or 3
                if($valid==true ){
                    $degree= (int)$schno[2];
                    if($degree<0 || $degree>4){
                        $valid=false;
                        $errMsg="Degree not valid";
                    }elseif( $degree==1 ){
                        $degree="B.Tech";
                    }elseif($degree==2){
                        $degree="M.Tech";
                    }else{
                        $degree="PhD";
                    }
                }
                
                // 1 to 6
                if($valid==true){
                    $branch= (int)$schno[3];
                    if($branch<0 || $branch>6){
                        $valid=false;
                        $errMsg= "branch not valid ";
                    }elseif( $degree=="B.Tech")  {
                        switch($branch){
                            case 1: $branch="in <b> <span class='span-number'>CE</span> </b> ";break;
                            case 2: $branch="in <b> <span class='span-number'>ME</span> </b>";break;
                            case 3: $branch="in <b> <span class='span-number'>EE</span> </b>";break;
                            case 4: $branch="in <b> <span class='span-number'>ECE</span> </b>";break;
                            case 5: $branch="in <b> <span class='span-number'>CSE</span> </b>";break;
                            case 6: $branch="in <b> <span class='span-number'>EIE</span> </b>";break;
                        }
                    }else{
                        $branch="";
                    }
                }

                echo '<div class="container" style="max-width:1000px;margin-top:50px;">';
                echo "<p>Here is your details for <b > <span class='span-number'> $schno </ span> </b> :</p>";
                if( $valid==true ){
                    echo "<p>The student Admitted in <b><span class='span-number'>$year</span> </b>year</p>";
                    echo "<p>The student studying <b><span class='span-number'>$degree</span> </b> $branch</p>";
                }else{
                    echo "<p>Your input is not valid !!!</p>";
                    echo "<p>Error: ".$errMsg . '</p>' ;
                }
                echo '</div>';
            }
        }
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>