<?php
class Data { public function get(){
    return["Apple", "Banana", "Orange", "Pineapple", "Grapes", "Strawberry", "Blueberry", "Peach", "Kiwi", "Raspberry"];
    }

    public function filterByFirstLetter($letter) {
        $data = $this->get();
        $filteredData = array_filter($data, function($item) use ($letter) {
            return strpos($item, $letter) === 0;
        });
        return array_values($filteredData); // Resets keys
    }

    public function sortData($ascending = true) {
        $data = $this->get();
        if ($ascending) {
            sort($data);
        } else {
            rsort($data);
        }
        return $data;
    }

    public function randomGet() {
        return $this->get()[rand(0, count($this->get()) - 1)];
    }
}
?>