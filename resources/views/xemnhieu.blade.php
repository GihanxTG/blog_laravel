<h1>Tin xem nhiều</h1>
<?php
    foreach ($data as $tin) {
        echo "<p>{$tin->tieuDe} - ({$tin->xem})</p>";
    }
?>