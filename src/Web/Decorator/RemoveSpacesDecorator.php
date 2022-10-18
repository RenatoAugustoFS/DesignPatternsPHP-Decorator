<?php

namespace DifferDev\Web\Decorator;

use DifferDev\Web\Interfaces\IOText;

class RemoveSpacesDecorator implements IOText
{
    public function __construct(
      protected IOText $ioComponent
    ) {
    }

    public function getText(): string
    {
        $text = $this->ioComponent->getText();
        return trim($text);
    }

    public function setText(string $text): void
    {
        $this->ioComponent->setText($text);
    }
}