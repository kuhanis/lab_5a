<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rectangle Area</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $length) {
            return $width * $length;
        }

        // Call the function with sample values
        $width = 4;
        $length = 2;
        $area = calculateArea($width, $length);

        // Display the result
        echo "The area of a rectangle with a width of $width and $length is $area.";
    ?>
</body>
</html>
