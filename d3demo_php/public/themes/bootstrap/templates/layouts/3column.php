<div class="container">
	<div class="row">
		<div class="col-md-3" id="column-left"><?php echo $data->getSidebar('left'); ?></div>
 		<div class="col-md-6" id="column-main"><?php echo $data->getMainContent(); ?></div>
		<div class="col-md-3" id="column-right"><?php echo $data->getSidebar('right'); ?></div>
	</div>
</div>