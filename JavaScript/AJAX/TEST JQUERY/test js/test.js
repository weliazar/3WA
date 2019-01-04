var tab = [
			{
            	'name' : 'Thib',
                'age' : 29,
                'job' : 'dev',
                'aplhabet' : ['a', 'b', 'c', 'd', 'e', 'f']
            },
            
           	'coucou',
            
           	[
            	[ 
                	['a'], 
                    {
                    	'chat' : 'cat'
                    } 
               	],
                
            	524,
                
                {
                	'animals' : ['poulpe', 'canard', 'chien'],
                    'country' : [
                    				'France', 
                                    'Allemagne', 
                                    'Italie', 
                                    [ 
                                    	'Serbie', 
                                        'Montenegro', 
                                        'Macédoine'  
                                    ] 
                                 ]
                }
            ]

	   ];

// tab[2][2].animals[1] // canard

// tab[2][0][1].chat // cat

// tab[2][0][0] // a

// tab[0].alphabet[2] // c

// tab[2][1] // 524


$('#target').html('<ul>');

for(var i = 0; i < tab[2][2].country[3].length; i++) {

	$('#target ul').append('<li>'+tab[2][2].country[3][i]+'</li>')
}


</script>

<div id="target">



</div>


//P2    

var tab = [
			{
            	'name' : 'Thib',
                'age' : 29,
                'job' : 'dev',
                'alphabet' : ['a', 'b', 'c', 'd', 'e', 'f']
            },
           
            {
            	'name' : 'Sophie',
                'age' : 21,
                'job' : 'étudiante',
                'alphabet' : ['a', 'b', 'c', 'd', 'e', 'f']
            },
            {
            	'name' : 'Bernard',
                'age' : 67,
                'job' : 'retraite',
                'alphabet': ['a', 'b', 'c', 'd', 'e', 'f']
            },
            {
            	'name' : 'Josianne',
                'age' : 52,
                'job' : 'prof',
                'alphabet': ['a', 'b', 'c', 'd', 'e', 'f']
            },
            {
            	'name' : 'Pierre',
                'age' : 31,
                'job' : 'gilet jaune',
                'alphabet': ['a', 'b', 'c', 'd', 'e', 'f']
            },
            
            {
            	'name' : 'martine',
                'age' : 45,
                'job' : 'flic',
                'alphabet': ['a', 'b', 'c', 'd', 'e', 'f']
            },
            
       ];
       
       
       
       
       
 // tab[5].name  ou tab[5]['name']   renvoie Martine 
 
 // tab[0].alpahabet
 
 $('#target').html('<ul>');
 
 for(var i = 0; i < tab[0].alphabet.length; i++) {
 	
 	$('#target ul').append('<li>'+tab[0].alphabet[i]+'</li>')
    
 }
 
 
 
  $('#target').html('<ul>');
  
  for (var i = 0; i < tab.length; i++) {
  
  	$('#target ul').append('<li>'+tab[i].name+' '+tab[i].job+'</li>'); 
  }
 
 
 
       
</script>


<div id="target">



</div>
