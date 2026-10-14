<?php

namespace Algoritma\Bundle\TrainingBundle\Layout\DataProvider;

class CustomBlockTestProvider
{
    public function getSubTitle(): string
    {
        return 'Custom Block Test Subtitle';
    }

    public function isBlocKTest2Visible(): bool
    {
        return true;
    }
}