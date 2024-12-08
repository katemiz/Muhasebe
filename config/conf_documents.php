<?php

/*
    modelTitle          : Variable to be used in javascript confirm dialogs. [Delete, Freeze, Release etc Confirm]
*/

return [

    'modelTitle' => 'Record',

    'index' => [
        'title' => 'Records',
        'subtitle' => 'List of All Records',
        'route' => '/records',
        'addBtnTitle' => 'Add Record',
        'noItemText' => 'No records found in the database!',
    ],

    'formCreate' => [
        'title' => 'Records',
        'subtitle' => 'Add Record',
        'route' => '/records/create'
    ],

    'formEdit' => [
        'title' => 'Records',
        'subtitle' => 'Update Existing Record Parameters',
        'route' => '/records/{id}/edit'
    ],

    'show' => [
        'title' => 'Records',
        'subtitle' => 'Record Details and Properties',
        'route' => '/records/{id}'
    ],

    'store' => [
        'route' => '/records'
    ],

    'update' => [
        'route' => '/records/{id}'
    ],


    'table' =>  [

        'id' => [
            'label' => 'No',
            'visibility' => true,
            'sortable' => false,
            'wrapText' => true,
            'hasViewLink' => false,
            'class' => ''
        ],

        'user_id' => [
            'label' => 'Prepared By',
            'visibility' => false,
            'sortable' => false,
            'wrapText' => true,
            'hasViewLink' => false,
            'class' => ''
        ],

        'doc_type' => [
            'label' => 'Tür',
            'visibility' => true,
            'sortable' => true,
            'wrapText' => true,
            'hasViewLink' => false,
            'class' => ''
        ],

        'zaman' => [
            'label' => 'Zaman',
            'visibility' => true,
            'sortable' => true,
            'wrapText' => true,
            'hasViewLink' => false,
            'class' => ''
        ],

        'bedel' => [
            'label' => 'Bedel, TL',
            'visibility' => false,
            'sortable' => true,
            'wrapText' => true,
            'hasViewLink' => false,
            'class' => 'text-right'
        ],

        'bedel_formatted' => [
            'label' => 'Bedel, TL',
            'visibility' => true,
            'sortable' => true,
            'wrapText' => true,
            'hasViewLink' => false,
            'class' => 'text-right'
        ],



        'created_at' => [
            'label' => 'Created At',
            'visibility' => true,
            'sortable' => true,
            'wrapText' => true,
            'hasViewLink' => false,
            'class' => 'text-right'
        ],

        'updated_at' => [
            'label' => 'Updated At',
            'visibility' => false,
            'sortable' => false,
            'wrapText' => true,
            'hasViewLink' => false,
            'class' => ''
        ],

    ],


    'docTypes' => [
        'EV' => 'Ev - Elektrik/Su/Doğalgaz/Aidat',
        'TR' => 'Ev - Internet -TV',
        'SA' => 'Sağlık',
        'YE' => 'Yemek',
        'DE' => 'Demirbaş',
        'BE' => 'Benzin',
        'DI' => 'Diğer'
    ],

    'languages' => [
        'EN' => 'English',
        'TR' => 'Türkçe'
    ]



];
