<?php include(__DIR__ . '/../components/nav.php') ?>

<h1>Sign a message</h1>
<label class='textbox-label'>Message</label>
<textarea id='message'></textarea>
<label class='textbox-label'>Your private key</label>
<textarea id='receiver-key'></textarea>
<input type='submit' id='sign' value='Sign'>