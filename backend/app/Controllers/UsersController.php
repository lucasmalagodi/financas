<?php
// app/controllers/UsersController.php
namespace App\Controllers;

use App\Models\Users;
class UsersController {
    public function index() {
        // Recupera todos os usuários
        $users = User::all();
        // Retorna a lista de usuários em formato JSON
        // echo json_encode($users);
        echo json_encode(1);
    }
}
