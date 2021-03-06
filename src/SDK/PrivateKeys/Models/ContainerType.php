<?php

namespace Virgil\SDK\PrivateKeys\Models;

class ContainerType {

    private static $_containerTypes = array(
        'easy',
        'normal'
    );

    public static function isValidType($containerType) {

        return in_array(
            $containerType,
            self::$_containerTypes
        );
    }

}