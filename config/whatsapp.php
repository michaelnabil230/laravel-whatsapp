<?php

return [
    /**
     * The whatsapp token to be used.
     */
    'token' => env('WHATSAPP_TOKEN'),

    /**
     * The whatsapp's app secret code. Required for webhook request signature verification.
     */
    'secret' => env('WHATSAPP_SECRET'),

    /**
     * The default NUMBER ID used to send the messages.
     */
    'default_number_id' => env('WHATSAPP_NUMBER_ID'),

    /**
     * The default Version used to send the messages.
     */
    'default_version' => env('WHATSAPP_VERSION', '20.0'),

    'webhook' => [
        /**
         * The webhook verification token.
         * For more information check https://developers.facebook.com/docs/graph-api/webhooks/getting-started#verification-requests
         */
        'verify_token' => env('WHATSAPP_WEBHOOK_VERIFY_TOKEN'),

        /**
         * Wether the webhook request signature should be verified or not.
         */
        'verify_signature' => env('WHATSAPP_WEBHOOK_SIGNATURE_VERIFY', false),
    ],
];
