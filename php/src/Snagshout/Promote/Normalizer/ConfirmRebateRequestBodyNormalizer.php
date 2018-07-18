<?php

/**
 * Copyright 2016-2018, Snagshout <developers@snagshout.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This file is part of the Merchant package
 */

namespace Snagshout\Promote\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConfirmRebateRequestBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Snagshout\\Promote\\Model\\ConfirmRebateRequestBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Snagshout\Promote\Model\ConfirmRebateRequestBody;
    }

    public function denormalize(
        $data,
        $class,
        $format = null,
        array $context = []
    ) {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Snagshout\Promote\Model\ConfirmRebateRequestBody();
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'code')) {
            $object->setCode($data->{'code'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }

        return $data;
    }
}
