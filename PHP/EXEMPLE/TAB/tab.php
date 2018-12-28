<?php

$tab = [
			[
            	'name' => 'Thib',
                'age' => 29,
                'job' => 'dev',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
           
            [
            	'name' => 'Sophie',
                'age' => 21,
                'job' => 'étudiante',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            [
            	'name' => 'Bernard',
                'age' => 67,
                'job' => 'retraite',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            [
            	'name' => 'Josianne',
                'age' => 52,
                'job' => 'prof',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            [
            	'name' => 'Pierre',
                'age' => 31,
                'job' => 'gilet jaune',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            
            [
            	'name' => 'martine',
                'age' => 45,
                'job' => 'flic',
                'alphabet'=> ['a', 'b', 'c', 'd', 'e', 'f']
            ],
            
       ];
       
  
 // $tab[4]['job'] // gilet jaune
 
 // $tab[1]['name'] // sophie
 
 // $tab[4]['age'] // 31
 
 
// $tab[3]['name'] // Josiane

// $tab[5]['job'] // flic



/*
**********************************.PHTML*********************************

<?php

   <ul>
	// for (var i = 0; i < tab.length; i++)

	<?php foreach($tab as $canard) {?>
    	
        <li> <?= $canard['name'] ?> 
        
        <?php foreach ($canard['alphabet'] as $index => $alpha ) {?>
        	<span><?= $index ?></span> 
            <span> <?= $alpha ?> </span>
        
        <?php } ?>
        </li>
        
    <?php } ?> OU <?php endforeach ?>


</ul>




<ul>
	<li> Thib 
    	<span>0</span>
        <span>a</span>
		<span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
    <li> Sophie 
    	<span>0</span>
        <span>a</span>
		<span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
	<li> Bernard 
    	<span>0</span>
        <span>a</span>
		<span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
    <li> Josiane 
    	<span>0</span>
        <span>a</span>
		<span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
    <li> Pierre 
    	<span>0</span>
        <span>a</span>
		<span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
    <li> Martine 
    	<span>0</span>
        <span>a</span>
		<span>1</span>
        <span>b</span>
        <span>2</span>
        <span>c</span>
        <span>3</span>
        <span>d</span>
        <span>4</span>
        <span>e</span>
        <span>5</span>
        <span>f</span>
    </li>
</ul>
                 


*/



?>