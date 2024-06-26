<?php

namespace App\Components;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;

class ModalComponent extends Control
{

    private $data;
    public function __construct($data = "default")
    {
        $this->data = $data;
    }

    public function render()
    {
        $this->template->setFile(__DIR__ . '/templates/ModalComponent.latte');
        $this->template->content = $this->data;
        $this->template->render();
    }

    public function handleFetchData($data){
        $this->data = $data;
        $this->getPresenter()->payload->customData = ["testPayload" => "data-123"];
        $this->redrawControl("modalContent");
    }


}