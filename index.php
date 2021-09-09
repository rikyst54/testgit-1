
<?php
Prout
class Client
{
    private string $nom = "";
    private string $prenom = "";
    private string $email = "";
    private string $tel = "";
    private string $adresse = "";
    private string $ville = "";
    private int $codePostal = 0;
    private int $age = 0;
    private DateTime $dateNaissance;

	public function __construct(string $nom, string $prenom, string $email, string $tel, string $adresse, string $ville, int $codePostal, int $age,int $jour,int $mois,int $annee)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->codePostal = $codePostal;
        $this->age = $age;
        $dateAnniv = new DateTime();
        $dateAnniv->setDate($annee,$mois,$jour);
        $this->dateNaissance = $dateAnniv;
    }

    public function setNom(string $nom){
        $this->nom=$nom;
    }
    
    public function getNom(){
        return $this->nom;
    }

    public function setPrenom(string $prenom){
        $this->prenom=$prenom;
    }
    
    public function getprenom(){
        return $this->prenom;
    }

    public function setEmail(string $email){
        $this->email=$email;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setTel(string $tel){
        $this->tel=$tel;
    }
    
    public function getTel(){
        return $this->tel;
    }

    public function setAdresse(string $adresse){
        $this->adresse=$adresse;
    }
    
    public function getAdresse(){
        return $this->adresse;
    }
    
    public function setVille(string $ville){
        $this->ville=$ville;
    }
    
    public function getVille(){
        return $this->ville;
    }
    
    public function setCodePostal(string $codePostal){
        $this->codePostal=$codePostal;
    }
    
    public function getCodePostal(){
        return $this->codePostal;
    }

    public function setAge(string $age){
        $this->age=$age;
    }
    
    public function getAge(){
        return $this->age;
    }
    public function afficher()
    {
        echo "Nom : " . $this->nom . "<br>";
        echo "Prénom : " . $this->prenom . "<br>";
        echo "Tèl. : " . $this->tel . "<br>";
        echo "Email : " . $this->email . "<br>";
        echo "Adresse : " . $this->adresse . "<br>";
        echo "Ville : " . $this->ville . "<br>";
        echo "CodePostal : " . $this->codePostal . "<br>";
        echo "Age : " . $this->age;
    }

    public function setDateNaissance(int $annee,int $mois,int $jour){
        $this->dateNaissance->setDate($annee,$mois,$jour);
       }
       public function getDateNaissance(){
        return $this->dateNaissance->format('d-m-Y');
    }
    

function anniversaire() { 
    $dateDuJour=new DateTime('now');
    
   if ($this->dateNaissance->format('d-m')==($dateDuJour)->format('d-m')) { 
       return 'joyeux anniversaire '; 
   } else {
       return  'c\'est pas ton anniversaire' ;

   }
    
}
}
 $client=new client("Cgesgr","atzrqs","i.qfzwzrdqdmail.com", "06.21.0zrdq95", "rue lQFS<ouis quiAQdnquet","longudfsyon",542000,26,9,9,2021);


echo $client->anniversaire();
$aujo=new DateTime(('now'));

var_dump($client->afficher());

//  echo"<pre>";
//  print_r($client);
//  echo"</pre>";
