<?php

/**
 * Copyright (C) 2014 Virgil Security Inc.
 *
 * Lead Maintainer: Virgil Security Inc. <support@virgilsecurity.com>
 *
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *     (1) Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *     (2) Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *     (3) Neither the name of the copyright holder nor the names of its
 *     contributors may be used to endorse or promote products derived from
 *     this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR ''AS IS'' AND ANY EXPRESS OR
 * IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT,
 * INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
 * HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT,
 * STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

require_once '../vendor/autoload.php';

use Virgil\SDK\Keys\Client as KeysClient;


const VIRGIL_APPLICATION_TOKEN = '17da4b6d03fad06954b5dccd82439b10';
const VIRGIL_PUBLIC_KEY_ID     = '5d3a8909-5fe5-2abb-232c-3cf9c277b111';
const VIRGIL_ACTION_TOKEN      = '31b4be12-9021-76bc-246d-5ecbd7a22350';


try {

    // Create Keys Service HTTP Client
    $keysClient = new KeysClient(
        VIRGIL_APPLICATION_TOKEN,
        array(
            'base_url' => 'https://keys-stg.virgilsecurity.com'
        )
    );

    // Do service call
    echo 'Call Keys service to persist Public Key instance.' . PHP_EOL;
    $publicKey = $keysClient->getPublicKeysClient()->persistKey(
        VIRGIL_PUBLIC_KEY_ID,
        VIRGIL_ACTION_TOKEN,
        array(
            'Y4A6D9'
        )
    );
    echo 'Public Key instance successfully persisted.' . PHP_EOL;

} catch (Exception $e) {

    echo 'Error:' . $e->getMessage();
}