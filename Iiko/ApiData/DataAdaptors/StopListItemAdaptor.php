<?php

namespace App\Libraries\Iiko\ApiData\DataAdaptors;


use App\Libraries\AbstractElements\ADataAdaptor;
use App\Libraries\Iiko\ApiData\ResponseData\StopList\StopListItem;

final class StopListItemAdaptor extends ADataAdaptor
{

    public function createOne(): ?StopListItem
    {
        try {
            return new StopListItem($this->getItem());
        }
        catch (\Throwable $t) {
            if($this->isProcessing())
                return $this->createOne();

            return null;
        }
    }
}
