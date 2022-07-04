<?php

namespace App\Libraries\Iiko\Api;


use App\Libraries\AbstractElements\AApi;
use GuzzleHttp\Exception\ClientException;

class IikoOrdersConfigApi extends AApi
{
    /**
     * @inheritDoc
     */
    protected function queryOptions(?array $data = null): array
    {
        return [
            'headers' => [
                'Content-type' => 'application/json'
            ],
            'json' => $data
        ];
    }

    /**
     * @inheritDoc
     */
    protected function query(string $method, string $url, ?array $data = null, bool $as_associative = true)
    {
        return parent::query($method, $url, $data, $as_associative);
    }

    /**
     * @inheritDoc
     */
    protected function clientOptions(): array
    {
        return [
            'base_uri' => config('iiko_api.order_api')
        ];
    }

    /**
     * @inheritDoc
     */
    protected function handleError(ClientException $e)
    {
        // TODO: Implement handleError() method.
    }
}
