<?php

namespace App\Libraries\Iiko\ApiData\DataAdaptors;


use App\Libraries\AbstractElements\ADataAdaptor;
use App\Libraries\Iiko\ApiData\ResponseData\Client\IikoCardCategory;

final class IikoCardCategoryAdaptor extends ADataAdaptor
{

    public function createOne(): ?IikoCardCategory
    {
        try {
            return new IikoCardCategory($this->getItem());
        }
        catch (\Throwable $t) {
            if($this->isProcessing())
                return $this->createOne();

            return null;
        }
    }
}
