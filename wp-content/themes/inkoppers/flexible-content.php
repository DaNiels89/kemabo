<?php if (have_rows("blocks")): ?>
    <?php while (have_rows("blocks")): the_row(); ?>

        <?php if (get_row_layout() == "padding"): ?>
            <div class="padding"></div>

        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>