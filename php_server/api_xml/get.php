<?PHP
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

header("Content-type: text/xml");

print '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><telefonbuch><titel>meine Telefonbuchnummern</titel><eintrag id="001" saved="yes"><nummer>01575000000</nummer><name>Musterman</name><vorname>Max</vorname></eintrag><eintrag id="002"  saved="no"><nummer>01575000001</nummer><name>Nachname</name><vorname>Sara</vorname></eintrag><eintrag id="003"><nummer>01575000002</nummer><name>Müller</name><vorname>Sven</vorname></eintrag></telefonbuch>';
?>