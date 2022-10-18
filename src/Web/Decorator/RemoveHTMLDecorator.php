<?php

namespace DifferDev\Web\Decorator;

use DifferDev\Web\Interfaces\IOText;

class RemoveHTMLDecorator implements IOText
{
    public function __construct(
        protected IOText $ioComponent
    ) {
    }

    public function getText(): string
    {
        $text = $this->ioComponent->getText();
        return strip_tags($text);
    }

    public function setText(string $text): void
    {
        $this->ioComponent->setText($text);
    }
}