<?php

namespace Docker\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\API\Runtime\Normalizer\CheckArray;
use Docker\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class IPAMConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\IPAMConfig';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\IPAMConfig';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\IPAMConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Subnet', $data) && $data['Subnet'] !== null) {
                $object->setSubnet($data['Subnet']);
                unset($data['Subnet']);
            }
            elseif (\array_key_exists('Subnet', $data) && $data['Subnet'] === null) {
                $object->setSubnet(null);
            }
            if (\array_key_exists('IPRange', $data) && $data['IPRange'] !== null) {
                $object->setIPRange($data['IPRange']);
                unset($data['IPRange']);
            }
            elseif (\array_key_exists('IPRange', $data) && $data['IPRange'] === null) {
                $object->setIPRange(null);
            }
            if (\array_key_exists('Gateway', $data) && $data['Gateway'] !== null) {
                $object->setGateway($data['Gateway']);
                unset($data['Gateway']);
            }
            elseif (\array_key_exists('Gateway', $data) && $data['Gateway'] === null) {
                $object->setGateway(null);
            }
            if (\array_key_exists('AuxiliaryAddresses', $data) && $data['AuxiliaryAddresses'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['AuxiliaryAddresses'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setAuxiliaryAddresses($values);
                unset($data['AuxiliaryAddresses']);
            }
            elseif (\array_key_exists('AuxiliaryAddresses', $data) && $data['AuxiliaryAddresses'] === null) {
                $object->setAuxiliaryAddresses(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('subnet') && null !== $object->getSubnet()) {
                $data['Subnet'] = $object->getSubnet();
            }
            if ($object->isInitialized('iPRange') && null !== $object->getIPRange()) {
                $data['IPRange'] = $object->getIPRange();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('auxiliaryAddresses') && null !== $object->getAuxiliaryAddresses()) {
                $values = [];
                foreach ($object->getAuxiliaryAddresses() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['AuxiliaryAddresses'] = $values;
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\IPAMConfig' => false];
        }
    }
} else {
    class IPAMConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\IPAMConfig';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\IPAMConfig';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\IPAMConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Subnet', $data) && $data['Subnet'] !== null) {
                $object->setSubnet($data['Subnet']);
                unset($data['Subnet']);
            }
            elseif (\array_key_exists('Subnet', $data) && $data['Subnet'] === null) {
                $object->setSubnet(null);
            }
            if (\array_key_exists('IPRange', $data) && $data['IPRange'] !== null) {
                $object->setIPRange($data['IPRange']);
                unset($data['IPRange']);
            }
            elseif (\array_key_exists('IPRange', $data) && $data['IPRange'] === null) {
                $object->setIPRange(null);
            }
            if (\array_key_exists('Gateway', $data) && $data['Gateway'] !== null) {
                $object->setGateway($data['Gateway']);
                unset($data['Gateway']);
            }
            elseif (\array_key_exists('Gateway', $data) && $data['Gateway'] === null) {
                $object->setGateway(null);
            }
            if (\array_key_exists('AuxiliaryAddresses', $data) && $data['AuxiliaryAddresses'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['AuxiliaryAddresses'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setAuxiliaryAddresses($values);
                unset($data['AuxiliaryAddresses']);
            }
            elseif (\array_key_exists('AuxiliaryAddresses', $data) && $data['AuxiliaryAddresses'] === null) {
                $object->setAuxiliaryAddresses(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('subnet') && null !== $object->getSubnet()) {
                $data['Subnet'] = $object->getSubnet();
            }
            if ($object->isInitialized('iPRange') && null !== $object->getIPRange()) {
                $data['IPRange'] = $object->getIPRange();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('auxiliaryAddresses') && null !== $object->getAuxiliaryAddresses()) {
                $values = [];
                foreach ($object->getAuxiliaryAddresses() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['AuxiliaryAddresses'] = $values;
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\IPAMConfig' => false];
        }
    }
}