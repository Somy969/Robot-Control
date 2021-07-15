<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Style.css" rel="stylesheet" type="text/css"/>
        <title>Base Control </title>
    </head>
    
    
    <body>
        <h1>Robot Base Control</h1>
        
        <form action="index.php" method="Post">
            <button class="LeftBtn" type="submit" name="Left"><img id="Left" src="Left.png"></button>
            <button class="RightBtn" type="submit" name="Right"><img id="Right" src="arrow.png"></button>
            <button class="StopBtn" type="submit" name="Stop"><img id="Stop" src="stop.png"></button>
            <button class="BackwardBtn" type="submit" name="Backward"><img id="Backward" src="down.png"></button>
            <button class="ForwardBtn" type="submit" name="Forward"><img id="Forward" src="up.png"></button>
            <input type="image" class="robotimg" src="imgRobot.jpg">
        </form>
        
        <?php
    
        //Database connection ...
        $conn = new mysqli('localhost', 'root', '217044905', 'robot');
        
        //When Stop button clicked..
        if (isset(filter_input_array(INPUT_POST)['Stop'])) {
            if ($conn->connect_error) {
                die('Connection Failed :' . $conn->connect_error);
            } else {
                $sql = "INSERT INTO robot_base(move_right,move_left,move_backward,move_forward,stop_move) VALUES ('null','null','null','null','stop')";
                if (mysqli_query($conn, $sql)) {
                   
                    $message = "The Robot Stopped Successfully (:"; 
                    echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
               // Close connection
                mysqli_close($conn);
            }
        }
        
        //When Right button clicked..
        if (isset(filter_input_array(INPUT_POST)['Right'])) {
            if ($conn->connect_error) {
                die('Connection Failed :' . $conn->connect_error);
            } else {
                $sql = "INSERT INTO robot_base(move_right,move_left,move_backward,move_forward,stop_move) VALUES ('right','null','null','null','null')";
                if (mysqli_query($conn, $sql)) {
                   
                    echo"Moved to the right...";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
               // Close connection
                mysqli_close($conn);
            }
        }
        
        //When Left button clicked..
        if (isset(filter_input_array(INPUT_POST)['Left'])) {
            if ($conn->connect_error) {
                die('Connection Failed :' . $conn->connect_error);
            } else {
                $sql = "INSERT INTO robot_base(move_right,move_left,move_backward,move_forward,stop_move) VALUES ('null','left','null','null','null')";
                if (mysqli_query($conn, $sql)) {
                   
                    echo"Moved to the left...";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
               // Close connection
                mysqli_close($conn);
            }
        }
        
         //When Backward button clicked..
        if (isset(filter_input_array(INPUT_POST)['Backward'])) {
            if ($conn->connect_error) {
                die('Connection Failed :' . $conn->connect_error);
            } else {
                $sql = "INSERT INTO robot_base(move_right,move_left,move_backward,move_forward,stop_move) VALUES ('null','null','backward','null','null')";
                if (mysqli_query($conn, $sql)) {
                   
                    echo"Moved to the backward...";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
               // Close connection
                mysqli_close($conn);
            }
        }
        
        //When Forward button clicked..
        if (isset(filter_input_array(INPUT_POST)['Forward'])) {
            if ($conn->connect_error) {
                die('Connection Failed :' . $conn->connect_error);
            } else {
                $sql = "INSERT INTO robot_base(move_right,move_left,move_backward,move_forward,stop_move) VALUES ('null','null','null','forward','null')";
                if (mysqli_query($conn, $sql)) {
                    
                    echo"Moved to the forward...";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
               // Close connection
                mysqli_close($conn);
            }
        }
        ?>
        
    </body>
</html>
