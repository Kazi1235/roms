<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title><?=$title?></title>
      <meta property="og:title" content="<?=$title?>">
      <meta content="<?=$decription?>" name="description">
      <meta name="keywords" content="<?=$title?>">
      <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
      <link rel="canonical" href="/">
      <meta property="og:locale" content="en_US">
      <meta property="og:type" content="website">
      <meta http-equiv="content-language" content="en-IN">

      <meta property="og:description" content="<?=$decription?>">
      <meta property="og:url" content="/">
      <meta property="og:site_name" content="example.com">
      <meta property="article:modified_time" content="2022-01-27T06:59:03+00:00">
      <meta property="og:image" content="<?=$ogImg?>">
      <meta name="twitter:image" content="<?=$ogImg?>">
      <meta property="og:image:width" content="640">
      <meta property="og:image:height" content="400">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@example">
      <link href="images/icon.png" rel="icon">

      
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="<?=$folder?>/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?=$folder?>/css/bootstrap-icons.css" rel="stylesheet">
      <link href="<?=$folder?>/css/boxicons.min.css" rel="stylesheet">
      <link href="<?=$folder?>/css/quill.snow.css" rel="stylesheet">
      <link href="<?=$folder?>/css/quill.bubble.css" rel="stylesheet">
      <link href="<?=$folder?>/css/remixicon.css" rel="stylesheet">
      <link href="<?=$folder?>/css/style.css" rel="stylesheet">
      <link href="<?=$folder?>/css/style_1.css" rel="stylesheet">
      <link href="<?=$folder?>/css/custom.css" rel="stylesheet">
      <link rel="stylesheet" href="<?=$folder?>/css/signature-pad.css">
       <?php if (file_exists("ads_/6.txt")){  include'ads/6.php'; } ?>
       
       
       
       <style>

.search-box {
	width: 300px;
	position: relative;
	display: inline-block;
	font-size: 14px;
	margin:1px 5px;
}

.search-box input[type=text] {
	height: 32px;
	padding: 5px 10px;
	border: 1px solid #ccc;
	font-size: 14px;
	border-radius: 5px
}

.result {
	position: absolute;
	z-index: 999;
	top: 100%;
	left: 0
}

.result,
.search-box input[type=text] {
	width: 100%;
	box-sizing: border-box
}

.result p {
	margin: 0;
	padding: 7px 10px;
	border: 1px solid #ccc;
	border-top: none;
	cursor: pointer;
	background: #f2f2f2
}

.result p:hover {
	background: #f2f2f2
}


.cardIMG {
  position: relative;
  text-align: center;
}



 
.top-right {
  position: absolute;
  top: 21px;
  right: 21px;
}



       </style>
       
       
       
   </head>
   <body>
      <header id="header" class="header fixed-top d-flex align-items-center">
         <div class="d-flex align-items-center justify-content-between">
            <a href="<?=$folder?>/" class="logo d-flex align-items-center">
            <img height="26" width="26" src="<?=$folder?>/images/icon.png" alt="logo">
            <span class="d-none d-lg-block">Signature</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
         </div> 
         
         
         <div class="d-flex ms-auto my-3 my-lg-0">
   <form action="<?=$folder?>/" method="post">
      <div class="search-box">
         <input type="text" autocomplete="off" name="person" placeholder="Type a Name..." />
         <div class="result"></div>
      </div>
   </form>
</div>



         <div style="display:none" class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
               <input id="search" type="text" autocomplete="off" name="query" placeholder="Search name" title="Enter search name">
               <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
            <div id="myDropdown" class="dropdown-content hide"></div>
         </div>
      <!--   <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
               <li class="nav-item d-block d-lg-none">
                  <a class="nav-link nav-icon search-bar-toggle " href="#">
                  <i class="bi bi-search"></i>
                  </a>
               </li>
               <li id="bx-heart" class="nav-item dropdown">
                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                  <i class="bx bx-heart"></i>
                  <span id="arr-number" class="badge bg-primary badge-number"></span>
                  </a>
                  <ul id="notifications" class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                     <li class="dropdown-header">
                        Your copy history
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                     </li>
                     <div id="not-list"></div>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="dropdown-footer">
                        <a href="#">Clear all history</a>
                     </li>
                  </ul>
               </li>
            </ul>
         </nav>
        -->
      </header>
      <aside id="sidebar" class="sidebar">
         <ul class="sidebar-nav" id="sidebar-nav">


            <li class="nav-item">
               <a class="nav-link collapsed" href="<?=$folder?>/names">
                <i class="ri-character-recognition-line"></i>
               <span>A - Z eSignature</span>
               </a>
            </li>
            
                        <li class="nav-item">
               <a class="nav-link collapsed" href="#">
               <i class="bi bi-menu-button-wide"></i><span>Signatures</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link collapsed" href="#">
               <i class="bi bi-layout-text-sidebar"></i><span>Autograph </span>
               </a>
            </li>
            
            <li class="nav-heading">Pages</li>

            
            <?php 

                  $result = $conn->query("SELECT * FROM page");
                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      $id = $row["id"];
                      $t =  $row["title"];
                      $s = $row["slug"];
                      echo '<li class="nav-item">
                      <a class="nav-link collapsed"  href="'.$folder.'/page/'.$s.'">
                      <i class="bi bi-card-list"></i>
                      <span>'.ucwords($t).'</span>
                      </a></li>';
                    }
                  }
                  ?>
                  
                  
       
         </ul>
      </aside>
      
      
      
