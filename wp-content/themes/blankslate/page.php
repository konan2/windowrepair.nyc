
<?php get_header(); ?>

<?php the_content(); ?>


<?php
// Получаем массив значений поля
$field_values = get_field('page_section');

// Проверяем, есть ли значения в массиве
if ($field_values) {
    // Создаем пустую переменную для хранения контента
    $content = '';

    // Перебираем каждый элемент массива
    foreach ($field_values as $value) {
        // Проверяем, что значение является массивом и не пустым
        if (is_array($value) && !empty($value['post'])) {
            // Извлекаем объект WP_Post из массива
            $post = $value['post'][0];

            // Добавляем контент текущего поста к общему контенту
            $content .= $post->post_content;
        }
    }

    // Выводим общий контент
    echo $content;
}
?>







<?php get_footer();?>