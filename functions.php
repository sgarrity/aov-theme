<?php

function firstLetterHooks($title) {
	/* Wrap the blog title with ugly spans for CSS hooks */

	$words = explode(' ', $title);
	$count = 0;

	$num_words = count($words);
	foreach ($words as $word) {
	    $word = trim($word);
	    if ($word != '') {
	        $count++;

	        ?><span class="title-<?=$count?>"><?
	        ?><span class="first-letter"><?=substr($word, 0, 1);?></span><?
	        echo substr($word, 1);
	        ?></span><?

	        // don't display a space for the last word
	        if ($count < $num_words) {
	            echo ' ';
	        }
	    }
	}
}

?>