<html>
<body>

<h1>The Fruit Program</h1>

<?php
    class Fruit
    {
        public $name;
        public $color;

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro()
        {
            echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.";
        }
    }

    class Cherry extends Fruit
    {
        public $weight;

        public function __construct($name, $color, $weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function intro()
        {
            echo "A {$this->name} is a fruit and the color of the fruit is {$this->color} and the weight of the fruit is {$this->weight}.";
        }
    }

    $cherry = new Cherry("Cherry", "red", 20);
    $cherry->intro();

?>

</body>
</html>

