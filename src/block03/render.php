<div
    <?php echo get_block_wrapper_attributes(); ?>
    data-wp-interactive="block01"
    data-wp-class--dark-theme="state.isDark">
    <h2>I'm block 03</h2>
    <button
        data-wp-on--click="actions.addOne">
        Counter ++
    </button>

    <p data-wp-text="state.counter"></p>
    <p data-wp-text="state03.counter"></p>
</div>


<div
    <?php echo get_block_wrapper_attributes(); ?>
    data-wp-interactive="block03">

    <p data-wp-text="state.counter"></p>
    <p data-wp-text="state03.counter"></p>

    <button
        data-wp-on--click="actions.subtractOne">
        Counter --
    </button>


</div>
