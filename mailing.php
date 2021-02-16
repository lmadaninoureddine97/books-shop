<?php include "nav.php"?>
<?php require 'mailed.php';?>
<div class="conte">
<p>contact us :</p>

<form action="mailed.php" method="POST">
<label for="">name</label>
<br>
<input type="text" name="nameUser">
<br>
<label for="">mail</label>
<br>
<input type="email" name="email">
<br>
<label for="">message</label>
<br>
<textarea name="message" id="" cols="30" rows="10"></textarea>
<br>
<button name="send">send</button>
</form>

    
</div>