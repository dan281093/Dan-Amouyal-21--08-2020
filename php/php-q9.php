#unieq_names

if you want to save a variable into session. you must start a sesson by using this command session_start();

then you can save a value for example, if you want to save a number lets say 28 with the name (TEST), we use the global variable called $_SESSION, so its like this:

$_SESSION['TEST'] = 28;

and if you want to check if the variable is saved by this command

if(isset($_SESSION['TEST'])){ echo$_SESSION['TEST'];}

this will check if the value is saved in the session and if it exisits it will be printed on the screen.

