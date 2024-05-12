<?php

namespace App\Common\exception\dictionary;

use App\Common\exception\InvariantErrorException;

class DomainErrorDictionary
{
    public static function translate($error): \Exception
    {
        $directories = [
            'PRODUCT.NOT_CONTAIN_NEEDED_PROPERTY' => new InvariantErrorException('tidak dapat membuat product baru karena properti yang butuhkan tidak ada'),
            'PRODUCT.LIMIT_CHAR' => new InvariantErrorException('tidak dapat membuat product karena terdapat properti yang panjang karakter nya tidak sesuai')
        ];

        return $directories[$error->getMessage()] ?? $error->getMessage();
    }
}
