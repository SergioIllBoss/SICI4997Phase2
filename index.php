<?php
//ini_set('session.gc_maxlifetime', 15);
$maxSessionTime = 60 * 30; // 30 minute

session_start();
date_default_timezone_set('EST');

$action = (isset($_GET['a'])) ? $_GET['a'] : '';
include 'db.php';
include './classes/user.php';
if (isset($_SESSION['userID'])) {
    $loggedUser = User::loadFromID($_SESSION['userID']);
    
    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    } else {
        if ((time() - $_SESSION['loginTime']) >= $maxSessionTime) {
            session_destroy();
            session_start();
            $loggedUser = null;
        } else if ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            $loggedUser = null;
            //showError('Unauthorized access! Session destroyed!');
        }
    }
}
include './parts/header.php';
if ($action == 'login') {
    include './parts/signin.php';
} else if ($action == 'logout') {
    session_destroy();
    header('Location: index.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromNumest($_POST['numest']);
    
    if (is_null($u)) {
        showError('The user doesn\'t exist.');
        include './parts/signin.php';
    } else if ($u->validatePassword($_POST['Contraseña'])) {
        $_SESSION['userID'] = $u->id;
        $_SESSION['loginTime'] = time();
        $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
        header('Location: index.php');
    } else {
        showError('The entered password is incorrect!');
        include './parts/signin.php';
    }
} else if ($action == 'register') {
    include './parts/signup.php';
} else if ($action == 'doRegister') {
    $u = User::loadFromNumest($_POST['numest']);
    
    if ($u) {
        showError('Numero de estudiante ya existe.');
        include './parts/signup.php';
    } else {
        $u = new User();
        
        $u->nombre = $_POST['nombre'];
        $u->apellidos = $_POST['apellidos'];
        $u->numest = $_POST['numest'];
        $u->tel = $_POST['tel'];
        $u->email = $_POST['email'];
        $u->Contraseña = $_POST['Contraseña'];
        $u->save();
        
        showSuccess('You Have Been Successfully registered!');
    }
} else {
    include './parts/body.php';
}
 
include './parts/footer.php';
/*echo '<pre>' . print_r($_SESSION, true)  . '</pre>';
if (isset($_SESSION['loginTime'])) {
    echo '<pre>' . date('d-M-Y H:m:s', $_SESSION['loginTime']) . '</pre>';
}*/
function showError($msg) {
    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
}
function showSuccess($msg) {
    echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
}

?>