
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shapes</title>
</head>
<body>


<div class="container">
    <h1>BSIT-2A: PONCE DE LEON, EUGENE Y.<BR>PHP SHAPES</h1>


    <?php
function drawTriangle() {
    $n = 7; 
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*"; 
        }
        echo "<br>";
    }


    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*"; 
        }
        echo "<br>";
    }
}

function drawDiamond() {
    $n = 7; 

  
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n - $i; $j >= 1; $j--) {
            echo "&nbsp;"; 
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "*"; 
        }
        echo "<br>";
    }

 
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = $n - $i; $j >= 1; $j--) {
            echo "&nbsp;"; 
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "*"; 
        }
        echo "<br>";
    }
}
function drawCircle() {
    $radius = 5; // Adjust the radius of the circle
    $diameter = 2 * $radius;

    // Upper half of the circle
    for ($i = 0; $i <= $radius; $i++) {
        for ($j = 0; $j <= $diameter; $j++) {
            $distance = sqrt(pow($i - $radius, 2) + pow($j - $radius, 2));
            if ($distance <= $radius) {
                echo "* ";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }

    // Lower half of the circle
    for ($i = $radius - 1; $i >= 0; $i--) {
        for ($j = 0; $j <= $diameter; $j++) {
            $distance = sqrt(pow($i - $radius, 2) + pow($j - $radius, 2));
            if ($distance <= $radius) {
                echo "* ";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
}

function drawSquare() {
    $side = 7; // Adjust the side length of the square

    // Upper half of the square
    for ($i = 0; $i < $side / 2; $i++) {
        for ($j = 0; $j < $side; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    // Lower half of the square
    for ($i = $side / 2 - 1; $i >= 0; $i--) {
        for ($j = 0; $j < $side; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

function drawRectangle() {
    $width = 9; // Adjust the width of the rectangle
    $height = 5; // Adjust the height of the rectangle

    // Upper half of the rectangle
    for ($i = 0; $i < $height / 2; $i++) {
        for ($j = 0; $j < $width; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    // Lower half of the rectangle
    for ($i = $height / 2 - 1; $i >= 0; $i--) {
        for ($j = 0; $j < $width; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

function drawHourglass() {
    $n = 7; 

    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = $n - $i; $j >= 1; $j--) {
            echo "&nbsp;"; 
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "*"; 
        }
        echo "<br>";
    }

    for ($i = 1; $i <= $n; $i++) {
        for ($j = $n - $i; $j >= 1; $j--) {
            echo "&nbsp;"; 
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "*"; 
        }
        echo "<br>";
    }
}
 

 
echo "Triangle:<br>";
drawTriangle();
echo "<br>";

echo "Diamond:<br>";
drawDiamond();
echo "<br>";

// Draw Circle
echo "Circle:<br>";
drawCircle();
echo "<br>";

// Draw Square
echo "Square:<br>";
drawSquare();
echo "<br>";

// Draw Rectangle
echo "Rectangle:<br>";
drawRectangle();
echo "<br>";

// Draw Hourglass
echo "Hourglass:<br>";
drawHourglass();
echo "<br>";



?>

</div>

</body>
</html>