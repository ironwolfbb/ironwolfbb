<?php
class HungryCat
{
public $animal = 'кошка';  
public $name;
public $color;
public $like_food;

public function __construct($name, $color, $like_food)
 {
    $this->name = $name; 
    $this->color = $color;
    $this->like_food = $like_food;
 }
 public function eat($food)
 {
   echo "Голодный кот $this->name, особые приметы: $this->color, съел $food";
   if($food == $this->like_food){
    echo "<br>";   
    echo "  и замурчал 'мррррр' от своей любимой еды";
    echo "<br>";
   /*  ?> <img class="gallery" src="<?= '/img/marvel-superheroes-reimagined-as-cats-in-fun-fan-art-series-social.jpg'?>" alt=""> <?php */
   }
   if($food != $this->like_food){
    echo "<br>";   
    echo "фу... не любимая еда. доел и пошел спать";
   }
  }
 
}


    


$HungryCat = new HungryCat('devil','red and black', 'human flesh');
$HungryCat1 = new HungryCat('pow','white', 'fish');




if(isset($_POST['send'])){
  $foo = $_POST['food'];
}

?>

<div>
  <p>ваш питомец <?= $HungryCat->animal?> </p>
  <p>имя <?= $HungryCat->name ?> </p>
  <p>покорми его любимым блюдом</p>
  <form action="" method="post">
    <select name="food">
      <option value="human flesh">human flesh</option>
      <option value="fish">fish</option>
    </select>
    <br>
    <button type="submit" value="отправить" name="send">покорми меня</button>
  </form>
</div>

<?php
if(isset($foo)){
echo $HungryCat->eat($foo);
}

