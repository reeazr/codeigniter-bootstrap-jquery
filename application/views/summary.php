<div class="container">
	<?php foreach($pages as $index => $page): ?>
	<?php if( ($index%3) == 2): ?><div class="row"><?php endif; ?>
		<div class="col-md-4">
			<h1><?php echo $page['title']; ?></h1>
			<a href="<?php echo base_url("images/".$page['img']); ?>" data-toggle="lightbox" data-title="Blog"><img src="<?php echo base_url("images/".$page['img']); ?>" class="thumbnail img-responsive"></a>
			<a href="<?php echo base_url("home/".$page['url']); ?>"><button class="btn btn-default">View</button></a>
		</div>
	<?php if( ($index%3) == 2): ?></div><?php endif; ?>
	<?php endforeach; ?>
</div>