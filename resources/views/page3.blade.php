@extends('layouts.app')

@section('content')
<div class="container">

	<div class="text-center">
		<h1><b>Modelo OSI</b></h1>
		<br>
	</div>
	<div class="text-left">
		El Modelo OSI (de las siglas en inglés: Open Systems Interconnection, o sea, “Interconexión de Sistemas Abiertos”), es un modelo de referencia para los protocolos de comunicación de las redes informáticas o redes de computadores. Fue creado en la década de 1980 por la Organización Internacional de Normalización (ISO).
<br>
El Modelo OSI se publicó inicialmente por la Unión Internacional de Telecomunicaciones (UIT) hasta 1983, y desde 1984 también lo ofrece la propia ISO, con estándar. Su función fue estandarizar o serializar las comunicaciones en Internet, dado que en sus inicios ésta era sumamente caótica.
<br>
Al ser un modelo normativo, el Modelo OSI es realmente un constructo teórico, sin correlato directo en el mundo de lo tangible. No es más que un intento de normar las diversas y variadas voces tecnológicas del mundo, dado que existen numerosos fabricantes, compañías y tecnologías en el mundo de las telecomunicaciones.
<br>
Este modelo se ha refinado con el tiempo y hoy ofrece siete capas distintas con las que definir las distintas fases que atraviesa la información en su viaje de un dispositivo electrónico a otro conectado en la red. No importa la ubicación geográfica del usuario ni el tipo de tecnología que utilice, todos los medios de interconexión global, como Internet, emplean este tipo de protocolos unificados




	</div>
	<div class="mt-3 mb-3 ml-3 mr-3	">
		<img src="https://image.slidesharecdn.com/modeloosiclase2-100421160008-phpapp02/95/modelo-osi-1-728.jpg?cb=1271865636" class="img-fluid" alt="Responsive image">
	</div>
</div>


<div class="container">
	<div class="text-center">
		<h3><b>
			¿Cómo funciona el modelo OSI?
		</b></h3>
	</div>
	<div class="text-left">
		<p>
			El funcionamiento del Modelo OSI depende directamente de sus siete capas, en las que descompone el complicado proceso de la comunicación digital. Al compartimentarlo, asigna a cada capa funciones muy específicas, dentro de una estructura jerárquica fija.
<br>
Así, cada protocolo de comunicación emplea estas capas en su totalidad o sólo algunas de ellas, pero al obedecer este conjunto de reglas, garantiza que la comunicación entre las redes sea eficaz y sobre todo que se de en los mismos términos.



		</p>
	</div>
</div>
<br>
<div class="container">
	<div class="text-center">
		<h3><b>
			¿Para qué sirve el modelo OSI?
		</b></h3>
	</div>
	<div class="text-left">
		<p>
			
El Modelo OSI es fundamentalmente una herramienta conceptual, de organización de las telecomunicaciones. Universaliza la manera en que la información es compartida entre redes informáticas o sistemas computarizados, independientemente de su origen geográfico, empresarial u otras condiciones que podrían dificultar la comunicación de los datos.
<br>
El Modelo OSI no es una topología de red, ni un modelo de red en sí mismo, ni una especificación de protocolos; simplemente es una herramienta que define la funcionalidad de los protocolos, para conseguir un estándar de comunicación, o sea, lograr que todos los sistemas hablen el mismo idioma. Sin él, una red tan vasta y variopinta como Internet sería prácticamente imposible.






		</p>
	</div>
</div>
<div class="text-center	">
	<h3>Capas del modelo OSI</h3>
</div>
<div class="row">
	<div class="col-md-6 col-sm-12">
		<div class="container">
			<div class="d-grid gap-2 col-3 mx-auto">
				<button  onclick="myFunction1()" class="btn btn-success" type="button">Capa de aplicación</button>
				
			  </div>
			<div class="d-grid gap-2 col-4 mx-auto">
				<button onclick="myFunction2()" class="btn btn-warning" type="button">Capa de presentación</button>
				
			  </div>
			<div class="d-grid gap-2 col-5 mx-auto">
				<button onclick="myFunction3()" class="btn btn-info" type="button">Capa de sesión</button>
				
			  </div>
			<div class="d-grid gap-2 col-6 mx-auto">
				<button onclick="myFunction4()" class="btn btn-danger" type="button">Capa de transporte.</button>
				
			  </div>
			  <div class="d-grid gap-3 col-7 mx-auto">
				<button onclick="myFunction5()" class="btn btn-dark" type="button">Capa de red</button>
				
			  </div>
			  <div class="d-grid gap-2 col-8 mx-auto">
				<button onclick="myFunction6()" class="btn btn-primary" type="button">Capa de enlace de datos</button>
				
			  </div>
			  <div class="d-grid gap-2 col-9 mx-auto">
				<button onclick="myFunction7()" class="btn btn-secondary" type="button">Capa física</button>
				
			  </div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12 mt-2">
		<div class="card">
			<div class="" id="tema1">
				<p><b>Capa de aplicación.</b>
					 Dado que continuamente se desarrollan nuevos protocolos
					  de comunicación, a medida que surgen nuevas aplicaciones,
					   esta última capa define los protocolos que emplean las 
					   aplicaciones para el intercambio de datos y les permite
					    acceder a los servicios de cualquiera de las demás capas.
						Generalmente, todo este proceso es invisible para el 
						usuario, quien rara vez interactúa con el nivel aplicación,
						 sino con programas que interactúan con el nivel aplicación,
						 haciéndoselo menos complejo de lo que realmente es.

					</p>
			</div>
			<div class="" id="tema2">
				<p>
					<b>Capa de presentación.</b> Esta capa se ocupa de la representación de la información, o sea, de su traducción, garantizando que los datos recibidos en cualquier extremo de la red sean del todo reconocibles, sin importar el tipo de sistema empleado. Es la primera capa que se ocupa del contenido de la transmisión, en vez del modo en que ésta se establece y se sostiene. Además, permite el cifrado y la codificación de los datos, así como su compresión, su adecuación a la máquina que los recibe (una computadora, una tableta, un celular, etc.).

						
				</p>
			</div>
			<div class="" id="tema3">
				<p>  <b> Capa de sesión.</b>  Se encarga de controlar y mantener el vínculo entre las computadoras que intercambian datos, asegurándose de que, una vez establecida la comunicación entre ambos sistemas, el canal de transmisión de datos pueda retomarse en caso de interrumpirse. Estos servicios pueden llegar a ser prescindibles parcial o totalmente, dependiendo del caso.

					</p>
			</div>
			<div class="" id="tema4">
				<p><b>Capa de transporte.</b> Aquí es donde se realiza el transporte de los datos que se hallan dentro de cada paquete, de la computadora de origen a la de destino, independientemente del medio físico que se emplee para ello. Su trabajo se da mediante puertos lógicos y da forma a los llamados Sockets IP: Puerto.

					</p>
			</div>
			<div class="" id="tema5">
<p>
	 <b>Capa de red. </b>  Es la capa que se encarga de la identificación del enrutamiento existente entre las redes involucradas, así, las unidades de datos pasan a denominarse “paquetes” y pueden clasificarse conforme al protocolo de enrutamiento o protocolo enrutable que utilizan. Los primeros seleccionan las rutas (RIP, IGRP, EIGRP, entre otras) y los segundos viajan con los paquetes (IP, IPX, APPLETALK, etc.). El objetivo de esta capa es garantizar que los datos lleguen a su destino, incluso si ello implica utilizar dispositivos intermedios, como encaminadores o enrutadores.

	 
	 </p>
			</div>
			<div class="" id="tema6">
					<p>  <b>Capa de enlace de datos.</b> Se ocupa del redireccionamiento físico, detección de errores, acceso al medio y control del flujo durante la comunicación, siendo parte de la creación de protocolos básicos para regular la conexión entre los sistemas informáticos.

						
						</p>
			</div>
			<div class="" id="tema7">
<p> <b>Capa física. </b> La capa más baja del modelo, se encarga de la topología de red y las conexiones globales entre la computadora y la red, refiriéndose tanto al medio físico como a la manera en que la información se transmite. Cumple con las funciones de especificar la información sobre el medio físico (tipos de cable, microondas, etc.), definir la información sobre la tensión eléctrica de la transmisión, las características funcionales de la interfaz de red y garantizar la existencia de una conexión (aunque no la fiabilidad de la misma).
</p>
			</div>
		</div>
	</div>
</div>
<br>
<div class="container">
	<iframe width="100%" height="480" max-height="340px" min-height=" 100px" src="https://www.youtube.com/embed/WeP7zbuj36Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>







@endsection