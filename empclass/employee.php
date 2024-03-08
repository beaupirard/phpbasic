<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Code Display</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="code-container">
<pre>
&lt;?php
<?php
class Employee { 
    // properties aanmaken als referentie punt voor de getters en setters
    private $naam;
    private $functie;
    private $loon;

    // Nu een constructor maken
    public function __construct( $naam, $functie, $loon ) {
        $this->naam = $naam;
        $this->functie = $functie;
        $this->loon = $loon;
    }

    // nu de universal getter maken
    public function get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            return null;
        }
    }

    // nu de setter maken voor onze naam
    public function setName($name) {
        $this->naam->setName($name);
    }

    // setter voor onze functie
    public function setFunctie($functie) {
        $this->functie = $functie;
    }

    // en uiteindelijk nog een setter voor onze loon
    public function setLoon($loon) {
        $this->loon = $loon;
    }
}

// nu een instantie maken van de employee
$employee1 = new Employee("Beau Pirard", "Backend developer", 2300);

// setter voor de loon te updaten
$employee1->setLoon(2500);

// hier gebruiken we een getter voor de loon op te vragen
echo "Loon: " . $employee1->get('loon') ."\n";

// en uiteindelijk de universal getter voor onze naam!
echo "Naam: " . $employee1->get('naam') ."\n";

// ook nog een universal getter voor onze functie
echo "Functie: " . $employee1->get('functie') ."\n";
?>
?&gt;
</pre>
</div>

</body>
</html>