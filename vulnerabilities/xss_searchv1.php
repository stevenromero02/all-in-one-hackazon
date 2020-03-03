<?php
return array (
    'name' => 'search',
    'type' => 'controller',
    'technology' => 'web',
    'mapped_to' => 'search',
    'storage_role' => 'root',
    'vulnerabilities' => 
    array (
        'vuln_list' => 
        array (
            'XSS' => 
            array (
                'enabled' => true,
                'stored' => true,
            ),
        ),
    ),
    'children' => 
    array (
        'index' => 
        array (
            'name' => 'index',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'index',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'searchString',
                    'source' => 'query',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'XSS' => 
                            array (
                                'enabled' => true,
                                'stored' => false,
                            ),
                        ),
                    ),
                ),
                1 => 
                array (
                    'name' => 'id',
                    'source' => 'query',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'XSS' => 
                            array (
                                'enabled' => true,
                                'stored' => true,
                            ),
                        ),
                    ),
                ),
                2 => 
                array (
                    'name' => 'brands',
                    'source' => 'query',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'XSS' => 
                            array (
                                'enabled' => true,
                                'stored' => true,
                            ),
                        ),
                    ),
                ),
                3 => 
                array (
                    'name' => 'price',
                    'source' => 'query',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'XSS' => 
                            array (
                                'enabled' => true,
                                'stored' => true,
                            ),
                        ),
                    ),
                ),
                4 => 
                array (
                    'name' => 'quality',
                    'source' => 'query',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'XSS' => 
                            array (
                                'enabled' => true,
                                'stored' => true,
                            ),
                        ),
                    ),
                ),
                5 => 
                array (
                    'name' => 'page',
                    'source' => 'query',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'XSS' => 
                            array (
                                'enabled' => true,
                                'stored' => true,
                            ),
                        ),
                    ),
                ),
            ),
            'vulnerabilities' => 
            array (
                'vuln_list' => 
                array (
                    'XSS' => 
                    array (
                        'enabled' => true,
                        'stored' => true,
                    ),
                ),
            ),
        ),
    ),
);