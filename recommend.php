<!DOCTYPE html>
<html>
    <body>
        <?php
            $artistName = $_POST["artist"];
            $albumName = $_POST["album"];

            $text = $albumName . " by " . $artistName . "\n";

            file_put_contents("recommendations.txt", $text, FILE_APPEND);

        ?>

        <h2>Thank you for your recommendation!</h2>
            <p> 
            Please check back soon to see if your recommendation </br>
            has been reviewed and added!
            </p>
            <p>
            You recommended:</br>
            <strong><?= $albumName ?></strong> by <strong><?= $artistName ?></strong>!
            </p>
    </body>
</html>