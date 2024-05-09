<?php 
   include'function.php';
   $title = "The most popular names Digital Signature";
   $description = "Here are some of the most popular names associated with digital signatures";
   include'header.php';
   ?>
<main id="main" class="main">
   <section class="section dashboard">  <?php if (file_exists("ads_/1.txt")){  include'ads/1.php'; } ?>
      <div class="row">
      <div class="col-lg-8">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <h1 class="m-0 p-0 fs-4 text-center mt-4">A to Z Generate Digital Signature Online Names List</h1>
                  </div>
               </div>
            </div>
            <div class="col-12">
               <div class="row">
                  <?php  
                     foreach ($word_list as $value) {
                     echo'<div class="col-sm-6 col-md-4"><div class="card">
                  <div class="card-body">
                     <div class="mt-3 d-flex justify-content-between align-items-center px-1">
                      <a href="'.$folder.'/names/'.$value.'" class="h4 m-0 p-0 text-dark">'.ucwords($value).'</a>
                      <a href="'.$folder.'/names/'.$value.'" class="small text-dark">All names starting with <b>'.$value.'</b>....</a></div><div class="row">';
                     $sql = "SELECT * FROM signature_names WHERE word = '$value' limit 10";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                       while($row = $result->fetch_assoc()) {
                     echo'  <div class="col-sm-6"> <a class="d-block bg-white px-2 py-1 border rounded m-1" href="'.$folder.'/'.$row["name"].'">'.ucwords($row["name"]).'</a></div>';
                       }
                     } echo' </div></div></div></div>';
                     }?> 
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <?php include 'sidebar.php';?>
      </div>
   </section>
</main>
<?php include'footer.php'?>
