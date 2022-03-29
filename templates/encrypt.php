<?php include(__DIR__ . '/../components/nav.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST['message'];
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?mode=encrypt'); ?>" method="POST">
    <h1>Encrypt a message</h1>
    <label class='textbox-label'>Message</label>
    <textarea id='message' name='message'></textarea>
    <label class='textbox-label'>Receiver public key(s)</label>
    <textarea id='receiver-key' name='key'></textarea>
    <input type='submit' id='encrypt' value='Encrypt'>
</form>