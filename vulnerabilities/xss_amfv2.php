<?php
return array (
    'name' => 'amf',
    'type' => 'application',
    'technology' => 'amf',
    'mapped_to' => 'amf',
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
        'SliderService' => 
        array (
            'name' => 'SliderService',
            'type' => 'controller',
            'technology' => 'amf',
            'mapped_to' => 'SliderService',
            'vulnerabilities' => 
            array (
                'vuln_list' => 
                array (
                    'XSS' => 
                    array (
                        'enabled' => false,
                        'stored' => false,
                    ),
                ),
            ),
            'children' => 
            array (
                'getSlides' => 
                array (
                    'name' => 'getSlides',
                    'type' => 'action',
                    'technology' => 'amf',
                    'mapped_to' => 'getSlides',
                    'vulnerabilities' => 
                    array (
                        'vuln_list' => 
                        array (
                            'XSS' => 
                            array (
                                'enabled' => false,
                                'stored' => false,
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'CouponService' => 
        array (
            'name' => 'CouponService',
            'type' => 'controller',
            'technology' => 'amf',
            'mapped_to' => 'CouponService',
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
                'useCoupon' => 
                array (
                    'name' => 'useCoupon',
                    'type' => 'action',
                    'technology' => 'amf',
                    'mapped_to' => 'useCoupon',
                    'fields' => 
                    array (
                        0 => 
                        array (
                            'name' => 'couponCode',
                            'source' => 'body',
                            'vulnerabilities' => 
                            array (
                                'vuln_list' => 
                                array (
                                    'SQL' => 
                                    array (
                                        'enabled' => true,
                                        'blind' => true,
                                    ),
                                    'XSS' => 
                                    array (
                                        'enabled' => false,
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
);