 

<?php
class crud {
 private $db;
 function __construct($dbc) {
  $this->db = $dbc;
 }
 //<---GENERATED CODE FOR INSERT--->//
 public function create($ff_timestamp_ff, $receive_date_ff, $amount_received_ff, $mode_receive_ff, $Planned_for_ff, $remarks_ff, $post_owner_ff) {
  try {
 $stmt = $this->db->prepare("INSERT INTO finance_received(ff_timestamp, receive_date, amount_received, mode_receive, Planned_for, remarks, post_owner) VALUES(:ff_timestamp_ff, :receive_date_ff, :amount_received_ff, :mode_receive_ff, :Planned_for_ff, :remarks_ff, :post_owner_ff)");
 $stmt->bindParam(":ff_timestamp_ff",$ff_timestamp_ff);
 $stmt->bindParam(":receive_date_ff",$receive_date_ff);
 $stmt->bindParam(":amount_received_ff",$amount_received_ff);
 $stmt->bindParam(":mode_receive_ff",$mode_receive_ff);
 $stmt->bindParam(":Planned_for_ff",$Planned_for_ff);
 $stmt->bindParam(":remarks_ff",$remarks_ff);
 $stmt->bindParam(":post_owner_ff",$post_owner_ff);
 $stmt->execute();
 return true;
  } catch(PDOException $e) {
 echo $e->getMessage();
 return false;
  }
 }
 
 public function getID($id) {
$stmt = $this->db->prepare("SELECT * FROM finance_received WHERE id=:id");
  $stmt->execute(array(":id"=>$id));
  $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }
 //<---GENERATED CODE FOR UPDATE--->//
 public function update($id, $ff_timestamp_ff, $receive_date_ff, $amount_received_ff, $mode_receive_ff, $Planned_for_ff, $remarks_ff, $post_owner_ff) {
 try {
 $stmt = $this->db->prepare("UPDATE finance_received SET ff_timestamp=:ff_timestamp_ff, receive_date=:receive_date_ff, amount_received=:amount_received_ff, mode_receive=:mode_receive_ff, Planned_for=:Planned_for_ff, remarks=:remarks_ff, post_owner=:post_owner_ff WHERE id=:id");
$stmt->bindparam(":ff_timestamp_ff",$ff_timestamp_ff);
$stmt->bindparam(":receive_date_ff",$receive_date_ff);
$stmt->bindparam(":amount_received_ff",$amount_received_ff);
$stmt->bindparam(":mode_receive_ff",$mode_receive_ff);
$stmt->bindparam(":Planned_for_ff",$Planned_for_ff);
$stmt->bindparam(":remarks_ff",$remarks_ff);
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
  $stmt = $this->db->prepare("DELETE FROM finance_received WHERE id=:id");
  $stmt->bindparam(":id", $id);
  $stmt->execute();
  return true;
 }
 
 
}
?>
