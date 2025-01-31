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
    class ImageInspectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ImageInspect';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ImageInspect';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ImageInspect();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('RepoTags', $data) && $data['RepoTags'] !== null) {
                $values = [];
                foreach ($data['RepoTags'] as $value) {
                    $values[] = $value;
                }
                $object->setRepoTags($values);
                unset($data['RepoTags']);
            }
            elseif (\array_key_exists('RepoTags', $data) && $data['RepoTags'] === null) {
                $object->setRepoTags(null);
            }
            if (\array_key_exists('RepoDigests', $data) && $data['RepoDigests'] !== null) {
                $values_1 = [];
                foreach ($data['RepoDigests'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoDigests($values_1);
                unset($data['RepoDigests']);
            }
            elseif (\array_key_exists('RepoDigests', $data) && $data['RepoDigests'] === null) {
                $object->setRepoDigests(null);
            }
            if (\array_key_exists('Parent', $data) && $data['Parent'] !== null) {
                $object->setParent($data['Parent']);
                unset($data['Parent']);
            }
            elseif (\array_key_exists('Parent', $data) && $data['Parent'] === null) {
                $object->setParent(null);
            }
            if (\array_key_exists('Comment', $data) && $data['Comment'] !== null) {
                $object->setComment($data['Comment']);
                unset($data['Comment']);
            }
            elseif (\array_key_exists('Comment', $data) && $data['Comment'] === null) {
                $object->setComment(null);
            }
            if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
                $object->setCreated($data['Created']);
                unset($data['Created']);
            }
            elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
                $object->setCreated(null);
            }
            if (\array_key_exists('Container', $data) && $data['Container'] !== null) {
                $object->setContainer($data['Container']);
                unset($data['Container']);
            }
            elseif (\array_key_exists('Container', $data) && $data['Container'] === null) {
                $object->setContainer(null);
            }
            if (\array_key_exists('ContainerConfig', $data) && $data['ContainerConfig'] !== null) {
                $object->setContainerConfig($this->denormalizer->denormalize($data['ContainerConfig'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
                unset($data['ContainerConfig']);
            }
            elseif (\array_key_exists('ContainerConfig', $data) && $data['ContainerConfig'] === null) {
                $object->setContainerConfig(null);
            }
            if (\array_key_exists('DockerVersion', $data) && $data['DockerVersion'] !== null) {
                $object->setDockerVersion($data['DockerVersion']);
                unset($data['DockerVersion']);
            }
            elseif (\array_key_exists('DockerVersion', $data) && $data['DockerVersion'] === null) {
                $object->setDockerVersion(null);
            }
            if (\array_key_exists('Author', $data) && $data['Author'] !== null) {
                $object->setAuthor($data['Author']);
                unset($data['Author']);
            }
            elseif (\array_key_exists('Author', $data) && $data['Author'] === null) {
                $object->setAuthor(null);
            }
            if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
                unset($data['Config']);
            }
            elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
                $object->setConfig(null);
            }
            if (\array_key_exists('Architecture', $data) && $data['Architecture'] !== null) {
                $object->setArchitecture($data['Architecture']);
                unset($data['Architecture']);
            }
            elseif (\array_key_exists('Architecture', $data) && $data['Architecture'] === null) {
                $object->setArchitecture(null);
            }
            if (\array_key_exists('Variant', $data) && $data['Variant'] !== null) {
                $object->setVariant($data['Variant']);
                unset($data['Variant']);
            }
            elseif (\array_key_exists('Variant', $data) && $data['Variant'] === null) {
                $object->setVariant(null);
            }
            if (\array_key_exists('Os', $data) && $data['Os'] !== null) {
                $object->setOs($data['Os']);
                unset($data['Os']);
            }
            elseif (\array_key_exists('Os', $data) && $data['Os'] === null) {
                $object->setOs(null);
            }
            if (\array_key_exists('OsVersion', $data) && $data['OsVersion'] !== null) {
                $object->setOsVersion($data['OsVersion']);
                unset($data['OsVersion']);
            }
            elseif (\array_key_exists('OsVersion', $data) && $data['OsVersion'] === null) {
                $object->setOsVersion(null);
            }
            if (\array_key_exists('Size', $data) && $data['Size'] !== null) {
                $object->setSize($data['Size']);
                unset($data['Size']);
            }
            elseif (\array_key_exists('Size', $data) && $data['Size'] === null) {
                $object->setSize(null);
            }
            if (\array_key_exists('VirtualSize', $data) && $data['VirtualSize'] !== null) {
                $object->setVirtualSize($data['VirtualSize']);
                unset($data['VirtualSize']);
            }
            elseif (\array_key_exists('VirtualSize', $data) && $data['VirtualSize'] === null) {
                $object->setVirtualSize(null);
            }
            if (\array_key_exists('GraphDriver', $data) && $data['GraphDriver'] !== null) {
                $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Docker\\API\\Model\\GraphDriverData', 'json', $context));
                unset($data['GraphDriver']);
            }
            elseif (\array_key_exists('GraphDriver', $data) && $data['GraphDriver'] === null) {
                $object->setGraphDriver(null);
            }
            if (\array_key_exists('RootFS', $data) && $data['RootFS'] !== null) {
                $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], 'Docker\\API\\Model\\ImageInspectRootFS', 'json', $context));
                unset($data['RootFS']);
            }
            elseif (\array_key_exists('RootFS', $data) && $data['RootFS'] === null) {
                $object->setRootFS(null);
            }
            if (\array_key_exists('Metadata', $data) && $data['Metadata'] !== null) {
                $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], 'Docker\\API\\Model\\ImageInspectMetadata', 'json', $context));
                unset($data['Metadata']);
            }
            elseif (\array_key_exists('Metadata', $data) && $data['Metadata'] === null) {
                $object->setMetadata(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('repoTags') && null !== $object->getRepoTags()) {
                $values = [];
                foreach ($object->getRepoTags() as $value) {
                    $values[] = $value;
                }
                $data['RepoTags'] = $values;
            }
            if ($object->isInitialized('repoDigests') && null !== $object->getRepoDigests()) {
                $values_1 = [];
                foreach ($object->getRepoDigests() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['RepoDigests'] = $values_1;
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['Comment'] = $object->getComment();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('container') && null !== $object->getContainer()) {
                $data['Container'] = $object->getContainer();
            }
            if ($object->isInitialized('containerConfig') && null !== $object->getContainerConfig()) {
                $data['ContainerConfig'] = $this->normalizer->normalize($object->getContainerConfig(), 'json', $context);
            }
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['Author'] = $object->getAuthor();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('variant') && null !== $object->getVariant()) {
                $data['Variant'] = $object->getVariant();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['OsVersion'] = $object->getOsVersion();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            if ($object->isInitialized('graphDriver') && null !== $object->getGraphDriver()) {
                $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            }
            if ($object->isInitialized('rootFS') && null !== $object->getRootFS()) {
                $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
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
            return ['Docker\\API\\Model\\ImageInspect' => false];
        }
    }
} else {
    class ImageInspectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ImageInspect';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ImageInspect';
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
            $object = new \Docker\API\Model\ImageInspect();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
                $object->setId($data['Id']);
                unset($data['Id']);
            }
            elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('RepoTags', $data) && $data['RepoTags'] !== null) {
                $values = [];
                foreach ($data['RepoTags'] as $value) {
                    $values[] = $value;
                }
                $object->setRepoTags($values);
                unset($data['RepoTags']);
            }
            elseif (\array_key_exists('RepoTags', $data) && $data['RepoTags'] === null) {
                $object->setRepoTags(null);
            }
            if (\array_key_exists('RepoDigests', $data) && $data['RepoDigests'] !== null) {
                $values_1 = [];
                foreach ($data['RepoDigests'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRepoDigests($values_1);
                unset($data['RepoDigests']);
            }
            elseif (\array_key_exists('RepoDigests', $data) && $data['RepoDigests'] === null) {
                $object->setRepoDigests(null);
            }
            if (\array_key_exists('Parent', $data) && $data['Parent'] !== null) {
                $object->setParent($data['Parent']);
                unset($data['Parent']);
            }
            elseif (\array_key_exists('Parent', $data) && $data['Parent'] === null) {
                $object->setParent(null);
            }
            if (\array_key_exists('Comment', $data) && $data['Comment'] !== null) {
                $object->setComment($data['Comment']);
                unset($data['Comment']);
            }
            elseif (\array_key_exists('Comment', $data) && $data['Comment'] === null) {
                $object->setComment(null);
            }
            if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
                $object->setCreated($data['Created']);
                unset($data['Created']);
            }
            elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
                $object->setCreated(null);
            }
            if (\array_key_exists('Container', $data) && $data['Container'] !== null) {
                $object->setContainer($data['Container']);
                unset($data['Container']);
            }
            elseif (\array_key_exists('Container', $data) && $data['Container'] === null) {
                $object->setContainer(null);
            }
            if (\array_key_exists('ContainerConfig', $data) && $data['ContainerConfig'] !== null) {
                $object->setContainerConfig($this->denormalizer->denormalize($data['ContainerConfig'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
                unset($data['ContainerConfig']);
            }
            elseif (\array_key_exists('ContainerConfig', $data) && $data['ContainerConfig'] === null) {
                $object->setContainerConfig(null);
            }
            if (\array_key_exists('DockerVersion', $data) && $data['DockerVersion'] !== null) {
                $object->setDockerVersion($data['DockerVersion']);
                unset($data['DockerVersion']);
            }
            elseif (\array_key_exists('DockerVersion', $data) && $data['DockerVersion'] === null) {
                $object->setDockerVersion(null);
            }
            if (\array_key_exists('Author', $data) && $data['Author'] !== null) {
                $object->setAuthor($data['Author']);
                unset($data['Author']);
            }
            elseif (\array_key_exists('Author', $data) && $data['Author'] === null) {
                $object->setAuthor(null);
            }
            if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
                unset($data['Config']);
            }
            elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
                $object->setConfig(null);
            }
            if (\array_key_exists('Architecture', $data) && $data['Architecture'] !== null) {
                $object->setArchitecture($data['Architecture']);
                unset($data['Architecture']);
            }
            elseif (\array_key_exists('Architecture', $data) && $data['Architecture'] === null) {
                $object->setArchitecture(null);
            }
            if (\array_key_exists('Variant', $data) && $data['Variant'] !== null) {
                $object->setVariant($data['Variant']);
                unset($data['Variant']);
            }
            elseif (\array_key_exists('Variant', $data) && $data['Variant'] === null) {
                $object->setVariant(null);
            }
            if (\array_key_exists('Os', $data) && $data['Os'] !== null) {
                $object->setOs($data['Os']);
                unset($data['Os']);
            }
            elseif (\array_key_exists('Os', $data) && $data['Os'] === null) {
                $object->setOs(null);
            }
            if (\array_key_exists('OsVersion', $data) && $data['OsVersion'] !== null) {
                $object->setOsVersion($data['OsVersion']);
                unset($data['OsVersion']);
            }
            elseif (\array_key_exists('OsVersion', $data) && $data['OsVersion'] === null) {
                $object->setOsVersion(null);
            }
            if (\array_key_exists('Size', $data) && $data['Size'] !== null) {
                $object->setSize($data['Size']);
                unset($data['Size']);
            }
            elseif (\array_key_exists('Size', $data) && $data['Size'] === null) {
                $object->setSize(null);
            }
            if (\array_key_exists('VirtualSize', $data) && $data['VirtualSize'] !== null) {
                $object->setVirtualSize($data['VirtualSize']);
                unset($data['VirtualSize']);
            }
            elseif (\array_key_exists('VirtualSize', $data) && $data['VirtualSize'] === null) {
                $object->setVirtualSize(null);
            }
            if (\array_key_exists('GraphDriver', $data) && $data['GraphDriver'] !== null) {
                $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Docker\\API\\Model\\GraphDriverData', 'json', $context));
                unset($data['GraphDriver']);
            }
            elseif (\array_key_exists('GraphDriver', $data) && $data['GraphDriver'] === null) {
                $object->setGraphDriver(null);
            }
            if (\array_key_exists('RootFS', $data) && $data['RootFS'] !== null) {
                $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], 'Docker\\API\\Model\\ImageInspectRootFS', 'json', $context));
                unset($data['RootFS']);
            }
            elseif (\array_key_exists('RootFS', $data) && $data['RootFS'] === null) {
                $object->setRootFS(null);
            }
            if (\array_key_exists('Metadata', $data) && $data['Metadata'] !== null) {
                $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], 'Docker\\API\\Model\\ImageInspectMetadata', 'json', $context));
                unset($data['Metadata']);
            }
            elseif (\array_key_exists('Metadata', $data) && $data['Metadata'] === null) {
                $object->setMetadata(null);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('repoTags') && null !== $object->getRepoTags()) {
                $values = [];
                foreach ($object->getRepoTags() as $value) {
                    $values[] = $value;
                }
                $data['RepoTags'] = $values;
            }
            if ($object->isInitialized('repoDigests') && null !== $object->getRepoDigests()) {
                $values_1 = [];
                foreach ($object->getRepoDigests() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['RepoDigests'] = $values_1;
            }
            if ($object->isInitialized('parent') && null !== $object->getParent()) {
                $data['Parent'] = $object->getParent();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['Comment'] = $object->getComment();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('container') && null !== $object->getContainer()) {
                $data['Container'] = $object->getContainer();
            }
            if ($object->isInitialized('containerConfig') && null !== $object->getContainerConfig()) {
                $data['ContainerConfig'] = $this->normalizer->normalize($object->getContainerConfig(), 'json', $context);
            }
            if ($object->isInitialized('dockerVersion') && null !== $object->getDockerVersion()) {
                $data['DockerVersion'] = $object->getDockerVersion();
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['Author'] = $object->getAuthor();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            }
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('variant') && null !== $object->getVariant()) {
                $data['Variant'] = $object->getVariant();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['Os'] = $object->getOs();
            }
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['OsVersion'] = $object->getOsVersion();
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('virtualSize') && null !== $object->getVirtualSize()) {
                $data['VirtualSize'] = $object->getVirtualSize();
            }
            if ($object->isInitialized('graphDriver') && null !== $object->getGraphDriver()) {
                $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
            }
            if ($object->isInitialized('rootFS') && null !== $object->getRootFS()) {
                $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
            }
            if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
                $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
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
            return ['Docker\\API\\Model\\ImageInspect' => false];
        }
    }
}