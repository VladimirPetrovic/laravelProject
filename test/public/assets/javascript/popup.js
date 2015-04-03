$(document).on('ready', function(){
	$('.test-pop-up').magnificPopup({
	    		items: [
				      {
				        src: 'assets/img/most.jpg',
				        title: 'Most na Zepi!'
				      },
				      {
				        src: 'assets/img/nissan.jpg',
				        title: 'Nissan Skyline',
				      },
				      {
				        src: 'assets/img/ajfel.jpg',
				        title: 'Ajfelova kula',
				      },
				    ],
				    gallery: {
				      enabled: true
				    },
				    type: 'image' // this is a default type
	});
	$('.parent-container').magnificPopup({
		  delegate: 'a', // child items selector, by clicking on it popup will open
		  type: 'image'
	  // other options
	}); 
});