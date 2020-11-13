<?php
    require("models/UserModel.php");
    class UserController{
        public function index(){
            $userModel = new UserModel();

            $users = $userModel->getAllUsers();

            // Chuyen cho View xu ly;
            require("views/user/index.php");
        }

        public function delete(){
            $userModel = new UserModel();

            $users = $userModel->deleteUser();

            // Chuyen cho View xu ly;
            require("views/user/delete_user.php");
        }
    }


?>