
<!doctype html>
<html lang="tr">
<head>
 <meta charset="utf-8">
 <meta name="description" content="Yeni tasarımcılar için mentör mentee platformu">
 <meta name="author" content="vkdstudios">
 <meta name="keywords" content="Tasarım, Mentor, mentee, Usta, Çırak, photoshop, premiere pro, adobe, ux, ui, design, designer, tasarımcı, video, sosyal medya, edit, profesyonel">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" href="img/dmmicon.ico" type="image/x-icon" />
<title>DMM Mentor-Mentee</title>


<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/Main.css">
<style>
body{
    background-color: #c8c6c6;
}
.sidebargiris{
    text-align: left;
    position: fixed;
    top: 0px;
    right: 0px;
    width: 800px;
    height: 100%;
    background-color: #faf6ff;
    box-shadow: 0px 0px 3px 5px rgba(0, 0, 0,.05);
}


.itemGiris{
    
    margin-top: 100px;
    margin-left: 100px;
}
.titlegiris{
    font-weight: 800;
    font-size: 30px;
}
.titlegiris2{
    font-weight: 800;
    font-size: 16px;
}
.formControl{
    width: 250px;
    padding: 15px;
    color: #5c5c5c;
    border-radius: 15px;
    border: none;
    background-color: #c8c6c6;
}
.girisForm{
    margin-top: 80px;
}

.btnGiris{
background-color: #5c5c5c;
color: white;
cursor: pointer;
font-weight: 700;
font-size: 16px;
border-radius: 15px;
padding: 15px 30px;
border: none;
}
.formControl:focus{
    border: 1px solid #5201b6;
}
.formGroup{
    margin: 20px;
    
}

.linkGiris{
    text-decoration: none;
    color: #5201b6;
    font-size: 16px;
}
</style>

</head>
<body>
    <div class="sidebargiris">
        <div class="itemGiris">
    <h1 class="titlegiris">Kayıt Ol</h1>
    <p class="titlegiris2">Zaten Üye misin?<a class="linkGiris" href="girisyap.html"> Giriş Yap</a></p>

        <form action="" method="POST">
            <div class="girisForm">
                <div class="formGroup">
                    <p>Ad Soyad</p>
                    <input class="formControl" type="text">
                </div>
                <div class="formGroup">
                    <p>Kullanıcı Adı</p>
                    <input class="formControl" type="text">
                </div>
                <div class="formGroup">
                    <p>Mail</p>
                    <input class="formControl" type="email">
                </div>
                <div class="formGroup">
                    <p>Şifre</p>
                    <input class="formControl" type="password">
                </div>
                <div class="formGroup">
                    <button class="btnGiris">Kayıt Ol</button>
                </div>
            </div>
        </form>

    </div>

    </div>

   

</body>


</html>