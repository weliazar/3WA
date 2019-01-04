'use strict';

function afficher() {
    var choice = $('input[name=what]:checked').val();
    
    switch (choice) {
        case '1':
            $.get('php/1-get-html-article.php', myFunction);
        break;
            
        case '2':    
            $.getJSON('php/2-get-json-data.php', jsonPart);
        break;
        
        case '3':
            $.get('php/3-get-html-movies.php', myFunction);
        break;
                
    }




}
