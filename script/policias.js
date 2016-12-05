var matrizImagenes1= new Array();

	matrizImagenes1[0]="imagenes/uno.jpg";

	matrizImagenes1[1]="imagenes/dos.jpg";

	matrizImagenes1[2]="imagenes/tres.jpg";

	matrizImagenes1[3]="imagenes/cuatro.jpg";
	var indice=0;

	function mas1()
	{
		indice +=1;
		if(indice>3){
			indice=0;

		}
		document.images["numero1"].src=matrizImagenes1[indice];
	}

	function menos1()
	{
		indice -=1;
		if(indice<0)
		{
			indice=3;

		}
		document.images["numero1"].src=matrizImagenes1[indice];
	}




	var matrizImagenes2= new Array();

	matrizImagenes2[0]="imagenes/cinco.jpg";

	matrizImagenes2[1]="imagenes/seis.jpg";


	var indice=0;

	function mas2()
	{
		indice +=1;
		if(indice>1){
			indice=0;

		}
		document.images["numero2"].src=matrizImagenes2[indice];
	}

	function menos2()
	{
		indice -=1;
		if(indice<0)
		{
			indice=1;

		}
		document.images["numero2"].src=matrizImagenes2[indice];
	}



	var matrizImagenes3= new Array();

	matrizImagenes3[0]="imagenes/1.jpg";

	matrizImagenes3[1]="imagenes/diez.jpg";

	matrizImagenes3[2]="imagenes/doce.jpg";

	matrizImagenes3[3]="imagenes/trece.jpg";
	matrizImagenes3[4]="imagenes/catorce.jpg";
	matrizImagenes3[5]="imagenes/quince.jpg";
	matrizImagenes3[6]="imagenes/once.jpg";
	matrizImagenes3[7]="imagenes/16.jpg";
	matrizImagenes3[8]="imagenes/17.jpg";
	matrizImagenes3[9]="imagenes/18.jpg";
	matrizImagenes3[10]="imagenes/19.jpg";
		matrizImagenes3[11]="imagenes/20.jpg";
		matrizImagenes3[12]="imagenes/21.jpg";
		matrizImagenes3[13]="imagenes/22.jpg";
	var indice=0;

	function mas3()
	{
		indice +=1;
		if(indice>13){
			indice=0;

		}
		document.images["numero3"].src=matrizImagenes3[indice];
	}

	function menos3()
	{
		indice -=1;
		if(indice<0)
		{
			indice=13;

		}
		document.images["numero3"].src=matrizImagenes3[indice];
	}