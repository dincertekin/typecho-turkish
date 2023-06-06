<?php if(!defined('__TYPECHO_ADMIN__')) exit; ?>
<div class="typecho-foot" role="contentinfo">
    <div class="copyright">
        <a href="https://typecho.org" class="i-logo-s">Typecho</a>
        <p><?php _e('<a href="https://typecho.org">%s</a> ile geliştirildi. Sürüm: %s', $options->software, $options->version); ?></p>
    </div>
    <nav class="resource">
        <a href="https://docs.typecho.org"><?php _e('帮助文档'); ?></a> &bull;
        <a href="https://forum.typecho.org"><?php _e('支持论坛'); ?></a> &bull;
        <a href="https://github.com/typecho/typecho/issues"><?php _e('报告错误'); ?></a> &bull;
        <a href="https://typecho.org/download"><?php _e('资源下载'); ?></a>
    </nav>
</div>
