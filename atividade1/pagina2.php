<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Seu signo</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>
    <body>
        <?php
            $data = date_parse($_GET["data"]);
            
            switch($data["month"]){
                // janeiro
                case 1:
                    if($data["day"] >= 20){
                        // aquario
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é aquáriano</p>";
                        echo "<img width='200px' height='200px' src='img\aquario.jpg'>";
                    }else {
                        // capricornio
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é capricorniano</p>";
                        echo "<img width='200px' height='200px' src='img\capricornio1.jpg'>";
                    }break;
                // fevereiro
                case 2:
                    if($data["day"] >= 19){
                        // peixes
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é de peixes</p>";
                        echo "<img width='200px' height='200px' src='img\peixes.jpg'>";
                    }else {
                        // aquario
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é aquáriano</p>";
                        echo "<img width='200px' height='200px' src='img\aquario.jpg'>";
                    }break;
                // março
                case 3:
                    if($data["day"] >= 21){
                        // aries
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é ariano</p>";
                        echo "<img width='200px' height='200px' src='img\aries.jpg'>";
                    }else {
                        // peixes
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é de peixes</p>";
                        echo "<img width='200px' height='200px' src='img\peixes.jpg'>";
                    }break;
                // abril
                case 4:
                    if($data["day"] >= 20){
                        // touro
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é tourino</p>";
                        echo "<img width='200px' height='200px' src='img\Touro.jpg'>";
                    }else {
                        // aries
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é ariano</p>";
                        echo "<img width='200px' height='200px' src='img\aries.jpg'>";
                    }break;
                // maio
                case 5:
                    if($data["day"] >= 21){
                        // gemeo
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é geminiano</p>";
                        echo "<img width='200px' height='200px' src='img\gemeos.jpg'>";
                    }else {
                        // touro
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é tourino</p>";
                        echo "<img width='200px' height='200px' src='img\Touro.jpg'>";
                    }break;
                // junho
                case 6:
                    if($data["day"] >= 21){
                        // cancer
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é de câncer</p>";
                        echo "<img width='200px' height='200px' src='img\cancer.jpg'>";
                    }else {
                        // gemeo
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é geminiano</p>";
                        echo "<img width='200px' height='200px' src='img\gemeos.jpg'>";
                    }break;
                // julho
                case 7:
                    if($data["day"] >= 23){
                        // leao
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é leonino</p>";
                        echo "<img width='200px' height='200px' src='img\leao.jpg'>";
                    }else {
                        // cancer
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é de câncer</p>";
                        echo "<img width='200px' height='200px' src='img\cancer.jpg'>";
                    }break;
                // agosto
                case 8:
                    if($data["day"] >= 23){
                        // virgem
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é virgem</p>";
                        echo "<img width='200px' height='200px' src='img\Virgem.jpg'>";
                    }else {
                        // leao
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é leonino</p>";
                        echo "<img width='200px' height='200px' src='img\leao.jpg'>";
                    }break;
                // setembro
                case 9:
                    if($data["day"] >= 23) {
                        // libra
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é de libra</p>";
                        echo "<img width='200px' height='200px' src='img\libra.jpg'>";
                    }else {
                        // virgem
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é virgem</p>";
                        echo "<img width='200px' height='200px' src='img\Virgem.jpg'>";
                    }break;
                // outubro
                case 10:
                    if($data["day"] >= 23){
                        // escorpiao
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é escorpião</p>";
                        echo "<img width='200px' height='200px' src='img\Escorpiao.jpg'>";
                    }else {
                        // libra
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é de libra</p>";
                        echo "<img width='200px' height='200px' src='img\libra.jpg'>";
                    }break;
                // novembro
                case 11:
                    if($data["day"] >= 22){
                        // sagitario
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é de sagitario</p>";
                        echo "<img width='200px' height='200px' src='img\sagitario.jpg'>";
                    }else {
                        // escorpiao
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é escorpião</p>";
                        echo "<img width='200px' height='200px' src='img\Escorpiao.jpg'>";
                    }break;
                // dezembro
                case 12: 
                    if($data["day"] >= 22){
                        // capricornio
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é capricorniano</p>";
                        echo "<img width='200px' height='200px' src='img\capricornio1.jpg'>";
                    }else {
                        //sagitario
                        echo "<p>Quem nasceu no dia " .$data["day"]. "/" .$data["month"]. " é de sagitario</p>";
                        echo "<img width='200px' height='200px' src='img\sagitario.jpg'>";
                    }break;
                    
                default: 
                    echo "<p>Mês " .$data["month"]. " incorreto!</p>"; 
            }
        ?>
    </body>
</html>