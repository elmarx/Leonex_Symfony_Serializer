<?php

$extensionPath = t3lib_extMgm::extPath('leonex_symfony_serializer');
$serializerPath = sprintf("%s/Resources/Private/PHP/Symfony/Component/Serializer/", $extensionPath);

return array(
    strtolower('Symfony\Component\Serializer\Serializer') => sprintf('%s/Serializer.php', $serializerPath),
    strtolower('Symfony\Component\Serializer\SerializerInterface') => sprintf('%s/SerializerInterface.php', $serializerPath),
    strtolower('Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer') => sprintf('%s/Normalizer/GetSetMethodNormalizer.php', $serializerPath),
    strtolower('Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer') => sprintf('%s/Normalizer/SerializerAwareNormalizer.php', $serializerPath),
    strtolower('Symfony\Component\Serializer\SerializerAwareInterface') => sprintf('%s/SerializerAwareInterface.php', $serializerPath),
    strtolower('Symfony\Component\Serializer\Normalizer\NormalizerInterface') => sprintf('%s/Normalizer/NormalizerInterface.php', $serializerPath),
    strtolower('Symfony\Component\Serializer\Encoder\JsonEncoder') => sprintf('%s/Encoder/JsonEncoder.php', $serializerPath),
    strtolower('Symfony\Component\Serializer\Encoder\EncoderInterface') => sprintf('%s/Encoder/EncoderInterface.php', $serializerPath),
    strtolower('Symfony\Component\Serializer\Encoder\DecoderInterface') => sprintf('%s/Encoder/DecoderInterface.php', $serializerPath),
);
