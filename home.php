
<?php

$query = "SELECT ArticleID, Topic, Title, Article, IMG, Date FROM Articles ORDER BY Date";






while ($row = $result->fetch_object()) {
    echo "<td><a href='detail.php?article=" . $row['ArticleID'] . "'><h2>" . $row['Title'] . "</h2></a></td>";

    echo "<p>" . $row['Article'] . "</p>";

    #echo "<img src=' " . $row['IMG'] . " '/>";
    #echo "<td>". date('d. m. Y G:i ', strtotime($row['Date']))  ."</td>";
    echo "<date>" . $row['Date'] . "</date>";
    echo "</tr>";
}

mysql_close($link);
?>
