<?php
/**
 * Test Block Template.
 *
 * @param    array        $block      The block settings and attributes.
 * @param    string       $content    The block inner HTML (empty).
 * @param    bool         $is_preview True during AJAX preview.
 * @param    (int|string) $post_id    The post ID this block is saved to.
 */

 $id = 'test-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'test';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }
  if( !empty($block['align']) ) {
      $className .= ' align' . $block['align'];
  }

  $title_t = get_field('title');
  $desc_t  = get_field('description');

  $postId = get_the_ID();
  $categories = get_the_category($postId);
  foreach($categories as $category){
  }
?>

<section id="<?php echo esc_attr($id); ?>" class="block__test <?php echo esc_attr($className); ?>">
  <div class="content">
    <h1 class="<?php echo $category->slug; ?>"><?php echo $title_t; ?></h1>
    <p><?php echo $desc_t; ?></p>
  </div>
</section>