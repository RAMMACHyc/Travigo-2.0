<?php 

class Travigo {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM travell');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
	static public function getTravell($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM travell WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $travell = $statement->fetch(PDO::FETCH_OBJ);
            return $travell;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
	
	static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO travell(name,prix,date,image) VALUES (:name,:prix,:date,:image)");
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':prix', $data['prix'], PDO::PARAM_STR);
        $stmt->bindParam(':date', $data['date'], PDO::PARAM_STR);
        $stmt->bindParam(':image', $data['image'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            header('Location: http://localhost/travigo2.0/tours');
            return 'ok';


        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }


	static public function update($data)
    {
        $stmt = DB::connect()->prepare("UPDATE travell SET name = :name,prix = :prix,image = :image,date =:date WHERE id = :id");

        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':prix',$data['prix']);
        $stmt->bindParam(':image',$data['image']);
		$stmt->bindParam(':date', $data['date']);
        if ($stmt->execute()) {

            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $query = "DELETE FROM travell WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            if ($statement->execute()) {

                return 'ok';
            } else {
                return 'error';
            }
            $statement->close();
            $statement = null;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}
                 
?>