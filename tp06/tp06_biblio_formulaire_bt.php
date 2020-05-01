<?php

// 20/03/2019 : biliotheque fonctions formulaire avec bootstrap
// --------------------------------------------------
// form_begin
// --------------------------------------------------

function form_begin($class, $method, $action) {
    echo ("\n<!-- ============================================== -->\n");
    echo ("<!-- form_begin : $class $method $action) -->\n");

    printf("<form class='%s' method='%s' action='%s'>\n", $class, $method, $action);
}

// --------------------------------------------------
// form_input_text
// --------------------------------------------------

function form_input_text($label, $name, $size, $value) {
    echo ("\n<!-- form_input_text : $label $name $size $value -->\n");
    echo ("  <p>\n");

    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");
    echo (" <input type='text' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
}

// --------------------------------------------------
// form_input_hidden
// --------------------------------------------------

function form_input_hidden($name, $value) {
    // todo ...
    echo ("\n<!--form_input_hidden:$name,$value-->\n");
    echo ("<p>\n");
    
    echo ("<input type='hidden' name='$name' value='$value' >");
}

// --------------------------------------------------
// form_end
// --------------------------------------------------

function form_end() {
// todo ...
    echo ("</form>");
}


// --------------------------------------------------
// form_select
// --------------------------------------------------

function form_select($label, $name, $multiple, $size, $liste) {
// todo ...
    echo ("<label for='$label'>$label</label>");
    echo ("<select name='$name' multiple=$multiple' size='$size' class='form-control'>");
    for($i=0;$i< count($liste);$i++){
        echo ("<option value='$liste[$i]'>$liste[$i]</option>");
        echo "</br>";
    }
    
    echo ("</select>");
}

function form_input_checkbox($name, $checked, $label) {
// todo ...
    echo ("<input type='checkbox' name='$name' $checked>");
    echo ("<label for='$label'>$label</label>");
    
}

function form_input_radio($name, $checked, $value, $label) {
// todo ...
    echo "<input type='radio' name='$name' value='$value' >";
    echo "<label for='$label'>$label</label>";
}

function form_input_submit($value) {
// todo ...
    echo "<input type='submit' value='$value'>";
}

function form_input_reset($value) {
// todo ...
    echo "<input type='reset' value='$value'>";
}

function form_textarea($label, $name, $value) {
// todo ...
    echo "<label for='$label'>$label</label>";
    echo "<textarea name='$name' value='$value' rows='4' cols='50'></textarea>";
    
}


?>

