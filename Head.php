<?php
namespace system\widgets;
use Yii;
class Head extends \base\Widget{
    public $logo = 'auryn-circle-light';
    public $path = '/static/icon/';
    public $title;
    public $label;
    public $description;
    public $cover;
    public function init(){
        parent::init();
        $this->config = $this->view->params['meta'];
        $this->logo = Yii::$app->logo;
        $this->title = yii::$app->controller->name;
        $this->description = $this->config['description'];
        $this->cover = $this->config['cover'];
        $this->label = $this->config['label'];
        }
    public function run(){
        echo $this->render('head',[
            'cover' => $this->cover,
            'label' => $this->label,
            'description' => $this->description,
            'title' => $this->title,
            'logo' => $this->logo,
            'meta' => $this->config,
            'csrf' => $this->html::csrfMetaTags(),
            'path' => $this->path.$this->logo.'/',
            'domain' => $this->config['domain'],
            'width' => $this->config['width'],
            'height' => $this->config['height'],
            'cover' => $this->path.$this->logo.'/'.$this->cover,
            'color' => $this->config['color'],
            'msColor' => $this->config['ms-color'],
            'svgColor' => $this->config['svg-color'],
            ]);
        }
    }
?> 
