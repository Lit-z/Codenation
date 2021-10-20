<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="phpstyle.css">
    <title>FFXIV: Resistance Relics</title>
</head>
<body>

    <div id="banner1">
        <img src="images/shb.png" alt="Shadowbringers Banner" width = 80%>
    </div>

    <div id="navbar">
        <a href="index.html">Home</a>
        <a href="steps.html">Progression</a>
        <a href="visuals.html">Visuals</a>
        <a href="comments.php">Comments</a>
        <!-- navbar -->
    </div>
    <br>

    <div class="existing_comments">
    <?php
        $db=mysqli_connect('localhost', 'root', 'toor', 'website_project');
        $sql= 'SELECT * FROM comments';
        $result=mysqli_query($db, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_array($result)){
                echo '<h5 class="user">' . $row['name'] . '</h5>';
                echo '<p class="user_comment">' . $row['comments'] . '</p>';
            }
        }
    ?>
    </div>
    <div id="form_block">
        <h5 id="tag">Please leave a comment below!</h5>
        <form id="php-form" action="comments_connection.php" method="post">
            <table id="php-table">
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Name:</label></td>
                    <td class="php-td"><input id="name" class="php-input" name="name" type="text" placeholder="Username" autocomplete="off"></td>
                </tr>
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Comments</label></td>
                    <td class="php-td"><textarea id="comments" class="php-textarea" name="comments" required></textarea></td>
                </tr>
            </table>
            <button type="submit" class="php-button">Submit</button>
        </form>
    </div>

    <br>
    <br>
    <div class="top">
        <a href="#banner1">Back To Top</a>
    </div>

</body>
</html>