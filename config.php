<?
  $dictfile           = 'javascript.txt';
  /* the dictionary to use. one word per line, case insensitive */

  $target_similarity  = .5;
  /* range 0-1
  /* 0 being replace all tokens with the nearest match in the dict */
  /* 1 being replace token only if an exact match is found, */

  $max_hit_size       = 100;
  /* probably don't mess with this. */
  /* per token, it will stop searching the dictionary after this many results are found */
  /* based on similarity defined by $target_similarity above */

  $enforce_caps       = true;
	/* self explanatory */

  $caps_master        = 'dict';
	/* only relevant when $enforce_caps == true */
	/* $caps_master = 'dict' defaults caps corrections to dictionary */
	/* $caps_master = [anything else] defaults to the user supplied caps, even if misspelled, /*
	/* unless tokens are of different lengths, in which case lowercase is used by default */
?>
