find . -name "*.pdf" | xargs -n1 pdftotext -enc ASCII7
files=*.txt
cat $files > all.dat
perl -lpe s/[^[:print:]]+//g all.dat > clean.dat
cat clean.dat | sed 's/[^a-zA-Z]/ /g' | tr '[:upper:]' '[:lower:]' | tr ' ' ' ' | sed '/^$/d' | sed '/^[a-z]$/d' | tr ' ' '\n' | grep -v '^$' | grep -v -w -f stopwords.dat | egrep -v -x '\w{1,3}' > words.dat
#Now the file words.dat can be fed to any good word cloud generator, such as http://worditout.com
