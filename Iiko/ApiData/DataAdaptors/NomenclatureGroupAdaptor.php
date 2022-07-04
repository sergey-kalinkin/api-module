<?php

namespace App\Libraries\Iiko\ApiData\DataAdaptors;


use App\Libraries\AbstractElements\ADataAdaptor;
use App\Libraries\Iiko\ApiData\ResponseData\Nomenclature\NomenclatureGroup;

final class NomenclatureGroupAdaptor extends ADataAdaptor
{

    public function createOne(): ?NomenclatureGroup
    {
        try {
            return new NomenclatureGroup($this->getItem());
        }
        catch (\Throwable $t) {
            if($this->isProcessing())
                return $this->createOne();

            return null;
        }
    }
}
