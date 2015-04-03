(function(){
	$(document).on('ready', function(){
		$('.js-ispisi-datum').on('click', function(){
				$('#datum').html(Date());
			})

		$('.js-proveri-broj').on('click', function(){
			var x = $('#broj').val();
				if(isNaN(x)||x<1||x>10){
						var text = ("Broj nije validan!");
					}
				else{
						var text = ("Broj je validan!");
					}
			$('#ispis').html(text);

		})

		var osoba = {
			ime:"Mika",
			prezime:"Brca",
			godina:22,
			punoIme: function (){
				return this.ime+""+this.prezime;
			}
		}

		$('#demo1').html(osoba.punoIme());

		$('.js-menjaj-poz').on('mouseenter', function(){
			$('.js-menjaj-poz').css('background-color', 'red')
		})

		$('.js-menjaj-poz').on('mouseleave', function(){
			$('.js-menjaj-poz').css('background-color', 'white')
		})
//////////////////////////////////////////////////
/*               MAGNIFIC POP UP                */
//////////////////////////////////////////////////

		

//////////////////////////////////////////////////
/*                    KLASE                     */
//////////////////////////////////////////////////
		function Laboratorija(naziv, adresa){
			this.naziv = naziv;
			this.adresa = adresa;
		}

		function Zaposleni(ime, prezime){
			this.ime = ime;
			this.prezime = prezime;
		}

		function Laborant(ime, prezime, zvanje, laboratorija){
			Zaposleni.call(this, ime, prezime);
			this.zvanje = zvanje;
			this.laboratorija = laboratorija;
		}

		function Asistent(ime, prezime, zvanje, salter, laboratorija){
			Zaposleni.call(this, ime, prezime);
			this.zvanje = zvanje;
			this.salter = salter;
			this.laboratorija = laboratorija;
		}

		Laborant.prototype.toString = function(){
			return 'Laborant ' + this.ime + ' '  + this.prezime + ' radi u ' + this.laboratorija.naziv + '.';
		}

		Asistent.prototype.toString = function(){
			return 'Asistent ' + this.ime + ' ' + this.prezime + ' radi na ' + this.salter + ' u laboratoriji ' + this.laboratorija.naziv + '.';
		}
		
		MedLab = new Laboratorija('MedLab', 'Neka ulica bb');
		PeraPeric = new Asistent('Pera', 'Peric', 'Asistent', 'Salter 1', MedLab);
		JocaJocic= new Laborant('Joca', 'Jocic', 'Laborant', MedLab);
		//alert(JocaJocic.toString());
		//alert(PeraPeric.toString());

		function Animal(name, type){
	       	this.name = name;
	       	this.type = type;
   		}    
   		myDog = new Animal('Blacky', 'Dog');
   		//console.info(myDog.name);

///////////////////////////////////////////////////////
/*                      AJAX                         */
///////////////////////////////////////////////////////

		$('button#callapi').on('click', function(event){

			$.ajax({

				url: 'http://test1.dev/ispis',

				success: function (data){
					console.log(data)

					var post1 = $('table tr td#polje-1');
					var post2 = $('table tr td#polje-2');

						post1.html('');
						post2.html('');

						$.each(data, function(index, post){
							post1.append('<tr><td>' + post.title + '</td></tr>');
							post2.append('<tr><td>' + post.body + '</td></tr>');
						})
					
					}
				});
			});

///////////////////////////////////////////////////////
/*                  AJAX UPDATE                      */
///////////////////////////////////////////////////////

		$('body').on('dblclick', '.js-item-row', function(evt){

			var $obj = $(this);
			//console.log($obj);
			var idItema = $obj.data("id-itema");
			var $opis = $obj.find('.js-body');
			var $naslov = $obj.find('.js-title');
			var $save = $obj.find('.btn-save');
			var $cancel = $obj.find('.btn-cancel');
			var $obrisi = $obj.find('.js-obrisi');
			var $time = $obj.find('.js-time')
			var tekstNaslova = $naslov.html().trim();
			var tekstOpisa = $opis.html().trim();
			$save.show();
			$cancel.show();
			//console.log(tekstNaslova);
			//alert(idItema);

			$naslov.html('<input type="text" size="30" data-id-itema="' + idItema + '" id="naslov-' + idItema + '" >');
			$opis.html('<input type="text" size="30" data-id-itema="' + idItema + '" id="opis-' + idItema + '" >');
				$('#naslov-'+idItema).val(tekstNaslova);
				$('#opis-'+idItema).val(tekstOpisa);
			$save.html('<button data-id-itema="'+idItema+'" id="sacuvaj-'+idItema+'" class="btn btn-primary">Save</button>');
			$cancel.html('<button data-id-itema="'+idItema+'" id="ponisti-'+idItema+'" class="btn btn-danger">Cancel</button>');		
			$obrisi.hide();

			$('#ponisti-'+idItema).on('click', function(){
				$obrisi.show();
				$save.hide();
				$cancel.hide();
				$naslov.html(tekstNaslova);
				//console.log($naslov);
				$opis.html(tekstOpisa);
			})

			$('#sacuvaj-'+idItema).on('click', function(){

				var $post = {};
				$post.title = $('#naslov-'+idItema).val();
				//console.log($post.title);
				$post.body = $('#opis-'+idItema).val();
				$post._token = window._laravel_token;
				var id = $(this).data('id-itema');

				$naslov.html($('#naslov-'+idItema).val());
				//console.log($naslov);
				$opis.html($('#opis-'+idItema).val());

				console.log($post);
				$.ajax({

					type:'PUT',
					url:'http://test1.dev/ajax-articles/'+id,
					data: $post,
					success: function(data){
						$save.hide();
						$cancel.hide();
						$obrisi.show();
						$time.html(data.updated_at);

					}

					})

			})

		});

///////////////////////////////////////////////////////
/*                 AJAX ADD NEW                      */
///////////////////////////////////////////////////////

		$('button#addnew').on('click', function(){
			$('#inputi').html('<form><div class="form-group col-md-3"><label> Title: </label> <input type="text" id="naslov" class="form-control"><label> Body: </label> <textarea id="opis" class="form-control"></textarea><button class="btn btn-primary form" id="posalji">Submit</button> <button id="sakrij" class="btn btn-default">Hide</button></div></form>');
				
				$('#sakrij').on('click', function(){
					$('#inputi').html('');
				})

				$('#posalji').on('click', function(){

						var $post = {};
						$post.title = $('#naslov').val();
						$post.body = $('#opis').val();
						$post._token = window._laravel_token;
						//console.log($post);
					
					$.ajax({

						type: "POST",
						url: 'http://test1.dev/ajax-articles/store',
						data: $post,
						success: function(data){
							$('#inputi').html('');
							var email = window._laravel_user.email;

							var noviRed = $("<tr class='js-item-row' data-id-itema='"+data.id+"'></tr>");
							noviRed.append('<td class="info js-title">'+data.title+'</td>');
							noviRed.append('<td class="active js-body">'+data.body+'</td>');
							noviRed.append('<td class="active">'+email+'</td>');
							noviRed.append('<td>'+data.created_at+'</td>');
							noviRed.append('<td class="btn-save"></td>');
							noviRed.append('<td class="btn-cancel"></td>');
							noviRed.append('<button class="js-obrisi btn btn-default" data-id-itema="'+data.id+'">Obrisi</button>');
							$('table').append(noviRed);
							// $('table tr td#title').append('<tr><td>'+data.title+'</tr></td>');
							// $('table tr td#body').append('<tr><td>'+data.body+'</tr></td>');
						}

					});
				});
		});

///////////////////////////////////////////////////////
/*                  AJAX DELETE                      */
///////////////////////////////////////////////////////

		$('body').on('click', '.js-obrisi', function(){
			var id = $(this).data('id-itema');
			var token = $(this).data(token);
			$.ajax({
				url:'http://test1.dev/ajax-articles/'+id+'/delete',
				type: 'delete',
				data: {method: 'delete', _token:window._laravel_token},
    			success: function(data){
    				$("tr[data-id-itema=" + id + "]").hide();
    			}
			});
		})

	});
})();