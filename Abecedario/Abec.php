<?php
require ("Letras.php");

class Abecedario
{
    public function a()
    {
        echo "Letra A";
    }
    public function b()
    {
        echo "Letra B";
    }
}
function Abecedario(Abecedario $_abecedario)
{
    $_abecedario->a();
}

$abecedario = new Letras("Ariel, B, C, D");

?>

<?php
if (isset($_POST['a']))
{
    ?> <script>
        var msg = new SpeechSynthesisUtterance("<?php Abecedario($abecedario) ?>")
        window.speechSynthesis.speak(msg);
    </script> 
    <?php   
}