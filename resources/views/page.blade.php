@extends('layouts.app')

@section('content')
<div class="container">

	<div class="text-center">
		<h1><b>Tipos de Redes </b></h1>
		<br>
	</div>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width: 100%;height: 450px;" class="" alt="Responsive image"  class="d-block w-100" src="https://www.caracteristicas.co/wp-content/uploads/2018/10/redes-de-computadoras-2-e1582281855505.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img style="width: 100%;height: 450px;" class="d-block w-100" src="https://www.avantel.co/blog/wp-content/uploads/2019/07/24.Por-qu%C3%A9-son-importantes-las-redes-inform%C3%A1ticas.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="width: 100%;height: 450px;" class="d-block w-100" src="https://www.codetia.com/wp-content/uploads/2016/08/red-informatica-cables1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>
<div class="container  mt-3">

	<div style="margin-left: 10%;">


		<div class="row">
			<div class="col-md-3 col-sm-6 mt-2 ">
				<button
				class="btn btn-success btn-lg" onclick="myFunction()">
				 <b>
				 Redes LAN</b>
				  </button>
			
			   
			</div>
			<div class="col-md-3 col-sm-12 mt-2">
				
			   <button onclick="myFunction2()"  class="btn btn-success btn-lg"><b>Redes MAN</b> </button>
			   
			</div>
			<div class="col-md-3 col-sm-6 mt-2">
				<button onclick="myFunction3()"class="btn btn-success btn-lg" ><b>Redes WAN</b> </button>
				
			</div>
			<div class="col-md-3 col-sm-6 mt-2">
				
				<button onclick="myFunction4()" class="btn btn-success btn-lg" ><b>Redes PAN </b> </button>
			
			</div>
				
		</div>
	
	</div>
</div>
	</div>
</div>
<div class="container mt-3">
	<div class="card">
		<div class="mt-3 mr-4 ml-4 mb-3">
			 <div class="container text-center" id="tema1">
			 	<h3>Redes LAN. Siglas de Local Area Network (en inglés: “Red de Área Local”), </h3>
			 	<img  src="https://userscontent2.emaze.com/images/9d49f475-f434-4b80-9bd8-1dbe389f2c43/d6df5cb69d32d686eb88faa20d35b6fa.jpg" class="img-fluid" alt="Responsive image">
			 	<p><b><h4>¿Qué es una red LAN?</b></h4>
			 		<br>
Es posible utilizar este tipo de red en múltiples instituciones para que se realicen sus tareas. Se comenzó introduciendo esta tecnología en redes militares, hasta llegar a escuelas y hospitales.

La red LAN (Local Area Network) es una red que conecta uno o más ordenadores dentro de un ámbito pequeño y limitado. Se puede encontrar a través de cable Ethernet, lo que significa que todos los dispositivos se interconectan mediante un router. Si se hace a través de ondas de radio hablamos de WLAN, lo que nos permite eliminar todo el problema de los cables.</p>
<br>
<img src="https://netcloudengineering.com/wp-content/uploads/2018/02/redes-lan-que-son.jpg.webp" class="img-fluid" alt="Responsive image">
<p>
	<b>
		<h4>Resumen de la historia
</h4>
	</b>
	<br>Inicialmente se partió de la idea de que había que compartir los resultados de los estudios que se realizaban en diferentes universidades y laboratorios. Esto se podía hacer simplemente, si encontraban la manera de conectar los dispositivos que se utilizaban para trabajar. Estos pensamientos fueron los precursores de las redes Ethernet y luego las LAN e Internet.
</p>
<iframe class="img-fluid" alt="Responsive image"  src="https://www.youtube.com/embed/jV6TGWK-J8o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 </div>
			 <div class="container text-center" id="tema2">
			 	<h3><b>Red MAN</b></h3>
			 	<br>
			 	<img src="https://i.pinimg.com/originals/28/a3/ce/28a3ce3af91ce5437fc4e760f0b5bdcd.png" class="img-fluid" alt="Responsive image">
			 	<p>El término MAN proviene de “Metropolitan Area Network” o en español, red de área metropolitana. Este tipo de red es el paso intermedio entre una red LAN y una red WAN, ya que la extensión de este tipo de redes comprende el territorio de una gran ciudad. Las redes MAN son redes de alta velocidad capaces de dar cobertura a una geografía relativamente extensa, aunque nunca superando las dimensiones de una ciudad.

Las topologías que se emplean en este tipo de redes son generalmente malladas con algunos elementos configurados en forma de redes troncales, que normalmente derivan en subredes más pequeñas. En ella se emplean fundamentalmente conexiones mediante cables de par trenzado y cada vez más mediante fibra óptica.

Una red MAN puede llegar a tener velocidades de hasta 10 Gb/s (Gigabit por segundo) con el uso de fibra óptica.</p>
			 	<img src="https://www.proydesa.org/portal/images/img-pyd/home-slides/2.jpg" aclass="img-fluid" alt="Responsive image">
			 	<br>
			 	<p class="text-left">
			 		<h3><b>Razones para la instalación de una MAN</b></h3>
Las razones por las cuales se hace necesaria la instalación de una red de área metropolitana a nivel corporativo o el acceso a una red pública de las mismas características se resumen a continuación:
<br>
<H3 class="text-left"><B>Ancho de banda</B></H3>
El elevado ancho de banda requerido por grandes ordenadores y aplicaciones compartidas en red es la principal razón para usar redes de área metropolitana en lugar de redes de área local.
<br>
<H3 class="text-left"><B>Nodos de red</B></H3>
Las redes de área metropolitana permiten superar los 500 nodos de acceso a la red, por lo que se hace muy eficaz para entornos públicos y privados con un gran número de puestos de trabajo.
<br>
<H3 class="text-left"><B>Extensión de red</B></H3>
Las redes de área metropolitana permiten alcanzar un diámetro entorno a los 50 kms, dependiendo el alcance entre nodos de red del tipo de cable utilizado, así como de la tecnología empleada. Este diámetro se considera suficiente para abarcar un área metropolitana.
<br>
<H3 class="text-left"><B>Distancia entre nodos</B></H3>
Las redes de área metropolitana permiten distancias entre nodos de acceso de varios kilómetros, dependiendo del tipo de cable. Estas distancias se consideran suficientes para conectar diferentes edificios en un área metropolitana o campus privado.
<br>
<H3 class="text-left"><B>Tráfico en tiempo real</B></H3>
Las redes de área metropolitana garantizan unos tiempos de acceso a la red mínimos, lo cual permite la inclusión de servicios síncronos necesarios para aplicaciones en tiempo real, donde es importante que ciertos mensajes atraviesen la red sin retraso incluso cuando la carga de red es elevada.
<H3 class="text-left"><B>
Integración voz/datos/vídeo</B></H3>
Adicionalmente a los tiempos mínimos de acceso, los servicios síncronos requieren una reserva de ancho de banda; tal es el caso del tráfico de voz y vídeo. Por este motivo las redes de área metropolitana son redes óptimas para entornos de tráfico multimedia, si bien no todas las redes metropolitanas soportan tráficos isócronos (transmisión de información a intervalos constantes).
<br>
<H3 class="text-left"><B>Alta disponibilidad</B></H3>
Disponibilidad referida al porcentaje de tiempo en el cual la red trabaja sin fallos. Las redes de área metropolitana tienen mecanismos automáticos de recuperación frente a fallos, lo cual permite a la red recuperar la operación normal después de uno. Cualquier fallo en un nodo de acceso o cable es detectado rápidamente y aislado. Las redes MAN son apropiadas para entornos como control de tráfico aéreo, aprovisionamiento de almacenes, bancos y otras aplicaciones comerciales donde la indisponibilidad de la red tiene graves consecuencias.
<br>
<H3 class="text-left"><B>Alta fiabilidad</B></H3>
Fiabilidad referida a la tasa de error de la red mientras se encuentra en operación. Se entiende por tasa de error el número de bits erróneos que se transmiten por la red. En general la tasa de error para fibra óptica es menor que la del cable de cobre a igualdad de longitud. La tasa de error no detectada por los mecanismos de detección de errores es del orden de 10-20. Esta característica permite a la redes de área metropolitana trabajar en entornos donde los errores pueden resultar desastrosos como es el caso del control de tráfico aéreo.
<br>
<H3 class="text-left"><B>Alta seguridad</B></H3>
La fibra óptica ofrece un medio seguro porque no es posible leer o cambiar la señal óptica sin interrumpir físicamente el enlace. La rotura de un cable y la inserción de mecanismos ajenos a la red implican una caída del enlace de forma temporal.
<br>
<H3 class="text-left"><B>Inmunidad al ruido</B></H3>
En lugares críticos donde la red sufre interferencias electromagnéticas considerables la fibra óptica ofrece un medio de comunicación libre de ruidos.
			 	</p>
			 	<iframe width="100%" height="480" src="https://www.youtube.com/embed/15YC0D4eHPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 </div>
			 <div class="container text-center" id="tema3">
			 	<h3>Redes Wan</h3>
			 	<img src="https://pc-solucion.es/wp-content/uploads/2018/03/red-WAN.jpg" class="img-fluid" alt="Responsive image">
			 	<p>Una red WAN se define como una red con una cobertura sin un límite predefinido como es el caso de la red MAN. Es por esto que, tanto las topologías, como infraestructuras, no pueden ser estrictamente definidas, ya que estas redes se apoyan en los medios que proporcionan los operadores de telecomunicaciones en los diferentes países. Cuando es necesario interconectar varios países será necesario establecer una comunicación directa entre distintos medios, lo que hace de esta red una extensión a nivel mundial.

Como es normal, en este tipo de redes las tecnologías que se utilizan pueden ser prácticamente cualquiera de las existentes en el ámbito de cada país. Aunque para conseguir el mejor rendimiento posible, se utiliza el método de conmutación de paquetes, ya que de esta forma el enrutamiento de la información se puede adaptar por cualquier tipo de estándar por el que pase.

Internet es una Red WAN que proporciona cobertura a nivel mundial utilizando el protocolo IP. Otro claro ejemplo de red WAN es la RDSI, la cual se utiliza para comunicación por voz y datos.</p>
<br>
<iframe width="100%" height="480" src="https://www.youtube.com/embed/lIGwonDgCng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 </div>
			 <div class="container text-center" id="tema4">
			 	<h3><b>Red de área personal (Pan)</b></h3>
			 	<img src="https://intelectouniversal.com/wp-content/uploads/2020/07/red-pan-4-768x576.jpg" class="img-fluid" alt="Responsive image">
			 	<br>
			 	<p>Cuando se habla de las Redes PAN, estas se refieren a las redes inalámbricas que no logran tener un alcance tan amplio, por lo que su señal solo puede llegar a dispositivos que se encuentren en un perímetro pequeño. De hecho la señal es tan pequeña que puede asemejarse al alcance que tiene la tecnología Bluetooth, pero en el caso de los diferentes tipos de redes PAN la transferencia de los datos se hace velozmente y permite el acceso a Internet.

Las redes pan son las que tienen las características más básicas de todos los tipos de redes, de hecho son los tipos de redes ideales para las casa de los usuarios. Estas redes pueden encontrarse mayormente en espacios pequeños como los hogares, los negocios y las oficinas, siempre que tengan un solo piso.


 
Pero, a pesar de tener poco alcance, los usuarios pueden ampliar el espacio en donde llega su señal con el uso de router que presenten un alcance mayor y ayuda a que el perímetro sea mucho más amplio.</p>
<img src="https://www.tiposde.com/wp-content/uploads/Ventajas-y-desventajas-de-la-red-PAN-2.jpg" class="img-fluid" alt="Responsive image">
<p>Las diferentes demandas del servicio y los panoramas de uso hacen que PAN acumule distintos acercamientos hacia las funciones y capacidades que pueda tener. Algunos dispositivos, como un simple sensor personal, pueden ser muy baratos, y tener a su vez funciones limitadas. Otros pueden incorporar funciones avanzadas, tanto computacionales como de red, lo cual los harán más costosos. Deben preverse los siguientes puntos como importantes para su fácil escalabilidad:

Funcionalidad y Complejidad
Precio
Consumo de energía
Tarifas para los datos
Garantía
Soporte para las interfaces
Los dispositivos más capaces pueden incorporar funciones multimodo que permiten el acceso a múltiples redes.

Algunos de estos dispositivos pueden estar adheridos o usados como vestimenta para la persona (ejemplo, sensores); otros podrían ser fijos o establecidos temporalmente con el espacio personal (ejemplo, sensores, impresoras, y PDAs)


La distancia a la que funciona es 10 metros mínimo</p>
			 </div>
			 
		</div>
	</div>
</div>





@endsection