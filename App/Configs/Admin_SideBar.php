<?php
    return [
            "home" => [
                "title" => "Dashboard",
                "name" => "home",
                "icon" => "nav-icon fas fa-tachometer-alt",
                "link" => DOCUMENT_ROOT."/admin"
            ],

            "cake" => [
                "title" => "Manage Cakes",
                "name" => "cake",
                "icon" => "nav-icon fas fa-birthday-cake",
                "link" => DOCUMENT_ROOT."/admin/cakes"
            ],

            "categories" => [
                "title" => "Manage Categories",
                "name" => "categories",
                "icon" => "nav-icon fas fa-hamburger",
                "link" => DOCUMENT_ROOT."/admin/categories"
            ],

            "orders" => [
                "title" => "Manage Orders",
                "name" => "order",
                "icon" => "nav-icon fas fa-clipboard-list",
                "link" => DOCUMENT_ROOT."/admin/orders"
            ]
        ]
?>