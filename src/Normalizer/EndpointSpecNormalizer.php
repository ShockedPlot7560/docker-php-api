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
    class EndpointSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\EndpointSpec';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\EndpointSpec';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\EndpointSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Mode', $data) && $data['Mode'] !== null) {
                $object->setMode($data['Mode']);
                unset($data['Mode']);
            }
            elseif (\array_key_exists('Mode', $data) && $data['Mode'] === null) {
                $object->setMode(null);
            }
            if (\array_key_exists('Ports', $data) && $data['Ports'] !== null) {
                $values = [];
                foreach ($data['Ports'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\EndpointPortConfig', 'json', $context);
                }
                $object->setPorts($values);
                unset($data['Ports']);
            }
            elseif (\array_key_exists('Ports', $data) && $data['Ports'] === null) {
                $object->setPorts(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $object->getMode();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values = [];
                foreach ($object->getPorts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Ports'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\EndpointSpec' => false];
        }
    }
} else {
    class EndpointSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\EndpointSpec';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\EndpointSpec';
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
            $object = new \Docker\API\Model\EndpointSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Mode', $data) && $data['Mode'] !== null) {
                $object->setMode($data['Mode']);
                unset($data['Mode']);
            }
            elseif (\array_key_exists('Mode', $data) && $data['Mode'] === null) {
                $object->setMode(null);
            }
            if (\array_key_exists('Ports', $data) && $data['Ports'] !== null) {
                $values = [];
                foreach ($data['Ports'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\EndpointPortConfig', 'json', $context);
                }
                $object->setPorts($values);
                unset($data['Ports']);
            }
            elseif (\array_key_exists('Ports', $data) && $data['Ports'] === null) {
                $object->setPorts(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $object->getMode();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values = [];
                foreach ($object->getPorts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Ports'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\EndpointSpec' => false];
        }
    }
}