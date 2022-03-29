<?php include(__DIR__ . '/../components/nav.php') ?>

<h1>Decrypt a message</h1>
<label class='textbox-label'>Message</label>
<textarea id='message'></textarea>
<label class='textbox-label'>Your private key</label>
<textarea id='receiver-key'></textarea>
<input type='password' class='password'>
<input type='submit' id='decrypt' value='Decrypt'>