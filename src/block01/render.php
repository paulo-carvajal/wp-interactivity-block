<?php
$unique_id = wp_unique_id('p-');

wp_interactivity_state(
    'block01',
    array(
        'isDark'    => false,
        'darkText'  => esc_html__('Switch to Light', 'pac-blocks'),
        'lightText' => esc_html__('Switch to Dark', 'pac-blocks'),
        'themeText'    => esc_html__('Switch to Dark', 'pac-blocks'),
        'stateText' => esc_html('State text')
    )
);
?>

<div
    <?php echo get_block_wrapper_attributes(); ?>
    data-wp-interactive="block01"
    <?php echo wp_interactivity_data_wp_context(array('isOpen' => false)); ?>
    data-wp-watch="callbacks.logIsOpen"
    data-wp-class--dark-theme="state.isDark">
    <button
        data-wp-on--click="actions.toggleTheme"
        data-wp-text="state.themeText"></button>

    <button
        data-wp-on--click="actions.toggleOpen"
        data-wp-bind--aria-expanded="context.isOpen"
        aria-controls="<?php echo esc_attr($unique_id); ?>">
        <?php esc_html_e('Toggle', 'pac-blocks'); ?>
    </button>

    <button
        data-wp-on--click="actions.toggleStateText"
        data-wp-bind--aria-expanded="context.isOpen"
        aria-controls="<?php echo esc_attr($unique_id); ?>">
        <?php esc_html_e('Change State', 'pac-blocks'); ?>
    </button>

    <p
        id="<?php echo esc_attr($unique_id); ?>"
        data-wp-bind--hidden="!context.isOpen">
        <?php
        esc_html_e('Pac Blocks - hello from an interactive block!', 'pac-blocks');
        ?>
    </p>
    <p
        data-wp-text="state.stateText">
        <- stateText
            </p>
</div>
