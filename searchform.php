<?php

/**
 * Custom search form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package RBL_Knowledge_Base
 */


?>
<form class="search-form mb-5" role="search" method="get" action="<?php echo esc_url(home_url('/')) ?>">
    <input placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder') ?>" class="search-form__input" type="search" name="s" title="Search" value="<?php echo  get_search_query() ?>">
    <button class="search-form__submit" type="submit" title="Search" aria-label="Search">
        <i aria-hidden="true" class="fas fa-search"></i> <span class="custom-screen-only">
            <?php echo  esc_attr_x('Search', 'submit button') ?>
        </span>
    </button>
</form>