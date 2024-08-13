<html>
    <body>
        welcome<br>
        your name is:
        <?php
        echo $_POST['name'];
        ?><br>

        your password is:
        <?php
        echo $_POST['password'];
        ?><br>

        your email is:
        <?php
        echo $_POST['email'];
        ?><br>

        your gender is:
        <?php
        echo $_POST['gender'];
        ?><br>
        
        Selected Languages:<br>
    <?php
    $languages = $_POST['languages'] ?? [];
    echo $languages ? implode('<br>', array_map('htmlspecialchars', $languages)) : 'No languages selected.';
    ?>
    </body>
</html>