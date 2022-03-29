<?php include(__DIR__ . '/../components/nav.php') ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?view=sign'); ?>" method="POST">
    <h1>Sign a message</h1>
    <label class='textbox-label'>Message</label>
    <textarea id='message' name='messagee'></textarea>
    <label class='textbox-label'>Your private key</label>
    <textarea id='receiver-key' name='key'></textarea>
    <input type='submit' id='sign' value='Sign'>
</form>