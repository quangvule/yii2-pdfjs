<?php

namespace quangvule\PDFjs;

use Yii;
use yii\helpers\ArrayHelper;
use yii\base\Widget as BaseWidget;
use yii\helpers\Html;

class Widget extends BaseWidget
{
    public $url;
    public $options = [
        'sideBarOpen' => false,
        'direction' => 'ltr',
        'buttons' => [
            'sidebarToggle' => true,
            'viewFind' => true,
            'pageUp' => true,
            'pageDown' => true,
            'zoomIn' => true,
            'zoomOut' => true,
            'scaleSelect' => true,
            'presentationMode' => true,
            'print' => false,
            'openFile' => false,
            'download' => false,
            'viewBookmark' => false,
        ]
    ];

    public function init()
    {
        if (!in_array($this->options['direction'], ['rtl', 'ltr']))
            $this->options['direction'] = 'ltr';

        parent::init();
    }

    public function run()
    {
        $this->registerAssets();

        return $this->render('_viewer', array(
            'url' => $this->url,
            'options' => $this->options,
        ));
    }

    public function registerAssets()
    {
        $view = $this->getView();
        $asset = Yii::$container->get(Asset::className());
        $asset = $asset::register($view);
    }
}