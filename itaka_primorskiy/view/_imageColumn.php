<?php ?>

<div class="image">

	<?php if (null!==$object->getImage('tmb134')) : ?>

        <div class="object-slider-list">
			<?  if ($object->getImage('tmb134')) : ?>
                <img src="http://itaka.ru<?= $object->getImage('tmb134') ?>" alt="">
            <?php else : ?>
                <img src="http://itaka.ru<?= $object->getImage('tmb134') ?>" alt="">
            <?php endif; ?>
        </div>

	<?php else : ?>
        <div class="object-slider-list">
            <img src="/img/noPhoto.png" />
        </div>

	<? endif; ?>
</div>
