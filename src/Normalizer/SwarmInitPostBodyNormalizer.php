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
    class SwarmInitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\SwarmInitPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmInitPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\SwarmInitPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] !== null) {
                $object->setListenAddr($data['ListenAddr']);
                unset($data['ListenAddr']);
            }
            elseif (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] === null) {
                $object->setListenAddr(null);
            }
            if (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] !== null) {
                $object->setAdvertiseAddr($data['AdvertiseAddr']);
                unset($data['AdvertiseAddr']);
            }
            elseif (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] === null) {
                $object->setAdvertiseAddr(null);
            }
            if (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] !== null) {
                $object->setDataPathAddr($data['DataPathAddr']);
                unset($data['DataPathAddr']);
            }
            elseif (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] === null) {
                $object->setDataPathAddr(null);
            }
            if (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] !== null) {
                $object->setDataPathPort($data['DataPathPort']);
                unset($data['DataPathPort']);
            }
            elseif (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] === null) {
                $object->setDataPathPort(null);
            }
            if (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] !== null) {
                $values = [];
                foreach ($data['DefaultAddrPool'] as $value) {
                    $values[] = $value;
                }
                $object->setDefaultAddrPool($values);
                unset($data['DefaultAddrPool']);
            }
            elseif (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] === null) {
                $object->setDefaultAddrPool(null);
            }
            if (\array_key_exists('ForceNewCluster', $data) && $data['ForceNewCluster'] !== null) {
                $object->setForceNewCluster($data['ForceNewCluster']);
                unset($data['ForceNewCluster']);
            }
            elseif (\array_key_exists('ForceNewCluster', $data) && $data['ForceNewCluster'] === null) {
                $object->setForceNewCluster(null);
            }
            if (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] !== null) {
                $object->setSubnetSize($data['SubnetSize']);
                unset($data['SubnetSize']);
            }
            elseif (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] === null) {
                $object->setSubnetSize(null);
            }
            if (\array_key_exists('Spec', $data) && $data['Spec'] !== null) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Docker\\API\\Model\\SwarmSpec', 'json', $context));
                unset($data['Spec']);
            }
            elseif (\array_key_exists('Spec', $data) && $data['Spec'] === null) {
                $object->setSpec(null);
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
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['ListenAddr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('advertiseAddr') && null !== $object->getAdvertiseAddr()) {
                $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
            }
            if ($object->isInitialized('dataPathAddr') && null !== $object->getDataPathAddr()) {
                $data['DataPathAddr'] = $object->getDataPathAddr();
            }
            if ($object->isInitialized('dataPathPort') && null !== $object->getDataPathPort()) {
                $data['DataPathPort'] = $object->getDataPathPort();
            }
            if ($object->isInitialized('defaultAddrPool') && null !== $object->getDefaultAddrPool()) {
                $values = [];
                foreach ($object->getDefaultAddrPool() as $value) {
                    $values[] = $value;
                }
                $data['DefaultAddrPool'] = $values;
            }
            if ($object->isInitialized('forceNewCluster') && null !== $object->getForceNewCluster()) {
                $data['ForceNewCluster'] = $object->getForceNewCluster();
            }
            if ($object->isInitialized('subnetSize') && null !== $object->getSubnetSize()) {
                $data['SubnetSize'] = $object->getSubnetSize();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
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
            return ['Docker\\API\\Model\\SwarmInitPostBody' => false];
        }
    }
} else {
    class SwarmInitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\SwarmInitPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmInitPostBody';
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
            $object = new \Docker\API\Model\SwarmInitPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] !== null) {
                $object->setListenAddr($data['ListenAddr']);
                unset($data['ListenAddr']);
            }
            elseif (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] === null) {
                $object->setListenAddr(null);
            }
            if (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] !== null) {
                $object->setAdvertiseAddr($data['AdvertiseAddr']);
                unset($data['AdvertiseAddr']);
            }
            elseif (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] === null) {
                $object->setAdvertiseAddr(null);
            }
            if (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] !== null) {
                $object->setDataPathAddr($data['DataPathAddr']);
                unset($data['DataPathAddr']);
            }
            elseif (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] === null) {
                $object->setDataPathAddr(null);
            }
            if (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] !== null) {
                $object->setDataPathPort($data['DataPathPort']);
                unset($data['DataPathPort']);
            }
            elseif (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] === null) {
                $object->setDataPathPort(null);
            }
            if (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] !== null) {
                $values = [];
                foreach ($data['DefaultAddrPool'] as $value) {
                    $values[] = $value;
                }
                $object->setDefaultAddrPool($values);
                unset($data['DefaultAddrPool']);
            }
            elseif (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] === null) {
                $object->setDefaultAddrPool(null);
            }
            if (\array_key_exists('ForceNewCluster', $data) && $data['ForceNewCluster'] !== null) {
                $object->setForceNewCluster($data['ForceNewCluster']);
                unset($data['ForceNewCluster']);
            }
            elseif (\array_key_exists('ForceNewCluster', $data) && $data['ForceNewCluster'] === null) {
                $object->setForceNewCluster(null);
            }
            if (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] !== null) {
                $object->setSubnetSize($data['SubnetSize']);
                unset($data['SubnetSize']);
            }
            elseif (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] === null) {
                $object->setSubnetSize(null);
            }
            if (\array_key_exists('Spec', $data) && $data['Spec'] !== null) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Docker\\API\\Model\\SwarmSpec', 'json', $context));
                unset($data['Spec']);
            }
            elseif (\array_key_exists('Spec', $data) && $data['Spec'] === null) {
                $object->setSpec(null);
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
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['ListenAddr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('advertiseAddr') && null !== $object->getAdvertiseAddr()) {
                $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
            }
            if ($object->isInitialized('dataPathAddr') && null !== $object->getDataPathAddr()) {
                $data['DataPathAddr'] = $object->getDataPathAddr();
            }
            if ($object->isInitialized('dataPathPort') && null !== $object->getDataPathPort()) {
                $data['DataPathPort'] = $object->getDataPathPort();
            }
            if ($object->isInitialized('defaultAddrPool') && null !== $object->getDefaultAddrPool()) {
                $values = [];
                foreach ($object->getDefaultAddrPool() as $value) {
                    $values[] = $value;
                }
                $data['DefaultAddrPool'] = $values;
            }
            if ($object->isInitialized('forceNewCluster') && null !== $object->getForceNewCluster()) {
                $data['ForceNewCluster'] = $object->getForceNewCluster();
            }
            if ($object->isInitialized('subnetSize') && null !== $object->getSubnetSize()) {
                $data['SubnetSize'] = $object->getSubnetSize();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
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
            return ['Docker\\API\\Model\\SwarmInitPostBody' => false];
        }
    }
}