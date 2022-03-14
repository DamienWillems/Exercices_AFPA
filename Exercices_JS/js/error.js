function notANumber() {
	for (panombre of arguments) 
		if (isNaN(panombre)) throw Error("Veuillez entrer un nombre.");
	return 0;
}
function emptyField() {
	for (cvide of arguments)
		if (cvide == "") throw Error("Veuillez remplir le champ.");
	return 0;
}