<?php

declare(strict_types=1);

namespace App;

class PrimaryArticle extends GetLorem 
{
    public function getPrimaryArticleHTML()
    {
        return '<div class="primary-article">
                    <div class="primary-article__content">
                        <h3>'
                            .$this->formatHtml(6, 10).
                        '</h3>
                        <p>'
                            .$this->formatHtml(13, 19).
                        '</p>
                    </div>
                    <div class="primary-article__img"><img src="https://picsum.photos/200"></div>
                </div>';
    }
}
?>