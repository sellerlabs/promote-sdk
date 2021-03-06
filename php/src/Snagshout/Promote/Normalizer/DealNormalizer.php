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

class DealNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Snagshout\\Promote\\Model\\Deal';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Snagshout\Promote\Model\Deal;
    }
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Snagshout\Promote\Model\Deal();
        if (property_exists($data, 'campaignId')) {
            $object->setCampaignId($data->{'campaignId'});
        }
        if (property_exists($data, 'companyId')) {
            $object->setCompanyId($data->{'companyId'});
        }
        if (property_exists($data, 'productId')) {
            $object->setProductId($data->{'productId'});
        }
        if (property_exists($data, 'productName')) {
            $object->setProductName($data->{'productName'});
        }
        if (property_exists($data, 'productDescription')) {
            $object->setProductDescription($data->{'productDescription'});
        }
        if (property_exists($data, 'categories')) {
            $values = [];
            foreach ($data->{'categories'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Snagshout\\Promote\\Model\\Category', 'json', $context);
            }
            $object->setCategories($values);
        }
        if (property_exists($data, 'media')) {
            $values_1 = [];
            foreach ($data->{'media'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Snagshout\\Promote\\Model\\Medium', 'json', $context);
            }
            $object->setMedia($values_1);
        }
        if (property_exists($data, 'boost')) {
            $values_2 = [];
            foreach ($data->{'boost'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBoost($values_2);
        }
        if (property_exists($data, 'code')) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'confidence')) {
            $object->setConfidence($data->{'confidence'});
        }
        if (property_exists($data, 'currency')) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'discountPrice')) {
            $object->setDiscountPrice($data->{'discountPrice'});
        }
        if (property_exists($data, 'rebateAmount')) {
            $object->setRebateAmount($data->{'rebateAmount'});
        }
        if (property_exists($data, 'isExclusive')) {
            $object->setIsExclusive($data->{'isExclusive'});
        }
        if (property_exists($data, 'isNSFW')) {
            $object->setIsNSFW($data->{'isNSFW'});
        }
        if (property_exists($data, 'featured')) {
            $values_3 = [];
            foreach ($data->{'featured'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setFeatured($values_3);
        }
        if (property_exists($data, 'isUnlimited')) {
            $object->setIsUnlimited($data->{'isUnlimited'});
        }
        if (property_exists($data, 'listingMetadata')) {
            $object->setListingMetadata($data->{'listingMetadata'});
        }
        if (property_exists($data, 'listingPrice')) {
            $object->setListingPrice($data->{'listingPrice'});
        }
        if (property_exists($data, 'listingUrl')) {
            $object->setListingUrl($data->{'listingUrl'});
        }
        if (property_exists($data, 'marketplace')) {
            $object->setMarketplace($data->{'marketplace'});
        }
        if (property_exists($data, 'payloadType')) {
            $object->setPayloadType($data->{'payloadType'});
        }
        if (property_exists($data, 'requireEmail')) {
            $object->setRequireEmail($data->{'requireEmail'});
        }
        if (property_exists($data, 'shippingDaysMax')) {
            $object->setShippingDaysMax($data->{'shippingDaysMax'});
        }
        if (property_exists($data, 'shippingDaysMin')) {
            $object->setShippingDaysMin($data->{'shippingDaysMin'});
        }
        if (property_exists($data, 'shippingPrice')) {
            $object->setShippingPrice($data->{'shippingPrice'});
        }
        if (property_exists($data, 'shippingType')) {
            $object->setShippingType($data->{'shippingType'});
        }
        if (property_exists($data, 'startsAt')) {
            $object->setStartsAt($data->{'startsAt'});
        }
        if (property_exists($data, 'returnAt')) {
            $object->setReturnAt($data->{'returnAt'});
        }
        if (property_exists($data, 'updatedAt')) {
            $object->setUpdatedAt($data->{'updatedAt'});
        }
        if (property_exists($data, 'endsAt')) {
            $object->setEndsAt($data->{'endsAt'});
        }
        if (property_exists($data, 'available')) {
            $object->setAvailable($data->{'available'});
        }
        if (property_exists($data, 'metadata')) {
            $object->setMetadata($data->{'metadata'});
        }
        if (property_exists($data, 'remainingQuantity')) {
            $object->setRemainingQuantity($data->{'remainingQuantity'});
        }
        if (property_exists($data, 'dailyLimitReached')) {
            $object->setDailyLimitReached($data->{'dailyLimitReached'});
        }
        if (property_exists($data, 'immediateFollowup')) {
            $object->setImmediateFollowup($data->{'immediateFollowup'});
        }
        if (property_exists($data, 'scheduledFollowup')) {
            $object->setScheduledFollowup($data->{'scheduledFollowup'});
        }

        return $object;
    }
    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCampaignId()) {
            $data->{'campaignId'} = $object->getCampaignId();
        }
        if (null !== $object->getCompanyId()) {
            $data->{'companyId'} = $object->getCompanyId();
        }
        if (null !== $object->getProductId()) {
            $data->{'productId'} = $object->getProductId();
        }
        if (null !== $object->getProductName()) {
            $data->{'productName'} = $object->getProductName();
        }
        if (null !== $object->getProductDescription()) {
            $data->{'productDescription'} = $object->getProductDescription();
        }
        if (null !== $object->getCategories()) {
            $values = [];
            foreach ($object->getCategories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'categories'} = $values;
        }
        if (null !== $object->getMedia()) {
            $values_1 = [];
            foreach ($object->getMedia() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'media'} = $values_1;
        }
        if (null !== $object->getBoost()) {
            $values_2 = [];
            foreach ($object->getBoost() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'boost'} = $values_2;
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getConfidence()) {
            $data->{'confidence'} = $object->getConfidence();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getDiscountPrice()) {
            $data->{'discountPrice'} = $object->getDiscountPrice();
        }
        if (null !== $object->getRebateAmount()) {
            $data->{'rebateAmount'} = $object->getRebateAmount();
        }
        if (null !== $object->getIsExclusive()) {
            $data->{'isExclusive'} = $object->getIsExclusive();
        }
        if (null !== $object->getIsNSFW()) {
            $data->{'isNSFW'} = $object->getIsNSFW();
        }
        if (null !== $object->getFeatured()) {
            $values_3 = [];
            foreach ($object->getFeatured() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'featured'} = $values_3;
        }
        if (null !== $object->getIsUnlimited()) {
            $data->{'isUnlimited'} = $object->getIsUnlimited();
        }
        if (null !== $object->getListingMetadata()) {
            $data->{'listingMetadata'} = $object->getListingMetadata();
        }
        if (null !== $object->getListingPrice()) {
            $data->{'listingPrice'} = $object->getListingPrice();
        }
        if (null !== $object->getListingUrl()) {
            $data->{'listingUrl'} = $object->getListingUrl();
        }
        if (null !== $object->getMarketplace()) {
            $data->{'marketplace'} = $object->getMarketplace();
        }
        if (null !== $object->getPayloadType()) {
            $data->{'payloadType'} = $object->getPayloadType();
        }
        if (null !== $object->getRequireEmail()) {
            $data->{'requireEmail'} = $object->getRequireEmail();
        }
        if (null !== $object->getShippingDaysMax()) {
            $data->{'shippingDaysMax'} = $object->getShippingDaysMax();
        }
        if (null !== $object->getShippingDaysMin()) {
            $data->{'shippingDaysMin'} = $object->getShippingDaysMin();
        }
        if (null !== $object->getShippingPrice()) {
            $data->{'shippingPrice'} = $object->getShippingPrice();
        }
        if (null !== $object->getShippingType()) {
            $data->{'shippingType'} = $object->getShippingType();
        }
        if (null !== $object->getStartsAt()) {
            $data->{'startsAt'} = $object->getStartsAt();
        }
        if (null !== $object->getReturnAt()) {
            $data->{'returnAt'} = $object->getReturnAt();
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updatedAt'} = $object->getUpdatedAt();
        }
        if (null !== $object->getEndsAt()) {
            $data->{'endsAt'} = $object->getEndsAt();
        }
        if (null !== $object->getAvailable()) {
            $data->{'available'} = $object->getAvailable();
        }
        if (null !== $object->getMetadata()) {
            $data->{'metadata'} = $object->getMetadata();
        }
        if (null !== $object->getRemainingQuantity()) {
            $data->{'remainingQuantity'} = $object->getRemainingQuantity();
        }
        if (null !== $object->getDailyLimitReached()) {
            $data->{'dailyLimitReached'} = $object->getDailyLimitReached();
        }
        if (null !== $object->getImmediateFollowup()) {
            $data->{'immediateFollowup'} = $object->getImmediateFollowup();
        }
        if (null !== $object->getScheduledFollowup()) {
            $data->{'scheduledFollowup'} = $object->getScheduledFollowup();
        }

        return $data;
    }
}
