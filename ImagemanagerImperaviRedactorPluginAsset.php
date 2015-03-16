<?php

namespace mata\imperavi;
use yii\web\AssetBundle;

class ImagemanagerImperaviRedactorPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/mata/mata-imperavi-redactor/assets/plugins/imagemanager';
    public $js = [
        'imagemanager.js'
    ];
    public $css = [

    ];
    public $depends = [
        'mata\imperavi\ImperaviRedactorAsset'
    ];
}