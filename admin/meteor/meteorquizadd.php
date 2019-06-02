<!DOCTYPE
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
            <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
</head>
<body>


<div class="card">

    <!-- Card body -->
    <div class="card-body">

        <!-- Material form register -->
        <form action="meteorquizlog.php" method="post">
            <p class="h4 text-center py-4">New Question</p>

            <!-- Material input text -->
            <div class="md-form">

                <label for="materialFormCardNameEx" class="font-weight-light">Question</label>
                <input type="text" name="que" id="materialFormCardNameEx" class="form-control">
               
            </div>

            <!-- Material input email -->
            <div class="md-form">

                <label for="materialFormCardEmailEx" class="font-weight-light">Option 1</label>
                <input type="text" name="option_1" id="materialFormCardEmailEx" class="form-control">
                
            </div>

            <!-- Material input email -->
            <div class="md-form">
                
                <label for="materialFormCardEmailEx" class="font-weight-light">Option 2</label>
                <input type="text" name="option_2" id="materialFormCardEmailEx" class="form-control">
               
            </div>

            <!-- Material input password -->
            <div class="md-form">
            <label for="materialFormCardEmailEx" class="font-weight-light">Option 3</label>
                <input type="text" name="option_3" id="materialFormCardEmailEx" class="form-control">
                
            </div>
            
            <div class="md-form">
            <label for="materialFormCardEmailEx" class="font-weight-light">Option 4</label>
                <input type="text" name="option_4" id="materialFormCardEmailEx" class="form-control">
                
            </div>

            <div class="md-form">
            <label for="materialFormCardEmailEx" class="font-weight-light">Answer</label>
                <input type="text" name="answer" id="materialFormCardEmailEx" class="form-control">
                
            </div>


            <div class="text-center py-4 mt-3">
                <button class="btn btn-primary" type="submit">Add Question</button>
                <a class="btn btn-danger" href="meteorquiz.php" role="button">Cancel</a>
            </div>
        </form>
        <!-- Material form register -->

    </div>
    <!-- Card body -->

</div>
<!-- Card -->
</form>
</body>
</html>
