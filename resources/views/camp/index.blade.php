@extends('layouts._layout')

@section('content')
<div class="content">
            
            <div class="content_header">
                <div class="content_header_icon">
                    <img src="img/Group_1_1.svg" alt="">
                </div>
                <a class = "sulka" href="javascript://0" onclick = "SlowScroll('.block_awaits_you')">
                    <div class="for_us" >
                        Про нас
                    </div>
                </a>
                <a class = "sulka" href="javascript://0" onclick = "SlowScroll('.Enter')">
                    <div class="programm">
                        Програма
                    </div>
                </a>
                <a class = "sulka" href="javascript://0" onclick = "SlowScroll('.teachers')">
                    <div class="teacher">
                        Викладачі
                    </div>
                </a>
                <a class = "sulka" href="javascript://0" onclick = "SlowScroll('.galery')">
                    <div class="gallery">
                        Галерея
                    </div>
                </a>
                <a class = "sulka" href="javascript://0" onclick = "SlowScroll('.reviews')">
                    <div class="vidg">
                        Відгуки
                    </div>
                </a>
            </div>
            <div class = "block_reg">
                <div class="block_reg_content">
                    <div class="block_reg_ITCamp">
                        IT Camp
                    </div>
                    <div class="block_reg_age">
                        для дітей 9-17 років
                    </div>
                        <button type="button" class="block_reg_submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                                Зареєструватись
                              </button>
                              
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-contentt">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Подаруйте своїй дитині незабутні враження та корисні знання в
                                        ІТ сфері</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal_body">
                                      

                                    
                                        
                                        <form>
                                            <div class="mb-3">
                                              <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                                              <input type="email" class="form_control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                            </div>
                                            <div class="mb-3">
                                              <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                              <input type="password" class="form_control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3">
                                                <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                                                <input type="phone" class="form_control" id="exampleInputPhone1">
                                              </div>
                                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                          </form>


                                    </div>
                                    <div class="footer_fomr">
                                      <button type="button" class="btn btn-primary" style="width: 100%;">Зареєструватись</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                </div>
                <div class="block_reg_img">
                    <img src="img/Rectangle (2).svg" alt="">
                </div>
            </div>
            <div class="block_awaits_you">
                <div class="block_awaits_you_text">
                    Що вас очікує
                </div>
                <div class="first_line">
                    <div class="first_line_one">
                        <img src="img/notebook_1.png" alt="">
                        
                        <div>
                            Продуктивне навчання від викладачів-практиків
                        </div>
                    </div>
                    <div class="first_line_two">
                        <img src="img/web-site_1.png" alt="">
                        <div>
                            Створення власного сайту та розробка логотипу
                        </div>
                        
                    </div>
                    <div class="first_line_tree">
                        <img src="img/linguistics_1.png" alt="">
                        <div>
                            Покращення знань 
                            із англійської мови
                        </div>
                        
                    </div>
                </div>
                <div class="second_line">
                    <div class="second_line_one">
                        <img src="img/hand_1.png" alt="">
                        <div>
                            Вивчення технік
                            самооборони
                        </div>
                        
                    </div>
                    <div class="second_line_two">
                        <img src="img/running_1.png" alt="">
                        <div>
                            Заняття спортом з
                            професійним тренером
                        </div>
                        
                    </div>
                    <div class="second_line_tree">
                        <img src="img/motivation_1.png" alt="">
                        <div>
                            Мотивація та заохочення школярів
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id = "block" class="block_content">
                <div class = "haos">
                    <img src="img/Rectangle (1).svg" alt="">
                    <div class="haos_text">
                        <div class = "haos_text_IT">
                            <span style="font-weight: bold; font-size: 64px; color: #3BA1FF">ІТ Camp — </span>
                            <span style="font-size: 36px">простір для здорового  
                                розвитку і самореалізації дітей</span>
                        </div>
                        <div style="font-weight: bold; font-size: 36px; color: #8AA5FC">
                            Вже після проходження 4-тижневого 
                            інтенсивного курсу учасники табору зможуть:
                        </div>
                        <div class = "haos_text_creatSite_1">
                            <div style="background: url(img/Rectangle\ 75.svg) center no-repeat; padding: 30px 100px">створити свій власний сайт;</div>
                            <div></div>
                        </div>
                        <div class = "haos_text_creatSite_2">
                            <div><img src="img/Rectangle.svg" alt=""></div>
                           <div style="background: url(img/Rectangle\ 79.svg) center no-repeat; padding: 30px 100px"> дізнатися про особливості<br>
                            сучасного веб-дизайну; 
                            </div>
                            
                        </div>
                        <div class = "haos_text_creatSite_3">
                           <div style="background: url(img/Rectangle\ 77.svg) center no-repeat; padding: 30px 100px">покращити знання з <br>
                            англійської  мови для ІТ
                            </div> 
                            <div><img src="img/Frame (1).svg" alt=""></div>
                        </div>
                        <div class = "haos_text_creatSite_4">
                            <div></div>
                            <div style="background: url(img/Rectangle\ 78.svg) center no-repeat; padding: 30px 100px">Розвинути логічне мислення</div> 
                            
                        </div>
                    </div>
                </div>
                <div style="font-weight: bold; font-size: 35px; color: #3BA1FF; text-align: center; margin-top: 15px">
                    Лише практичні заняття, цікаві ігри та заняття спортом!
                </div>
            </div>
            <div class="four">
                <div class="four_one">
                    
                    Насичена
                    та цікава 
                    програма
                </div>
                <div class="four_two">
                    <img src="img/4.svg" alt="">
                    пізнавальні
                    тижні
                </div>
                <div class="four_tree">
                    <img src="img/5.svg" alt="">    
                    днів
                    на тиждень
                </div>
                <div class="four_four">
                    <img src="img/6.svg" alt="">  
                    годин 
                    на день
                </div>
            </div>
            <div class="Enter">
                <div class = "Rozvagu">
                Розваги
                </div>
                <div class = "Enter_first_line">
                    <div class = "acq">
                        <img src="img/Frame (2).svg" alt="">
                        <span>Знайомство<br>
                            (ігри та творчі завдання)
                        </span>
                    </div>
                    <div class = "Capture">
                        <img src="img/Frame (3).svg" alt="">
                        <span>Capture the flag<br>
                            (командні ігри на природі)
                        </span>
                    </div>
                </div>
                <div class = "Enter_second_line">
                    <div class = "Puzzle_me">
                        <img src="img/Frame (4).svg" alt="">
                        <span>Квест<br>
                            “Puzzle me”
                        </span>
                    </div>
                    <div class = "visiting">
                        <img style = "position: absolute; left: -15%;" src="img/Rectangle (4).svg" alt="">
                        <img src="img/Frame (5).svg" alt="">
                        <span>Відвідування<br>
                            ІТ компаній
                        </span>
                    </div>
                </div>
            </div>
            <div class="teachers">


                <div class="teachers_text">
                    Викладачі
                </div>
                <div class="teachers_iniz">
                    <div class="Troxumchuk">
                        <div>
                            <img src="img/1 (1).svg" alt="">
                        </div>
                        <div style="font-weight: bold;font-size: 14px;line-height: 140.4%;text-align: center;color: #0D3C61; padding: 20px 0px;">
                            Ольга Трохимчук
                        </div>
                        <div style="font-weight: 600;font-size: 14px;line-height: 140.4%;text-align: center;color: #0D3C61; padding-bottom: 20px;">
                            Логіка
                        </div>
                        <div style="font-weight: 600;font-size: 9px;line-height: 11px;color: #2D5772; text-align: start;">
                            Я Оля! В своїй викладацькій роботі роблю наголос на практичні знання. 
                            Я вважаю за головне, на кожному занятті ділитись своїми знаннями. 
                            Я віддаю ці крупинки на кожному занятті і коли їх зрозуміють учні.
                        </div>
                    </div>
                    <div class="Chubatuk">
                        <div>
                            <img src="img/1.svg" alt="">
                        </div>
                        <div style="font-weight: bold; font-size: 30px; line-height: 140.4%; text-align: center; color: #0D3C61; padding: 20px 0px;">
                            Володимир Чубатюк
                        </div>
                        <div style="font-weight: 600; font-size: 20px; line-height: 140.4%; text-align: center; color: #0D3C61; padding-bottom: 20px;">
                            WEB-дизайнер
                        </div>
                        <div style="font-weight: 600; font-size: 18px; line-height: 22px; color: #2D5772; text-align: start;">
                            В своїй викладацькій роботі роблю наголос на практичні знання. 
                            Я вважаю за головне, на кожному занятті ділитись своїми знаннями. 
                            Я віддаю ці крупинки на кожному занятті і коли їх зрозуміють учні .
                        </div>
                    </div>
                    <div class="Dolgiy">
                        <div>
                            <img src="img/1 (2).svg" alt="">
                        </div>
                        <div style="font-weight: bold;font-size: 14px;line-height: 140.4%;text-align: center;color: #0D3C61; padding: 20px 0px;">
                            Євген Долгій
                        </div>
                        <div style="font-weight: 600;font-size: 14px;line-height: 140.4%;text-align: center;color: #0D3C61; padding-bottom: 20px;">
                            Веб програмування
                        </div>
                        <div style="font-weight: 600;font-size: 9px;line-height: 11px;color: #2D5772; text-align: start;">
                            Будь-який програміст - це в першу чергу мислитель. 
                            Тому, вважаю, що знання логіки і вміння мислити нестандартно допоможуть 
                            нашим майбутнім айтішникам легко освоїти професію.
                        </div>
                    </div>
                </div>
            </div>
            <div class="galery">
                <div class="galery_text">
                    Галерея IT табору
                </div>
                <div class="photo">
                    <div class="first_column">
                        <img src="img/photo_1.svg" class="minimized" alt="клик для увеличения">
                        <img src="img/19477294_1946391575600829_6258206423574036472_o 1.svg"  class="minimized" alt="клик для увеличения">
                        <img src="img/19466421_1946391262267527_1114287526017256070_o 1.svg"  class="minimized" alt="клик для увеличения">
                    </div>
                    <div class="second_column">
                        <img src="img/19488882_1946391115600875_7131555583729776851_o 1.svg"  class="minimized" alt="клик для увеличения">
                        <img src="img/67256239_3048815508691758_9023575329385480192_n 1.svg"  class="minimized" alt="клик для увеличения">
                        <img src="img/67109154_3047712295468746_1315304305284087808_n 1.svg"  class="minimized" alt="клик для увеличения">
                    </div>
                    <div class="third_column">
                        <img src="img/67243781_3041990022707640_7981304221116923904_n 1.svg"  class="minimized" alt="клик для увеличения">
                        <img src="img/67187357_3048817388691570_1381167834926678016_n 1.svg"  class="minimized" alt="клик для увеличения">
                    </div>
                    <div class="four_column">
                        <img src = "img/66330348_3030069857232990_6888324005942525952_n 1.svg"  class="minimized" alt="клик для увеличения">
                        <img src="img/66815275_3040748242831818_671679077744115712_n 1.svg"  class="minimized" alt="клик для увеличения">
                        <img src="img/19466501_1946391555600831_7029760963208071130_o 1.svg"  class="minimized" alt="клик для увеличения">
                    </div>
                </div>
            </div>
        
            <div class="reviews">
                <div class="reviews_text">
                    Відгуки
                </div>
                
                <div class="reviews_block">
                    <div style = "margin: 50px;" class="rev_slider">
                        
                        <div class="slide">
                            <div class="reviews_block_first">
                                <img style = "position: absolute; top: -110px; right: 300px;" src="img/Fram.png" alt="">
                                <div class = "kavuchka">
                                <img src="img/“.svg" alt="">
                                </div>
                                <div class="reviews_block_first_img">
                                    <img src="img/boy 1.svg" alt="">
                                </div>
                                <div class = "Balats">
                                    Балацир Андрій
                                </div>
                                <div class = "reviews_block_first_text">
                                    У Вінницькій ІТ Академії я навчаюсь вже півтора року і можу сміливо сказати, 
                                    що на парах все пояснюється легко та доступно.
                                    Без проблем можна запитати щось у викладача і запитати те,що не зрозумів або дізнатись нове.
                                    Це найкраша школа у Вінниці і чудовий вибір для початкових програмістів будь-якого віку.
                                </div>
                                <div class = "reviews_block_first_date">
                                    18.02.2018
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            
                        <div class="reviews_block_second">
                            <div class = "kavuchka">
                            <img src="img/“.svg" alt="">
                            </div>
                            <div class="reviews_block_second_img">
                                <img src="img/boy 2.svg" alt="">
                            </div>
                            <div class = "Chioma">
                                Чіома Еста
                            </div>
                            <div class = "reviews_block_second_text">
                                Навчаючись у Вінницькій ІТ-Академії більше двоx років можу впевнено сказати, 
                                що це найкращий навчальний заклад для майбутніх програмістів. 
                                Короткий термін навчання, якісні та доступні кожному уроки, 
                                практичні заняття дозволяють розуміти та виконувати складні і не дуже проекти. 
                                Інтерактивні зяняття мотивують і допомогають краще засвоїти матеріал.
                            </div>
                            <div class = "reviews_block_first_date">
                                25.05.2019
                            </div>
                        </div>
                        </div>
                        <div class="slide">
                            <div class="reviews_block_first">
                            <img style = "position: absolute; top: -110px; right: 300px;" src="img/Fram.svg" alt="">
                            <div class = "kavuchka">
                            <img src="img/“.svg" alt="">
                            </div>
                            <div class="reviews_block_first_img">
                                <img src="img/boy 1.svg" alt="">
                            </div>
                            <div class = "Balats">
                                Касанов Павло
                            </div>
                            <div class = "reviews_block_first_text">    
                                 навчаюсь в ІТ-Академії, яка знаходиться в м. Вінниця, майже 2 роки. 
                                 Мені дуже подобається вчитися в цій Академії. Тут працюють дуже цікаві і творчі люди. 
                                 Пари у них проходять дуже весело і пізнавально. 
                                 Я завжди приходжу додому з гарним настроєм та та новими знаннями. 
                                 І вам я раджу завітати до нашої ІТ-Академії.
                            </div>
                            <div class = "reviews_block_first_date">
                                13.04.2014
                            </div>
                        </div>
                        </div>
                        <div class="slide">
                            <div class="reviews_block_first">
                            <img style = "position: absolute; top: -110px; right: 300px;" src="img/Fram.svg" alt="">
                            <div class = "kavuchka">
                            <img src="img/“.svg" alt="">
                            </div>
                            <div class="reviews_block_first_img">
                                <img src="img/boy 1.svg" alt="">
                            </div>
                            <div class = "Balats">
                                Довгий Данило
                            </div>
                            <div class = "reviews_block_first_text">
                                В ІТ-Академії добре навчають.Навіть дають все для гарного та комфортного навчання. 
                                Ноутбуки, зарядки, мишки, релаксрум, кухня... Мені подобаються всі вчителі та всі пари. 
                                Вчителі гарно навчають та допомогають тим, в кого не дуже виходить. 
                                Поки що Академія невелика, тому майже всі знають один одного і навіть якщо ти новенький, 
                                то через декілька днів ти будеш розмовляти майже зі всіма.
                            </div>
                            <div class = "reviews_block_first_date">
                                18.02.2018
                            </div>
                        </div>
                        </div>                
                        <div class="slide">
                            <div class="reviews_block_first">
                            <img style = "position: absolute; top: -110px; right: 300px;" src="img/Fram.svg" alt="">
                            <div class = "kavuchka">
                            <img src="img/“.svg" alt="">
                            </div>
                            <div class="reviews_block_first_img">
                                <img src="img/boy 1.svg" alt="">
                            </div>
                            <div class = "Balats">
                                Чорний Констянтин
                            </div>
                            <div class = "reviews_block_first_text">
                                Я вже рік займаюсь в ІТ-академії.
                                Мені подобається:
                                Викладачі, які добре пояснюють матеріал;
                                Учні, які можуть допомогти коли я цього потребую;
                                Техніка, яка дає нам можливість не витрачати кошти на ноутбуки, мишки і т.д;
                            </div>
                            <div class = "reviews_block_first_date">
                                18.02.2018
                            </div>
                        </div>
                        </div>
                        <div class="slide">
                            <div class="reviews_block_first">
                                <img style = "position: absolute; top: -110px; right: 300px;" src="img/Fram.svg" alt="">
                                <div class = "kavuchka">
                                <img src="img/“.svg" alt="">
                                </div>
                                <div class="reviews_block_first_img">
                                    <img src="img/Group (2).svg" alt="">
                                </div>
                                <div class = "Balats">
                                    Шевчук Марина
                                </div>
                                <div class = "reviews_block_first_text">
                                    Дуже вдячна всім організаторам табору. . 
                                    Пошуки табору були дуже довгими і прискіпливими. 
                                    Хотілось отримати знання і незабутні враження. 
                                    Всім цим вимогам на 100% відповідає ІТ табір від Вінницької ІТ Академії.
                                </div>
                                <div class = "reviews_block_first_date">
                                    18.02.2018
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="reviews_block_first">
                                <img style = "position: absolute; top: -110px; right: 300px;" src="img/Fram.svg" alt="">
                                <div class = "kavuchka">
                                <img src="img/“.svg" alt="">
                                </div>
                                <div class="reviews_block_first_img">
                                    <img src="img/Group (2).svg" alt="">
                                </div>
                                <div class = "Balats">
                                    Ковальчук Таня
                                </div>
                                <div class = "reviews_block_first_text">
                                    У Вінницькій ІТ Академії я навчаюсь вже півтора року і можу сміливо сказати, 
                                    що на парах все пояснюється легко та доступно.
                                    Без проблем можна запитати щось у викладача і запитати те,що не зрозумів або дізнатись нове.
                                    Це найкраша школа у Вінниці і чудовий вибір для початкових програмістів будь-якого віку.
                                </div>
                                <div class = "reviews_block_first_date">
                                    16.04.2018
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="reviews_block_first">
                                <img style = "position: absolute; top: -110px; right: 300px;" src="img/Fram.svg" alt="">
                                <div class = "kavuchka">
                                <img src="img/“.svg" alt="">
                                </div>
                                <div class="reviews_block_first_img">
                                    <img src="img/boy 1.svg" alt="">
                                </div>
                                <div class = "Balats">
                                    Смирнов Дмитро
                                </div>
                                <div class = "reviews_block_first_text">                                   
                                    В ІТ-Академії добре навчають.Навіть дають все для гарного та комфортного навчання. 
                                    Ноутбуки, зарядки, мишки, релаксрум, кухня... Мені подобаються всі вчителі та всі пари. 
                                    Вчителі гарно навчають та допомогають тим, в кого не дуже виходить. 
                                    Поки що Академія невелика, тому майже всі знають один одного і навіть якщо ти новенький, 
                                    то через декілька днів ти будеш розмовляти майже зі всіма.
                                </div>
                                <div class = "reviews_block_first_date">
                                    02.09.2012
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="reviews_block_first">
                                <img style = "position: absolute; top: -110px; right: 300px;" src="img/Fram.svg" alt="">
                                <div class = "kavuchka">
                                <img src="img/“.svg" alt="">
                                </div>
                                <div class="reviews_block_first_img">
                                    <img src="img/boy 1.svg" alt="">
                                </div>
                                <div class = "Balats">
                                    Лук’янов Саша
                                </div>
                                <div class = "reviews_block_first_text">                                                                     
                                    Я вже рік займаюсь в ІТ-академії.
                                    Мені подобається:
                                    Викладачі, які добре пояснюють матеріал;
                                    Учні, які можуть допомогти коли я цього потребую;
                                    Техніка, яка дає нам можливість не витрачати кошти на ноутбуки, мишки і т.д;
                                </div>
                                <div class = "reviews_block_first_date">
                                    31.02.2015
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="reviews_block_first">
                                <img style = "position: absolute; top: -110px; right: 300px;" src="img/Fram.svg" alt="">
                                <div class = "kavuchka">
                                <img src="img/“.svg" alt="">
                                </div>
                                <div class="reviews_block_first_img">
                                    <img src="img/Group (2).svg" alt="">
                                </div>
                                <div class = "Balats">
                                    Мороз Катя
                                </div>
                                <div class = "reviews_block_first_text">                                                                     
                                    Дуже вдячна всім організаторам табору. . 
                                    Пошуки табору були дуже довгими і прискіпливими. 
                                    Хотілось отримати знання і незабутні враження. 
                                    Всім цим вимогам на 100% відповідає ІТ табір від Вінницької ІТ Академії.
                                </div>
                                <div class = "reviews_block_first_date">
                                    18.02.2018
                                </div>
                            </div>
                        </div>

                    </div> 
                </div>
            </div>
        </div>

@stop