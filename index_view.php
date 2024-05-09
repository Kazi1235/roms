<?php  $name = $_GET['name'];


include'function.php'; 

$ogImg =  $domain."$folder/sig/index.php?name=$name&f=1";


$title =   title($name);
$decription = ucwords("There are a lot of digital signatures on our signature website. Get $name name professional signature for free. Easily find your signs by using the search form");
include 'header.php';?>
<main id="main" class="main">
   <section class="section dashboard">  <?php if (file_exists("ads_/1.txt")){  include'ads/1.php'; } ?>
      <div class="row">
         <div class="col-lg-8">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-body">
                        <h1 class="m-0 p-0 fs-4 text-center mt-4"><?=ucwords($name)?> Digital Signature Online</h1>
                     </div>
                  </div>
               </div>
               <div class="col-12">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title" id="Write_or_Draw_digital_Signature_(Make_your_own_eSign)">Write or Draw digital Signature <span>(Make your own eSign)</span></h5>
                        <div class="d-grid gap-2 mt-3">
                           <form id="createImage" method="post" accept-charset="utf-8">
                              <div class="input-group mb-4 radius ">
                                 <input type="text" name="user_name" class="form-control border-primary" placeholder="Enter name here" aria-label="Enter text here" id="name_input" required="">
                                 <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="create_btn">Create</button>
                                    <a href="../"><button type="button" class="btn btn-primary">Draw</button></a>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  
                  <?php if (file_exists("ads_/3.txt")){  include'ads/3.php'; } ?>
                  
               </div>





<div class="postList">
    <?php
$query = $conn->query("SELECT * FROM signature_fonts ORDER BY id DESC LIMIT $showLimit");

if ($query->num_rows > 0)
{   $count = 0; $countID = 0;
    while ($row2 = $query->fetch_assoc())
    { $countID++;
        $postID = $row2['id'];
        $font_name = $row2["name"];
         $font_file = $row2["file"];
          $img = $d_u.$folder."/sig/index.php?name=$name&f=$postID&hash=$key1";
         $inline = $count++; if($inline == 3 or $inline == 8){ if (file_exists("ads_/4.txt")){?><div class="col-12"><div class="card"><div class="card-body"><?php  include'ads/4.php'; ?></div></div></div><?php }} 
         ?>
<div class="col-12">
   <div class="card">
      <div class="card-body cardIMG">
         <img loading="lazy" class="sing" src="<?=$img?>" alt="The best way (Allison_Script) to make a short signature is to pick only two or three words in your name. The name Ceard include a total of six letters. For converting this name. Ceard signature style 2 images and pictures png">
         <div class="top-right">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#codehap_dl_<?=$countID?>">
               <svg fill="currentColor" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <g>
                     <path d="M0 0h24v24H0z" fill="none"/>
                     <path d="M4 19h16v-7h2v8a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-8h2v7zM14 9h5l-7 7-7-7h5V3h4v6z"/>
                  </g>
               </svg>
            </button>
         </div>
         <div class="modal fade" id="codehap_dl_<?=$countID?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="staticBackdropLabel"><?=ucwords($name)?> (<?=$row2['id']?>)</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <a class="btn btn-primary my-2 w-100" href="<?=$d_u?><?=$folder?>/sig/dl.php?path=<?=$img?>" role="button">
                        <div class="d-flex align-items-center justify-content-center">
                          
                           <svg fill="currentColor" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <g>
                                 <path d="M0 0h24v24H0z" fill="none"/>
                                 <path d="M4 19h16v-7h2v8a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-8h2v7zM14 9h5l-7 7-7-7h5V3h4v6z"/>
                              </g>
                           </svg> <div class="ms-2">Download With White Background</div>
                           </div>
                     </a>
                     
                     <a class="btn btn-dark my-2 w-100" href="<?=$d_u?><?=$folder?>/sig/dl.php?path=<?=$img?>&transparent=true" role="button">
                        <div class="d-flex align-items-center justify-content-center">
                          
                           <svg fill="currentColor" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <g>
                                 <path d="M0 0h24v24H0z" fill="none"/>
                                 <path d="M4 19h16v-7h2v8a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-8h2v7zM14 9h5l-7 7-7-7h5V3h4v6z"/>
                              </g>
                           </svg> <div class="ms-2">Download Transparent</div></div>
                     </a>
                    
                  </div>
               </div>
            </div>
         </div>
         <p><?=short_desc($font_name, $name)?></p>
      </div>
   </div>
</div>

 <?php   } ?>
    

<div class="col-12 my-3">

        <div class="show_more_main" id="show_more_main<?php echo $postID; ?>"><div class="d-grid gap-2">
            <button id="<?php echo $postID; ?>" class="show_more btn btn-primary" title="Load more posts">Load More</button></div>
             <input type="hidden" value="<?=$name?>" id="searchName">
        </div>

</div>
    <?php
} ?>
</div>






               

  






               <div class="col-12 mt-3">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title" id="F.A.Q_About_signature">F.A.Q About signature</h5>
                        <div class="accordion accordion-flush" id="faq-group-3">
                           <div class="accordion-item">
                              <h2 class="accordion-header">
                                 <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                                 Can I just write my name as a signature?
                                 </button>
                              </h2>
                              <div id="faqsThree-1" class="accordion-collapse collapse show" data-bs-parent="#faq-group-3">
                                 <div class="accordion-body"></div>
                                 <div class="accordion-body">
                                    Usually, a signature is simply someone's name written in a stylized fashion.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header">
                                 <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                                 How do you get a digital signature for the government?
                                 </button>
                              </h2>
                              <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                 <div class="accordion-body">
                                    You acn make Government eSignatures for MGNREGA for Block and Gram Panchayat using signature draw tool. Also for Govt. School, College, office etc. Organisation DSCs are made for Govt.
                                 </div>
                                 <div class="accordion-body">
                                 </div>
                                 <div class="accordion-body">
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header">
                                 <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button" data-bs-toggle="collapse">
                                 What Are the advantage of Signature Generators?
                                 </button>
                              </h2>
                              <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                 <div class="accordion-body">
                                    Signature generators offer a number of advantages, including the ability to create signatures that are consistent with your brand, the ability to easily update signatures for all employees, and the ability to track and manage signature usage.
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
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
<?php 

if(isset($_GET['name']) && trim($_GET['name']) !==""){
    $dbName = strtolower($_GET['name']);
$sql = "SELECT name FROM signature_names WHERE name = '$dbName'";
$result = $conn->query($sql);

$word = substr($dbName, 0, 1); 

if ($result->num_rows == 0) {

 $sql2 = "INSERT INTO signature_names (name, word)
VALUES ('$dbName', '$word')";
 
if ($conn->query($sql2) === TRUE) {
  
}  
 



  
}  


}


include 'footer.php';?>
