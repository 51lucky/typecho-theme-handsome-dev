<?php
/**
 * 完美的扁平化设计。如同少年，迎风而立。
 * 
 * @package handsome 
 * @author 友人C
 * @version 1.1.1
 * @link http://www.ihewro.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

  <!-- aside -->
  <?php $this->need('aside.php'); ?>
  <!-- / aside -->

    <!-- content -->
<div id="content" class="app-content">
  <div class="butterbar hide">
    <span class="bar"></span>
  </div>
  <a href="#" class="off-screen-toggle hide" data-toggle-class=".app-aside=off-screen"></a>
  <main class="app-content-body">
    <div class="hbox hbox-auto-xs hbox-auto-sm">
      <div class="col">
        <header class="bg-light lter b-b wrapper-md">
          <h1 class="m-n font-thin h3 text-black l-h"><?php $this->options->IndexName(); ?></h1>
          <small class="text-muted"><?php $this->options->Indexwords(); ?></small></header>
        <div class="wrapper-md">
            <!--首页输出文章-->
      <div class="blog-post">  
      <?php while($this->next()): ?>      
        <div class="panel">
         <!--首页文章页面头图-->
          <div id="index-post-img">
        <?php if (array_key_exists('thumb',unserialize($this->___fields()))): ?>
          <img src="<?php echo $this->fields->thumb; ?>" class="img-full">
        <?php else: ?>
          <?php $thumb = showThumbnail($this); if(!empty($thumb)): ?>
          <img src="<?php echo $thumb ?>" class="img-full">
        <?php endif; ?>
        <?php endif; ?>
      </div>
          <!--首页文章内容-->
          <div class="wrapper-lg">
          

            <h2 class="m-t-none"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
            <p class="summary">
            <?php $this->excerpt(200, '...'); //180就是摘要的字数，...是后缀; ?>
            </p>
            <div class="line line-lg b-b b-light"></div>
            <div class="text-muted">
              <i class="iconfont icon-user1 text-muted"></i> <a href class="m-r-sm"><?php $this->author(); ?> </a>
              <i class="iconfont icon-weibiaoti5 text-muted"></i> <?php $this->date('F j, Y'); ?>
              <a href="<?php $this->permalink() ?>#comments" class="m-l-sm"><i class="iconfont icon-comments text-muted"></i> <?php $this->commentsNum(_t(' 暂无评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?></a>
            </div>
          </div>
        </div>
     <?php endwhile; ?>     
        
      </div>

          <!--分页首页按钮-->
          <nav class="text-center m-t-lg m-b-lg" role="navigation">
        <?php $this->pageNav('&laquo;', '&raquo;'); ?>
          </nav>
        </div>
      </div>
      <!--首页右侧栏-->
      <?php $this->need('sidebar.php') ?>
    </div>
  </main>
</div>
    <!-- /content -->
    
    <!-- footer -->
  <?php $this->need('footer.php'); ?>
    <!-- / footer -->
