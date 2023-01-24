    var ExisteExped =false;
	let obj=[];
	let current_page = 1;
	let obj_per_page = 5;
	let templateHtml='';
	
    $(document).ready(function(){
			/*
			var el1 = document.getElementById("Expediente");
          	el1.setAttribute("style", "display:none;");
          	
			var el2 = document.getElementById("Notifica");
          	el2.setAttribute("style", "display:none;");
			var el3 = document.getElementById("Audiencia");
          	el3.setAttribute("style", "display:none;");          	
			var el4 = document.getElementById("secretario");
          	el4.setAttribute("style", "display:none;");
          	*/
			var mexpediente = document.getElementById("mdlExpediente");
          	mexpediente.setAttribute("style", "display:none;");
    });
    
    //document.addEventListener("DOMContentLoaded", function () {
    
    var Filtro=0;
	
	function Seleccion($valor,$idJunta){
		Filtro=$valor;
		if (Filtro!=0){
	
	        switch (Filtro){
	          case 1:
	          {   
				//	var el1 = document.getElementById("contenido");
		         //	el1.setAttribute("style", "display:block;");
		          	var mexpediente = document.getElementById("mdlExpediente");
		          	mexpediente.setAttribute("style", "display:block;");
		          	//var Opcjunta = document.getElementById("opcjunta");
		          	//var junta = document.getElementById("junta");
		          	if ($idJunta==1){
		          		document.getElementById("opcjunta").value= "H. Primera Junta Local de Conciliación y Arbitraje de Acapulco";
		          		document.getElementById("junta").value= 1;
		          	}else{	
		          		document.getElementById("opcjunta").value= "H. Segunda Junta Local de Conciliación y Arbitraje de Acapulco";
		          		document.getElementById("junta").value= 2;
		          	}
	              	break;
	            }
	          case 2:
	          {
					var el2 = document.getElementById("expediente");
		          	el2.setAttribute("style", "display:block;");
		          	secTurno($idJunta);
	              	break;
	          }
	          case 3:
	          {
	              document.getElementById("Expediente").style.display="none";   
	              document.getElementById("Notifica").style.display="none";   
	              document.getElementById("Audiencia").style.display="block";   
	              document.getElementById("secretario").style.display="none";   
	              break;
	          }
	          case 4:
	          {
					var el4 = document.getElementById("secretario");
		          	el4.setAttribute("style", "display:block;");
		          	secTurno($idJunta);
	              	break;
	          	}
	        }
	    }
	}


	function consultaExpediente()
	{
		valor=parseInt($('#documento').val());
		idJunta=parseInt($('#junta').val());
		tam= $('#numexped').val();
		var prueba = new String(tam);

        if($("#numexped").val()=='' || prueba.length<10){
			Swal.fire('Debe indicar un expediente valido','','error')
			contenido = document.getElementById("contenido");
	        contenido.setAttribute("style", "display:none;");
		    divRad = document.getElementById("divRadicacion");
    		divRad.setAttribute("style", "display:none;");				
    		divPre = document.getElementById("divPrevencion");
    		divPre.setAttribute("style", "display:none;");
    		divAud = document.getElementById("divAudiencia");
    		divAud.setAttribute("style", "display:none;");
    		divPro = document.getElementById("divPromocion");
    		divPro.setAttribute("style", "display:none;");
    		divRes = document.getElementById("divResolucion");
    		divRes.setAttribute("style", "display:none;");
    		divAmp = document.getElementById("divAmparo");
    		divAmp.setAttribute("style", "display:none;");
    		divOfc = document.getElementById("divOficio");
    		divOfc.setAttribute("style", "display:none;");
    		divLad = document.getElementById("divLaudo");
    		divLad.setAttribute("style", "display:none;");
    		divNot = document.getElementById("divNotificacion");
    		divNot.setAttribute("style", "display:none;");
		}else
		{
	        //expDatos(idJunta,prueba.replace('/',''));
			 $.ajax({	
				url:"ajax/expediente.ajax.php",
				type:'POST',
				data: { idJunta:idJunta, exped:prueba.replace('/','')},
				beforeSend:function(){},
				dataType: "html",
				success:function(respuesta){
					if (respuesta==null || respuesta==''){
						ExisteExped=false;
						contenido = document.getElementById("contenido");
			        	contenido.setAttribute("style", "display:none;");
			        	Swal.fire('No se encontraron resultados','','error')
			        	contenido = document.getElementById("contenido");
				        contenido.setAttribute("style", "display:none;");
					    divRad = document.getElementById("divRadicacion");
			    		divRad.setAttribute("style", "display:none;");				
			    		divPre = document.getElementById("divPrevencion");
			    		divPre.setAttribute("style", "display:none;");
			    		divAud = document.getElementById("divAudiencia");
			    		divAud.setAttribute("style", "display:none;");
			    		divPro = document.getElementById("divPromocion");
			    		divPro.setAttribute("style", "display:none;");
			    		divRes = document.getElementById("divResolucion");
			    		divRes.setAttribute("style", "display:none;");
			    		divAmp = document.getElementById("divAmparo");
			    		divAmp.setAttribute("style", "display:none;");
			    		divOfc = document.getElementById("divOficio");
			    		divOfc.setAttribute("style", "display:none;");
			    		divLad = document.getElementById("divLaudo");
			    		divLad.setAttribute("style", "display:none;");
			    		divNot = document.getElementById("divNotificacion");
			    		divNot.setAttribute("style", "display:none;");
					}else
					{
						ExisteExped=true;
						contenido = document.getElementById("contenido");
			        	contenido.setAttribute("style", "display:block;");
						var Tabla2 = document.getElementById("miTabla");
						Tabla2.innerHTML=respuesta;
						contenido = document.getElementById("contenido");
			        	contenido.setAttribute("style", "display:block;");
						let exp = document.getElementById("idExped").value;
			    		//console.log(exp);
	
				        switch (valor)
							{
								case 1:
								{
					        		divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:block;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:block;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:block;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:block;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:block;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:block;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:block;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:block;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:block;");
									ExpRadi(exp,2);
									ExpPreve(exp,3);
									ExpAudi(exp,4);
									ExpPromo(exp,5);
									ExpReso(exp,6);
									ExpAmparo(exp,7);
									ExpOficio(exp,8);
									ExpLaudo(exp,9);
									ExpNoti(exp,10);
					        		break;
								}   
								case 2:
								{
									//expRad(idJunta,prueba.replace('/',''));
									ExpRadi(exp,valor);
									divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:block;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:none;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:none;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:none;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:none;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:none;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:none;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:none;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:none;");
									break;
								}
								case 3:
								{
									ExpPreve(exp,valor);
									divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:none;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:block;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:none;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:none;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:none;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:none;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:none;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:none;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:none;");
									break;
								}
								case 4:
								{
									ExpAudi(exp,valor);
									divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:none;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:none;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:block;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:none;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:none;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:none;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:none;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:none;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:none;");
									break;
								}
								case 5:
								{
									ExpPromo(exp,valor);
									divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:none;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:none;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:none;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:block;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:none;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:none;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:none;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:none;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:none;");
									break;
								}
								case 6:
								{
									ExpReso(exp,valor);
									divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:none;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:none;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:none;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:none;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:block;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:none;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:none;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:none;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:none;");
									break;
								}
								case 7:
								{
									ExpAmparo(exp,valor);
									divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:none;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:none;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:none;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:none;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:none;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:block;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:none;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:none;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:none;");
									break;
								}
								case 8:
								{
									ExpOficio(exp,valor);
									divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:none;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:none;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:none;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:none;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:none;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:none;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:block;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:none;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:none;");
									break;
								}
								case 9:
								{
									ExpLaudo(exp,valor);
									divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:none;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:none;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:none;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:none;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:none;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:none;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:none;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:block;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:none;");
									break;
								}
								case 10:
								{
									ExpNoti(exp,valor);
									divRad = document.getElementById("divRadicacion");
					        		divRad.setAttribute("style", "display:none;");				
					        		divPre = document.getElementById("divPrevencion");
					        		divPre.setAttribute("style", "display:none;");
					        		divAud = document.getElementById("divAudiencia");
					        		divAud.setAttribute("style", "display:none;");
					        		divPro = document.getElementById("divPromocion");
					        		divPro.setAttribute("style", "display:none;");
					        		divRes = document.getElementById("divResolucion");
					        		divRes.setAttribute("style", "display:none;");
					        		divAmp = document.getElementById("divAmparo");
					        		divAmp.setAttribute("style", "display:none;");
					        		divOfc = document.getElementById("divOficio");
					        		divOfc.setAttribute("style", "display:none;");
					        		divLad = document.getElementById("divLaudo");
					        		divLad.setAttribute("style", "display:none;");
					        		divNot = document.getElementById("divNotificacion");
					        		divNot.setAttribute("style", "display:block;");
									break;
								}
							}
					}
				}

		    });

		}

	}
	
	const ExpRadi=(idExped,IdOpc)=>{

		$.ajax({	
			url:"ajax/expediente.ajax.php",
			type:'POST',
			data: { idExp:idExped,Opc: IdOpc},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuestaRadi){
				var Tabla = document.getElementById("tablaRadicacion");
				Tabla.innerHTML=respuestaRadi;
				//console.log(respuestaAud);
			}
		});
	}

	const ExpPreve=(idExped,IdOpc)=>{

		$.ajax({	
			url:"ajax/expediente.ajax.php",
			type:'POST',
			data: { idExp:idExped,Opc: IdOpc},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuestaPreve){
				var Tabla = document.getElementById("tablaPrevencion");
				Tabla.innerHTML=respuestaPreve;
				//console.log(respuestaAud);
			}
		});
	}

	
	const ExpAudi=(idExped,IdOpc)=>{

		$.ajax({	
			url:"ajax/expediente.ajax.php",
			type:'POST',
			data: { idExp:idExped,Opc: IdOpc},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuestaAud){
				var Tabla = document.getElementById("tablaAudiencias");
				Tabla.innerHTML=respuestaAud;
				//console.log(respuestaAud);
			}
		});
	}

	
	const ExpPromo=(idExped,IdOpc)=>{

		$.ajax({	
			url:"ajax/expediente.ajax.php",
			type:'POST',
			data: { idExp:idExped,Opc: IdOpc},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuestaPromo){
				var Tabla = document.getElementById("tablaPromociones");
				Tabla.innerHTML=respuestaPromo;
				//console.log(respuestaPromo);
			}
		});
	}

	const ExpReso=(idExped,IdOpc)=>{

		$.ajax({	
			url:"ajax/expediente.ajax.php",
			type:'POST',
			data: { idExp:idExped,Opc: IdOpc},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuestaReso){
				var Tabla = document.getElementById("tablaResoluciones");
				Tabla.innerHTML=respuestaReso;
				//console.log(respuestaReso);
			}
		});
	}

	const ExpAmparo=(idExped,IdOpc)=>{

		$.ajax({	
			url:"ajax/expediente.ajax.php",
			type:'POST',
			data: { idExp:idExped,Opc: IdOpc},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuestaAmp){
				var Tabla = document.getElementById("tablaAmparos");
				Tabla.innerHTML=respuestaAmp;
				//console.log(respuestaAmp);
			}
		});
	}

	const ExpOficio=(idExped,IdOpc)=>{

		$.ajax({	
			url:"ajax/expediente.ajax.php",
			type:'POST',
			data: { idExp:idExped,Opc: IdOpc},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuestaOficio){
				var Tabla = document.getElementById("tablaOficios");
				Tabla.innerHTML=respuestaOficio;
				//console.log(respuestaOficio);
			}
		});
	}

	const ExpLaudo=(idExped,IdOpc)=>{

		$.ajax({	
			url:"ajax/expediente.ajax.php",
			type:'POST',
			data: { idExp:idExped,Opc: IdOpc},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuestaLaudo){
				var Tabla = document.getElementById("tablaLaudo");
				Tabla.innerHTML=respuestaLaudo;
				//console.log(respuestaOficio);
			}
		});
	}

	const ExpNoti=(idExped,IdOpc)=>{

		$.ajax({	
			url:"ajax/expediente.ajax.php",
			type:'POST',
			data: { idExp:idExped,Opc: IdOpc},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuestaNoti){
				var Tabla = document.getElementById("tablaNotificacion");
				Tabla.innerHTML=respuestaNoti;
				//console.log(respuestaOficio);
			}
		});
	}


	function secTurno($idJunta){
     	$.ajax({	
    	url:"ajax/secretario.ajax.php",
		type:'POST',
		data: {idJunta:$idJunta},
		beforeSend:function(){},
		dataType: "html",
		success:function(respuesta){
			//console.log(respuesta);
			var Tabla = document.getElementById("miTabla");
			Tabla.innerHTML=respuesta;

		}
    });
   }

	function consultaAudi(){
		var Op = parseInt($("#opcC").val());
		var datos=$("#junta").val()+',';
		datos+=$("#opcC").val()+',';
		datos+=$("#numexped").val()+',';
		datos+=$("#opsecre").val()+',';
		datos+=$("#opcFecha").val();
		var datoJunta=parseInt($("#junta").val());
		var datoExped=$("#numexped").val();
		datoExped=datoExped.replace('/','');
		var datoSecre=parseInt($("#opsecre").val());
		var datoFecha=$("#opcFecha").val();
		switch (Op)
		{
			case 1:
				if($("#numexped").val()==''){
					Swal.fire('Debe indicar un expediente valido','','error')
				}
				else
				{
					//lstAudiSecre()
					//numexped
					AudiSecre(Op,datoJunta,datoSecre,datoExped,datoFecha);
				}
				//console.log(datoExped);
				break;
			case 2:

				if($("#opcFecha").val()==''){
					Swal.fire('Debe indicar una fecha valida','','error');
				}
				else
				{
					AudiSecre(Op,datoJunta,datoSecre,datoExped,datoFecha);
				}
				console.log('dato2');
				break;				
		}
		console.log(datos);
	}

	function AudiSecre($Op,$Junta,$Secre,$Exped,$Fecha){
		var Opc=parseInt($Op);
		var Junta=parseInt($Junta);
		var scre=parseInt($Secre);
		if ($Op==1){ 
			 $.ajax({	
				url:"ajax/listaaudiencia.ajax.php",
				type:'POST',
				data: {Opc: Opc, idJunta:Junta, secre:scre, exped:$Exped},
				beforeSend:function(){},
				dataType: "html",
				success:function(respuesta){
					console.log(respuesta);
					var resul = document.getElementById("resultado");
		          	resul.setAttribute("style", "display:block;");
					var Tabla2 = document.getElementById("miTabla2");
					Tabla2.innerHTML=respuesta;
				}
		    });
		}
		else if ($Op==2){ 
			$.ajax({	
				url:"ajax/listaaudiencia.ajax.php",
				type:'POST',
				data: {Opc: Opc, idJunta:Junta, secre:scre, fecha:$Fecha},
				beforeSend:function(){},
				dataType: "html",
				success:function(respuesta){
					var resul = document.getElementById("resultado");
		          	resul.setAttribute("style", "display:block;");
					var Tabla2 = document.getElementById("miTabla2");
					Tabla2.innerHTML=respuesta;
					//console.log(respuesta);
				}
		    });
		}
   }

/*
   function lstAudiExped($Junta,$Exped){
			$.ajax({	
			url:"ajax/secretario.ajax.php",
			type:'POST',
			data: {idJunta:$idJunta},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuesta){
				//console.log(respuesta);
				var Tabla = document.getElementById("miTabla");
				Tabla.innerHTML=respuesta;
			}
		});
	}
*/
function muestraOpc(opc){
		$("#opcFecha").val('');
		$("#numexped").val('');
  		switch (opc)
  		{
  			case 1:
			    var consultaE=document.getElementById("consultaExp");
		  		consultaE.setAttribute("style", "display:block;");
		  		var consultaS=document.getElementById("consultaSec");
		  		consultaS.setAttribute("style", "display:none;");
		  		var opcion1=document.getElementById("numexped");
		  		opcion1.setAttribute("style", "display:block;");
		  		var opcion2=document.getElementById("opsecre");
		  		opcion2.setAttribute("style", "display:none;");
		  		var opcion3=document.getElementById("consultaFecha");
		  		opcion3.setAttribute("style", "display:none;"); 
		  		var opcion4=document.getElementById("opcFecha");
		  		opcion4.setAttribute("style", "display:none;");
		  		$("#opcC").val(1);
  				break;
  			case 2:
			    var consultaE=document.getElementById("consultaExp");
		  		consultaE.setAttribute("style", "display:none;");
		  		var consultaS=document.getElementById("consultaSec");
		  		consultaS.setAttribute("style", "display:block;");
		  		var opcion1=document.getElementById("numexped");
		  		opcion1.setAttribute("style", "display:none;");
		  		var opcion2=document.getElementById("opsecre");
		  		opcion2.setAttribute("style", "display:block;");
		  		var opcion3=document.getElementById("consultaFecha");
		  		opcion3.setAttribute("style", "display:block;"); 
		  		var opcion4=document.getElementById("opcFecha");
		  		opcion4.setAttribute("style", "display:block;");
		  		$("#opcC").val(2);
  				break;
  		}
  		var btn=document.getElementById("btnConsulta");
  		btn.setAttribute("style", "display:inline;");
  	}

	function cadena(e) {

	    tecla = (document.all) ? e.keyCode : e.which;

	    //Tecla de retroceso para borrar, siempre la permite
	    
	    if (tecla == 8) {
	        return true;
	    }

	    // Patron de entrada, en este caso solo acepta numeros y letras
	    patron = /[0-9]/;
	    tecla_final = String.fromCharCode(tecla).toUpperCase();
	   
	    var datos = $('#numexped').val();
        var prueba = new String(datos);

        if (prueba.length==6){
            $('#numexped').val(prueba.substring(0,5)+"/"+prueba.substring(5,6));
        }else{
            if (prueba.length==9){
                $('#numexped').val(prueba.substring(0,5)+"/"+prueba.substring(6,9));
            }
        }
		
		return patron.test(tecla_final);

	}


	function consultaNoti(){
		var Op = parseInt($("#opcC").val());
		
		var datoJunta=parseInt($("#junta").val());

		var datoSecre=parseInt($("#opsecre").val());
		var datoFecha=$("#opcFecha").val();
		if($("#opcFecha").val()==''){
					Swal.fire('Debe indicar una fecha valida','','error');
		}
		else
		{
				notiSecre(datoJunta,datoSecre,datoFecha);
		}
		
		
	}	

	function notiSecre($Junta,$Secre,$Fecha){

		var Junta=parseInt($Junta);
		var scre=parseInt($Secre);

		$.ajax({	
			url:"ajax/listaNotificacion.ajax.php",
			type:'POST',
			data: {idJunta:Junta, secre:scre, fecha:$Fecha},
			beforeSend:function(){},
			dataType: "html",
			success:function(respuesta){
				var resul = document.getElementById("resultado");
	          	resul.setAttribute("style", "display:block;");
				var Tabla2 = document.getElementById("miTabla");
				Tabla2.innerHTML=respuesta;
				//console.log(respuesta);
			}
	    });
	
   }


const notiNuevas=()=>{
	let val =1;
    $.ajax({	
		url:"ajax/articulos.ajax.php",
		type:'POST',
		data: {dato:val},
		beforeSend:function(){},
		dataType: "json",
		success:function(respuesta){
	   		//console.log(respuesta);
			obj =JSON.parse(respuesta);
			//console.log(obj);
			change(1);
	   //var Tabla = document.getElementById("miTabla");
	   //Tabla.innerHTML=respuesta;
   		}
	});
}

const notiConsulta=(idNoti)=>{
	
    $.ajax({	
		url:"ajax/articulos.ajax.php",
		type:'POST',
		data: {id:idNoti},
		beforeSend:function(){},
		dataType: "json",
		success:function(respuesta){
	   		//console.log(respuesta);
			obj =JSON.parse(respuesta);
			muestraArticulo();
	   //var Tabla = document.getElementById("miTabla");
	   //Tabla.innerHTML=respuesta;
   		}
	});
}


const prevPage=()=>
	{
		if (current_page > 1) {
			current_page--;
			change(current_page);
		}
	}

	const nextPage=()=>
	{
		if (current_page < totNumPages()) {
			current_page++;
			change(current_page);
		}
	}

	const totNumPages=()=>{
    	return Math.ceil(obj.length/obj_per_page);
	}

	const change=(page)=>{
    	let btn_next = document.getElementById("btn_next");
		let btn_prev = document.getElementById("btn_prev");
		let templateHtml='';
		let listing_table = document.getElementById("TablaNoti");
		let page_span = document.getElementById("page");
		if (page < 1) page = 1;
		if (page > totNumPages()) page = totNumPages();
		listing_table.innerHTML = "";
		
		
		for (var i = (page-1) * obj_per_page; i < ((page * obj_per_page)); i++) {
			
			if (i<obj.length){
			templateHtml=templateHtml +  ` 
			<tr>
				<td>  ` + `
					<div class="media border p-3">
						<img src="${obj[i].Dimage}" alt="" class="mr-3 mt-3 " style="width:60px;">
						<div class="media-body">
							<h4><a class="Dtitle" href="articulo?valId=${obj[i].Did}
							">${obj[i].Dtitle}</a></h4>
							<p>${obj[i].Dresumen}</p>      
						</div>
					</div> 
				</td>
			</tr>`;
			}
		}
		listing_table.innerHTML = templateHtml;
		page_span.innerHTML = page + " de " + totNumPages();
		if (page == 1) {
			btn_prev.style.visibility = "hidden";
		} else {
			btn_prev.style.visibility = "visible";
		}
		if (page == totNumPages()) {
			btn_next.style.visibility = "hidden";
		} else {
			btn_next.style.visibility = "visible";
		}
		
	}