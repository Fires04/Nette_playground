<?php

declare(strict_types=1);

namespace App\UI\Home;

use App\Components\ModalComponent;
use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{

    protected function createComponentModalWindow()
    {
        return new ModalComponent();
    }

}
