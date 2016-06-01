<?php

namespace quangvule\PDFjs;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/quangvule/yii2-pdfjs/src/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/viewer.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/compatibility.js',
        'js/l10n.js',
        'js/pdf.js',
        'js/viewer.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
}