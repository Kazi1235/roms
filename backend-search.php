<?php
include 'function.php';

if (isset($_REQUEST["term"]) && trim($_REQUEST["term"]) !== "")
{

    $param_term = $_REQUEST["term"];

    $sql = "SELECT * FROM signature_names WHERE name LIKE  '%$param_term%' order by name asc limit 5";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $id = $row["id"];
            echo '<p class="text-center"><a href="'.$folder.'/' . $row["name"] . '">' . ucwords(str_replace("-", " ", $row["name"])) . '</a></p> ';
        }
    }
    else
    {
        echo '<p class="text-center">0 results</p> ';
    }

}

?>
