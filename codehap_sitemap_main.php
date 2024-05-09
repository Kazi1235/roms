<?php require'function.php';



$sql1 = "SELECT COUNT(id) from signature_names";
$query = mysqli_query($conn, $sql1);
$row = mysqli_fetch_row($query);
$total_files = ceil($row[0] / $sitemap_limit);
 

header("Content-Type: application/xml; charset=utf-8");
echo'<?xml version="1.0" encoding="UTF-8"?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';


 



$x = 1;

while($x <= $total_files) {
  echo'<sitemap><loc>'.$d_u.''.$folder.'/sitemap-'.$x.'.xml</loc></sitemap>';
  $x++;
}

echo'</sitemapindex>'; ?>