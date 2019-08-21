<?php  if (count($errors) > 0) : ?>
	&nbsp&nbsp<div style=" text-align: center;width:100%" class="Wrapper">
		<?php foreach ($errors as $error) : ?>
	<h5 style="color:red;"><?php echo $error ?></h5>
		<?php endforeach ?>
	</div>
<?php  endif ?>
