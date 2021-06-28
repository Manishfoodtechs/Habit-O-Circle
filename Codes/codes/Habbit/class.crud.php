 

<?php
class crud {
 private $db;
 function __construct($dbc) {
  $this->db = $dbc;
 }
 //<---GENERATED CODE FOR INSERT--->//
 public function create($habbit_timestamp_ff, $control_start_date_ff, $control_end_date_ff, $status_date_ff, $self_progress_ff, $remarks_habbit_ff, $next_estimation_date_ff, $make_public_ff, $post_owner_ff) {
  try {
 $stmt = $this->db->prepare("INSERT INTO habbit(habbit_timestamp, control_start_date, control_end_date, status_date, self_progress, remarks_habbit, next_estimation_date, make_public, post_owner) VALUES(:habbit_timestamp_ff, :control_start_date_ff, :control_end_date_ff, :status_date_ff, :self_progress_ff, :remarks_habbit_ff, :next_estimation_date_ff, :make_public_ff, :post_owner_ff)");
 $stmt->bindParam(":habbit_timestamp_ff",$habbit_timestamp_ff);
 $stmt->bindParam(":control_start_date_ff",$control_start_date_ff);
 $stmt->bindParam(":control_end_date_ff",$control_end_date_ff);
 $stmt->bindParam(":status_date_ff",$status_date_ff);
 $stmt->bindParam(":self_progress_ff",$self_progress_ff);
 $stmt->bindParam(":remarks_habbit_ff",$remarks_habbit_ff);
 $stmt->bindParam(":next_estimation_date_ff",$next_estimation_date_ff);
 $stmt->bindParam(":make_public_ff",$make_public_ff);
 $stmt->bindParam(":post_owner_ff",$post_owner_ff);
 $stmt->execute();
 return true;
  } catch(PDOException $e) {
 echo $e->getMessage();
 return false;
  }
 }
 
 public function getID($id) {
$stmt = $this->db->prepare("SELECT * FROM habbit WHERE id=:id");
  $stmt->execute(array(":id"=>$id));
  $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }
 //<---GENERATED CODE FOR UPDATE--->//
 public function update($id, $habbit_timestamp_ff, $control_start_date_ff, $control_end_date_ff, $status_date_ff, $self_progress_ff, $remarks_habbit_ff, $next_estimation_date_ff, $make_public_ff, $post_owner_ff) {
 try {
 $stmt = $this->db->prepare("UPDATE habbit SET habbit_timestamp=:habbit_timestamp_ff, control_start_date=:control_start_date_ff, control_end_date=:control_end_date_ff, status_date=:status_date_ff, self_progress=:self_progress_ff, remarks_habbit=:remarks_habbit_ff, next_estimation_date=:next_estimation_date_ff, make_public=:make_public_ff, post_owner=:post_owner_ff WHERE id=:id");
$stmt->bindparam(":habbit_timestamp_ff",$habbit_timestamp_ff);
$stmt->bindparam(":control_start_date_ff",$control_start_date_ff);
$stmt->bindparam(":control_end_date_ff",$control_end_date_ff);
$stmt->bindparam(":status_date_ff",$status_date_ff);
$stmt->bindparam(":self_progress_ff",$self_progress_ff);
$stmt->bindparam(":remarks_habbit_ff",$remarks_habbit_ff);
$stmt->bindparam(":next_estimation_date_ff",$next_estimation_date_ff);
$stmt->bindparam(":make_public_ff",$make_public_ff);
$stmt->bindparam(":post_owner_ff",$post_owner_ff);
 $stmt->bindparam(":id",$id);
 $stmt->execute();
 return true;
  } catch(PDOException $e) {
 echo $e->getMessage();
 return false;
  }
 }
 
 //<---GENERATED CODE FOR DELETE--->//
 public function delete($id) {
  $stmt = $this->db->prepare("DELETE FROM habbit WHERE id=:id");
  $stmt->bindparam(":id", $id);
  $stmt->execute();
  return true;
 }
 
 
}
?>
