<?php

class Users extends Db{

    public function add_user($un, $pass, $em, $phn, $add, $ref_id)
    {
        $uip = $this->user_ip();
        $status = "Inactive";
        $this->query = $this->handeller->query("SELECT * FROM `member_acc` WHERE id='$ref_id'");
        $row = $this->query->fetch(PDO::FETCH_ASSOC);
        $ref_bal = $row['amount_dr'];
        if ($ref_bal < 15) {
            echo "<script>alert('Sorry!!! Your Referal Has Not enough privilage')</script>";
            return $this->url_return(array('login.php', 'Blance Not', 'error'));
        }
        $this->query2 = $this->handeller->query("SELECT * FROM `users` WHERE username = '$un'");
        if ($this->query2->rowCount() > 0) {
            echo "<script>alert('Username Already Exits')</script>";
        } else {
            $userdata = array($un, $pass, $em, $phn, $ref_id, $uip, $status);
            $memberdata = array();
            $this->query3 = $this->handeller->prepare("INSERT INTO `users`(`username`, `password`, `email`, `phone`, `created_on`, `ref_id`, `ip_address`, `status`)VALUES(?, ?, ?, ?,NOW(), ?, ?, ?)");
            $this->query4 = $this->handeller->prepare("INSERT INTO `member_profile`(username,status)VALUES(?, ?)");
            if ($this->query3->execute($userdata) && $this->query4->execute($memberdata)) {

                $this->query5 =$this->handeller->query("SELECT * FROM `member_profile` WHERE username='$un'");
                $row2 = $this->query5->fetch(PDO::FETCH_ASSOC);
                $id = $row2['id'];
                $this->query6 =$this->handeller->query("SELECT MAX(ref_rank) AS max FROM `member_ref_earn` WHERE `id`='$ref_id'");
                $row3 = $this->query6->fetch(PDO::FETCH_ASSOC);
                $largestNumber = $row3['max'];
                $ref_rank = $largestNumber + 1;
                $this->query7 = $this->handeller->query("INSERT INTO member_ref(member_id,ref_id,ref_rank)VALUES('$id','$ref_id','$ref_rank')");
                return $this->url_return(array('login.php', 'Registration Successfull', 'success'));
            } else {
                return $this->url_return(array('signup.php' , 'User not added ', 'error'));
            }
        }
    }


}

?>