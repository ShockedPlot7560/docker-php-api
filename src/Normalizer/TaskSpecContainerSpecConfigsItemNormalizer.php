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
    class TaskSpecContainerSpecConfigsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\TaskSpecContainerSpecConfigsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('File', $data) && $data['File'] !== null) {
                $object->setFile($this->denormalizer->denormalize($data['File'], 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItemFile', 'json', $context));
                unset($data['File']);
            }
            elseif (\array_key_exists('File', $data) && $data['File'] === null) {
                $object->setFile(null);
            }
            if (\array_key_exists('Runtime', $data) && $data['Runtime'] !== null) {
                $object->setRuntime($this->denormalizer->denormalize($data['Runtime'], 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItemRuntime', 'json', $context));
                unset($data['Runtime']);
            }
            elseif (\array_key_exists('Runtime', $data) && $data['Runtime'] === null) {
                $object->setRuntime(null);
            }
            if (\array_key_exists('ConfigID', $data) && $data['ConfigID'] !== null) {
                $object->setConfigID($data['ConfigID']);
                unset($data['ConfigID']);
            }
            elseif (\array_key_exists('ConfigID', $data) && $data['ConfigID'] === null) {
                $object->setConfigID(null);
            }
            if (\array_key_exists('ConfigName', $data) && $data['ConfigName'] !== null) {
                $object->setConfigName($data['ConfigName']);
                unset($data['ConfigName']);
            }
            elseif (\array_key_exists('ConfigName', $data) && $data['ConfigName'] === null) {
                $object->setConfigName(null);
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
            if ($object->isInitialized('file') && null !== $object->getFile()) {
                $data['File'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $this->normalizer->normalize($object->getRuntime(), 'json', $context);
            }
            if ($object->isInitialized('configID') && null !== $object->getConfigID()) {
                $data['ConfigID'] = $object->getConfigID();
            }
            if ($object->isInitialized('configName') && null !== $object->getConfigName()) {
                $data['ConfigName'] = $object->getConfigName();
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
            return ['Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem' => false];
        }
    }
} else {
    class TaskSpecContainerSpecConfigsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem';
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
            $object = new \Docker\API\Model\TaskSpecContainerSpecConfigsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('File', $data) && $data['File'] !== null) {
                $object->setFile($this->denormalizer->denormalize($data['File'], 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItemFile', 'json', $context));
                unset($data['File']);
            }
            elseif (\array_key_exists('File', $data) && $data['File'] === null) {
                $object->setFile(null);
            }
            if (\array_key_exists('Runtime', $data) && $data['Runtime'] !== null) {
                $object->setRuntime($this->denormalizer->denormalize($data['Runtime'], 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItemRuntime', 'json', $context));
                unset($data['Runtime']);
            }
            elseif (\array_key_exists('Runtime', $data) && $data['Runtime'] === null) {
                $object->setRuntime(null);
            }
            if (\array_key_exists('ConfigID', $data) && $data['ConfigID'] !== null) {
                $object->setConfigID($data['ConfigID']);
                unset($data['ConfigID']);
            }
            elseif (\array_key_exists('ConfigID', $data) && $data['ConfigID'] === null) {
                $object->setConfigID(null);
            }
            if (\array_key_exists('ConfigName', $data) && $data['ConfigName'] !== null) {
                $object->setConfigName($data['ConfigName']);
                unset($data['ConfigName']);
            }
            elseif (\array_key_exists('ConfigName', $data) && $data['ConfigName'] === null) {
                $object->setConfigName(null);
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
            if ($object->isInitialized('file') && null !== $object->getFile()) {
                $data['File'] = $this->normalizer->normalize($object->getFile(), 'json', $context);
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $this->normalizer->normalize($object->getRuntime(), 'json', $context);
            }
            if ($object->isInitialized('configID') && null !== $object->getConfigID()) {
                $data['ConfigID'] = $object->getConfigID();
            }
            if ($object->isInitialized('configName') && null !== $object->getConfigName()) {
                $data['ConfigName'] = $object->getConfigName();
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
            return ['Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem' => false];
        }
    }
}