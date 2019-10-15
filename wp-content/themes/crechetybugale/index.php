<?php


if ($_GET['s']) {
    $searchResults = [];
    while (have_posts()) {
        the_post();

        ob_start();
        the_title();
        $title = ob_get_clean();

        ob_start();
        the_excerpt();
        $excerpt = ob_get_clean();


        ob_start();
        the_permalink();
        $permalink = ob_get_clean();

        $searchResults[] = [$title, $excerpt, $permalink];
    }
}
else
{
    the_post();
    ob_start();
    the_content();
    $wordpress_content = ob_get_clean();

}
include __DIR__.'/../../../../creche1/test/layout.php';