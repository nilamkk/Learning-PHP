<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/LearningPHP/assignments/assignment3.css" rel="stylesheet" >
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

    <title>Assignment 3</title>
  </head>
  <body>
  
    <!-- Header starts from here -->
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


    <!-- Calculator starts here -->
    <div class="calculator">

        <!-- display starts here -->
        <div class="input" id="input"></div>
        
        <!-- buttons container -->
        <div class="buttons">

            <!-- operators starts here -->
            <div class="operators">
                <div>+</div>
                <div>-</div>
                <div>&times;</div>
                <div>&divide;</div>
            </div>

            <!-- bottom numbers contaiiner -->
            <div class="left-right-container">

                <!-- left numbers starts here -->
                <div class="leftPanel" style="flex-grow: 8">
                    <div class="numbers">
                        <div>7</div>
                        <div>8</div>
                        <div>9</div>
                    </div>
                    <div class="numbers">
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                    </div>
                    <div class="numbers">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                    </div>
                    <div class="numbers">
                        <div>0</div>
                        <div>.</div>
                        <div id="clear">C</div>
                    </div>
                </div>

                <!-- equal sign starts here -->
                <div style="flex-grow: 2;">
                    <div class="equal" id="result" >=</div>
                </div>

            </div>

        </div>

    </div>



    <!-- Scripts starts from here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/LearningPHP/assignments/assignment3.js" ></script>

</body>
</html>

