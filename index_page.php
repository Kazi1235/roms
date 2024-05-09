<?php
 
include 'function.php';
 

$slug  =  $_GET['slug'];
 

$name = str_replace("-"," ",$slug);
 

$title = ucwords("$name");
$description = ucwords("$name");
include 'header.php';
?>
    
    <main id="main" class="main">
   <section class="section dashboard">  <?php if (file_exists("ads_/1.txt")){  include'ads/1.php'; } ?>
      <div class="row">
      <div class="col-lg-8">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <h1 class="m-0 p-0 fs-4 text-center mt-4"><?=ucwords($name)?></h1>
                  </div>
               </div>
            </div>
   
   
   <div class="col-12">
               <div class="card">
                  <div class="card-body p-5">         
<?php

$sql = "SELECT * FROM page WHERE slug  = '$slug'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

$row = $result->fetch_assoc();
      $page_id = $row["id"];
   $page_title = $row["title"];
 
   $page_content = $row["post_content"];
   
   
   

   echo $page_content;

   
   
}

?>   </div>
               </div>
            </div>
</div></div>
      <div class="col-lg-4">
         <?php include 'sidebar.php';?>
      </div>
   </section>
</main>

<?php
include 'footer.php';
?>