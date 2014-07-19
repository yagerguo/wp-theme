<html>
    <head>
        <title><?php bloginfo('name'); ?></title>
    </head>
    <body>

        <h2>所有分类</h2>
        <?php wp_list_categories(array('hide_empty' => false)) ?>
        <hr />