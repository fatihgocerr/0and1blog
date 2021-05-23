	<?php 
	require 'inc/ust.php'; 
	require 'inc/left_content.php';
	?>


    
    <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
		    	<?php 
		    	if (!get("id")) {
		    		header("location:index.php");
		    		exit();
		    	}

		    	$id=(int)get("id");
		    	$db->sql= "select * from tb_content where content_id=?";
		    	$db->veri=array($id);
		    	$content=$db->select(1);

		    	if ($content==false) {
		    		header("location:index.php");
		    		exit();
		    		?>
		    		<div class="item"><p>İÇERİK BULUNAMADI!</p> </div>
		    		<?php
		    	}
		    	$hit=$content->hit;
		    	$hit++;
		    	$db->sql="update tb_content set hit=? where content_id=?";
		    	$db->veri=array($hit,$id);
		    	$db->insert();
		    	 ?>
			    <header class="blog-post-header">
				    <h2 class="title mb-2"> <?=$content->content_header; ?></h2>
				    <div class="meta mb-3"><span class="date"><?= $content->date_insert; ?></span><span class="time"><?= $content->hit; ?> View</span><span class="comment"><a href="#">4 comments</a></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="https://made4dev.com"><img class="img-fluid" src="<?php echo URL; ?>/public/images/blog/blog-post-banner.jpg" alt="image"></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
				    </figure>
				    <p><?=$content->content_detail; ?> </p>
				    
				 			   
			    </div>
				    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Geri<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">İleri<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
					
	<?php	/*		<div class="blog-comments-section">
					<p>js yorum kısmı</p>
					<div id="disqus_thread"></div>
					<script>
					    /**
					     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
					     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
					     *  PLATFORM OR CMS.
					     *  
					     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
					     *  https://disqus.com/admin/universalcode/#configuration-variables
					     */
					    /*
					    var disqus_config = function () {
					        // Replace PAGE_URL with your page's canonical URL variable
					        this.page.url = PAGE_URL;  
					        
					        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					        this.page.identifier = PAGE_IDENTIFIER; 
					    };
					    */
					    
				/*	    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
					        var d = document, s = d.createElement('script');
					        
					        // IMPORTANT: Replace 3wmthemes with your forum shortname!
					        s.src = 'https://3wmthemes.disqus.com/embed.js';
					        
					        s.setAttribute('data-timestamp', +new Date());
					        (d.head || d.body).appendChild(s);
					    })();
					</script>
					<noscript>
					    Please enable JavaScript to view the 
					    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
					        comments powered by Disqus.
					    </a>
					</noscript>
				</div><!--//blog-comments-section-->		*/?>
				
		    </div><!--//container-->
	    </article>
	    
	    <section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container">
			    <h2 class="title">Promo Section Heading</h2>
			    <p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                <figure class="promo-figure">
			        <a href="https://made4dev.com" target="_blank"><img class="img-fluid" src="<?php echo URL; ?>/public/images/promo-banner.jpg" alt="image"></a>
			    </figure>
		    </div><!--//container-->
	    </section><!--//promo-section-->
	    

    <?php require 'inc/footer.php' ?>
    </div><!--//main-wrapper-->
    

     <?php require 'inc/alt.php'; ?>