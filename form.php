<?php

if (isset($_POST['birth_date'])) {
    $date_of_birth = $_POST['birth_date'];
    $today_date = date("d-m-Y");
    $diff = date_diff(date_create($date_of_birth), date_create($today_date));
    $age = $diff->format('%y');

    echo 'You are ' . $age . ' years old.';
}

?>