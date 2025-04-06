<?php
// Step2: クラスを作成

// Foodクラスの定義
class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "価格は " . $this->price . " 円です。<br>";
    }
}

// Animalクラスの定義
class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "身長は " . $this->height . " cmです。<br>";
    }
}

// Step3: インスタンスを作成し、出力

$food1 = new Food("りんご", 150);
$animal1 = new Animal("キリン", 500, 900);

echo "<pre>";
print_r($food1);
print_r($animal1);
echo "</pre>";

// Step4: メソッドへアクセスする
$food1->show_price();
$animal1->show_height();
?>
