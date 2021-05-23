<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php 
            $db->sql ="select * from tb_member";
            $list=$db->select(1);
                echo $list->member_name."<br>";
                echo $list->member_username."<br>";
                echo $list->member_password."<br>";
                 echo $list->member_email."<br>";
                  echo $list->member_confirmation."<br>";
                   echo $list->member_authorization."<br>";
                   
             ?>
             
             </div>
        </div>
    </div>
</div>