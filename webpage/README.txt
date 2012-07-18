The index page is in public_html.

Some ftp commands that might be useful:
put index.html
put /any file/
ls  ==> to see remote files
delete /any remote file/
---------------

with jabref, 
export (HTML table with Abstract & BibTeX) the file "publisak.html" from the input file "smallbib2.bib" 
	* entries sorted by date: use JabRef->Options->Preferences->File->Save/Export entries in their original order
	* then put the content of the <body> of publisak.html (BUT ONLY WHAT is after the "qs" div) in the right place in publisak2.html

THEN, put the colors where they should be! To do so, in publisak2.html,
simply replace "<td>article" with "<td BGCOLOR="#ffff33">article",
and "<td>inproceedings" with "<td BGCOLOR="#ffcc66">inproceedings".


---------------
For the moment,
the videos and papers are stored on UbuntuOne (e-mail perrnicolas, password G..G..0). The papers are also stored on this git repo, 
but not the videos.


