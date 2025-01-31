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
    class PluginEnvNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\PluginEnv';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\PluginEnv';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\PluginEnv();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('Settable', $data) && $data['Settable'] !== null) {
                $values = [];
                foreach ($data['Settable'] as $value) {
                    $values[] = $value;
                }
                $object->setSettable($values);
                unset($data['Settable']);
            }
            elseif (\array_key_exists('Settable', $data) && $data['Settable'] === null) {
                $object->setSettable(null);
            }
            if (\array_key_exists('Value', $data) && $data['Value'] !== null) {
                $object->setValue($data['Value']);
                unset($data['Value']);
            }
            elseif (\array_key_exists('Value', $data) && $data['Value'] === null) {
                $object->setValue(null);
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
            $data['Name'] = $object->getName();
            $data['Description'] = $object->getDescription();
            $values = [];
            foreach ($object->getSettable() as $value) {
                $values[] = $value;
            }
            $data['Settable'] = $values;
            $data['Value'] = $object->getValue();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\PluginEnv' => false];
        }
    }
} else {
    class PluginEnvNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\PluginEnv';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\PluginEnv';
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
            $object = new \Docker\API\Model\PluginEnv();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
                unset($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
                $object->setDescription($data['Description']);
                unset($data['Description']);
            }
            elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('Settable', $data) && $data['Settable'] !== null) {
                $values = [];
                foreach ($data['Settable'] as $value) {
                    $values[] = $value;
                }
                $object->setSettable($values);
                unset($data['Settable']);
            }
            elseif (\array_key_exists('Settable', $data) && $data['Settable'] === null) {
                $object->setSettable(null);
            }
            if (\array_key_exists('Value', $data) && $data['Value'] !== null) {
                $object->setValue($data['Value']);
                unset($data['Value']);
            }
            elseif (\array_key_exists('Value', $data) && $data['Value'] === null) {
                $object->setValue(null);
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
            $data['Name'] = $object->getName();
            $data['Description'] = $object->getDescription();
            $values = [];
            foreach ($object->getSettable() as $value) {
                $values[] = $value;
            }
            $data['Settable'] = $values;
            $data['Value'] = $object->getValue();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\API\\Model\\PluginEnv' => false];
        }
    }
}