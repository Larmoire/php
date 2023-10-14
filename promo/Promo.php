<?php require "Etudiant.php";

class Promo
{
    private array $promo = array();

    /**
     * @throws Exception
     */
    public function addEtu(Etudiant $etudiant) : Void {
        $no = $etudiant->getNo();
        if(array_key_exists($no,$this->promo)){
            throw new Exception("L'étudiant $no existe déjà dans la promo.");
        }
        $this->promo[$no] = $etudiant;
    }

    /**
     * @throws Exception
     */
    public function delEtu(Etudiant $etudiant) : Void {
        if(array_key_exists($etudiant->getNo(),$this->promo)){
            unset($this->promo[$etudiant->getNo()]);
        }
        else {
            throw new Exception("L'étudiant n'existe pas dans la promo.");
        }
    }
    public function getPromoMoy(): array
    {
        $arr = [];
        foreach ($this->promo as $etu) {
            if($etu::class == Etudiant::class){
                $arr[] = $etu->getMoyenne();
            }
        }
        return $arr;
    }

    /**
     * @throws Exception
     */
    public function getMoyenne(): float
    {
        if(empty(self::getPromoMoy())){
            throw new Exception("Il ne peut y avoir de moyenne pour une promo vide.");
        }
        return array_sum(self::getPromoMoy())/count(self::getPromoMoy());
    }
}