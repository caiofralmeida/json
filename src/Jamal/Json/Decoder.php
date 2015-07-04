<?php

namespace Jamal\Json;

class Decoder
{
    public static function execute($data, $toArray = false)
    {
        $decodedData = json_decode($data, $toArray);
        $lastError = json_last_error();

        if ($lastError > 0) {
            throw new JsonDecoderException(
                sprintf(
                    'error code: %d, message: %s',
                    $lastError,
                    json_last_error_msg()
                )
            );
        }

        return $decodedData;
    }
}
