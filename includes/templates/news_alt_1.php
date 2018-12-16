<article>
	<a href="<?php echo $this->model->getLink(); ?>"><img src="<?php echo $this->model->getThumb(); ?>"></a>
	<h2><?php echo $this->model->getTitle(); ?></h2>
	<p><?php echo $this->model->getExcerpt(); ?><a href="<?php echo $this->model->getLink(); ?>">Se mere her</a></p>
</article>