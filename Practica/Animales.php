<?php

require("Gato.php");
require("Perro.php");
require("Vaca.php");
class Animal
{
    public function roar()
    {
        echo "El ";
    }
}
function RoarAnimal(Animal $_animal)
{
    $_animal->roar();
}

$gato = new Gato("Pelusa ");
$perro = new Perro("Kaizer ");
$vaca = new Vaca("Lola");
?>
<?php
if (isset($_POST['gato']))
{
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($gato) ?>")
        window.speechSynthesis.speak(msg);
    </script> 
    <?php   
}


if (isset($_POST['perro']))
{
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($perro) ?>")
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}

if (isset($_POST['vaca']))
{
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($vaca) ?>")
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
?>

