
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">A-Z all name Signature <span>(Click to Go)</span></h5>
                        <div class>
                           <center>
                              <a href="<?=$folder?>/names/A" class="pointer radius">
                                 <div class="main-color-alphabet">A</div>
                              </a>
                              <a href="<?=$folder?>/names/B" class="pointer radius">
                                 <div class="main-color-alphabet">B</div>
                              </a>
                              <a href="<?=$folder?>/names/C" class="pointer radius">
                                 <div class="main-color-alphabet">C</div>
                              </a>
                              <a href="<?=$folder?>/names/D" class="pointer radius">
                                 <div class="main-color-alphabet">D</div>
                              </a>
                              <a href="<?=$folder?>/names/E" class="pointer radius">
                                 <div class="main-color-alphabet">E</div>
                              </a>
                              <a href="<?=$folder?>/names/F" class="pointer radius">
                                 <div class="main-color-alphabet">F</div>
                              </a>
                              <a href="<?=$folder?>/names/G" class="pointer radius">
                                 <div class="main-color-alphabet">G</div>
                              </a>
                              <a href="<?=$folder?>/names/H" class="pointer radius">
                                 <div class="main-color-alphabet">H</div>
                              </a>
                              <a href="<?=$folder?>/names/I" class="pointer radius">
                                 <div class="main-color-alphabet">I</div>
                              </a>
                              <a href="<?=$folder?>/names/J" class="pointer radius">
                                 <div class="main-color-alphabet">J</div>
                              </a>
                              <a href="<?=$folder?>/names/K" class="pointer radius">
                                 <div class="main-color-alphabet">K</div>
                              </a>
                              <a href="<?=$folder?>/names/L" class="pointer radius">
                                 <div class="main-color-alphabet">L</div>
                              </a>
                              <a href="<?=$folder?>/names/M" class="pointer radius">
                                 <div class="main-color-alphabet">M</div>
                              </a>
                              <a href="<?=$folder?>/names/N" class="pointer radius">
                                 <div class="main-color-alphabet">N</div>
                              </a>
                              <a href="<?=$folder?>/names/O" class="pointer radius">
                                 <div class="main-color-alphabet">O</div>
                              </a>
                              <a href="<?=$folder?>/names/P" class="pointer radius">
                                 <div class="main-color-alphabet">P</div>
                              </a>
                              <a href="<?=$folder?>/names/Q" class="pointer radius">
                                 <div class="main-color-alphabet">Q</div>
                              </a>
                              <a href="<?=$folder?>/names/R" class="pointer radius">
                                 <div class="main-color-alphabet">R</div>
                              </a>
                              <a href="<?=$folder?>/names/S" class="pointer radius">
                                 <div class="main-color-alphabet">S</div>
                              </a>
                              <a href="<?=$folder?>/names/T" class="pointer radius">
                                 <div class="main-color-alphabet">T</div>
                              </a>
                              <a href="<?=$folder?>/names/U" class="pointer radius">
                                 <div class="main-color-alphabet">U</div>
                              </a>
                              <a href="<?=$folder?>/names/V" class="pointer radius">
                                 <div class="main-color-alphabet">V</div>
                              </a>
                              <a href="<?=$folder?>/names/W" class="pointer radius">
                                 <div class="main-color-alphabet">W</div>
                              </a>
                              <a href="<?=$folder?>/names/X" class="pointer radius">
                                 <div class="main-color-alphabet">X</div>
                              </a>
                              <a href="<?=$folder?>/names/Y" class="pointer radius">
                                 <div class="main-color-alphabet">Y</div>
                              </a>
                              <a href="<?=$folder?>/names/Z" class="pointer radius">
                                 <div class="main-color-alphabet">Z</div>
                              </a>
                           </center>
                        </div>
                     </div>
                  </div>
                  
                  
                  
                    <?php if (file_exists("ads_/2.txt")){  include'ads/2.php'; } ?>
                    
                    
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Random name Signature <span>(Click to Go)</span></h5>
                        <div class ="text-center">
                        
                              
                              
                              
                              <?php  
                        $sql = "SELECT * FROM signature_names order by RAND() limit 60";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        echo'<div class="main-color-names">
                                 <a href="'.$folder.'/'.$row["name"].'" class="pointer radius text-center">'.ucwords(str_replace("-"," ",$row["name"])).'</a>
                              </div> ';
                        }
                        } else {
                          echo "0 results";
                        }
                        ?>

                    
                           </center>
                        </div>
                     </div>
                  </div>