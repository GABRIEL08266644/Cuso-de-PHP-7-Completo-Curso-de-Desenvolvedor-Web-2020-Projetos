<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegifo = 'Protegido';
    private $privado = 'Privado';
    
    
    public function mostrarA() {
        echo "Class A) Público {$this->publico}";
        echo "Class A) Protegido {$this->publprotegifoico}";
        echo "Class A) Privado {$this->privado}";
    } 

    protected function vaiPorHeranca() {
        echo 'Vou por herança!<br>';
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!';
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar();
class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";

        parent::vaiPorHeranca();
    }
}
echo '<br>';

$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->vaiPorHeranca();
// $b->naoMostrar();
?>