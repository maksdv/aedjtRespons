<?php
header("Content-disposition: attachment; filename=../documentos/formulario.doc");
header("Content-type: application/pdf");
readfile("../documentos/formulario.doc");
?>