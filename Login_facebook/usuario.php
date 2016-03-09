
<?php

class Usuario{
private $nome;
private $sobrenome;
private $endereco;
private $email;
private $confirmacaoemail;
private $senha;
private $confirmacaosenha;
public function setnome($nome){
$this->nome = $nome;
}
public function setsobrenome($sobrenome){
$this->sobrenome = $sobrenome;
}
public function setendereco($endereco){
$this->endereco = $endereco;
}
public function setemail($email){
$this->email = $email;
}
public function setconfirmacaoemail($confirmacaoemail){
$this->confirmacaoemail = $confirmacaoemail;
}
public function setsenha($senha){
$this->senha = $senha;
}
public function setconfirmacaosenha($confirmacaosenha){
$this->confirmacaosenha = $confirmacaosenha;
}
public function getnome(){
return $this->nome;
}
public function getsobrenome(){
return $this->sobrenome;
}
public function getendereco(){
return $this->endereco;
}
public function getemail(){
return $this->email;
}
public function getconfirmacaoemail(){
return $this->confirmacaoemail;
}
public function getsenha(){
return $this->senha;
}
public function getconfirmacaosenha(){
return $this->confirmacaosenha;
}
public function createTextArquive(){
$arquive = fopen(self::getnome().'.txt','w');
fwrite($arquive, self::getnome());
fwrite($arquive, "\r\n");
fwrite($arquive, self::getsobrenome());
fwrite($arquive, "\r\n");
fwrite($arquive, self::getendereco());
fwrite($arquive, "\r\n");
fwrite($arquive, self::getemail());
fwrite($arquive, "\r\n");
fwrite($arquive, self::getconfirmacaoemail());
fwrite($arquive, "\r\n");
fwrite($arquive, self::getsenha());
fwrite($arquive, "\r\n");
fwrite($arquive, self::getconfirmacaosenha());
fclose($arquive);
}
}

?>
