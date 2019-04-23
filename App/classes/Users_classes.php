<?php

class Users {

	/**
	 * [$_id identifiant de l'utilisateur]
	 * @var [string]
	 */
	private $_id;

	/**
	 * [$_email email de l'utilisateur]
	 * @var [string]
	 */
	private $_email;

	/**
	 * [$_pseudo pseudo de l'utilisateur]
	 * @var [string]
	 */
	private $_pseudo;

	/**
	 * [$_password password de l'utilisateur]
	 * @var [string]
	 */
	private $_password;

	/**
	 * [$_status statut de l'utilisateur]
	 * @var [int]
	 */
	private $_status;

	/**
	 * [$_status description de l'utilisateur]
	 * @var [string]
	 */
	private $_description;

	/**
	 * [$_status date de création de l'utilisateur]
	 * @var [string]
	 */
	private $_created_at;

	/**
	 * [$_status date de modification de l'utilisateur]
	 * @var [string]
	 */
	private $_updated_at;

	/**
	 * [$_status role de l'utilisateur]
	 * @var [int]
	 */
	private $_role;

	/*
	 * -----------------------------------------------------
	 * CONSTRUCTOR
	 * -----------------------------------------------------
	 */
	public function __construct() {

		// code du constructeur ici...

	}


	/*
	 * -----------------------------------------------------
	 * GETTERS
	 * -----------------------------------------------------
	 */
	
	/**
	 * [getId méthode pour récupérer l'ID de l'utilisateur]
	 * @return [int] [identifiant de l'utilisateur]
	 */
	public function getId() {
		return $this->_id;	
	}

	/**
	 * [getEmail méthode pour récupérer l'EMAIL de l'utilisateur]
	 * @return [string] [email de l'utilisateur]
	 */
	public function getEmail() {
		return $this->_email;
	}

	/**
	 * [getPseudo méthode pour récupérer le PSEUDO de l'utilisateur]
	 * @return [string] [pseudo de l'utilisateur]
	 */
	public function getPseudo() {
		return $this->_pseudo;
	}

	/**
	 * [getStatus méthode pour récupérer le STATUS de l'utilisateur]
	 * @return [int] [status de l'utilisateur]
	 */
	public function getStatus() {
		return $this->_status;
	}

	/**
	 * [getDescription méthode pour récupérer la DESCRIPTION de l'utilisateur]
	 * @return [string] [description de l'utilisateur]
	 */
	public function getDescription() {
		return $this->_description;
	}

	/**
	 * [getCreatedAt méthode pour récupérer la DATE DE CREATION de l'utilisateur]
	 * @return [string] [date de création de l'utilisateur]
	 */
	public function getCreatedAt() {
		return $this->_created_at;
	}

	/**
	 * [getUpdatedAt méthode pour récupérer la DATE DE MISE A JOUR de l'utilisateur]
	 * @return [string] [date de la mise à jours de l'utilisateur]
	 */
	public function getUpdatedAt() {
		return $this->_updated_at;
	}

	/**
	 * [getRole méthode pour récupérer le ROLE de l'utilisateur]
	 * @return [int] [role de l'utilisateur]
	 */
	public function getRole() {
		return $this->_role;
	}


	/*
	 * -----------------------------------------------------
	 * SETTERS
	 * -----------------------------------------------------
	 */

	/**
	 * [setId méthode pour éditer l'ID de l'utilisateur]
	 * @param int $id [description]
	 */
	public function setId(int $id) {
		$this->_id = $id;	
	}

	/**
	 * [setEmail méthode pour éditer l'EMAIL de l'utilisateur]
	 * @param string $email [description]
	 */
	public function setEmail(string $email) {
		$this->_email = $email;
	}

	/**
	 * [setPseudo méthode pour éditer le PSEUDO de l'utilisateur]
	 * @param string $pseudo [description]
	 */
	public function setPseudo(string $password) {
		$this->_pseudo = $pseudo;
	}

	/**
	 * [setPassword méthode pour éditer le MOT DE PASSE de l'utilisateur]
	 * @param string $password [description]
	 */
	public function setPassword(string $password) {
		$this->_password = $password;
	}

	/**
	 * [setStatus méthode pour éditer le STATUS de l'utilisateur]
	 * @param int $status [description]
	 */
	public function setStatus(int $status) {
		$this->_status = $status;
	}

	/**
	 * [setDescription méthode pour éditer la DESCRIPTION de l'utilisateur]
	 * @param string $description [description]
	 */
	public function setDescription(string $description) {
		$this->_description = $description;
	}

	/**
	 * [setUpdatedAt méthode pour éditer la DATE DE MISE A JOUR de l'utilisateur]
	 * @param string $updated_at [description]
	 */
	public function setUpdatedAt(string $updated_at) {
		$this->_updated_at = $updated_at;
	}

	/**
	 * [setRole méthode pour éditer le ROLE de l'utilisateur]
	 * @param int $role [description]
	 */
	public function setRole(int $role) {
		$this->_role = $role;
	}
}
