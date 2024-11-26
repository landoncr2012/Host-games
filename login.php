<?php $users = [ "Landon55" => 
    "LINUX1991", "Ella_wow" => 
    "HopeisSigma"
]; $username = $_POST['username']; 
$password = $_POST['password']; if 
(isset($users[$username]) && 
$users[$username] === $password) {
    echo "Login successful!"; ?> <br> <a 
    href="https://games.Ting-X.com/ecp/pass">
        <button>Press if not directed to 
        game page</button>
    </a> <?php
    // Alternatively, use header 
    // redirection with a short delay 
    // header("Refresh: 2; 
    //URL=https://games.Ting-X.com/ecp/pass");
    exit();
} else {
    echo "Invalid username or password."; 
    exit();
}
?>
