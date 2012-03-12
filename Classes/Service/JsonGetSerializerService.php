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

    public function jsonDecode($data, $class) {
        $a = $this->serializer->decode($data, 'json');
        return $this->normalizer->denormalize($a, $class);
    }

}
