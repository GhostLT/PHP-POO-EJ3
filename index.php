<?php 

//nombre de la Clase
class Automovil{

	//propiedades o stributos color,velocidad,motor
	//private solo puedo utilizar el atributo dentro de la clase
	protected $color;
	protected $velocidad;
	protected $motor;
	protected $prueba;
	//metodos arrancan,frenan
	//con parametros
	public function Arrancar($a,$b){
		//la velocidad que asigne en la variable va a ser igual a a ojo no lleva signo de pesos
		//solo se pueden asignar con this cuando yo este dentro de la clase
		$this->velocidad = $a;
		$this->motor = $b;
		//ojo en vez de poner return puedes poner comas
		echo "Arranca a la velocidad de" , $this->velocidad , "Ya que su motor es de " , $this->motor;
	}

	public function DeterminarColor($color){
		$this->color = $color;
		echo "y tiene un color de", $this->color;
	}

	public function Frenar(){
		return "Ha frenado";
	}

	public function Mimetodo($parametro){
	$this->prueba = $parametro;
	}

}

//creamos la clase moto y heredamos Moto es Hija de Automovil
class Moto extends Automovil{

	//atributo
	private $ruedas;

//	public function Ruedas($parametro){
//		$this->ruedas = $parametro;
//		return $this->ruedas;
//	}

//vamos a crear un constructor, los parametros los puedo pasar por aqui
public function __construct($ruedas_cantidad,$velocidad,$cilindros,$color){
	$this->ruedas = $ruedas_cantidad;
	$this->velocidad = $velocidad;
	$this->motor = $cilindros;
	$this->color = $color;
}

public function Color(){
	return $this->color;
}

public function Todo(){
	//esta es la nueva velocidad,tipode motor y cantidad de ruedas
	echo $this->velocidad,this->motor,this->ruedas;
}

}

echo "<h1>FERRARI</h1>";
//para llamar una clase se llama al objeto ojo cuando lo voy a llamaragrego parentesis
$ferrari = new Automovil();   //crear una instancia
//pasamos parametros
$ferrari-> Arrancar('200km/h','12 cilindros');
//asignamos valores
$ferrari->DeterminarColor('rojo');
//llamamos al metodo
$ferrari->Frenar();
echo '<br/>'; 
//aqui le asigno un valor a la propiedad prueba directamente porque esta en forma publica
$ferrari->prueba='algo';
//ahora creamos un metodo que se llame Mimetodo y lo llamamos
$ferrari->Mimetodo('hola soy javi');
//lo imprimimos para que muestre el valor
echo $ferrari->prueba;

echo '<h1>Moto</h1>';
$moto = new Moto(2,'160km/h','6 cilindros','azul');
//echo "La moto tiene ", $moto->Ruedas(2), "ruedas";
//reutilizamos los metodos del padre
echo $moto->Color();
%moto->Todo();
$moto->Arrancar('160 km/h','6 cilindros');
$moto->DeterminarColor('Azul');
$moto->Frenar();

 ?>