<?php

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

	public function __construct(string $nom, string $prenom, string $email, string $tel, string $adresse, string $ville, int $codePostal, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->codePostal = $codePostal;
        $this->age = $age;
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
    public ilyess hack{
	"ilyess fais nimporte quoi" = :)
    }
}
 $client=new client("Cgesgr","atzrqs","i.qfzwzrdqdmail.com", "06.21.0zrdq95", "rue lQFS<ouis quiAQdnquet","longudfsyon",542000,26);

echo"<pre>";
print_r($client);
echo"</pre>";
