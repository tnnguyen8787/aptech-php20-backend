
<?php
echo "<a href=\"./\">BACK</a>";
/* 4. --- VARIABLES ---
 *
 * Variable starts with $ (dollar sign on keyboard).
 *
 * Can not start with number.
 *
 * Naming variable should be use camelCase : $storeNumber, $userId.
 *
 *
 *
 */
echo "<h1>4. VARIABLES</h1>";

/*
 * EXERCISE 1 : Assigning your name to variable $myName and your project's name to variable $myProject, display it in 1 line by echo and print, using double quoted and quotation mark.
 *
 */

/*
 * SUGGESTION :
 * $myName = 'Nguyen Hai Nam';
 * $myProject = 'News Website';
 * echo "$myName - $myProject";
 * print_r($myName . ' - ' . $myProject);
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$myName = "Nguyen Trong Nhan";
$myProject = "A music website";
echo "My name is: " . $myName . ". " . "My project is: " . $myProject . "." . "<br>";
print_r($myName . " - " . $myProject);

?>