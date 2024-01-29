<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// <<<<<<<<<<<<<<  ✨ Codeium Command ⭐ >>>>>>>>>>>>>>>>
class BasicObject {
    // Properties
    public $name;
    public $value;

    // Constructor
    public function __construct($name, $value) {
        $this->name = $name;
        $this->value = $value;
    }

    // Method to display properties
    public function display() {
        echo "Name: " . $this->name . ", Value: " . $this->value;
    }
}

// Creating an instance of BasicObject
$basicObject = new BasicObject("Sample", 42);

// Calling a method of the object
$basicObject->display();

?>
<<<<<<<  78e7fe28-a631-4909-867f-4205ec8700fc  >>>>>>>
?>
</body>
</html>