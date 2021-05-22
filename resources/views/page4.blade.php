@extends('layouts.app')

@section('content')
<div class="container">

	<div class="text-center">
		<h1><b>¿Qué es TCP/IP y cómo funciona?</b></h1>
		<br>
		<img style="width: 60%;height: 230px;" src="https://www.profesionalreview.com/wp-content/uploads/2020/02/protocolo-TCP-IP-04.png" class="img-fluid" alt="Responsive image">
	</div>
	<div class="text-left">
		Como sucede con las personas, es importante que los equipos tengan un modo común de comunicarse entre ellos. Para la mayoría de los equipos actuales, este modo es TCP/IP. TCP/IP suele venir integrado en los equipos y está automatizado en buena medida, aunque puede ser útil comprender el modelo TCP/IP, en especial si va a configurar un equipo para conectarlo a otro sistema. Este artículo explica cómo funciona TCP/IP.
<br>




	</div>
	
</div>

<div class="container">
	<div class="text-center">
		<h3><b>
			¿Qué significa TCP/IP?
x
		</b></h3>
	</div>
	<div class="text-left">
		<p>
			¿Qué significa TCP/IP?
TCP/IP son las siglas de Transmission Control Protocol/Internet Protocol (Protocolo de control de transmisión/Protocolo de Internet). TCP/IP es un conjunto de reglas estandarizadas que permiten a los equipos comunicarse en una red como Internet.




		</p>
	</div>
</div>
<br>
<div class="container">
	<div>
		<div class="text-center">
		<h3><b>¿En qué se diferencian TCP e IP?
</b></h3>
	</div>
	<div class="text-left">
		<p>
			TCP e IP son dos protocolos distintos para redes informáticas.
<br>
IP es la parte que obtiene la dirección a la que se envían los datos. TCP se encarga de la entrega de los datos una vez hallada dicha dirección IP.
<br>
Es posible separarlos, pero lo cierto es que no tiene mucho sentido diferenciar entre TCP e IP. Como se usan juntos tan habitualmente, “TCP/IP” y “modelo TCP/IP” son ya terminología reconocida.
<br>
Mírelo de esta forma: La dirección IP es como el número de teléfono que se asigna a su smartphone. TCP es toda la tecnología que hace que el teléfono emita un timbre al recibir una llamada y que le permite hablar con alguien al otro lado de la línea. Son cosas diferentes, pero tampoco tienen sentido la una sin la otra.
		</p>
	</div>
	</div>
	<div> <div class="text-center">
		<h3><b>¿ cómo funciona?
</b></h3>
	</div>
<div class="text-left">
	<p>
		TCP/IP fue desarrollado por el Departamento de Defensa de EE. UU. para especificar el modo en que los equipos transfieren datos de un dispositivo a otro. TCP/IP incide mucho en la precisión y dispone de varios pasos para garantizar la correcta transmisión de los datos entre ambos equipos.
<br>
Este es uno de los mecanismos que emplea para ello. Si el sistema enviara un mensaje entero en una pieza y se encontrara cualquier problema, sería necesario enviar de nuevo el mensaje completo. Lo que hace TCP/IP es descomponer cada mensaje en paquetes que se vuelven a ensamblar en el otro extremo. De hecho, cada paquete podría tomar una ruta distinta hasta el equipo de destino si la ruta deja de estar disponible o está muy congestionada.
<br>
Además, TCP/IP divide las distintas tareas de comunicación en capas. Cada capa tiene una función distinta. Los datos pasan por cuatro capas independientes antes de recibirse en el otro extremo (como se explica en la sección siguiente). A continuación, TCP/IP recorre estas capas en orden inverso para reensamblar los datos y presentárselos al destinatario.
<br>
El propósito de las capas es crear un sistema estandarizado, sin que los distintos fabricantes de hardware y software tengan que gestionar la comunicación por su cuenta. Es como conducir un coche: todos los fabricantes convienen en la posición de los pedales, así que no tenemos que tener eso en cuenta al cambiar de coche. También significa que es posible actualizar determinadas capas, por ejemplo, para mejorar el rendimiento o la seguridad, sin tener que actualizar todo el sistema.
	</p>
</div></div>
</div>

<div class="container">
	<div class="ml-5">
		<img  class="ml-5"style="width: 40%;height: 200px;" src="https://redesinalambricasycableadas.files.wordpress.com/2014/10/111.png?w=302&h=244" class="img-fluid" alt="Responsive image">
	</div>
	<br>
	<div class="text-center">
		<h3><b>
		Las cuatro capas del modelo TCP/IP
	</b></h3>
	</div>
	<div class="text-left">
		<p>
			TCP/IP es un protocolo de enlace de datos que se utiliza en Internet. Su modelo se divide en cuatro capas diferenciadas. Cuando se emplean juntas, es posible referirse a ellas como un paquete de protocolos.
<br>
<label for=""><b> 1- Capa de enlace de datos</b></label>
La capa de enlace de datos (también denominada capa de enlace, capa de interfaz de red o capa física) es la que maneja las partes físicas del envío y recepción de datos mediante el cable Ethernet, la red inalámbrica, la tarjeta de interfaz de red, el controlador del dispositivo en el equipo, etcétera.
<br>
<label for=""><b>2-Capa de Internet </b></label>
La capa de Internet (también denominada capa de red) controla el movimiento de los paquetes alrededor de la red.
<br>
<label for=""><b>3-Capa de transporte </b></label>
La capa de transporte es la que proporciona una conexión de datos fiable entre dos dispositivos. Divide los datos en paquetes, hace acuse de recibo de los paquetes que recibe del otro dispositivo y se asegura de que el otro dispositivo haga acuse de recibo de los paquetes que recibe a su vez.
<br>
<label for=""><b>
4-Capa de aplicaciones </b></label>
La capa de aplicaciones es el grupo de aplicaciones que requiere comunicación de red. Es con lo que el usuario suele interactuar, como el correo electrónico y la mensajería. Como la capa inferior gestiona los detalles de la comunicación, las aplicaciones no tienen que preocuparse por ello.
		</p>
	</div>
	<br>
	<iframe width="100%" height="480" src="https://www.youtube.com/embed/1pB2kan_AFk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>





@endsection