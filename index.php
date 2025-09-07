<?php
get_header();
?>

<main>
    <h1>Hello, ChocoGummyBears Theme!</h1>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
</main>

<?php
get_footer();
?>
