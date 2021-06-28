 

<?php
class crud {
 private $db;
 function __construct($dbc) {
  $this->db = $dbc;
 }
 //<---GENERATED CODE FOR INSERT--->//
 public function create($time_stamp_expences_ff, $expense_date_ff, $AmountSpend_ff, $Spend_mode_ff, $progressive_spend_ff, $spend_planning_ff, $remarks_spend_ff, $post_owner_ff) {
  try {
 $stmt = $this->db->prepare("INSERT INTO Expences(time_stamp_expences, expense_date, AmountSpend, Spend_mode, progressive_spend, spend_planning, remarks_spend, post_owner) VALUES(:time_stamp_expences_ff, :expense_date_ff, :AmountSpend_ff, :Spend_mode_ff, :progressive_spend_ff, :spend_planning_ff, :remarks_spend_ff, :post_owner_ff)");
 $stmt->bindParam(":time_stamp_expences_ff",$time_stamp_expences_ff);
 $stmt->bindParam(":expense_date_ff",$expense_date_ff);
 $stmt->bindParam(":AmountSpend_ff",$AmountSpend_ff);
 $stmt->bindParam(":Spend_mode_ff",$Spend_mode_ff);
 $stmt->bindParam(":progressive_spend_ff",$progressive_spend_ff);
 $stmt->bindParam(":spend_planning_ff",$spend_planning_ff);
 $stmt->bindParam(":remarks_spend_ff",$remarks_spend_ff);
 $stmt->bindParam(":post_owner_ff",$post_owner_ff);
 $stmt->execute();
 return true;
  } catch(PDOException $e) {
 echo $e->getMessage();
 return false;
  }
 }
 
 public function getID($id) {
$stmt = $this->db->prepare("SELECT * FROM Expences WHERE id=:id");
  $stmt->execute(array(":id"=>$id));
  $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }
 //<---GENERATED CODE FOR UPDATE--->//
 public function update($id, $time_stamp_expences_ff, $expense_date_ff, $AmountSpend_ff, $Spend_mode_ff, $progressive_spend_ff, $spend_planning_ff, $remarks_spend_ff, $post_owner_ff) {
 try {
 $stmt = $this->db->prepare("UPDATE Expences SET time_stamp_expences=:time_stamp_expences_ff, expense_date=:expense_date_ff, AmountSpend=:AmountSpend_ff, Spend_mode=:Spend_mode_ff, progressive_spend=:progressive_spend_ff, spend_planning=:spend_planning_ff, remarks_spend=:remarks_spend_ff, post_owner=:post_owner_ff WHERE id=:id");
$stmt->bindparam(":time_stamp_expences_ff",$time_stamp_expences_ff);
$stmt->bindparam(":expense_date_ff",$expense_date_ff);
$stmt->bindparam(":AmountSpend_ff",$AmountSpend_ff);
$stmt->bindparam(":Spend_mode_ff",$Spend_mode_ff);
$stmt->bindparam(":progressive_spend_ff",$progressive_spend_ff);
$stmt->bindparam(":spend_planning_ff",$spend_planning_ff);
$stmt->bindparam(":remarks_spend_ff",$remarks_spend_ff);
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
  $stmt = $this->db->prepare("DELETE FROM Expences WHERE id=:id");
  $stmt->bindparam(":id", $id);
  $stmt->execute();
  return true;
 }
 
 
}
?>
