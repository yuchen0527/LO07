
<?php

function form_begin($class, $method, $action) {
    echo ("\n<!-- =========================================== -->\n");
    echo ("<!-- form_begin : $class $method $action -->\n");
    printf("<form class='%s' method='%s' action='%s'>\n", $class, $method, $action);
}

function form_input_text($label, $name, $size, $value) {
    echo("\n<!-- form_input_text : $label $name $value -->\n");
    echo("<p>\n");
    echo("<div class='form-group'>");
    echo("<label for='$label'>$label</label>");
    echo("<input type='text' class='form-control' name='$name' size='$size' value='$value'>");
    echo("</div>");
}

function form_select($label, $name, $multiple, $size, $liste) {
    echo("\n<!-- form_select : $label $name $multiple $size-->\n");
    echo("<p>\n");
    echo("<div class='form-group'>");
    echo("<label for='$label'>$label</label>");
    echo("<br>");
    if ($multiple == "multiple") {
        echo("<select name='$name' style='width: 200px' multiple='$multiple' size='$size' >");
        for ($l = 0; $l < count($liste); $l++) {
            echo("<option value='$liste[$l]'>$liste[$l]</option>");
        }
        echo("</select>");
    } else {


        echo("<select name='$name' style='width: 200px' size='$size'>");
        for ($l = 0; $l < count($liste); $l++) {
            echo("<option value='$liste[$l]'>$liste[$l]</option>");
        }
        echo("</select>");
    }
}

function form_input_reset($value) {
    echo ("\n<!-- for_input_reset : $value -->\n");
    echo("<br>");
    echo ("<button type='reset' value='$value'>Reset</button>");
}

function form_input_submit($value) {
    echo ("\n<!-- for_input_submit : $value -->\n");
    echo ("<button type='submit' value='$value'>$value</button>");
}

function form_end() {
    echo ("\n<!-- =========================================== -->\n");
    echo("<!-- form-end --\n>");
    echo ('</form>');
}
?>

