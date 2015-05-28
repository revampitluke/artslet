<?php
    $connection = mysqli_connect("labeeto3.cloudapp.net","artslet","dale4152","artslet") or die("Error " . mysqli_error($connection));

    //fetch department names from the department table
    $sql = "select name from login";
    $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

    $dname_list = array();
    while($row = mysqli_fetch_array($result))
    {
        $dname_list[] = $row['name'];
    }




    echo json_encode($dname_list);
?>
