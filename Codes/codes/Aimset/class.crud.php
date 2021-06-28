 

<?php
class crud {
 private $db;
 function __construct($dbc) {
  $this->db = $dbc;
 }
 //<---GENERATED CODE FOR INSERT--->//
 public function create($ami_name_ff, $ff_timestamp_ff, $Date_from_ff, $Date_to_ff, $remarks_aim_ff, $self_percentage_ff, $current_status_ff, $post_owner_ff) {
  try {
 $stmt = $this->db->prepare("INSERT INTO aimset(ami_name, ff_timestamp, Date_from, Date_to, remarks_aim, self_percentage, current_status, post_owner) VALUES(:ami_name_ff, :ff_timestamp_ff, :Date_from_ff, :Date_to_ff, :remarks_aim_ff, :self_percentage_ff, :current_status_ff, :post_owner_ff)");
 $stmt->bindParam(":ami_name_ff",$ami_name_ff);
 $stmt->bindParam(":ff_timestamp_ff",$ff_timestamp_ff);
 $stmt->bindParam(":Date_from_ff",$Date_from_ff);
 $stmt->bindParam(":Date_to_ff",$Date_to_ff);
 $stmt->bindParam(":remarks_aim_ff",$remarks_aim_ff);
 $stmt->bindParam(":self_percentage_ff",$self_percentage_ff);
 $stmt->bindParam(":current_status_ff",$current_status_ff);
 $stmt->bindParam(":post_owner_ff",$post_owner_ff);
 $stmt->execute();
 return true;
  } catch(PDOException $e) {
 echo $e->getMessage();
 return false;
  }
 }
 
 public function getID($id) {
$stmt = $this->db->prepare("SELECT * FROM aimset WHERE id=:id");
  $stmt->execute(array(":id"=>$id));
  $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }
 //<---GENERATED CODE FOR UPDATE--->//
 public function update($id, $ami_name_ff, $ff_timestamp_ff, $Date_from_ff, $Date_to_ff, $remarks_aim_ff, $self_percentage_ff, $current_status_ff, $post_owner_ff) {
 try {
 $stmt = $this->db->prepare("UPDATE aimset SET ami_name=:ami_name_ff, ff_timestamp=:ff_timestamp_ff, Date_from=:Date_from_ff, Date_to=:Date_to_ff, remarks_aim=:remarks_aim_ff, self_percentage=:self_percentage_ff, current_status=:current_status_ff, post_owner=:post_owner_ff WHERE id=:id");
$stmt->bindparam(":ami_name_ff",$ami_name_ff);
$stmt->bindparam(":ff_timestamp_ff",$ff_timestamp_ff);
$stmt->bindparam(":Date_from_ff",$Date_from_ff);
$stmt->bindparam(":Date_to_ff",$Date_to_ff);
$stmt->bindparam(":remarks_aim_ff",$remarks_aim_ff);
$stmt->bindparam(":self_percentage_ff",$self_percentage_ff);
$stmt->bindparam(":current_status_ff",$current_status_ff);
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
  $stmt = $this->db->prepare("DELETE FROM aimset WHERE id=:id");
  $stmt->bindparam(":id", $id);
  $stmt->execute();
  return true;
 }
 
 
}
?>
