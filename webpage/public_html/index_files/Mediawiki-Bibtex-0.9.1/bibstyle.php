<?php
# First translations using fr language in our case.

$wbibmastersthesis = "Th&egrave;se de master"; 
$wbibphdthesis = "Th&egrave;se de doctorat";
$wbibtechreport = "Rapport technique";
$wbibunpublished = "Non publi&eacute;";

$wbibauthor = "Auteur";
$wbibtitle = "Titre";
$wbibin = "Dans";
$wbibaddress = "Adresse";
$wbibdate = "Date";

#Lists of messages 
$wbibmsg = array('bibtex_empty' => '<span style="color:red;"><big><b>R&eacute;f&eacute;rence BibTex vide !</big></b></span>',
# Means 'empty bibtex reference'
'bibtex_available_types' => 'Les types Bibtex disponibles sont :',
# Means 'Available bibtex types are :'
'bibtex_help_type' => 'Vous pouvez taper @type entre les balises <bibtex> et </bibtex> pour avoir l\'aide correspondant au type.',
# Means 'You can type @type between <bibtex> and </bibtexd> to obtain the corresponding help.'
'bibtex_help_entry' => 'Voici les champs pour l\'entr&eacute;e <big><b>$1</b></big>.<br/>En <span style="color:red;"> rouge </span>sont les champs alternatifs et en <span style="color:green;">vert</span> les champs optionnels :<br/>',
# Means 'Here are the fields of entry type $1. In red alternate fields, in green optionnal fields
'bibtex_click_here' => '$1 Cliquez ici $2 pour coller cette entr&eacute;e dans la zone d\'&eacute;dition.<br/>',
# Means '$1 Click here $2 to paste this entry in textarea edit.
'bibtex_click_type' => 'Cliquer sur un type pour pr&eacute;-remplir la zone d\'&eacute;dition.',
# Means 'Click on one type to pre-fill edit textarea'
'bibtex_copypaste' => 'Copier-coller ces renseignements dans la zone d\'&eacute;dition.'
# Means 'Copy-paste this entry into edit textarea'
);

#Custom behaviour of extension
$wbib_medianamespace = "Image:";         # Medianamespace in which pdf and pstscript files are uploaded on wiki
$wbib_usejavascript  = true;             # Sometimes people don't want to use js. I can understand it.
$wbib_allowbibpopup  = true;             # A link named bibtex is appearing. It can pop with the bibtex reference like in ACM libraries
$wbib_allowdivpopup  = true;             # A div is popping when the cursor is over the link named bibtex;
$wbib_pdficon        = "Pdf.png";        # The name of the icon for pdf files directly uploaded on wiki.
$wbib_psicon         = "Postscript.png"; # The name of the icon for postscript file directly uploaded on wiki.


# Then lists of bibtex entries and params
#Lists of types
$wfBibtexTypes = array( "article", "inproceedings", "incollection", "inbook", "proceedings", "book", "booklet", "phdthesis", "mastersthesis", "techreport", "manual", "unpublished", "misc" ); 

#Lists of fields by types, in emacs style. Alternate fields are signaled by ALT and optionnal fields are signaled by OPT.
$wfBibtexEntries = array();
$wfBibtexEntries['article'] = array( 'author','title','journal','year','OPTvolume','OPTnumber','OPTpages','OPTmonth');
$wfBibtexEntries['inproceedings'] = array('author','title','OPTcrossref','OPTbooktitle','OPTpages','OPTyear','OPTeditor','OPTvolume','OPTnumber','OPTseries','OPTaddress','OPTmonth','OPTorganization','OPTpublisher');
$wfBibtexEntries['incollection'] = array('author','title','booktitle','OPTcrossref','OPTpages','OPTpublisher','OPTyear','OPTeditor','OPTvolume','OPTnumber','OPTseries','OPTtype','OPTchapter','OPTaddress','OPTedition','OPTmonth');
$wfBibtexEntries['inbook'] = array('ALTauthor','ALTeditor','title','chapter','publisher','year','OPTvolume','OPTnumber','OPTseries','OPTtype','OPTaddress','OPTedition','OPTmonth','OPTpages');
$wfBibtexEntries['proceedings'] = array('title','year','OPTbooktitle','OPTeditor','OPTvolume','OPTnumber','OPTseries','OPTaddress','OPTmonth','OPTorganization','OPTpublisher');
$wfBibtexEntries['book'] = array('ALTauthor','ALTeditor','title','publisher','year','OPTvolume','OPTnumber','OPTseries','OPTaddress','OPTedition','OPTmonth');
$wfBibtexEntries['booklet'] = array('title','OPTauthor','OPThowpublished','OPTaddress','OPTmonth','OPTyear');
$wfBibtexEntries['phdthesis'] = array('author','title','school','year','OPTtype','OPTaddress','OPTmonth');
$wfBibtexEntries['mastersthesis'] = array('author','title','school','year','OPTtype','OPTaddress','OPTmonth');
$wfBibtexEntries['techreport'] = array('author','title','institution','year','OPTtype','OPTnumber','OPTaddress','OPTmonth');
$wfBibtexEntries['manual'] = array('title','OPTauthor','OPTorganization','OPTaddress','OPTedition','OPTmonth','OPTyear');
$wfBibtexEntries['misc'] = array('OPTauthor','OPTtitle','OPThowpublished','OPTmonth','OPTyear');
$wfBibtexEntries['options'] = array('OPTnote', 'OPTabstract', 'OPTpdf', 'OPTps', 'OPTurl');								      

?>
