<?php
#xss_accountv5 Script
#this script enable XSS in selected areas
#
return array (
    'name' => 'account',
    'type' => 'controller',
    'technology' => 'web',
    'mapped_to' => 'account',
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
        'orders' => 
        array (
            'name' => 'orders',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'orders',
            'fields' => 
            array (
                0 => 
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
                1 => 
                array (
                    'name' => 'id',
                    'source' => 'param',
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
        'documents' => 
        array (
            'name' => 'documents',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'documents',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'page',
                    'source' => 'query',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'OSCommand' => 
                            array (
                                'enabled' => true,
                            ),
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
        'help_articles' => 
        array (
            'name' => 'help_articles',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'help_articles',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'page',
                    'source' => 'query',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'RemoteFileInclude' => 
                            array (
                                'enabled' => true,
                            ),
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
        'edit_profile' => 
        array (
            'name' => 'edit_profile',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'edit_profile',
            'fields' => 
            array (
                0 => 
                array (
                    'name' => 'email',
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
                        'children' => 
                        array (
                            0 => 
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
                ),
                1 => 
                array (
                    'name' => 'first_name',
                    'source' => 'any',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'SQL' => 
                            array (
                                'enabled' => false,
                                'blind' => false,
                            ),
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
                    'name' => 'return_url',
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
                        'children' => 
                        array (
                            0 => 
                            array (
                                'name' => 'nbmbnmbnm',
                                'vuln_list' => 
                                array (
                                    'XSS' => 
                                    array (
                                        'enabled' => true,
                                        'stored' => true,
                                    ),
                                ),
                            ),
                            1 => 
                            array (
                                'name' => '477547457',
                                'vuln_list' => 
                                array (
                                    'XSS' => 
                                    array (
                                        'enabled' => true,
                                        'stored' => true,
                                    ),
                                ),
                            ),
                            2 => 
                            array (
                                'name' => 'bnmbn',
                                'vuln_list' => 
                                array (
                                    'XSS' => 
                                    array (
                                        'enabled' => true,
                                        'stored' => true,
                                    ),
                                ),
                            ),
                            3 => 
                            array (
                                'name' => 'bmbnm',
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
                ),
                3 => 
                array (
                    'name' => 'last_name',
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
                4 => 
                array (
                    'name' => 'password_confirmation',
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
                5 => 
                array (
                    'name' => 'password',
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
                6 => 
                array (
                    'name' => 'username',
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
                7 => 
                array (
                    'name' => 'user_phone',
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
                8 => 
                array (
                    'name' => 'page',
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
                9 => 
                array (
                    'name' => 'photo',
                    'source' => 'any',
                    'vulnerabilities' => 
                    array (
                        'name' => 'parent_vulns',
                        'vuln_list' => 
                        array (
                            'ArbitraryFileUpload' => 
                            array (
                                'enabled' => true,
                            ),
                            'XSS' => 
                            array (
                                'enabled' => true,
                                'stored' => true,
                            ),
                        ),
                        'children' => 
                        array (
                            0 => 
                            array (
                                'name' => 'child_vulns',
                                'conditions' => 
                                array (
                                    'IsAjax' => true,
                                    'Method' => 
                                    array (
                                        'methods' => 
                                        array (
                                            0 => 'GET',
                                            1 => 'POST',
                                            2 => 'OPTIONS',
                                        ),
                                    ),
                                ),
                                'vuln_list' => 
                                array (
                                    'ArbitraryFileUpload' => 
                                    array (
                                        'enabled' => true,
                                    ),
                                    'XSS' => 
                                    array (
                                        'enabled' => true,
                                        'stored' => true,
                                    ),
                                ),
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
        'add_photo' => 
        array (
            'name' => 'add_photo',
            'type' => 'action',
            'technology' => 'web',
            'mapped_to' => 'add_photo',
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