	<?php 
	require 'inc/ust.php'; 
	require 'inc/left_content.php';
	?>


	<div class="main-wrapper">

		<section class="blog-list px-3 py-5 p-md-5">
			<div class="container">
				<?php 
				$db->sql="select * from tb_content order by content_id desc";
				$content_list=$db->select();
				if ($content_list==false) {
					?>
					<div class="item "> İçerik Bulunamadı</div>
					<?php 
				}
				else{
					foreach ($content_list as $key => $value) {
						?>

						<div class="item mb-5">
							<div class="media">
								<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo URL; ?>/public/images/blog/blog-post-thumb-7.jpg" alt="image">
								<div class="media-body">
									<h3 class="title mb-1"><a href="index.php?url=blog-post&id=<?=$value->content_id;?>"><?= $value->content_header; ?></a></h3>
									<div class="meta mb-1"><span class="date"><?=$value->date_insert; ?></span><span class="time"><?=$value->hit ?> Görüntülenme</span><span class="comment"><a href="#">4 comments</a></span></div>
									<div class="intro"><?= $value->content_description ?></div>
									<a class="more-link" href="index.php?url=blog-post&id=<?=$value->content_id;?>">Devamını oku.. &rarr;</a>
								</div><!--//media-body-->
							</div><!--//media-->
						</div><!--//item-->

						<?php 
					}
				}

				?>



				<nav class="blog-nav nav nav-justified my-5">
					<a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
					<a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
			</div>
		</section>

		<?php require 'inc/footer.php' ?>

	</div><!--//main-wrapper-->






	<?php require 'inc/alt.php'; ?>