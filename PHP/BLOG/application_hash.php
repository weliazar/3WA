<?php

/*PAGE QUI SERT A CRYPTER LES MDP */

/* FONCTION QUI SERT A CRYPTER LE MDP  */
function hashPassword($password){

    $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);
    /*
    $2y$11$ correspond a une cle de caractere qU'on peut INDIQUÉES ET QUI SERA AJOUTER AU CRYPATAGE.
    */
    return crypt($password, $salt);
}


function verifyPassword($password, $hashedPassword){

		return crypt($password, $hashedPassword) == $hashedPassword;
}
/*fONCTION QUI SERT A COMPARER ET VERIFIE LE MDP INDIQUÉES ET LE MDP CRYPTER - SI CA CORRESPOND LA CONNECTION EST ACCEPTER */

?>
