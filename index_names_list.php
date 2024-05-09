<?php 
   $word = $_GET['word'];
   $title = "The most popular names Signature starting with letter ".ucwords($word);
   $description = "Signature names starting with letter ".ucwords($word);
   include'function.php';
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
                        <h1 class="m-0 p-0 fs-4 text-center mt-4">Popular Names Signature for letter <?=ucwords($word)?></h1>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <div class="row p-2">
                     <?php  
                        $sql = "SELECT * FROM signature_names WHERE word = '$word' order by name asc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        echo'<div class="col-sm-6 col-md-3 col-lg-3 text-center">
                        <a href="'.$folder.'/'.$row["name"].'" class="d-block bg-white px-2 py-1 shadow-sm rounded my-2">'.ucwords(str_replace("-"," ",$row["name"])).'</a></div> ';
                        }
                        } else {
                          echo "0 results";
                        }
                        ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <?php include 'sidebar.php';?>
         </div>
      </div>
   </section>
</main>
<?php include'footer.php'?>
