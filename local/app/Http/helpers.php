<?php

    function format_price_iva($number){

        return ('$' . number_format((float)$number * 1.16, 2, '.', ''));
    }

    function format_price($number){

        return ('$' . number_format((float)$number, 2, '.', ''));
    }

?>