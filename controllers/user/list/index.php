<?php

require_once '../../../base.classes/core/smarty.php';
include_once '../../../base.classes/core/database.php';
include_once '../../../models/user.model.php';
define("RECORD_PER_PAGE", 5);

$smarty = new mySmarty();

$database = new Database();
$db = $database->connect();

$user = new User($db);

$totalUser = $user->totalUser();
$currentPage  = isset($_GET['page']) && (int) $_GET['page'] > 0 ? (int) $_GET['page'] : 1;

$totalPage = ceil($totalUser/ RECORD_PER_PAGE);
$offset = ($currentPage - 1)* RECORD_PER_PAGE;
$limit = "LIMIT $offset, " . strval(RECORD_PER_PAGE);
$query = "SELECT * FROM user ". $limit; 

$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt;

$num = $result->rowCount();

if ($num > 0) {
    $users_arr = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $user = array(
            'username' => $username,
            'password' => $password,
            'fullName' => $fullName
        );

        array_push($users_arr, $user);
    }
}

$smarty->assign('users', $users_arr);
$smarty->assign('currentPage', $currentPage);
$smarty->assign('RECORD_PER_PAGE', RECORD_PER_PAGE);
echo "<h2 class=\"text-center mt-2\">Page:  " . strval($currentPage) . "</h2>";

$smarty->display('list.user.tpl');

echo "<div class=\" container mx-5 mt-4 \">";
echo "<div class=\" row row-cols-auto\">";

echo "<div class=\"col\">";
    if($currentPage > 1 && $totalPage > 0){
        echo '<a class="btn btn-primary text-decoration-none" href="index.php? page= '.($currentPage - 1). '">Prev</a>';
    }
    for($i=1; $i<=$totalPage; $i++){
        echo "</div>";
        echo "<div class=\"col\">";
        echo '<a class="btn btn-dark text-decoration-none"'.($currentPage==$i?' class="current"':'').' href="index.php?page='. $i .'">' . $i . '</a>';
        echo "</div>";
        echo "<div class=\"col\">";
    }
    if($currentPage < $totalPage && $totalPage > 1){
        echo '<a class="btn btn-primary mx-2 text-decoration-none" href="index.php?page='.($currentPage + 1). '">Next</a>';
    }
echo "</div>";

echo "</div>";
echo "</div>";