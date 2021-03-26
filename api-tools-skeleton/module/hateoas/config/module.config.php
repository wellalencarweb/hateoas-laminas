<?php
return [
    'router' => [
        'routes' => [
            'hateoas.rest.users' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/users[/:users_id]',
                    'defaults' => [
                        'controller' => 'hateoas\\V1\\Rest\\Users\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'hateoas.rest.users',
        ],
    ],
    'api-tools-rest' => [
        'hateoas\\V1\\Rest\\Users\\Controller' => [
            'listener' => 'hateoas\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'hateoas.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \hateoas\V1\Rest\Users\UsersEntity::class,
            'collection_class' => \hateoas\V1\Rest\Users\UsersCollection::class,
            'service_name' => 'users',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'hateoas\\V1\\Rest\\Users\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'hateoas\\V1\\Rest\\Users\\Controller' => [
                0 => 'application/vnd.hateoas.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'hateoas\\V1\\Rest\\Users\\Controller' => [
                0 => 'application/vnd.hateoas.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \hateoas\V1\Rest\Users\UsersEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'hateoas.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \hateoas\V1\Rest\Users\UsersCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'hateoas.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'hateoas\\V1\\Rest\\Users\\UsersResource' => [
                'adapter_name' => 'dummy',
                'table_name' => 'users',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'hateoas\\V1\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
];
