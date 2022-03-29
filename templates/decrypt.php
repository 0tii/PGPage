<?php 
include(__DIR__ . '/../components/nav.php');
include(__DIR__ . '/../logic/pgphandler.php');

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['key'])){
    $pgp = new PgpHandler($_POST['key']);
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?mode=decrypt'); ?>" method="POST">
    <h1>Decrypt a message</h1>
    <label class='textbox-label'>Message</label>
    <textarea id='message' name='message'></textarea>
    <label class='textbox-label'>Your private key</label>
    <textarea id='private-key' name='key'></textarea>
    <input type='password' class='password' name='password'>
    <input type='submit' id='decrypt' value='Decrypt'>
</form>