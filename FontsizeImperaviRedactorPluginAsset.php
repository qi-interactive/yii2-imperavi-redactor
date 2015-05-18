<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace mata\imperavi;
use yii\web\AssetBundle;

/**
 * @author Alexander Yaremchuk <alwex10@gmail.com>
 * @since 1.4
 */
class FontsizeImperaviRedactorPluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/mata/mata-imperavi-redactor/assets/plugins/fontsize';
    public $js = [
        'fontsize.js'
    ];
    public $css = [

    ];
    public $depends = [
        'mata\imperavi\ImperaviRedactorAsset'
    ];
}