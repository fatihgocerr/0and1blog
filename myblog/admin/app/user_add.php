<?php require 'inc/ustkisim.php'; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php
    require 'inc/top_nav.php'; 
    require 'inc/left_nav.php';
    ?>

</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
                 <?php 
                            if ($_SESSION["member_authorization"]=="admin") {
                                # code...
                            ?>
                            
            <div class="col-lg-12">
                <h1 class="page-header"> Yetkili Kullanıcı Ekle</h1>
                <div class="row">
                 <div class="col-lg-12">


                   
                            
                    <?php 

                    if (pisset()) {
                        $tarih=date("Y-m-d");
                        $kullaniciadi=post("username");
                        $kullanicisifre=post("password");
                        $adsoyad=post("name");
                        $mail=post("email");
                        $uyeonay=post("confirmation");
                        $uyeyetki=post("authorization");
                        
                        $md5sifre=md5($kullanicisifre);

                        if ($kullaniciadi=="" and $kullanicisifre =="" and $adsoyad =="" and $mail =="" and $uyeonay =="" and $uyeyetki =="") {
                           echo'<div class="alert alert-warning">Tüm Alanları Doldurmanız Gerekmektedir!!</div>';
                        }else{
                            $db->sql ="insert into tb_member set member_username =?, member_password=?, member_name=?, member_email=?,member_confirmation=?, member_authorization=?, mem_insert_date=?";
                            $db->veri = array($kullaniciadi,$md5sifre,$adsoyad,$mail,$uyeonay,$uyeyetki,$tarih);
                            $ekle=$db->insert();
                            if ($ekle) {
                                echo '<div class="alert alert-success">
                                        <strong>Başarlı</strong><br> Bilgiler Eklendi  <a href="#" class="alert-link">Yeni Ekle</a> </div>';
                            }else{
                                pr($ekle);
                                echo '<div class="alert alert-danger">
                                        <strong>Başarısız</strong><br> Bilgiler Eklenemedi  <a href="#" class="alert-link">Yeni Ekle</a></div>';
                            }
                        }
                    }

                    
                            ?>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    İçerik Bilgileri
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" method="POST">
                                                
                                            <div class="form-group">
                                                <label>Kullanıcı Adı</label>
                                             <input class="form-control" name="username">

                                            </div>
                                            <div class="form-group">
                                                <label>Kullanıcı Şifre</label>
                                             <input class="form-control" name="password">

                                            </div>
                                            <div class="form-group">
                                                <label>Ad Soyad</label>
                                             <input class="form-control"  name="name">

                                            </div>
                                            <div class="form-group">
                                                <label>E Posta</label>
                                             <input class="form-control" name="email">

                                            </div>
                                            <div class="form-group">
                                                <label>Üye Onay</label>
                                             <input class="form-control" name="confirmation" placeholder="Sadece 0 -- 1 -- 2 ">

                                            </div>
                                            <div class="form-group">
                                                <label>Üye Yetki</label>
                                             <input class="form-control" name="authorization" placeholder="admin,editör,üye ..">

                                            </div>






                                           
                                               
                                            <input type="submit" Value="EKLE" class="btn btn-info">
                                        </form>
                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.col-lg-12 -->
                <?php  
                            }else 
                            {
                                echo '<h1 class="page-header">UYARI</h1>';
                                echo '<p>Bu Sayfaya Editörlerin Erişim İzni Yoktur..</p>';
                            }
                            ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php require 'inc/altkisim.php' ?>