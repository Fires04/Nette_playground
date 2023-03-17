<?php

declare(strict_types=1);

namespace App\Latte\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{

    public function beforeRender(){
        bdump($this->formatLayoutTemplateFiles());
    }

}
