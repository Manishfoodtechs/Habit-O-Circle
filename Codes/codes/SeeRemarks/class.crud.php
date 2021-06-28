 

<?php
class crud {
 private $db;
 function __construct($dbc) {
  $this->db = $dbc;
 }
 //<---GENERATED CODE FOR INSERT--->//
 public function create($time_stamp_habbit_ff, $control_start_date_ff, $control_end_date_ff, $status_date_ff, $self_progress_ff, $remarks_habbit_ff, $next_estimation_date_ff, $remarks_by_friend_name_ff, $remarks_by_friend_ff, $post_owner_ff) {
  try {
 $stmt = $this->db->prepare("INSERT INTO habbit_friends_remarks(time_stamp_habbit, control_start_date, control_end_date, status_date, self_progress, remarks_habbit, next_estimation_date, remarks_by_friend_name, remarks_by_friend, post_owner) VALUES(:time_stamp_habbit_ff, :control_start_date_ff, :control_end_date_ff, :status_date_ff, :self_progress_ff, :remarks_habbit_ff, :next_estimation_date_ff, :remarks_by_friend_name_ff, :remarks_by_friend_ff, :post_owner_ff)");
 $stmt->bindParam(":time_stamp_habbit_ff",$time_stamp_habbit_ff);
 $stmt->bindParam(":control_start_date_ff",$control_start_date_ff);
 $stmt->bindParam(":control_end_date_ff",$control_end_date_ff);
 $stmt->bindParam(":status_date_ff",$status_date_ff);
 $stmt->bindParam(":self_progress_ff",$self_progress_ff);
 $stmt->bindParam(":remarks_habbit_ff",$remarks_habbit_ff);
 $stmt->bindParam(":next_estimation_date_ff",$next_estimation_date_ff);
 $stmt->bindParam(":remarks_by_friend_name_ff",$remarks_by_friend_name_ff);
 $stmt->bindParam(":remarks_by_friend_ff",$remarks_by_friend_ff);
 $stmt->bindParam(":post_owner_ff",$post_owner_ff);
 $stmt->execute();
 return true;
  } catch(PDOException $e) {
 echo $e->getMessage();
 return false;
  }
 }
 
 public function getID($id) {
$stmt = $this->db->prepare("SELECT * FROM habbit_friends_remarks WHERE id=:id");
  $stmt->execute(array(":id"=>$id));
  $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
  return $editRow;
 }
 //<---GENERATED CODE FOR UPDATE--->//
 public function update($id, $time_stamp_habbit_ff, $control_start_date_ff, $control_end_date_ff, $status_date_ff, $self_progress_ff, $remarks_habbit_ff, $next_estimation_date_ff, $remarks_by_friend_name_ff, $remarks_by_friend_ff, $post_owner_ff) {
 try {
 $stmt = $this->db->prepare("UPDATE habbit_friends_remarks SET time_stamp_habbit=:time_stamp_habbit_ff, control_start_date=:control_start_date_ff, control_end_date=:control_end_date_ff, status_date=:status_date_ff, self_progress=:self_progress_ff, remarks_habbit=:remarks_habbit_ff, next_estimation_date=:next_estimation_date_ff, remarks_by_friend_name=:remarks_by_friend_name_ff, remarks_by_friend=:remarks_by_friend_ff, post_owner=:post_owner_ff WHERE id=:id");
$stmt->bindparam(":time_stamp_habbit_ff",$time_stamp_habbit_ff);
$stmt->bindparam(":control_start_date_ff",$control_start_date_ff);
$stmt->bindparam(":control_end_date_ff",$control_end_date_ff);
$stmt->bindparam(":status_date_ff",$status_date_ff);
$stmt->bindparam(":self_progress_ff",$self_progress_ff);
$stmt->bindparam(":remarks_habbit_ff",$remarks_habbit_ff);
$stmt->bindparam(":next_estimation_date_ff",$next_estimation_date_ff);
$stmt->bindparam(":remarks_by_friend_name_ff",$remarks_by_friend_name_ff);
$stmt->bindparam(":remarks_by_friend_ff",$remarks_by_friend_ff);
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
  $stmt = $this->db->prepare("DELETE FROM habbit_friends_remarks WHERE id=:id");
  $stmt->bindparam(":id", $id);
  $stmt->execute();
  return true;
 }
 
 
}
?>
