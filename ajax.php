<?php
    include 'dbh.php';
    $videoId = $_POST['videoId'];
    $sql = "SELECT * FROM posts WHERE videoId= '$videoId'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        // output data of each row
        while($row = $result->fetch_assoc()){
            echo "<b>" . $row["name"]. "</b> " .":: " . $row["msg"]." --"
            .$row["date"]. "<br>";
            echo "<br>";
        }
    }else{
            echo "0 results";
    }
    $conn->close();
?>