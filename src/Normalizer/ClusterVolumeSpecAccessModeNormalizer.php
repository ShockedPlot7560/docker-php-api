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
    class ClusterVolumeSpecAccessModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ClusterVolumeSpecAccessMode';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ClusterVolumeSpecAccessMode';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ClusterVolumeSpecAccessMode();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Scope', $data) && $data['Scope'] !== null) {
                $object->setScope($data['Scope']);
                unset($data['Scope']);
            }
            elseif (\array_key_exists('Scope', $data) && $data['Scope'] === null) {
                $object->setScope(null);
            }
            if (\array_key_exists('Sharing', $data) && $data['Sharing'] !== null) {
                $object->setSharing($data['Sharing']);
                unset($data['Sharing']);
            }
            elseif (\array_key_exists('Sharing', $data) && $data['Sharing'] === null) {
                $object->setSharing(null);
            }
            if (\array_key_exists('MountVolume', $data) && $data['MountVolume'] !== null) {
                $object->setMountVolume($this->denormalizer->denormalize($data['MountVolume'], 'Docker\\API\\Model\\ClusterVolumeSpecAccessModeMountVolume', 'json', $context));
                unset($data['MountVolume']);
            }
            elseif (\array_key_exists('MountVolume', $data) && $data['MountVolume'] === null) {
                $object->setMountVolume(null);
            }
            if (\array_key_exists('Secrets', $data) && $data['Secrets'] !== null) {
                $values = [];
                foreach ($data['Secrets'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ClusterVolumeSpecAccessModeSecretsItem', 'json', $context);
                }
                $object->setSecrets($values);
                unset($data['Secrets']);
            }
            elseif (\array_key_exists('Secrets', $data) && $data['Secrets'] === null) {
                $object->setSecrets(null);
            }
            if (\array_key_exists('AccessibilityRequirements', $data) && $data['AccessibilityRequirements'] !== null) {
                $object->setAccessibilityRequirements($this->denormalizer->denormalize($data['AccessibilityRequirements'], 'Docker\\API\\Model\\ClusterVolumeSpecAccessModeAccessibilityRequirements', 'json', $context));
                unset($data['AccessibilityRequirements']);
            }
            elseif (\array_key_exists('AccessibilityRequirements', $data) && $data['AccessibilityRequirements'] === null) {
                $object->setAccessibilityRequirements(null);
            }
            if (\array_key_exists('CapacityRange', $data) && $data['CapacityRange'] !== null) {
                $object->setCapacityRange($this->denormalizer->denormalize($data['CapacityRange'], 'Docker\\API\\Model\\ClusterVolumeSpecAccessModeCapacityRange', 'json', $context));
                unset($data['CapacityRange']);
            }
            elseif (\array_key_exists('CapacityRange', $data) && $data['CapacityRange'] === null) {
                $object->setCapacityRange(null);
            }
            if (\array_key_exists('Availability', $data) && $data['Availability'] !== null) {
                $object->setAvailability($data['Availability']);
                unset($data['Availability']);
            }
            elseif (\array_key_exists('Availability', $data) && $data['Availability'] === null) {
                $object->setAvailability(null);
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
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['Scope'] = $object->getScope();
            }
            if ($object->isInitialized('sharing') && null !== $object->getSharing()) {
                $data['Sharing'] = $object->getSharing();
            }
            if ($object->isInitialized('mountVolume') && null !== $object->getMountVolume()) {
                $data['MountVolume'] = $this->normalizer->normalize($object->getMountVolume(), 'json', $context);
            }
            if ($object->isInitialized('secrets') && null !== $object->getSecrets()) {
                $values = [];
                foreach ($object->getSecrets() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Secrets'] = $values;
            }
            if ($object->isInitialized('accessibilityRequirements') && null !== $object->getAccessibilityRequirements()) {
                $data['AccessibilityRequirements'] = $this->normalizer->normalize($object->getAccessibilityRequirements(), 'json', $context);
            }
            if ($object->isInitialized('capacityRange') && null !== $object->getCapacityRange()) {
                $data['CapacityRange'] = $this->normalizer->normalize($object->getCapacityRange(), 'json', $context);
            }
            if ($object->isInitialized('availability') && null !== $object->getAvailability()) {
                $data['Availability'] = $object->getAvailability();
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
            return ['Docker\\API\\Model\\ClusterVolumeSpecAccessMode' => false];
        }
    }
} else {
    class ClusterVolumeSpecAccessModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ClusterVolumeSpecAccessMode';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ClusterVolumeSpecAccessMode';
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
            $object = new \Docker\API\Model\ClusterVolumeSpecAccessMode();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Scope', $data) && $data['Scope'] !== null) {
                $object->setScope($data['Scope']);
                unset($data['Scope']);
            }
            elseif (\array_key_exists('Scope', $data) && $data['Scope'] === null) {
                $object->setScope(null);
            }
            if (\array_key_exists('Sharing', $data) && $data['Sharing'] !== null) {
                $object->setSharing($data['Sharing']);
                unset($data['Sharing']);
            }
            elseif (\array_key_exists('Sharing', $data) && $data['Sharing'] === null) {
                $object->setSharing(null);
            }
            if (\array_key_exists('MountVolume', $data) && $data['MountVolume'] !== null) {
                $object->setMountVolume($this->denormalizer->denormalize($data['MountVolume'], 'Docker\\API\\Model\\ClusterVolumeSpecAccessModeMountVolume', 'json', $context));
                unset($data['MountVolume']);
            }
            elseif (\array_key_exists('MountVolume', $data) && $data['MountVolume'] === null) {
                $object->setMountVolume(null);
            }
            if (\array_key_exists('Secrets', $data) && $data['Secrets'] !== null) {
                $values = [];
                foreach ($data['Secrets'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ClusterVolumeSpecAccessModeSecretsItem', 'json', $context);
                }
                $object->setSecrets($values);
                unset($data['Secrets']);
            }
            elseif (\array_key_exists('Secrets', $data) && $data['Secrets'] === null) {
                $object->setSecrets(null);
            }
            if (\array_key_exists('AccessibilityRequirements', $data) && $data['AccessibilityRequirements'] !== null) {
                $object->setAccessibilityRequirements($this->denormalizer->denormalize($data['AccessibilityRequirements'], 'Docker\\API\\Model\\ClusterVolumeSpecAccessModeAccessibilityRequirements', 'json', $context));
                unset($data['AccessibilityRequirements']);
            }
            elseif (\array_key_exists('AccessibilityRequirements', $data) && $data['AccessibilityRequirements'] === null) {
                $object->setAccessibilityRequirements(null);
            }
            if (\array_key_exists('CapacityRange', $data) && $data['CapacityRange'] !== null) {
                $object->setCapacityRange($this->denormalizer->denormalize($data['CapacityRange'], 'Docker\\API\\Model\\ClusterVolumeSpecAccessModeCapacityRange', 'json', $context));
                unset($data['CapacityRange']);
            }
            elseif (\array_key_exists('CapacityRange', $data) && $data['CapacityRange'] === null) {
                $object->setCapacityRange(null);
            }
            if (\array_key_exists('Availability', $data) && $data['Availability'] !== null) {
                $object->setAvailability($data['Availability']);
                unset($data['Availability']);
            }
            elseif (\array_key_exists('Availability', $data) && $data['Availability'] === null) {
                $object->setAvailability(null);
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
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['Scope'] = $object->getScope();
            }
            if ($object->isInitialized('sharing') && null !== $object->getSharing()) {
                $data['Sharing'] = $object->getSharing();
            }
            if ($object->isInitialized('mountVolume') && null !== $object->getMountVolume()) {
                $data['MountVolume'] = $this->normalizer->normalize($object->getMountVolume(), 'json', $context);
            }
            if ($object->isInitialized('secrets') && null !== $object->getSecrets()) {
                $values = [];
                foreach ($object->getSecrets() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Secrets'] = $values;
            }
            if ($object->isInitialized('accessibilityRequirements') && null !== $object->getAccessibilityRequirements()) {
                $data['AccessibilityRequirements'] = $this->normalizer->normalize($object->getAccessibilityRequirements(), 'json', $context);
            }
            if ($object->isInitialized('capacityRange') && null !== $object->getCapacityRange()) {
                $data['CapacityRange'] = $this->normalizer->normalize($object->getCapacityRange(), 'json', $context);
            }
            if ($object->isInitialized('availability') && null !== $object->getAvailability()) {
                $data['Availability'] = $object->getAvailability();
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
            return ['Docker\\API\\Model\\ClusterVolumeSpecAccessMode' => false];
        }
    }
}