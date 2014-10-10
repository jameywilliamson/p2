
<div class = 'container' >
<b>So lets get started on that password shall we...
<br> And please remember to input only numbers... I can't give "d" numbers of characters</b>
<br><br>

<form action='index.php' method='POST'>

    <label name='count'>How many words do you need?</label>
    <input type='text' id='count' name='count' /><br>

    <label name='numbers'>Do you need a number in the password? </label>
    <input type='checkbox' name='cba[]' value='numbers' /><br>

    <label name='symbol'>Do you need a symbol in the password? </label>
    <input type='checkbox' name='cbb[]' value='checkS' /><br>

    <input type='submit' name='submit' value='Submit' />

</form>

<h2>Your new password is...</h2>
<br>
    <?php require 'logic.php';?>
</div>