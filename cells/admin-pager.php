<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
?>
<div>
    <?php if ($pager->hasPreviousPage()) : ?>
        <a class="btn btn-sm btn-secondary" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
            <span aria-hidden="true">&laquo;</span>
        </a>
        <a class="btn btn-sm btn-secondary" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
            <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
        </a>
    <?php endif;?>
    <?php foreach ($pager->links() as $link): ?>
        <a class="btn btn-sm <?= $link['active'] ? 'btn-primary' : 'btn-secondary' ?>" href="<?= $link['uri'] ?>">
            <?= $link['title'] ?>
        </a>
    <?php endforeach;?>
    <?php if ($pager->hasNextPage()) : ?>
        <a class="btn btn-sm btn-secondary" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
            <span aria-hidden="true"><?= lang('Pager.next') ?></span>
        </a>
        <a class="btn btn-sm btn-secondary" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
            <span aria-hidden="true">&raquo;</span>
        </a>
    <?php endif;?>
</div>
