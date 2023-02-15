<?php 
const ROUTES = [
    "06-poo"=>[
        "controller"=>"UserController",
        "fonction"=>"read"
    ],
    "06-poo/inscription"=>[
        "controller"=>"UserController",
        "fonction"=>"create"
    ],
    "06-poo/user/update"=>[
        "controller"=>"UserController",
        "fonction"=>"update"
    ],
    "06-poo/user/delete"=>[
        "controller"=>"UserController",
        "fonction"=>"delete"
    ],
    // Exercices :
    // "06-poo/connexion"=>[
    //     "controller"=>"authController.php",
    //     "fonction"=>"login"
    // ],
    // "06-poo/deconnexion"=>[
    //     "controller"=>"authController.php",
    //     "fonction"=>"logout"
    // ],
    // "06-poo/message/list"=>[
    //     "controller"=>"messageController.php",
    //     "fonction"=>"readMessage"
    // ],
    // "06-poo/message/create"=>[
    //     "controller"=>"messageController.php",
    //     "fonction"=>"createMessage"
    // ],
    // "06-poo/message/update"=>[
    //     "controller"=>"messageController.php",
    //     "fonction"=>"updateMessage"
    // ],
    // "06-poo/message/delete"=>[
    //     "controller"=>"messageController.php",
    //     "fonction"=>"deleteMessage"
    // ],
];
?>