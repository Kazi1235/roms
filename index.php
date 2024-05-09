<?php

include'function.php';
   
$title =   "Generate Digital Signature Online | eSignature Maker | Autograph";
$decription ="Use our free online signature or autograph creation tool to generate a personalized electronic signature that you can use anywhere, on any platform! Draw or type your name";

   include 'header.php';?>
      <main id="main" class="main">
         <section class="section dashboard">
             
                   <?php if (file_exists("ads_/1.txt")){  include'ads/1.php'; } ?>
                   
            <div class="row">
               
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body"><h1 class="m-0 p-0 fs-4 text-center mt-4">Generate Digital Signature Online</h1>
                           </div>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="pads">
                           <div id="signature-pad" class="signature-pad">
                              <div class="signature-pad--actions2">
                                 <div>
                                    <button title="Clear" type="button" class="button clear btn btn-primary btn-sm" data-action="clear"><i class="bx bxs-trash"></i></button>
                                    <button title="Change color" type="button" class="button btn btn-primary btn-sm" data-action="change-color"><i class="bx  bxs-palette"></i></button>
                                 </div>
                                 <div>
                                    <button title="Undo" type="button" class="button btn btn-primary btn-sm" data-action="undo"><i class="bx bx-undo"></i></button>
                                    <button title="Refresh" type="button" onclick="history.go(0)" class="button save btn btn-primary btn-sm"><i class="bx  bx-refresh"></i></button>
                                 </div>
                              </div>
                              <div class="signature-pad--body">
                                 <canvas width="813" style="touch-action: none; user-select: none;" height="559"></canvas>
                              </div>
                              <div class="signature-pad--footer">
                                 <div class="description">Drow your own signature </div>
                                 <div class="signature-pad--actions">
                                    <div>
                                       <button type="button" class="button save btn btn-primary btn-sm" data-action="save-png"><i class="bx bxs-save"></i> .PNG</button>
                                       <button type="button" class="button save btn btn-primary btn-sm" data-action="save-jpg"><i class="bx bxs-save"></i> .JPG</button>
                                       <button type="button" class="button save btn btn-primary btn-sm" data-action="save-svg"><i class="bx bxs-save"></i> .SVG</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <script src="js/signature_pad.umd.js"></script>
                     <script src="js/app.js"></script>
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title" id="F.A.Q_About_signature">Write Signature <span>(Make your own eSign)</span></h5>
                              <div class="d-grid gap-2 mt-3">
                                 <form id="createImage" method="post" accept-charset="utf-8">
                                    <div class="input-group mb-4 radius ">
                                       <input type="text" name="user_name" class="form-control border-primary" placeholder="Enter name here" aria-label="Enter text here" id="name_input" required>
                                       <div class="input-group-append">
                                          <button class="btn btn-primary" type="button" id="create_btn">Create</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        
                         <?php if (file_exists("ads_/3.txt")){  include'ads/3.php'; } ?>
                         
                         
                     </div>
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">FAQs About Draw Digital Signature</h5>
                              <div class="accordion accordion-flush" id="faq-group-3">
                                 <div class="accordion-item">
                                    <h2 class="accordion-header">
                                       <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                                       How To Generate a eSignature Online?
                                       </button>
                                    </h2>
                                    <div id="faqsThree-1" class="accordion-collapse collapse show" data-bs-parent="#faq-group-3">
                                       <div class="accordion-body">
                                          Sign a document online? Here is an online eSignature creator who will help you to create electronic signatures in a minute or two.
                                       </div>
                                       <div class="accordion-body">
                                          Use our free online signature or autograph creation tool to generate a personalized electronic signature that you can use anywhere, on any platform! Draw or type your name
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header">
                                       <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                                       How do I create a PNG or JPG format signature?
                                       </button>
                                    </h2>
                                    <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                       <div class="accordion-body">
                                          1. Draw your signature on eSignature pad. Simply use your touchpad or mouse to draw your eSign on the blank space.
                                       </div>
                                       <div class="accordion-body">
                                          2. Save it on your computer in a file format using .SVG, .JPG, or .PNG button.
                                       </div>
                                       <div class="accordion-body">
                                          3. Wait a few seconds for the download.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header">
                                       <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button" data-bs-toggle="collapse">
                                       How to make a professional signature?
                                       </button>
                                    </h2>
                                    <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                       <div class="accordion-body">
                                          Your signature is a representation of you and your brand, so it's important to make sure it looks professional. Here are a few tips on how to create a handwritten signature that conveys the right message:
                                       </div>
                                       <div class="accordion-body">
                                          1. Keep it simple. A complex signature can be difficult to read and may come across as unprofessional. Stick to a basic, clean font that is easy to read.
                                       </div>
                                       <div class="accordion-body">
                                          2. Make it legible. This may seem like a no-brainer, but it's important to make sure your signature is legible. If someone can't read it, they won't be able to use it.
                                       </div>
                                       <div class="accordion-body">
                                          3. Use your full name. A signature with just your first or last name can look incomplete. Use your full name to give your signature a sense of completeness.
                                       </div>
                                       <div class="accordion-body">
                                          4. Consider your handwriting. If you have messy handwriting, consider using a different font or writing your signature in all capitals. This will make it easier for others to read.
                                       </div>
                                       <div class="accordion-body">
                                          5. Keep it consistent. Once you've settled on a signature style, stick with it. Consistency will make your signature more recognizable and easier to use.
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header">
                                       <button class="accordion-button collapsed" data-bs-target="#faqsThree-4" type="button" data-bs-toggle="collapse">
                                       How to write a unique and creative signature?
                                       </button>
                                    </h2>
                                    <div id="faqsThree-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                                       <div class="accordion-body">
                                          There is no one formula for creating a unique and creative signature. However, some tips that may be helpful include: thinking about what makes you unique and what you want your signature to represent; using colors, shapes, and/or symbols that reflect your personality or interests; and keeping your signature simple.
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
<?php include 'footer.php';?>