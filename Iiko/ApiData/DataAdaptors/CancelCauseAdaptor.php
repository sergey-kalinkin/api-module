<?php

namespace App\Libraries\Iiko\ApiData\DataAdaptors;


use App\Libraries\AbstractElements\ADataAdaptor;
use App\Libraries\Iiko\ApiData\ResponseData\Delivery\DeliveryCancelCause;

final class CancelCauseAdaptor extends ADataAdaptor
{

    public function createOne(): ?DeliveryCancelCause
    {
        try {
            return new DeliveryCancelCause($this->getItem());
        }
        catch (\Throwable $t) {
            if($this->isProcessing())
                return $this->createOne();

            return null;
        }
    }
}
