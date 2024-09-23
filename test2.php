<?php
session_start();
//session_regenerate_id(true);
error_reporting(0);
?>
<?php
include 'conn.php';
include 'conn_for_erps_db.php';

if(isset($_SESSION['admin'])){
		header('location: admin/home.php');
	}

	if(isset($_SESSION['user'])){
		$conn = $pdo->open();
		$connForErpsDb = $pdoForErps->open();

		try{
			$stmt = $connForErpsDb->prepare("SELECT * FROM users WHERE id=:id");
			$stmt->execute(['id'=>$_SESSION['user']]);
			$user = $stmt->fetch();
		}

		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
		$pdoForErps->close();
	}
?>