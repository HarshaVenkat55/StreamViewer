<?php
    include 'dbh.php';
    $videoId = $_POST['videoId'];
    $sql = "SELECT * FROM posts WHERE videoId = '$videoId'";
    $result = $conn->query($sql);
    if($result->fetch(\PDO::FETCH_ASSOC)> 0){
        while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            echo "<b>" . $row["name"]. "</b> " .":: " . $row["msg"]." --"
            .$row["date"]. "<br>";
            echo "<br>";
        }
    }else{
            echo "0 results";
    }
?>