<?php
    require_once "../model/timeTableModel.php";

    $model = new TimeTableModel();

    $timeslots = $model->getTimeslots();
    $bids = $model->getBids();

    require "../view/timeTableView.php";
?>
