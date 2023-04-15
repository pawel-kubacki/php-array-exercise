<?php
session_start();

class TextInput
{
    public static $newValue = '';

    public function add(&$text)
    {
        $text = "ty123098gry567s";
        $inputTextValue = $_POST['textInput'];
        $inputNumericValue = $_POST['numericInput'];
        if (ctype_alnum($inputTextValue) == false) {
            $_SESSION['err_textInput'] = "Pole może składać się tylko z liter i cyfr (bez polskich znaków)";
            header('Location: index.php');
        } else {
            static::$newValue = $inputTextValue . " " . $inputNumericValue . " " . $text;
        }
    }
    public function getValue()
    {
        return static::$newValue;
    }
}


class Numericinput extends TextInput
{
    public function add(&$text)
    {
        $test = static::$newValue;
        $i = 0;
        $onlyNumeric = '';
        while ($i < strlen($test)) {
            if (is_numeric($test[$i]))
                $onlyNumeric .= $test[$i];
            $i++;
        }
        return $onlyNumeric;
    }
}

$newTextInput = new TextInput();
$newTextInput->add($text);
echo $newTextInput->getValue() . "<br />";

$newNumericInput = new Numericinput();
echo $newNumericInput->add($text) . "<br />";

?>