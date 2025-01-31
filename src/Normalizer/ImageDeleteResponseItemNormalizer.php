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
    class ImageDeleteResponseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ImageDeleteResponseItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ImageDeleteResponseItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ImageDeleteResponseItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Untagged', $data) && $data['Untagged'] !== null) {
                $object->setUntagged($data['Untagged']);
                unset($data['Untagged']);
            }
            elseif (\array_key_exists('Untagged', $data) && $data['Untagged'] === null) {
                $object->setUntagged(null);
            }
            if (\array_key_exists('Deleted', $data) && $data['Deleted'] !== null) {
                $object->setDeleted($data['Deleted']);
                unset($data['Deleted']);
            }
            elseif (\array_key_exists('Deleted', $data) && $data['Deleted'] === null) {
                $object->setDeleted(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('untagged') && null !== $object->getUntagged()) {
                $data['Untagged'] = $object->getUntagged();
            }
            if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
                $data['Deleted'] = $object->getDeleted();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\ImageDeleteResponseItem' => false];
        }
    }
} else {
    class ImageDeleteResponseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ImageDeleteResponseItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ImageDeleteResponseItem';
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
            $object = new \Docker\API\Model\ImageDeleteResponseItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Untagged', $data) && $data['Untagged'] !== null) {
                $object->setUntagged($data['Untagged']);
                unset($data['Untagged']);
            }
            elseif (\array_key_exists('Untagged', $data) && $data['Untagged'] === null) {
                $object->setUntagged(null);
            }
            if (\array_key_exists('Deleted', $data) && $data['Deleted'] !== null) {
                $object->setDeleted($data['Deleted']);
                unset($data['Deleted']);
            }
            elseif (\array_key_exists('Deleted', $data) && $data['Deleted'] === null) {
                $object->setDeleted(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('untagged') && null !== $object->getUntagged()) {
                $data['Untagged'] = $object->getUntagged();
            }
            if ($object->isInitialized('deleted') && null !== $object->getDeleted()) {
                $data['Deleted'] = $object->getDeleted();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\ImageDeleteResponseItem' => false];
        }
    }
}