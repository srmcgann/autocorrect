Author: Scott Mc Gann
Date: Oct, 6, 2022
tested with PHP v >= 7.4

INSTALLATION
ensure you have PHP, then
$ sudo ./install.sh


UNINSTALL
$ sudo ./uninstall


USAGE
this tool accepts input via text as arguments, quoted if necessary
OR
via redirection, for example

[post install]
$ autocorrect applez
expected output: apples

or
$ cat fileToCheck.txt | autocorrect > newfile.txt
expected output: a corrected file


CONFIG
edit config.php to use a custom dictionary, etc

