# Robot-Control
This project contains a web page that lets the user control the robot's moving into left, right, backward, forward, and stopping the robot.
The web page will be connected to the database (robot) table (robot_base) which contains five columns (move_right, move_left, move_forward, move_backward, stop_move).
If the user presses any button such as the left button, the message will appear to the user ( Moved to the left...) and the database will insert the value (left) into the (move_left) column and will insert null values to the rest of the columns.
