<?php
if (!function_exists('staffList')) {
    function staffList($staffs, $parent_id = 0, $sub = true, $char = '')
    {
        $staff_child = array();
        foreach ($staffs as $key => $item) {
            if ($item['parent_id'] == $parent_id ) {
                $staff_child[] = $item;
                unset($staffs[$key]);
            }
        }

        if ($staff_child) {
            echo $sub ? '' : '<ul>';
            foreach ($staff_child as $item) {
                echo ' <li>';
                echo '<a href="#">' . $char . $item->name . '</a>';
                staffList($staffs, $item->id, false, $char . '|--');
                echo '</li>';
            }
            echo $sub ? '' :"</ul>";
        }
    }
}

if (!function_exists('staffSelect')) {
    function staffSelect($staffs, $parent_id = 0, $char = '', $selected = 0)
    {
        foreach ($staffs as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id   ) {
                if ($selected !== 0 && $item->id == $selected) {
                    echo '<option selected value="' . $item->id . '">' . $char . $item->name . ' </option>';
                } else {
                    echo '<option value="' . $item->id . '">' . $char . $item->name . ' </option>';
                }
                unset($staffs[$key]);
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                staffSelect($staffs, $item->id, $char . '|--');
            }
        }
    }
}

