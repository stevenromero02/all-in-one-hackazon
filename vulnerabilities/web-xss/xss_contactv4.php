<?php
#xss_contactv4 Script
#this script enable XSS in selected areas
#
return array (
    'name' => 'contact',
    'type' => 'controller',
    'technology' => 'web',
    'mapped_to' => 'contact',
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
                    'name' => 'contact_name',
                    'source' => 'body',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'SQL' => 
                            array (
                                'enabled' => true,
                                'blind' => false,
                            ),
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
                    'name' => 'contact_email',
                    'source' => 'body',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'XSS' => 
                            array (
                                'enabled' => false,
                                'stored' => true,
                            ),
                        ),
                    ),
                ),
                2 => 
                array (
                    'name' => 'contact_phone',
                    'source' => 'body',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'XSS' => 
                            array (
                                'enabled' => false,
                                'stored' => true,
                            ),
                        ),
                    ),
                ),
                3 => 
                array (
                    'name' => 'contact_message',
                    'source' => 'body',
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
            ),
            'vulnerabilities' => 
            array (
                'vuln_list' => 
                array (
                    'CSRF' => 
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
);