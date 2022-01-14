<?php
    // Array of 10 names
    $namesArray = ["Charisse", "Garritt", "Heather", "Jared", "Jeremiah", "Jeremy", "Kaelan",  "Kye", "Nathan", "Wendi"];

    // NamesArray max index number variable
    $namesArrayMaxIndex = count($namesArray) - 1;

    // Random number between 0 and 20
    $randomNumber = rand(0, 20);

    /**
     * Function uses global random number and the max index number of the names array.
     * If the random number matches one of the array's indexes it will
     * return true.  If the random number is out of the array's bounds of indexes it 
     * will return false.
     */
    function getRandomNumberResult(){
        global $randomNumber;
        global $namesArrayMaxIndex;
        if($randomNumber <= $namesArrayMaxIndex){
            return true;
        }else{
            return false;
        }
    }// End of getRandomNumberResult()
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Week 1 Assignment</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="description" content="Week One Assignment" keywords="Week one assignment">
        <meta name="Author" content="Jeremy Brannen">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!--Jeremy Brannen WDV441 Week 1 assignment-->
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <script>
        </script>
        
        <style> 
            body{
                color: #484c9b;
                background-color: cornsilk;
            }
        </style>

    </head>

    <body class="container-fluid text-center">

        <h1> Week 1 Assignment</h1>
        
        <?php
            if (getRandomNumberResult()){   
                // Displays if getRandomNumberResult() == true
        ?>
                <h3>Hello <?php echo $namesArray[$randomNumber] ?>! </h3>
        <?php
            }else{          
                // Displays if getRandomNumberResult() == false
        ?>
                <h3>Name List:</h3>
        <?php
                foreach($namesArray as $name){
        ?>
                    <p class="m-0"><?php echo $name ?></p><br>
        <?php
                }
            }    
        ?>
    </body>

</html>