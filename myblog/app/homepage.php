	<?php 
	require 'inc/ust.php'; 
	require 'inc/left_content.php';
	?>


    

    
    <div class="main-wrapper">
	    <?php require 'inc/header.php'; ?>
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			  	   
			   
			    <?php 
			    $db->sql ="select * from tb_content order by content_id desc limit 5";
			    $content=$db->select();
			    if ($content==false) {
			    	?>
			    	<div class="item "> İçerik Bulunamadı</div>
			    	<?php 
			    }else{
			    	foreach ($content as $key => $value) {
			    		$db->sql="select * from tb_category where category_id=?";
			    		$db->veri=array($value->content_category_id);
			    		$category=$db->select(1);
			    		$category_header=$category->category_header;


			    		?>
			    		    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo URL; ?>/public/images/blog/blog-post-thumb-6.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="index.php?url=blog-post&id=<?=$value->content_id;?>"><?=$value->content_header; ?></a></h3>
						    <div class="meta mb-1"><span class="date"><?=$value->date_insert ; ?></span><span class="time"><?=$value->hit;?> GÖRÜNTÜLENME</span><span class="comment"><a href="#">1 comment</a></span></div>
						    <div class="intro"><?=$value->content_description; ?></div>
						    <a class="more-link" href="index.php?url=blog-post&id=<?=$value->content_id;?>">Devamı için.. &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->

			    		<?php
			    	}
			    }

			     ?>
			    
			




	<!-- 		      <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo URL; ?>/public/images/blog/blog-post-thumb-1.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.html">Why Every Developer Should Have A Blog</a></h3>
						    <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
					    </div>	//media-body-->
				<!--    </div>		//media-->
			 <!--   </div>		//item--> 

			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
	    
	<?php require 'inc/footer.php' ?>
    
    </div><!--//main-wrapper-->
    
  <?php require 'inc/alt.php'; ?>