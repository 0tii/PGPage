<?php include(__DIR__ . '/../components/nav.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST['message'];
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?mode=sign'); ?>" method="POST">
    <h1>Sign a message</h1>
    <label class='textbox-label'>Message</label>
    <textarea id='message' name='message'></textarea>
    <label class='textbox-label'>Your private key</label>
    <textarea id='private-key' name='key'></textarea>
    <input type='submit' id='sign' value='Sign'>
</form>