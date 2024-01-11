<?php

// return [

//     /*
//      * A policy will determine which CSP headers will be set. A valid CSP policy is
//      * any class that extends `Spatie\Csp\Policies\Policy`
//      */
//     'policy' => Spatie\Csp\Policies\Basic::class,

//     /*
//      * This policy which will be put in report only mode. This is great for testing out
//      * a new policy or changes to existing csp policy without breaking anything.
//      */
//     'report_only_policy' => '',

//     /*
//      * All violations against the policy will be reported to this url.
//      * A great service you could use for this is https://report-uri.com/
//      *
//      * You can override this setting by calling `reportTo` on your policy.
//      */
//     'report_uri' => env('CSP_REPORT_URI', ''),

//     /*
//      * Headers will only be added if this setting is set to true.
//      */
//     'enabled' => env('CSP_ENABLED', true),

//     /*
//      * The class responsible for generating the nonces used in inline tags and headers.
//      */
//     'nonce_generator' => Spatie\Csp\Nonce\RandomString::class,
//     'add_to_eos_web' => [
//         'default-src' => "self",
//         'script-src' => ['self','unsafe-inline'],
//         'style-src' => ['self','unsafe-inline'],
//         'img-src' => ['self','unsafe-inline']
//     ],
    return [
    'enabled' => true,
    'add_sha256_hash_to_script_attributes' => false,
    'unsafe_inline' => false,
    'add_nonce_to_inline_script' => false,
    'add_unsafe_inline_to_inline_script' => false,
    'report_uri' => null,
    'style' => [
        // Specify your inline styles here
        'self','unsafe-inline','sha256-ZxTU35rKGVtFq7fqmOeiF9u2OViRpsRj6orFv6wybPs='
    ],
    'script' => [
        // Specify your inline scripts here
        // 'unsafe-inline',
    ],
    // ... other CSP directives
];

// ];
