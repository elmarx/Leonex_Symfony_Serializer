<?php
/**
 * Created by JetBrains PhpStorm.
 * User: elmar
 * Date: 12.09.11
 * Time: 16:42
 * To change this template use File | Settings | File Templates.
 */
 
class Tx_LeonexSymfonySerializer_Service_JsonGetSerializerService implements t3lib_Singleton {

    private $serializer;

    private $normalizer;

    public function __construct() {
        $this->normalizer = new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer();

        $this->serializer = new \Symfony\Component\Serializer\Serializer(
            array($this->normalizer),
            array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder())
        );
    }

    public function jsonEncode($object) {
        return $this->serializer->serialize($object, 'json');

    }

    public function jsonDecode($data, $class = null) {
        $a = $this->serializer->decode($data, 'json');
        if(!is_null($class)) {
            return $this->normalizer->denormalize($a, $class);
        }
        return $a;
    }

    public function denormalize($array, $className) {
        return $this->normalizer->denormalize($array, $className);
    }

    public function normalize($object) {
        return $this->normalizer->normalize($object);
    }

}
