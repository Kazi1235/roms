<?php

if (!empty($_POST["id"]))
{
    $name = $_POST["name"];

    include 'function.php';

    $query = $conn->query("SELECT COUNT(*) as num_rows FROM signature_fonts WHERE id < " . $_POST['id'] . " ORDER BY id DESC");
    $row = $query->fetch_assoc();
    $totalRowCount = $row['num_rows'];



    $query = $conn->query("SELECT * FROM signature_fonts WHERE id < " . $_POST['id'] . " ORDER BY id DESC LIMIT $showLimit");

    if ($query->num_rows > 0)
    {  $count = 0; $countIDs = 0;
        while ($row = $query->fetch_assoc())
        { $countIDs = rand(111,9999);
            $postID = $row['id'];
           $font_name = $row["name"];
         $font_file = $row["file"];
         
          $img = $d_u.$folder."/sig/index.php?name=$name&f=$postID&hash=$key1";
          
          
         $inline = $count++; if($inline == 3 or $inline == 8){ if (file_exists("ads_/4.txt")){?><div class="col-12"><div class="card"><div class="card-body"><?php  include'ads/4.php'; ?></div></div></div><?php }} ?>
        
  <div class="col-12">
   <div class="card">
      <div class="card-body cardIMG">
         <img loading="lazy" class="sing" src="<?=$img?>" alt="The best way (Allison_Script) to make a short signature is to pick only two or three words in your name. The name Ceard include a total of six letters. For converting this name. Ceard signature style 2 images and pictures png">
         <div class="top-right">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#codehap_dl_<?=$countIDs?>">
               <svg fill="currentColor" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <g>
                     <path d="M0 0h24v24H0z" fill="none"/>
                     <path d="M4 19h16v-7h2v8a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-8h2v7zM14 9h5l-7 7-7-7h5V3h4v6z"/>
                  </g>
               </svg>
            </button>
         </div>
         <div class="modal fade" id="codehap_dl_<?=$countIDs?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="staticBackdropLabel"><?=ucwords($name)?> (<?=$postID?>)</h1>
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

 <?php

        }

    }

    if ($totalRowCount > $showLimit)
    { ?><div class="col-12">

        <div class="show_more_main" id="show_more_main<?php echo $postID; ?>"><div class="d-grid gap-2 mt-3">
            <button id="<?php echo $postID; ?>" class="show_more btn btn-primary" title="Load more posts">Load More</button></div>
             <input type="hidden" value="<?=$name?>" id="searchName">
        </div>

</div>
    <?php
    }
} ?>





 
