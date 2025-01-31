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
    class VolumeListResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\VolumeListResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\VolumeListResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\VolumeListResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Volumes', $data) && $data['Volumes'] !== null) {
                $values = [];
                foreach ($data['Volumes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\Volume', 'json', $context);
                }
                $object->setVolumes($values);
                unset($data['Volumes']);
            }
            elseif (\array_key_exists('Volumes', $data) && $data['Volumes'] === null) {
                $object->setVolumes(null);
            }
            if (\array_key_exists('Warnings', $data) && $data['Warnings'] !== null) {
                $values_1 = [];
                foreach ($data['Warnings'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setWarnings($values_1);
                unset($data['Warnings']);
            }
            elseif (\array_key_exists('Warnings', $data) && $data['Warnings'] === null) {
                $object->setWarnings(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('volumes') && null !== $object->getVolumes()) {
                $values = [];
                foreach ($object->getVolumes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Volumes'] = $values;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Warnings'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\VolumeListResponse' => false];
        }
    }
} else {
    class VolumeListResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\VolumeListResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\VolumeListResponse';
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
            $object = new \Docker\API\Model\VolumeListResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Volumes', $data) && $data['Volumes'] !== null) {
                $values = [];
                foreach ($data['Volumes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\Volume', 'json', $context);
                }
                $object->setVolumes($values);
                unset($data['Volumes']);
            }
            elseif (\array_key_exists('Volumes', $data) && $data['Volumes'] === null) {
                $object->setVolumes(null);
            }
            if (\array_key_exists('Warnings', $data) && $data['Warnings'] !== null) {
                $values_1 = [];
                foreach ($data['Warnings'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setWarnings($values_1);
                unset($data['Warnings']);
            }
            elseif (\array_key_exists('Warnings', $data) && $data['Warnings'] === null) {
                $object->setWarnings(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('volumes') && null !== $object->getVolumes()) {
                $values = [];
                foreach ($object->getVolumes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Volumes'] = $values;
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Warnings'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\VolumeListResponse' => false];
        }
    }
}