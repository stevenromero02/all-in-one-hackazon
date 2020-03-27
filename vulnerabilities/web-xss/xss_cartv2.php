<?php
#xss_cartv2 Script
#this script enable XSS in selected areas
#
return array (
    'name' => 'cart',
    'type' => 'controller',
    'technology' => 'web',
    'mapped_to' => 'cart',
    'storage_role' => 'root',
    'fields' => 
    array (
        0 => 
        array (
            'name' => 'qty',
            'source' => 'body',
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
        1 => 
        array (
            'name' => 'product_id',
            'source' => 'body',
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
            'name' => 'itemId',
            'source' => 'any',
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
    'children' => 
    array (
        'add' => 
        array (
            'name' => 'add',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'add',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'product_id',
                    'source' => 'body',
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
        'view' => 
        array (
            'name' => 'view',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'view',
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
        'update' => 
        array (
            'name' => 'update',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'update',
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
        'empty' => 
        array (
            'name' => 'empty',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'empty',
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
        'setMethods' => 
        array (
            'name' => 'setMethods',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'setMethods',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'shipping_method',
                    'source' => 'body',
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
                1 => 
                array (
                    'name' => 'payment_method',
                    'source' => 'body',
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
                    'name' => 'credit_card_number',
                    'source' => 'body',
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
                    'name' => 'credit_card_year',
                    'source' => 'body',
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
                    'name' => 'credit_card_month',
                    'source' => 'body',
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
                    'name' => 'credit_card_cvv',
                    'source' => 'body',
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