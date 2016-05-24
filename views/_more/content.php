<section>
  <?php 
  foreach ($current['sub'] as $article) { ?>
    <article>
      <figure>
        <a href='<?php echo $article['url'];?>'>
          <img alt='<?php echo $article['text'] . ' - ' . $_site_title;?>' src='<?php echo $article['cover'];?>' />
        </a>
        <figcaption><?php echo $article['text'] . ' - ' . $_site_title;?></figcaption>
      </figure>

      <h2>
        <a href='<?php echo $article['url'];?>'><?php echo $article['text'];?></a>
        <time datetime='<?php echo $article['created_at'];?>'><?php echo $article['created_at'];?></time>
      </h2>

      <div><?php echo remove_ckedit_tag ($article['description']);?></div>
      <a href='<?php echo $article['url'];?>'></a>

    </article>
  <?php 
  } ?>
</section>
