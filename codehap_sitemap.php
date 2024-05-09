<?php
header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

require'function.php';
if(isset($_GET['pn'])){
$page = $_GET['pn'];
} else {
 $page = 0;   
}
$table ="signature_names";

$sitemap_content = sitemap($page,$sitemap_limit,$table);


foreach ($sitemap_content as $row)
    {
 
    
    $slug = seo_friendly_url($row["name"]);
 
 
    echo '<url>' . PHP_EOL;
    echo '<loc>https://' . $_SERVER['HTTP_HOST']."$folder/" . $slug . '</loc>' . PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;
    echo '</url>' . PHP_EOL;
}
echo '</urlset>';
?>