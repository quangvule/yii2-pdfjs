<?php

namespace quangvule\PDFjs;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@quangvule/PDFjs/assets';

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
        'js/pdf.js',
        'js/viewer.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}