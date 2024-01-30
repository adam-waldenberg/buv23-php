<?php
class DataView {
    public function display($data) {
        if (is_array($data)) {
            echo '<div style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">';
            foreach ($data as $item) {
                echo $item . "<br>";
            }
            echo '</div>';
        } else {
            echo '<div style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">' . $data . '</div>';
        }
    }
}
?>