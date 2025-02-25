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
    data-wp-interactive="block02"
    >
    <button
        data-wp-on--click="actions.toggleClass"
    >
    Change Class
    </button>

    <p
    data-wp-text="state.customClass"
    data-wp-class--custom-class="state.customClass"
    data-wp-class--other-class="!state.customClass"></p>
</div>
