<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('Sitenin Logo Adresi'),
        _t('Site başlığından önce bir logo eklemek için buraya bir resim URL\'si girin')
    );

    $form->addInput($logoUrl);

    $sidebarBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'sidebarBlock',
        [
            'ShowRecentPosts'    => _t('Son gönderileri göster'),
            'ShowRecentComments' => _t('Son yanıtları göster'),
            'ShowCategory'       => _t('Kategorileri göster'),
            'ShowArchive'        => _t('Arşivi göster'),
            'ShowOther'          => _t('Diğerlerini göster')
        ],
        ['ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'],
        _t('Kenar çubuğu ekranı')
    );

    $form->addInput($sidebarBlock->multiMode());
}

/*
function themeFields($layout)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('站点LOGO地址'),
        _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO')
    );
    $layout->addItem($logoUrl);
}
*/
