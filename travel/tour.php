<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name = "viewport" content ="width = device-width, initial-scale = 1, shrink-to-fit = no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel = "stylesheet" href="css/style.css"> 
<title>Туры</title>
</head>
<body>
    <body class = "body-top">
        <div class="modal" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  
                </div>
                <div class="modal-body" style = " max-width:600px ">
                    <form method="get" action="#" id="orderForm">
                        <div class = "tour">
                            <label class = "label" for="name">
                                Выберите тур:
                            </label>
                            <select id="inp1">
                                <option value = "Крым" selected>
                                    Крым
                                </option>
                                <option value = "Кавказ">
                                    Кавказ
                                </option>
                                <option value = "Алтай">
                                    Алтай
                                </option>
                            </select>
                            <div>
                                <div class = "tour">
                                    <label class = "label" for = "data">
                                        Выберите дату начала:
                                    </label>
                                    <input type = "date" id="inp2">
                                </div>
                                <div class="tour">
                                    <label class = "label" for = "number">
                                        Выберите количество участников:
                                    </label>
                                    <select id="inp3">
                                        <option value="1">1</option>
                                        <option value="2" selected>2</option>
                                        <option value="3">3</option>
                                        <option value= "3">4</option>
                                    </select>
                                </div>
                                <div class="tour">
                                    <label class = "label" for = "email">
                                        Baш E-mail:
                                    </label>
                                    <input type = "email" id="inp4" class="input-xlarge" style=" width:350px;" required = "required">
                                </div>
                                <button type="button" class="btn btn-primary" data-dismiss= "modal">Закрыть</button>
                                <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
                        
                <div class="modal-footer">
                  
                </div>
            </div>
        </div>
        </div>
        
         <header class = "container">
            <div class="row">
                <div class="col-3">
                    <img id="logo" src="img/logo.jpg">
                </div>
                <div class="col-9">
                    <h1>Путешествуйте с нами!</h1>
                </div>
            </div>
         </header>

        <div id="menu">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" href = "index.html">Главная</a>
                <a class="flex-sm-fill text-sm-center nav-link" href = "tours.html">Наши туры</a>
                <a class="flex-sm-fill text-sm-center nav-link" href = "contacts.html">О нас</a>
            </nav>
        </div>


        
        
        <main class = "flex">
            <div class="row">
                <div class="col">
                    Наши туры
                </div>
                 <div class= "container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="tour">
                                <img src="img/crimea.jpg" class="tour_img">
                                <p> Это прекрасная возможность отдохнуть всей семьей</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target = "#myModal">
                                    Рассчитать стоимость
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="tour">
                                <img src="img/kavkaz.jpg" class="tour_img">
                                <p> Море, солнце и горы!</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target = "#myModal">
                                    Рассчитать стоимость
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="tour">
                                <img src="img/altay.jpg" class="tour_img">
                                <p> Незабываемые впечатления!</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target = "#myModal">
                                    Рассчитать стоимость
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </main>

            



        <footer class= "footer">
            <div class="row">
                <div class="col">
                    Это сайт, предназначенный для обучения
                </div>
            </div>
        </footer>
            
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $('#orderForm').on('submit', function ()
        {
            let tour = $("#inp1").val();
            let date = new Date($("#inp2").val());
            let month = date.getMonth();
            let kol = $("#inp3").val();
            kol = Number(kol);
            let email = $("#inp4").val();
            let stoim =0;
            if (tour == "Крым")
            {
            if((month == 5) || (month == 6) || (month == 7) || (month == 8))
            {stoim = kol * 500;}
            else {stoim = kol * 300;}
            }
            if (tour == "Кавказ")
            {
            if((month == 12) || (month == 1) || (month == 2) || (month == 5) || (month == 6) || (month == 7) || (month == 8))
            {stoim = kol * 300;}
            else {stoim = kol * 250;}
            }
            if (tour == "Алтай")
            {
            {stoim = kol * 1000;}
            }
            alert('Примерная стоимость вашего тура на  '+kol+' человек составит '+stoim+' у.е. Мы свяжемся с ВАМИ!!');
        }
        );
</script> 
</body>
