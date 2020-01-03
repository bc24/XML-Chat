<?PHP
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

header('Content-Type: application/json');

print '{
    "titel": "meine Telefonbuchnummern",
    "eintrag": [
        {
            "id": "001",
            "saved": "yes",
            "nummer": "01575000000",
            "name": "Musterman",
            "vorname": "Jakob"
        },
        {
            "id": "002",
            "saved": "no",
            "nummer": "01575000001",
            "name": "Nachname",
            "vorname": "Sara"
        },
        {
            "id": "003",
            "nummer": "01575000002",
            "name": "Müller",
            "vorname": "Sven"
        }
    ]
    }';
?>