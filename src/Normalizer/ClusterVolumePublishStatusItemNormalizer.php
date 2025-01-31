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
    class ClusterVolumePublishStatusItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ClusterVolumePublishStatusItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ClusterVolumePublishStatusItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ClusterVolumePublishStatusItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NodeID', $data) && $data['NodeID'] !== null) {
                $object->setNodeID($data['NodeID']);
                unset($data['NodeID']);
            }
            elseif (\array_key_exists('NodeID', $data) && $data['NodeID'] === null) {
                $object->setNodeID(null);
            }
            if (\array_key_exists('State', $data) && $data['State'] !== null) {
                $object->setState($data['State']);
                unset($data['State']);
            }
            elseif (\array_key_exists('State', $data) && $data['State'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('PublishContext', $data) && $data['PublishContext'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['PublishContext'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPublishContext($values);
                unset($data['PublishContext']);
            }
            elseif (\array_key_exists('PublishContext', $data) && $data['PublishContext'] === null) {
                $object->setPublishContext(null);
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
            if ($object->isInitialized('nodeID') && null !== $object->getNodeID()) {
                $data['NodeID'] = $object->getNodeID();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('publishContext') && null !== $object->getPublishContext()) {
                $values = [];
                foreach ($object->getPublishContext() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['PublishContext'] = $values;
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
            return ['Docker\\API\\Model\\ClusterVolumePublishStatusItem' => false];
        }
    }
} else {
    class ClusterVolumePublishStatusItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ClusterVolumePublishStatusItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ClusterVolumePublishStatusItem';
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
            $object = new \Docker\API\Model\ClusterVolumePublishStatusItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('NodeID', $data) && $data['NodeID'] !== null) {
                $object->setNodeID($data['NodeID']);
                unset($data['NodeID']);
            }
            elseif (\array_key_exists('NodeID', $data) && $data['NodeID'] === null) {
                $object->setNodeID(null);
            }
            if (\array_key_exists('State', $data) && $data['State'] !== null) {
                $object->setState($data['State']);
                unset($data['State']);
            }
            elseif (\array_key_exists('State', $data) && $data['State'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('PublishContext', $data) && $data['PublishContext'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['PublishContext'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setPublishContext($values);
                unset($data['PublishContext']);
            }
            elseif (\array_key_exists('PublishContext', $data) && $data['PublishContext'] === null) {
                $object->setPublishContext(null);
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
            if ($object->isInitialized('nodeID') && null !== $object->getNodeID()) {
                $data['NodeID'] = $object->getNodeID();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('publishContext') && null !== $object->getPublishContext()) {
                $values = [];
                foreach ($object->getPublishContext() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['PublishContext'] = $values;
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
            return ['Docker\\API\\Model\\ClusterVolumePublishStatusItem' => false];
        }
    }
}