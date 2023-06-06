<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <h3 class="archive-title"><?php $this->archiveTitle([
            'category' => _t('%s kategorisi gönderileri'),
            'search'   => _t('%s anahtar kelimesi için gönderiler'),
            'tag'      => _t('%s etiketi için gönderiler'),
            'author'   => _t('yazarı %s olan gönderiler')
        ], '', ''); ?></h3>
    <?php if ($this->have()): ?>
        <?php while ($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h2>
                <ul class="post-meta">
                    <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('Yazar: '); ?><a
                            itemprop="name" href="<?php $this->author->permalink(); ?>"
                            rel="author"><?php $this->author(); ?></a></li>
                    <li><?php _e('Tarih: '); ?>
                        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                    </li>
                    <li><?php _e('Kategori: '); ?><?php $this->category(','); ?></li>
                    <li itemprop="interactionCount"><a
                            href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('Yorumlar', '1 yorum', '%d yorum'); ?></a>
                    </li>
                </ul>
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content('- Devamını okuyun -'); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else: ?>
        <article class="post">
            <h2 class="post-title"><?php _e('İçerik bulunamadı'); ?></h2>
        </article>
    <?php endif; ?>

    <?php $this->pageNav('&laquo; Önceki', 'Sonraki &raquo;'); ?>
</div><!-- end #main -->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
