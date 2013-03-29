#!/bin/bash

# bash script to change filename for all php files in CWD

for file in *.php
do
    # display a listing of all files in CWD
    #ls -l "$file"

    # show progress of script
    echo; echo; echo;
    echo "Processing $file";
    
    # -i sed option writes changes to current file being processed
    #
    # sed -i s/BGCOLOR=\"\#FFFFFF\"/BGCOLOR=\"\#BC88FF\"/g "$file"
    # sed s/.[/]local[/]incs//g homepage.php "$file"
    sed -i s/.[/]local[/]incs//g homepage.php "$file"

done
exit 0
    