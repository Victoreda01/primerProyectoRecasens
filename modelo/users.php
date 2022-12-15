<?php

class users{
    private $idUser;
	private $nombre;
	private $apellidos;
	private $email;
	private $pass;
	private $fecha_creacion;
	private $direccion;
	private $rol;



    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

	/**
	 * Get the value of nombre
	 */ 
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Set the value of nombre
	 *
	 * @return  self
	 */ 
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;

		return $this;
	}

	/**
	 * Get the value of apellidos
	 */ 
	public function getApellidos()
	{
		return $this->apellidos;
	}

	/**
	 * Set the value of apellidos
	 *
	 * @return  self
	 */ 
	public function setApellidos($apellidos)
	{
		$this->apellidos = $apellidos;

		return $this;
	}

	/**
	 * Get the value of email
	 */ 
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 *
	 * @return  self
	 */ 
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of pass
	 */ 
	public function getPass()
	{
		return $this->pass;
	}

	/**
	 * Set the value of pass
	 *
	 * @return  self
	 */ 
	public function setPass($pass)
	{
		$this->pass = $pass;

		return $this;
	}

	/**
	 * Get the value of fecha_creacion
	 */ 
	public function getFecha_creacion()
	{
		return $this->fecha_creacion;
	}

	/**
	 * Set the value of fecha_creacion
	 *
	 * @return  self
	 */ 
	public function setFecha_creacion($fecha_creacion)
	{
		$this->fecha_creacion = $fecha_creacion;

		return $this;
	}

	/**
	 * Get the value of direccion
	 */ 
	public function getDireccion()
	{
		return $this->direccion;
	}

	/**
	 * Set the value of direccion
	 *
	 * @return  self
	 */ 
	public function setDireccion($direccion)
	{
		$this->direccion = $direccion;

		return $this;
	}

	/**
	 * Get the value of rol
	 */ 
	public function getRol()
	{
		return $this->rol;
	}

	/**
	 * Set the value of rol
	 *
	 * @return  self
	 */ 
	public function setRol($rol)
	{
		$this->rol = $rol;

		return $this;
	}
}
?>