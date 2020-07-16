pragma solidity ^0.5.2;

contract  Documentos {
	mapping (string=>bool) public registro;

	function guardar (string memory _datosRegistrar) public {
		registro[_datosRegistrar] = true;
	}

	function consultar(string memory _datosRegistrar) public view returns (bool _datosRegistrado) {
		return  registro[_datosRegistrar];
	}
}
