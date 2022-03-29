<?php include(__DIR__ . '/../components/nav.php') ?>

<h1>Encrypt a message</h1>
<label class='textbox-label'>Message</label>
<textarea id='message'></textarea>
<label class='textbox-label'>Receiver public key(s)</label>
<textarea id='receiver-key'></textarea>
<input type='submit' id='encrypt' value='Encrypt'>