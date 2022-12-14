<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Friendship__CLASSMETADATA__' => 0,
'App__Entity__User__CLASSMETADATA__' => 1,
'App__Entity__Hobby__CLASSMETADATA__' => 2,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Friendship',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Friendship',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\FriendshipRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'isAccepted' => [
                            'fieldName' => 'isAccepted',
                            'type' => 'boolean',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'is_accepted',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'is_accepted' => 'isAccepted',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'isAccepted' => 'is_accepted',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'friendship',
                    ],
                ],
                'associationMappings' => [
                    [
                        'user' => [
                            'fieldName' => 'user',
                            'joinColumns' => [
                                [
                                    'name' => 'user_id',
                                    'unique' => false,
                                    'nullable' => false,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'friends',
                            'targetEntity' => 'App\\Entity\\User',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Friendship',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'user_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'user_id' => 'user_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'user_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                        'friends' => [
                            'fieldName' => 'friends',
                            'joinColumns' => [
                                [
                                    'name' => 'friends_id',
                                    'unique' => false,
                                    'nullable' => false,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'friendsWithme',
                            'targetEntity' => 'App\\Entity\\User',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Friendship',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'friends_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'friends_id' => 'friends_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'friends_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\User',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'username' => [
                            'fieldName' => 'username',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => true,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'username',
                        ],
                        'roles' => [
                            'fieldName' => 'roles',
                            'type' => 'json',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'roles',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'avatar' => [
                            'fieldName' => 'avatar',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'avatar',
                        ],
                        'country' => [
                            'fieldName' => 'country',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'country',
                        ],
                        'birthdate' => [
                            'fieldName' => 'birthdate',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'birthdate',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'username' => 'username',
                        'roles' => 'roles',
                        'password' => 'password',
                        'email' => 'email',
                        'avatar' => 'avatar',
                        'country' => 'country',
                        'birthdate' => 'birthdate',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'username' => 'username',
                        'roles' => 'roles',
                        'password' => 'password',
                        'email' => 'email',
                        'avatar' => 'avatar',
                        'country' => 'country',
                        'birthdate' => 'birthdate',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                    ],
                ],
                'associationMappings' => [
                    [
                        'friends' => [
                            'fieldName' => 'friends',
                            'mappedBy' => 'user',
                            'targetEntity' => 'App\\Entity\\Friendship',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\User',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                        'friendsWithme' => [
                            'fieldName' => 'friendsWithme',
                            'mappedBy' => 'friends',
                            'targetEntity' => 'App\\Entity\\Friendship',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\User',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                        'hobbies' => [
                            'fieldName' => 'hobbies',
                            'joinTable' => [
                                'name' => 'user_hobby',
                                'joinColumns' => [
                                    [
                                        'name' => 'user_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                                'inverseJoinColumns' => [
                                    [
                                        'name' => 'hobby_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                            ],
                            'targetEntity' => 'App\\Entity\\Hobby',
                            'mappedBy' => null,
                            'inversedBy' => 'users',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\User',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'joinTableColumns' => [
                                'user_id',
                                'hobby_id',
                            ],
                            'isOnDeleteCascade' => true,
                            'relationToSourceKeyColumns' => [
                                'user_id' => 'id',
                            ],
                            'relationToTargetKeyColumns' => [
                                'hobby_id' => 'id',
                            ],
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Hobby',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Hobby',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\HobbyRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'img' => [
                            'fieldName' => 'img',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'img',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'img' => 'img',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'img' => 'img',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'hobby',
                    ],
                ],
                'associationMappings' => [
                    [
                        'users' => [
                            'fieldName' => 'users',
                            'joinTable' => [],
                            'targetEntity' => 'App\\Entity\\User',
                            'mappedBy' => 'hobbies',
                            'inversedBy' => null,
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Hobby',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
