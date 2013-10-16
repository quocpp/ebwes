#!/bin/csh
set a=`cat t.txt`
foreach i($a)
 cd $i
 pwd
# ark -b ./*.gz
 rm -f ./*.gz
 cd /home/quoc/myweb/drupal
end
