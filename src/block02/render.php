<?php
$unique_id = wp_unique_id('p-');

wp_interactivity_state(
    'block02',
    array(
        'isDark'    => false,
        'darkText'  => esc_html__('Switch to Light', 'pac-blocks'),
        'lightText' => esc_html__('Switch to Dark', 'pac-blocks'),
        'themeText'    => esc_html__('Switch to Dark', 'pac-blocks'),
        'stateText' => esc_html('State text'),
        'customClass' => true,
    )
);
?>

<div
    <?php echo get_block_wrapper_attributes(); ?>
    data-wp-interactive="block02">
    <h2>I'm block02</h2>
    <button
        data-wp-on--click="actions.toggleClass">
        Change Class
    </button>

    <p
        data-wp-text="state.customClass"
        data-wp-class--custom-class="state.customClass"
        data-wp-class--other-class="!state.customClass"></p>
</div>

<div
    <?php echo get_block_wrapper_attributes(); ?>
    data-wp-interactive="block01"
    data-wp-class--dark-theme="state.isDark"
>
    <button
        data-wp-on--click="actions.toggleStateText">
        Change State block01
    </button>
    <p
        data-wp-text="state.stateText"
    ></p>
</div>
