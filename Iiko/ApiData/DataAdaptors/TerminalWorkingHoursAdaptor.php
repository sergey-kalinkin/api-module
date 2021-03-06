<?php

namespace App\Libraries\Iiko\ApiData\DataAdaptors;


use App\Libraries\AbstractElements\ADataAdaptor;
use App\Libraries\Iiko\ApiData\ResponseData\DeliveryTerminal\TerminalWorkingHours;

final class TerminalWorkingHoursAdaptor extends ADataAdaptor
{

    public function createOne(): ?TerminalWorkingHours
    {
        try {
            return new TerminalWorkingHours($this->getItem());
        }
        catch (\Throwable $t) {
            if($this->isProcessing())
                return $this->createOne();

            return null;
        }
    }
}
