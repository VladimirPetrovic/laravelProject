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
		alert(JocaJocic.toString());
		alert(PeraPeric.toString());

		function Animal(name, type){
	       	this.name = name;
	       	this.type = type;
   		}    
   		myDog = new Animal('Blacky', 'Dog');
   		console.info(myDog.name);
 //////////////////////////////////////////////////




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

		$('button#callapi').on('click', function(event){
			$.ajax({

				url: 'http://test1.dev/ispis',

				success: function (data){
					console.log(data)

					var post1 = $('table tr td#polje1');
					var post2 = $('table tr td#polje2');

						post1.html('');
						post2.html('');

						$.each(data, function(index, post){
							post1.append('<tr><td>' + post.title + '</td></tr>');
							post2.append('<tr><td>' + post.body + '</td></tr>');
						})
					
					}
				});
			});
	});
})();