<?php /* Template Name: Terms */ ?>
<?php get_header(); ?>
<?php $page = get_post(get_the_ID()); ?>
<div class="top-border" style="background: #f9c100; height: 5px;"></div>
<div class="page-container">
    <div class="page-content">
        <?php $description = get_field('description_block'); ?>
        <?php if (!empty($description)) : ?>
            <h1 class="terms-h1"><?php echo $page->post_title ;?><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.9 2H15.07C17.78 2 19.97 3.07 20 5.79V20.97C20 21.14 19.96 21.31 19.88 21.46C19.75 21.7 19.53 21.88 19.26 21.96C19 22.04 18.71 22 18.47 21.86L11.99 18.62L5.5 21.86C5.351 21.939 5.18 21.99 5.01 21.99C4.45 21.99 4 21.53 4 20.97V5.79C4 3.07 6.2 2 8.9 2ZM8.22 9.62H15.75C16.18 9.62 16.53 9.269 16.53 8.83C16.53 8.39 16.18 8.04 15.75 8.04H8.22C7.79 8.04 7.44 8.39 7.44 8.83C7.44 9.269 7.79 9.62 8.22 9.62Z" fill="#200E32"/>
                </svg></h1>
            <div class="description-container page-terms">
                <?php echo $description; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="top-border" style="background: #f9c100; height: 5px;"></div>
<?php get_footer(); ?>


