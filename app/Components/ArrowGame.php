<?php

namespace App\Components;

use Nette\Application\UI\Control;

class MainComponent extends Control
{


    public $width = 5;
    public $height = 5;

    /** @persistent array*/
    public $position = [];

    /** @persistent */
    public $round = 0;

    /** @persistent array*/
    public $target = [];

    private $gameOver = false;

    public function __construct(){
        $this->position = [rand(1,$this->width),rand(1,$this->height)];
        $this->target = [rand(1,$this->width),rand(1,$this->height)];
    }

    public function render()
    {
        $this->template->width = $this->width;
        $this->template->heigth = $this->height;
        $this->template->round = $this->round;
        $this->template->position = $this->position;
        $this->template->target = $this->target;
        $this->template->gameOver = $this->gameOver;
        $this->template->render(__DIR__ . '/ArrowGame.latte');
    }

    public function handleMove($direction)
    {
        if($direction=="up" && $this->position[1]>1){
            $this->position[1]--;
        }elseif($direction=="down" && $this->position[1]<$this->height){
            $this->position[1]++;
        }elseif($direction=="left" && $this->position[0]>1){
            $this->position[0]--;
        }elseif($direction=="right" && $this->position[0]<$this->width){
            $this->position[0]++;
        }
        $this->round++;
        $this->redrawControl();

        if($this->position == $this->target){
            $this->gameOver = true;
        }
    }

    public function handleRestart(){
        $this->redirect('this');
    }

}