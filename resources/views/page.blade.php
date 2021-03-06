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
			 	<h3>Redes LAN. Siglas de Local Area Network (en ingl??s: ???Red de ??rea Local???), </h3>
			 	<img  src="https://userscontent2.emaze.com/images/9d49f475-f434-4b80-9bd8-1dbe389f2c43/d6df5cb69d32d686eb88faa20d35b6fa.jpg" class="img-fluid" alt="Responsive image">
			 	<p><b><h4>??Qu?? es una red LAN?</b></h4>
			 		<br>
Es posible utilizar este tipo de red en m??ltiples instituciones para que se realicen sus tareas. Se comenz?? introduciendo esta tecnolog??a en redes militares, hasta llegar a escuelas y hospitales.

La red LAN (Local Area Network) es una red que conecta uno o m??s ordenadores dentro de un ??mbito peque??o y limitado. Se puede encontrar a trav??s de cable Ethernet, lo que significa que todos los dispositivos se interconectan mediante un router. Si se hace a trav??s de ondas de radio hablamos de WLAN, lo que nos permite eliminar todo el problema de los cables.</p>
<br>
<img src="https://netcloudengineering.com/wp-content/uploads/2018/02/redes-lan-que-son.jpg.webp" class="img-fluid" alt="Responsive image">
<p>
	<b>
		<h4>Resumen de la historia
</h4>
	</b>
	<br>Inicialmente se parti?? de la idea de que hab??a que compartir los resultados de los estudios que se realizaban en diferentes universidades y laboratorios. Esto se pod??a hacer simplemente, si encontraban la manera de conectar los dispositivos que se utilizaban para trabajar. Estos pensamientos fueron los precursores de las redes Ethernet y luego las LAN e Internet.
</p>
<iframe class="img-fluid" alt="Responsive image"  src="https://www.youtube.com/embed/jV6TGWK-J8o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 </div>
			 <div class="container text-center" id="tema2">
			 	<h3><b>Red MAN</b></h3>
			 	<br>
			 	<img src="https://i.pinimg.com/originals/28/a3/ce/28a3ce3af91ce5437fc4e760f0b5bdcd.png" class="img-fluid" alt="Responsive image">
			 	<p>El t??rmino MAN proviene de ???Metropolitan Area Network??? o en espa??ol, red de ??rea metropolitana. Este tipo de red es el paso intermedio entre una red LAN y una red WAN, ya que la extensi??n de este tipo de redes comprende el territorio de una gran ciudad. Las redes MAN son redes de alta velocidad capaces de dar cobertura a una geograf??a relativamente extensa, aunque nunca superando las dimensiones de una ciudad.

Las topolog??as que se emplean en este tipo de redes son generalmente malladas con algunos elementos configurados en forma de redes troncales, que normalmente derivan en subredes m??s peque??as. En ella se emplean fundamentalmente conexiones mediante cables de par trenzado y cada vez m??s mediante fibra ??ptica.

Una red MAN puede llegar a tener velocidades de hasta 10 Gb/s (Gigabit por segundo) con el uso de fibra ??ptica.</p>
			 	<img src="https://www.proydesa.org/portal/images/img-pyd/home-slides/2.jpg" aclass="img-fluid" alt="Responsive image">
			 	<br>
			 	<p class="text-left">
			 		<h3><b>Razones para la instalaci??n de una MAN</b></h3>
Las razones por las cuales se hace necesaria la instalaci??n de una red de ??rea metropolitana a nivel corporativo o el acceso a una red p??blica de las mismas caracter??sticas se resumen a continuaci??n:
<br>
<H3 class="text-left"><B>Ancho de banda</B></H3>
El elevado ancho de banda requerido por grandes ordenadores y aplicaciones compartidas en red es la principal raz??n para usar redes de ??rea metropolitana en lugar de redes de ??rea local.
<br>
<H3 class="text-left"><B>Nodos de red</B></H3>
Las redes de ??rea metropolitana permiten superar los 500 nodos de acceso a la red, por lo que se hace muy eficaz para entornos p??blicos y privados con un gran n??mero de puestos de trabajo.
<br>
<H3 class="text-left"><B>Extensi??n de red</B></H3>
Las redes de ??rea metropolitana permiten alcanzar un di??metro entorno a los 50 kms, dependiendo el alcance entre nodos de red del tipo de cable utilizado, as?? como de la tecnolog??a empleada. Este di??metro se considera suficiente para abarcar un ??rea metropolitana.
<br>
<H3 class="text-left"><B>Distancia entre nodos</B></H3>
Las redes de ??rea metropolitana permiten distancias entre nodos de acceso de varios kil??metros, dependiendo del tipo de cable. Estas distancias se consideran suficientes para conectar diferentes edificios en un ??rea metropolitana o campus privado.
<br>
<H3 class="text-left"><B>Tr??fico en tiempo real</B></H3>
Las redes de ??rea metropolitana garantizan unos tiempos de acceso a la red m??nimos, lo cual permite la inclusi??n de servicios s??ncronos necesarios para aplicaciones en tiempo real, donde es importante que ciertos mensajes atraviesen la red sin retraso incluso cuando la carga de red es elevada.
<H3 class="text-left"><B>
Integraci??n voz/datos/v??deo</B></H3>
Adicionalmente a los tiempos m??nimos de acceso, los servicios s??ncronos requieren una reserva de ancho de banda; tal es el caso del tr??fico de voz y v??deo. Por este motivo las redes de ??rea metropolitana son redes ??ptimas para entornos de tr??fico multimedia, si bien no todas las redes metropolitanas soportan tr??ficos is??cronos (transmisi??n de informaci??n a intervalos constantes).
<br>
<H3 class="text-left"><B>Alta disponibilidad</B></H3>
Disponibilidad referida al porcentaje de tiempo en el cual la red trabaja sin fallos. Las redes de ??rea metropolitana tienen mecanismos autom??ticos de recuperaci??n frente a fallos, lo cual permite a la red recuperar la operaci??n normal despu??s de uno. Cualquier fallo en un nodo de acceso o cable es detectado r??pidamente y aislado. Las redes MAN son apropiadas para entornos como control de tr??fico a??reo, aprovisionamiento de almacenes, bancos y otras aplicaciones comerciales donde la indisponibilidad de la red tiene graves consecuencias.
<br>
<H3 class="text-left"><B>Alta fiabilidad</B></H3>
Fiabilidad referida a la tasa de error de la red mientras se encuentra en operaci??n. Se entiende por tasa de error el n??mero de bits err??neos que se transmiten por la red. En general la tasa de error para fibra ??ptica es menor que la del cable de cobre a igualdad de longitud. La tasa de error no detectada por los mecanismos de detecci??n de errores es del orden de 10-20. Esta caracter??stica permite a la redes de ??rea metropolitana trabajar en entornos donde los errores pueden resultar desastrosos como es el caso del control de tr??fico a??reo.
<br>
<H3 class="text-left"><B>Alta seguridad</B></H3>
La fibra ??ptica ofrece un medio seguro porque no es posible leer o cambiar la se??al ??ptica sin interrumpir f??sicamente el enlace. La rotura de un cable y la inserci??n de mecanismos ajenos a la red implican una ca??da del enlace de forma temporal.
<br>
<H3 class="text-left"><B>Inmunidad al ruido</B></H3>
En lugares cr??ticos donde la red sufre interferencias electromagn??ticas considerables la fibra ??ptica ofrece un medio de comunicaci??n libre de ruidos.
			 	</p>
			 	<iframe width="100%" height="480" src="https://www.youtube.com/embed/15YC0D4eHPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 </div>
			 <div class="container text-center" id="tema3">
			 	<h3>Redes Wan</h3>
			 	<img src="https://pc-solucion.es/wp-content/uploads/2018/03/red-WAN.jpg" class="img-fluid" alt="Responsive image">
			 	<p>Una red WAN se define como una red con una cobertura sin un l??mite predefinido como es el caso de la red MAN. Es por esto que, tanto las topolog??as, como infraestructuras, no pueden ser estrictamente definidas, ya que estas redes se apoyan en los medios que proporcionan los operadores de telecomunicaciones en los diferentes pa??ses. Cuando es necesario interconectar varios pa??ses ser?? necesario establecer una comunicaci??n directa entre distintos medios, lo que hace de esta red una extensi??n a nivel mundial.

Como es normal, en este tipo de redes las tecnolog??as que se utilizan pueden ser pr??cticamente cualquiera de las existentes en el ??mbito de cada pa??s. Aunque para conseguir el mejor rendimiento posible, se utiliza el m??todo de conmutaci??n de paquetes, ya que de esta forma el enrutamiento de la informaci??n se puede adaptar por cualquier tipo de est??ndar por el que pase.

Internet es una Red WAN que proporciona cobertura a nivel mundial utilizando el protocolo IP. Otro claro ejemplo de red WAN es la RDSI, la cual se utiliza para comunicaci??n por voz y datos.</p>
<br>
<iframe width="100%" height="480" src="https://www.youtube.com/embed/lIGwonDgCng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 </div>
			 <div class="container text-center" id="tema4">
			 	<h3><b>Red de ??rea personal (Pan)</b></h3>
			 	<img src="https://intelectouniversal.com/wp-content/uploads/2020/07/red-pan-4-768x576.jpg" class="img-fluid" alt="Responsive image">
			 	<br>
			 	<p>Cuando se habla de las Redes PAN, estas se refieren a las redes inal??mbricas que no logran tener un alcance tan amplio, por lo que su se??al solo puede llegar a dispositivos que se encuentren en un per??metro peque??o. De hecho la se??al es tan peque??a que puede asemejarse al alcance que tiene la tecnolog??a Bluetooth, pero en el caso de los diferentes tipos de redes PAN la transferencia de los datos se hace velozmente y permite el acceso a Internet.

Las redes pan son las que tienen las caracter??sticas m??s b??sicas de todos los tipos de redes, de hecho son los tipos de redes ideales para las casa de los usuarios. Estas redes pueden encontrarse mayormente en espacios peque??os como los hogares, los negocios y las oficinas, siempre que tengan un solo piso.


 
Pero, a pesar de tener poco alcance, los usuarios pueden ampliar el espacio en donde llega su se??al con el uso de router que presenten un alcance mayor y ayuda a que el per??metro sea mucho m??s amplio.</p>
<img src="https://www.tiposde.com/wp-content/uploads/Ventajas-y-desventajas-de-la-red-PAN-2.jpg" class="img-fluid" alt="Responsive image">
<p>Las diferentes demandas del servicio y los panoramas de uso hacen que PAN acumule distintos acercamientos hacia las funciones y capacidades que pueda tener. Algunos dispositivos, como un simple sensor personal, pueden ser muy baratos, y tener a su vez funciones limitadas. Otros pueden incorporar funciones avanzadas, tanto computacionales como de red, lo cual los har??n m??s costosos. Deben preverse los siguientes puntos como importantes para su f??cil escalabilidad:

Funcionalidad y Complejidad
Precio
Consumo de energ??a
Tarifas para los datos
Garant??a
Soporte para las interfaces
Los dispositivos m??s capaces pueden incorporar funciones multimodo que permiten el acceso a m??ltiples redes.

Algunos de estos dispositivos pueden estar adheridos o usados como vestimenta para la persona (ejemplo, sensores); otros podr??an ser fijos o establecidos temporalmente con el espacio personal (ejemplo, sensores, impresoras, y PDAs)


La distancia a la que funciona es 10 metros m??nimo</p>
			 </div>
			 
		</div>
	</div>
</div>





@endsection