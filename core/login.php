<?php
 
	if(isset($_POST["enviar"])) {
 
		require("conexion.php");
 
			$loginNombre = $_POST["usuario"];
			$loginPassword = md5($_POST["password"]);
 
			$consulta = "SELECT * FROM login WHERE username='$loginNombre' AND password='$loginPassword'";
			
			if($resultado = $mysqli->query($consulta)) {
				while($row = $resultado->fetch_array()) {
 
					$userok = $row["username"];
					$passok = $row["password"];
				}
				$resultado->close();
			}
			$mysqli->close();
 
 			$type = "SELECT privilege FROM login WHERE username='$loginNombre'";
 			
 			if($resultadotype = $mysqli->query($type)) {
				while($row = $resultadotype->fetch_array()) {
					$typeok = $row["privilege"];
				}
				$resultadotype->close();
			}
			$mysqli->close();
 
			if(isset($loginNombre) && isset($loginPassword)) {
 
				if($loginNombre == $userok && $loginPassword == $passok) {
 
					session_start();
					$_SESSION["logueado"] = TRUE;
					$_SESSION["type"] = $typeok;
					$_SESSION["user"] = $loginNombre;
					header("Location: admin.php");
 
				}
				else {
					header("Location: ../index.php?error=login");
				}
 
			}
 
		} else {
			header("Location: index.php");
		}
 
 ?>