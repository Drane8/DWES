<?php

/**
 *       
 */
//SI
class ValidadorForm
{
	private $errores;
	private $reglasValidacion;
	private $valido;

	public function construct()
	{
		$this->errores = array();
		$this->reglasValidacion = null;
		$this->valido = false;
	}

	public function validar(array $fuentes, array $reglasValidacion)
	{
		foreach ($reglasValidacion as $campo => $reglas) {
			if (isset($fuentes[$campo])) {
				if (isset($reglas["min"]) && ($fuentes[$campo]) < $reglas["min"]) {
					$this->addError($campo, "error, la edad tiene  que ser mayor o igual " . $reglas['min']);
				}
				if (isset($reglas["required"]) && !empty($fuentes[$campo]) != $reglas["required"]) {
					$this->addError($campo, "error, $campo requerido");
				}
			}
		}
		$this->valido = empty($this->errores);
	}

	public function addError(string $nombreCampo, string $error)
	{
		$this->errores[$nombreCampo] = $error;
	}

	public function esValido()
	{
		return $this->valido;
	}

	public function getErrores()
	{
		return $this->errores;
	}


	public function getMensajeError($campo)
	{
		if (isset($this->errores[$campo])) {
			return $this->errores[$campo];
		}
		return "";
	}
}
