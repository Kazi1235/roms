
 
 
 
 
 <div id="snackbar" class>Copied successfully!!</div>
      <footer id="footer" class="footer">
           <?php if (file_exists("ads_/5.txt")){  include'ads/5.php'; } ?>
           
         <div class="copyright">
            © Copyright <strong><span><?=$host?></span></strong>. All Rights Reserved
         </div>
      </footer>
      <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" data-a2a-scroll-show="100" style="bottom:10px; left:20px;">
         <a class="a2a_button_facebook"></a>
         <a class="a2a_button_twitter"></a>
         <a class="a2a_button_pinterest"></a>
         <a class="a2a_button_whatsapp"></a>
         <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
      </div>
      <script async src="<?=$folder?>/js/page.js"></script>
      <script type="text/javascript">
         //<![CDATA[
         var la=!1;window.addEventListener("scroll",function(){(0!=document.documentElement.scrollTop&&!1===la||0!=document.body.scrollTop&&!1===la)&&(!function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1565708959027383";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(e,a)}(),la=!0)},!0);
         //]]>
         
      </script>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <script src="<?=$folder?>/js/bootstrap.bundle.min.js"></script>
      <script src="<?=$folder?>/js/jquery-3.6.0.min.js"></script>
      <script src="<?=$folder?>/js/clipboard.min.js"></script>
      <script src="<?=$folder?>/js/main.js"></script>
      <script src="<?=$folder?>/js/home.js?v=1.1"></script>
      
      
      
      <script type="text/javascript">
      
 

      
      $(document).ready(function() {
	$('.search-box input[type="text"]').on("keyup input", function() {
		/* Get input value on change */
		var inputVal = $(this).val();
		var resultDropdown = $(this).siblings(".result");
		if (inputVal.length) {
			$.get("<?=$folder?>/backend-search.php", {
				term: inputVal
			}).done(function(data) {
				// Display the returned data in browser
				resultDropdown.html(data);
			});
		} else {
			resultDropdown.empty();
		}
	});
	// Set search input value on click of result item
	$(document).on("click", ".result p", function() {
		$(this).parents(".search-box").find('input[type="text"]').val($(this).text());
		$(this).parent(".result").empty();
	});
});




$(document).ready(function(){
    $(document).on('click','.show_more',function(){
        var ID = $(this).attr('id');
     var searchName =    document.getElementById("searchName").value;
        $('.show_more').html("Loading...");
        //$('.loding').show();
        $.ajax({
            type:'POST',
            url:'<?=$folder?>/ajax_more.php',
            data:'id='+ID+'&name='+searchName,
            success:function(html){
                $('#show_more_main'+ID).remove();
                $('.postList').append(html);
            }
        });
    });
});
</script>


   </body>
</html>
