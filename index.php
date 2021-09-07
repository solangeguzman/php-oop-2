<?php

class EShop
{

    public $nome;
    public $address;
    private $prodotti = [];
    private $users = [];

    public function __construct(string $nome, string $address) {$this->nome = $nome; $this->address = $address;}
    public function addProdotti(prodotti $nomeProdotto){$this->prodotti[] = $nomeProdotto;}
    public function getprodotti(){return $this->prodotti;}
    public function getUsers(){return $this->users;}
    public function addUser(User $usernome) {$this->users[] = $usernome;}
    public function buyProduct(Product $nomeProduct)
    {
        return $nomeProduct->prezzo ;
    }
}


class prodotti
{public $nomeProdotto; public $prezzo;}

class prodotto extends prodotti
{
    public $sectionProdotto;
    public function __construct(string $nomeProdotto, int $prezzo, bool $sectionProdotto)
    {
        $this->nomeProdotto = $nomeProdotto;
        $this->prezzo = $prezzo;
        $this->sectionProdotto = $sectionProdotto;
    }
}


class User
{
    public $usernome;
    private $scont = 0;
     private $card;

    public function __construct(string $userNome, int $card)
    {
        $this->userNome = $userNome;
        $this->card = $card;
    }
}

//1. creiamo l'eshop
$EshopEU = new EShop('EshopEU', 'cairoli,3');



// 2. creiamo diversi prodotti
$computer = new prodotto('computer', 200, 3, );
$tablet = new prodotto('tablet', 10, 100,2,);
$telefono = new prodotto('telefono', 50, 3, );


// 3. aggiungiamoli all'eshop
$EshopEU->addProdotti($computer);
$EshopEU->addProdotti($tablet);
$EshopEU->addProdotti($telefono);

var_dump($EshopEU->getprodotti());

// 4. creaiamo l'utente normale
$vanessa = new User('Vanessa Luppi', 909453560);
$makarena = new User('Makarena Brich', 111111111);


// 5. creiamo un utente premium
$EshopEU->addUser($vanessa);
$EshopEU->addUser($makarena);

var_dump($EshopEU->getUsers());

// 6. l'utente normale acquista un prodotto
var_dump($EshopEU->buyProduct($tablet));

// 7. l'utente premium acquista un altro prodotto (e riceve lo scont)




