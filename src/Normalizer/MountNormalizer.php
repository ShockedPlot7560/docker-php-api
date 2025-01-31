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
    class MountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\Mount';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\Mount';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\Mount();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Target', $data) && $data['Target'] !== null) {
                $object->setTarget($data['Target']);
                unset($data['Target']);
            }
            elseif (\array_key_exists('Target', $data) && $data['Target'] === null) {
                $object->setTarget(null);
            }
            if (\array_key_exists('Source', $data) && $data['Source'] !== null) {
                $object->setSource($data['Source']);
                unset($data['Source']);
            }
            elseif (\array_key_exists('Source', $data) && $data['Source'] === null) {
                $object->setSource(null);
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('ReadOnly', $data) && $data['ReadOnly'] !== null) {
                $object->setReadOnly($data['ReadOnly']);
                unset($data['ReadOnly']);
            }
            elseif (\array_key_exists('ReadOnly', $data) && $data['ReadOnly'] === null) {
                $object->setReadOnly(null);
            }
            if (\array_key_exists('Consistency', $data) && $data['Consistency'] !== null) {
                $object->setConsistency($data['Consistency']);
                unset($data['Consistency']);
            }
            elseif (\array_key_exists('Consistency', $data) && $data['Consistency'] === null) {
                $object->setConsistency(null);
            }
            if (\array_key_exists('BindOptions', $data) && $data['BindOptions'] !== null) {
                $object->setBindOptions($this->denormalizer->denormalize($data['BindOptions'], 'Docker\\API\\Model\\MountBindOptions', 'json', $context));
                unset($data['BindOptions']);
            }
            elseif (\array_key_exists('BindOptions', $data) && $data['BindOptions'] === null) {
                $object->setBindOptions(null);
            }
            if (\array_key_exists('VolumeOptions', $data) && $data['VolumeOptions'] !== null) {
                $object->setVolumeOptions($this->denormalizer->denormalize($data['VolumeOptions'], 'Docker\\API\\Model\\MountVolumeOptions', 'json', $context));
                unset($data['VolumeOptions']);
            }
            elseif (\array_key_exists('VolumeOptions', $data) && $data['VolumeOptions'] === null) {
                $object->setVolumeOptions(null);
            }
            if (\array_key_exists('TmpfsOptions', $data) && $data['TmpfsOptions'] !== null) {
                $object->setTmpfsOptions($this->denormalizer->denormalize($data['TmpfsOptions'], 'Docker\\API\\Model\\MountTmpfsOptions', 'json', $context));
                unset($data['TmpfsOptions']);
            }
            elseif (\array_key_exists('TmpfsOptions', $data) && $data['TmpfsOptions'] === null) {
                $object->setTmpfsOptions(null);
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
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['Target'] = $object->getTarget();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['Source'] = $object->getSource();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
                $data['ReadOnly'] = $object->getReadOnly();
            }
            if ($object->isInitialized('consistency') && null !== $object->getConsistency()) {
                $data['Consistency'] = $object->getConsistency();
            }
            if ($object->isInitialized('bindOptions') && null !== $object->getBindOptions()) {
                $data['BindOptions'] = $this->normalizer->normalize($object->getBindOptions(), 'json', $context);
            }
            if ($object->isInitialized('volumeOptions') && null !== $object->getVolumeOptions()) {
                $data['VolumeOptions'] = $this->normalizer->normalize($object->getVolumeOptions(), 'json', $context);
            }
            if ($object->isInitialized('tmpfsOptions') && null !== $object->getTmpfsOptions()) {
                $data['TmpfsOptions'] = $this->normalizer->normalize($object->getTmpfsOptions(), 'json', $context);
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
            return ['Docker\\API\\Model\\Mount' => false];
        }
    }
} else {
    class MountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\Mount';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\Mount';
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
            $object = new \Docker\API\Model\Mount();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Target', $data) && $data['Target'] !== null) {
                $object->setTarget($data['Target']);
                unset($data['Target']);
            }
            elseif (\array_key_exists('Target', $data) && $data['Target'] === null) {
                $object->setTarget(null);
            }
            if (\array_key_exists('Source', $data) && $data['Source'] !== null) {
                $object->setSource($data['Source']);
                unset($data['Source']);
            }
            elseif (\array_key_exists('Source', $data) && $data['Source'] === null) {
                $object->setSource(null);
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
                unset($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('ReadOnly', $data) && $data['ReadOnly'] !== null) {
                $object->setReadOnly($data['ReadOnly']);
                unset($data['ReadOnly']);
            }
            elseif (\array_key_exists('ReadOnly', $data) && $data['ReadOnly'] === null) {
                $object->setReadOnly(null);
            }
            if (\array_key_exists('Consistency', $data) && $data['Consistency'] !== null) {
                $object->setConsistency($data['Consistency']);
                unset($data['Consistency']);
            }
            elseif (\array_key_exists('Consistency', $data) && $data['Consistency'] === null) {
                $object->setConsistency(null);
            }
            if (\array_key_exists('BindOptions', $data) && $data['BindOptions'] !== null) {
                $object->setBindOptions($this->denormalizer->denormalize($data['BindOptions'], 'Docker\\API\\Model\\MountBindOptions', 'json', $context));
                unset($data['BindOptions']);
            }
            elseif (\array_key_exists('BindOptions', $data) && $data['BindOptions'] === null) {
                $object->setBindOptions(null);
            }
            if (\array_key_exists('VolumeOptions', $data) && $data['VolumeOptions'] !== null) {
                $object->setVolumeOptions($this->denormalizer->denormalize($data['VolumeOptions'], 'Docker\\API\\Model\\MountVolumeOptions', 'json', $context));
                unset($data['VolumeOptions']);
            }
            elseif (\array_key_exists('VolumeOptions', $data) && $data['VolumeOptions'] === null) {
                $object->setVolumeOptions(null);
            }
            if (\array_key_exists('TmpfsOptions', $data) && $data['TmpfsOptions'] !== null) {
                $object->setTmpfsOptions($this->denormalizer->denormalize($data['TmpfsOptions'], 'Docker\\API\\Model\\MountTmpfsOptions', 'json', $context));
                unset($data['TmpfsOptions']);
            }
            elseif (\array_key_exists('TmpfsOptions', $data) && $data['TmpfsOptions'] === null) {
                $object->setTmpfsOptions(null);
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
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['Target'] = $object->getTarget();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['Source'] = $object->getSource();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
                $data['ReadOnly'] = $object->getReadOnly();
            }
            if ($object->isInitialized('consistency') && null !== $object->getConsistency()) {
                $data['Consistency'] = $object->getConsistency();
            }
            if ($object->isInitialized('bindOptions') && null !== $object->getBindOptions()) {
                $data['BindOptions'] = $this->normalizer->normalize($object->getBindOptions(), 'json', $context);
            }
            if ($object->isInitialized('volumeOptions') && null !== $object->getVolumeOptions()) {
                $data['VolumeOptions'] = $this->normalizer->normalize($object->getVolumeOptions(), 'json', $context);
            }
            if ($object->isInitialized('tmpfsOptions') && null !== $object->getTmpfsOptions()) {
                $data['TmpfsOptions'] = $this->normalizer->normalize($object->getTmpfsOptions(), 'json', $context);
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
            return ['Docker\\API\\Model\\Mount' => false];
        }
    }
}