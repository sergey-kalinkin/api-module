<?php

namespace App\Libraries\Iiko\ApiData\DataAdaptors;


use App\Libraries\AbstractElements\ADataAdaptor;
use App\Libraries\Iiko\ApiData\ResponseData\Client\ClientAddress;

final class ClientAddressAdaptor extends ADataAdaptor
{

    public function createOne(): ?ClientAddress
    {
        try {
            return new ClientAddress($this->getItem());
        }
        catch (\Throwable $t) {
            if($this->isProcessing())
                return $this->createOne();

            return null;
        }
    }
}
