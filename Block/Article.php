<?php

namespace Octo\Articles\Block;

use Octo\Block;
use Octo\Template;

class Article extends Block
{
    public static function getInfo()
    {
        return [
            'title' => 'Article',
            'icon' => 'file-text-o',
            'editor' => ['\Octo\Articles\Block\Article', 'getEditorForm'],
            'full' => true,
        ];
    }

    public static function getEditorForm($item)
    {
        $template = new Template('article-editor', 'admin');
        $template->content = $item;
        
        return $template->render();
    }

    public function renderNow()
    {
        $this->view->content = $this->content;
    }
}
