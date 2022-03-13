<?php

require_once __DIR__ . '/App/Db.php';
require_once __DIR__ . '/App/User.php';
require_once __DIR__ . '/App/UserRepository.php';
require_once __DIR__ . '/App/UserController.php';


try {
    $controller = (new \App\UserController())
        ->setUserRepository(
            (new \App\UserRepository())
                ->setDb(
                    new \App\Db()
                )
        )
    ;
    echo $controller->handle();
} catch (Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}