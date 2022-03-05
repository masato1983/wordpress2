<?php
function udemy_wordpress2_post_meta()
{
    echo '<span>Posted on</span>';
    echo '<a href="' . esc_url(get_permalink()) . '">';
    echo '<time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>';
    echo '</a>';
    echo '<span>By</span>';
    echo '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>';
}

function udemy_wordpress2_readmore_link()
{
    echo '<a href="' . esc_url(get_the_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
    echo 'Read More <span class="u-screen-reader-text">About ' . get_the_title() . '</span>';
    echo '</a>';
}
