<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        

        include './autoload.php';

        $msg = new Message();

        $msg->addMessage('test', 'This is a test');

        $msg->addMessage('test2', 'This is a test');

        $msg->addMessage('test3', 'This is a test');

        var_dump($msg->getAllMessages());

        $errMsg = new ErrorMessage();

        $errMsg->addMessage('testError1', 'This is a error test ');

        $errMsg->addMessage('testError2', 'This is a error test ');

        $errMsg->addMessage('testError3', 'This is a error test ');

        var_dump($errMsg->getAllMessages());

        $successMsg = new SuccessMessage();

        $successMsg->addMessage('testsucess1', 'This is a success test 1');

        $successMsg->addMessage('testsucess2', 'This is a success test 2');

        $successMsg->addMessage('testsucess3', 'This is a success test 3');
        ?>

    </body>
</html>
