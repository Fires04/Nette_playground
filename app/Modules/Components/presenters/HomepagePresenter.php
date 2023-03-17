<?php

declare(strict_types=1);

namespace App\Components\Presenters;

use App\Components\MainComponent;
use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{

   public function createComponentMainComponent(){
        $component = new MainComponent();
        return $component;
   }


}
