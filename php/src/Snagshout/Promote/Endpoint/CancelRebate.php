<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Endpoint;

class CancelRebate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $campaign;
    /**
     * 
     *
     * @param int $campaign ID of campaign to fetch
     * @param \Snagshout\Promote\Model\CancelRebateRequestBody $body 
     */
    public function __construct(int $campaign, \Snagshout\Promote\Model\CancelRebateRequestBody $body)
    {
        $this->campaign = $campaign;
        $this->body = $body;
    }

use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{campaign}'], [$this->campaign], '/deals/{campaign}/order/cancel');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Snagshout\Promote\Exception\CancelRebateUnprocessableEntityException
     * @throws \Snagshout\Promote\Exception\CancelRebateNotFoundException
     *
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (204 === $status) {
            return null;
        }
        if (422 === $status) {
            throw new \Snagshout\Promote\Exception\CancelRebateUnprocessableEntityException($serializer->deserialize($body, 'Snagshout\\Promote\\Model\\Error', 'json'));
        }
        if (404 === $status) {
            throw new \Snagshout\Promote\Exception\CancelRebateNotFoundException($serializer->deserialize($body, 'Snagshout\\Promote\\Model\\Error', 'json'));
        }
    }
}
