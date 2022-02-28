<?php

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    // Tải list thời gian
    if ($action == 'addTimeList') {
        echo '
        <option value="">Thời gian</option>
        <option value="08:00 AM">08:00 AM</option>
        <option value="08:30 AM">08:30 AM</option>
        <option value="09:00 AM">09:00 AM</option>
        <option value="09:30 AM">09:30 AM</option>
        <option value="10:00 AM">10:00 AM</option>
        <option value="10:30 AM">10:30 AM</option>
        <option value="11:00 AM">11:00 AM</option>
        <option value="01:00 PM">01:00 PM</option>
        <option value="02:00 PM">02:00 PM</option>
        <option value="03:00 PM">03:00 PM</option>
        <option value="03:30 PM">03:30 PM</option>
        <option value="04:00 PM">04:00 PM</option>
        <option value="04:30 PM">04:30 PM</option>
        <option value="05:00 PM">05:00 PM</option>
        <option value="05:30 PM">05:30 PM</option>
        <option value="06:00 PM">06:00 PM</option>
        ';
    }
}

?>