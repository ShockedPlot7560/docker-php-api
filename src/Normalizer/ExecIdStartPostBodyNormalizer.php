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
    class ExecIdStartPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ExecIdStartPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ExecIdStartPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ExecIdStartPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Detach', $data) && $data['Detach'] !== null) {
                $object->setDetach($data['Detach']);
                unset($data['Detach']);
            }
            elseif (\array_key_exists('Detach', $data) && $data['Detach'] === null) {
                $object->setDetach(null);
            }
            if (\array_key_exists('Tty', $data) && $data['Tty'] !== null) {
                $object->setTty($data['Tty']);
                unset($data['Tty']);
            }
            elseif (\array_key_exists('Tty', $data) && $data['Tty'] === null) {
                $object->setTty(null);
            }
            if (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] !== null) {
                $values = [];
                foreach ($data['ConsoleSize'] as $value) {
                    $values[] = $value;
                }
                $object->setConsoleSize($values);
                unset($data['ConsoleSize']);
            }
            elseif (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] === null) {
                $object->setConsoleSize(null);
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
            if ($object->isInitialized('detach') && null !== $object->getDetach()) {
                $data['Detach'] = $object->getDetach();
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('consoleSize') && null !== $object->getConsoleSize()) {
                $values = [];
                foreach ($object->getConsoleSize() as $value) {
                    $values[] = $value;
                }
                $data['ConsoleSize'] = $values;
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
            return ['Docker\\API\\Model\\ExecIdStartPostBody' => false];
        }
    }
} else {
    class ExecIdStartPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\API\\Model\\ExecIdStartPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ExecIdStartPostBody';
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
            $object = new \Docker\API\Model\ExecIdStartPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Detach', $data) && $data['Detach'] !== null) {
                $object->setDetach($data['Detach']);
                unset($data['Detach']);
            }
            elseif (\array_key_exists('Detach', $data) && $data['Detach'] === null) {
                $object->setDetach(null);
            }
            if (\array_key_exists('Tty', $data) && $data['Tty'] !== null) {
                $object->setTty($data['Tty']);
                unset($data['Tty']);
            }
            elseif (\array_key_exists('Tty', $data) && $data['Tty'] === null) {
                $object->setTty(null);
            }
            if (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] !== null) {
                $values = [];
                foreach ($data['ConsoleSize'] as $value) {
                    $values[] = $value;
                }
                $object->setConsoleSize($values);
                unset($data['ConsoleSize']);
            }
            elseif (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] === null) {
                $object->setConsoleSize(null);
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
            if ($object->isInitialized('detach') && null !== $object->getDetach()) {
                $data['Detach'] = $object->getDetach();
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('consoleSize') && null !== $object->getConsoleSize()) {
                $values = [];
                foreach ($object->getConsoleSize() as $value) {
                    $values[] = $value;
                }
                $data['ConsoleSize'] = $values;
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
            return ['Docker\\API\\Model\\ExecIdStartPostBody' => false];
        }
    }
}