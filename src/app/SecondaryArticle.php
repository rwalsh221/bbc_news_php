<?php

declare(strict_types=1);

namespace App;

class SecondaryArticle extends GetLorem 
{
    public function getSecondaryArticleHTML()
    {
        return '<div class="secondary-article secondary-article-1">
                <img src="https://picsum.photos/200">
                <h4>'
                .$this->formatHtml(6, 10).
                '</h4>
                <p>'
                .$this->formatHtml(13, 19).
                '</p>
                </div>
                
                <div class="secondary-article secondary-article-2">
                <img src="https://picsum.photos/200">
                <h4>'
                .$this->formatHtml(6, 10).
                '</h4>
                <p>'
                .$this->formatHtml(13, 19).
                '</p>
                </div>
                
                <div class="secondary-article secondary-article-3">
                <img src="https://picsum.photos/200">
                <h4>'
                .$this->formatHtml(6, 10).
                '</h4>
                <p>'
                .$this->formatHtml(13, 19).
                '</p>
                </div>';
    }
}

?>