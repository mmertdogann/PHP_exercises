<!--  When submit the information through the form, if there is a error
      we want to keep old information on the form to new submit action  -->

<?php
$oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
?>
<p>Guessing game...</p>
<form method="post">
    <p><label for="guess">Input Guess</label>
        <input type="text" name="guess" id="guess"
               size="40" value="<?= $oldguess ?>"></p>
    <!--
    To avoid HTML injection (user enters an html element into the form: we use,
      size="40" value=" </*?= htmlentities($oldguess) ?>"></p>
     -->
    <input type="submit">
</form>
<!--  #short form do exactly same thing  -->

<?= $oldguess ?>

<!--  #long form  -->
<?php
echo($oldguess);
/* Making sure all user data is present and the correct format before proceeding
    * Non-empty strlen($var) > 0
    * A number is_numeric($var)
    * An email address strpos($var, '@') > 0
    * Or filter_var($var, FILTER_VALIDATE_EMAIL) !== false
*/
?>


