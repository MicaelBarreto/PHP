<?php

    class Company{
        private $id;
        private $rs;
        private $nf;
        private $cnpj;
        private $ie;
        private $addr;
        private $comp;
        private $tel;
        private $email;

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setRs($rs) {
            $this->rs = $rs;
        }
    
        public function getRs() {
            return $this->rs;
        }

        public function setNf($nf) {
            $this->nf = $nf;
        }
    
        public function getNf() {
            return $this->nf;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }
    
        public function getCnpj() {
            return $this->cnpj;
        }

        public function setIe($ie) {
            $this->ie = $ie;
        }
    
        public function getIe() {
            return $this->ie;
        }

        public function setAddr($addr) {
            $this->addr = $addr;
        }
    
        public function getAddr() {
            return $this->addr;
        }

        public function setComp($comp) {
            $this->comp = $comp;
        }
    
        public function getComp() {
            return $this->comp;
        }

        public function setTel($tel) {
            $this->tel = $tel;
        }
    
        public function getTel() {
            return $this->tel;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function getEmail() {
            return $this->email;
        }
    }