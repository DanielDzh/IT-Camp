@extends('layouts._layout')

@section('content')
<div class="content">
<!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> -->
            
                @if (Route::has('login'))
                <div class="">
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                </div>
                 @endif

            <div class="content_header">
                <div class="content_header_icon">
                    <img src="img/Group_1_1.svg" alt="">
                </div>
                <a class = "sulka" href="javascript://0">
                    <div class="for_us" >
                        Про нас
                    </div>
                </a>
                <a class = "sulka" href="javascript://0">
                    <div class="programm">
                        Програма
                    </div>
                </a>
                <a class = "sulka" href="javascript://0">
                    <div class="teacher">
                        Викладачі
                    </div>
                </a>
                <a class = "sulka" href="javascript://0">
                    <div class="gallery">
                        Галерея
                    </div>
                </a>
                <a class = "sulka" href="javascript://0">
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
                    @if (Route::has('register'))
                        <button type="button" class="block_reg_submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Зареєструватись
                        </button>
                    @endif
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
                                                     


                                    <form method="POST" action="{{ route('registereds.store') }}">
                                         @csrf
                                        <div class="mb-3">
                                             <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->
                        
                                            <input placeholder = "Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                      
                                        </div>




                                        <div class="mb-3">
                                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label> -->

                                                <input placeholder = "Lastname" id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                                @error('lastname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="mb-3">
                                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                                <input placeholder = "E-Mail Address" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>


                                        <div class="mb-3">
                                            <!-- <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label> -->

                                                <input placeholder = "Phone" id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                        

                        
                        <div class="footer_fomr">
                        <div class="form-group row mb-0">
                            <!-- <div class="col-md-6 offset-md-4"> -->
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    {{ __('Register') }}
                                </button>
                            <!-- </div> -->
                        </div>
                        </div>
                    </form>

                                    </div>
                                    <!-- <div class="footer_fomr">
                                      <button type="button" class="btn btn-primary" style="width: 100%;">Зареєструватись</button>
                                    </div> -->
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
                <div class="line">
                    <div class="awaits_you">
                        <img src="img/notebook_1.png" alt="">
                        
                        <div>
                            Продуктивне навчання від викладачів-практиків
                        </div>
                    </div>
                    <div class="awaits_you">
                        <img src="img/web-site_1.png" alt="">
                        <div>
                            Створення власного сайту та розробка логотипу
                        </div>
                        
                    </div>
                    <div class="awaits_you">
                        <img src="img/linguistics_1.png" alt="">
                        <div>
                            Покращення знань 
                            із англійської мови
                        </div>
                        
                    </div>
                <!-- </div> -->
                <!-- <div class="second_line"> -->
                    <div class="awaits_you">
                        <img src="img/hand_1.png" alt="">
                        <div>
                            Вивчення технік
                            самооборони
                        </div>
                        
                    </div>
                    <div class="awaits_you">
                        <img src="img/running_1.png" alt="">
                        <div>
                            Заняття спортом з
                            професійним тренером
                        </div>
                        
                    </div>
                    <div class="awaits_you">
                        <img src="img/motivation_1.png" alt="">
                        <div>
                            Мотивація та заохочення школярів
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id = "block" class="block_content">
                <div class = "haos">
                <div class = "haos_text_IT_adaptive">
                            <span class = "span_1">ІТ Camp — </span>
                            <span class = "span_2">простір для здорового  
                                розвитку і самореалізації дітей</span>
                        </div>
                    <img src="img/Rectangle (1).svg" alt="">
                    <div class="haos_text">

                        <div class = "haos_text_IT">
                            <span style="font-weight: bold; font-size: 64px; color: #3BA1FF">ІТ Camp — </span>
                            <span style="font-size: 36px">простір для здорового  
                                розвитку і самореалізації дітей</span>
                        </div>
                        <div class = "haos_text_IT_two">
                            Вже після проходження 4-тижневого 
                            інтенсивного курсу учасники табору зможуть:
                        </div>
                        <div class = "haos_text_creatSite_1">
                            <div class = "Hacuna" style="background: url(img/Rectangle\ 75.svg) center no-repeat; padding: 15px 30px;">створити свій власний сайт;</div>
                            <div></div>
                        </div>
                        <div class = "haos_text_creatSite_2">
                            <div><img src="img/Rectangle.svg" alt=""></div>
                           <div class = "Hacuna" style="background: url(img/Rectangle\ 79.svg) center no-repeat; padding: 15px 5px;"> дізнатися про особливості<br>
                            сучасного веб-дизайну; 
                            </div>
                            
                        </div>
                        <div class = "haos_text_creatSite_3">
                           <div class = "Hacuna" style="background: url(img/Rectangle\ 77.svg) center no-repeat; padding: 15px 30px;">покращити знання з <br>
                            англійської  мови для ІТ
                            </div> 
                            <div><img src="img/Frame (1).svg" alt=""></div>
                        </div>
                        <div class = "haos_text_creatSite_4">
                            <div></div>
                            <div class = "Hacuna" style="background: url(img/Rectangle\ 78.svg) center no-repeat; padding: 15px 30px;">Розвинути логічне мислення</div> 
                            
                        </div>
                    </div>
                </div>
                <div class = "practical_tasks">
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
                <div class = "Enter_line">
                    <div>
                        <img src="img/Frame (2).svg" alt="">
                        <span>Знайомство<br>
                            (ігри та творчі завдання)
                        </span>
                    </div>
                    <div>
                        <img src="img/Frame (3).svg" alt="">
                        <span>Capture the flag<br>
                            (командні ігри на природі)
                        </span>
                    </div>
                    <div>
                        <img src="img/Frame (4).svg" alt="">
                        <span>Квест<br>
                            “Puzzle me”
                        </span>
                    </div>
                    <div>
                        <!-- <img style = "position: absolute; left: -15%;" src="img/Rectangle (4).svg" alt=""> -->
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
                <div id="carousel" class="carousel">
                    <button class="arrow prev"></button>   
                    <div class="gallery_teachers">
                    <ul class="images heigth">
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <div>
                        <li class = "lili">

                            <div class="teach">
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
                        </li>
                        </div>
                        <!-- <li><img class="img" src="https://ru.js.cx/carousel/10.png"></li>
                        <li><img class="img" src="https://ru.js.cx/carousel/5.png"></li>
                        <li><img class="img" src="https://ru.js.cx/carousel/6.png"></li> -->
                    </ul>
                    </div>
                    <button class="arrow next"></button>
                </div>
            </div>
            <div class="galery">
                <div class="galery_text">
                    Галерея IT табору
                </div>
                <div class="photo">
                    <div class="gallery_items">
                        <div class="gallery_item gray">
                            <img src="img/Frame 8.png" alt="клик для увеличения">
                        </div>
                        <div class="gallery_item gray">
                            <img src="img/Frame 9.png" alt="клик для увеличения">
                        </div>
                        <div class="gallery_item gray">
                            <img src="img/Frame 15.png" alt="клик для увеличения">
                        </div>
                        <div class="gallery_item gray">
                            <img src="img/Frame 12.png" alt="клик для увеличения">
                        </div>
                        <div class="gallery_item gray">
                            <img src="img/Frame 10.png" alt="клик для увеличения">
                        </div>
                        <div class="gallery_item gray">
                            <img src="img/Frame 7.png" alt="клик для увеличения">
                        </div>
                        <div class="gallery_item gray">
                            <img src="img/Frame 11.png" alt="клик для увеличения">
                        </div>
                        <div class="gallery_item gray">
                            <img src="img/Frame 14.png" alt="клик для увеличения">
                        </div>
                        <div class="gallery_item gray">
                            <img src = "img/Frame 401.png" alt="клик для увеличения">
                        </div>
                        <div class="gallery_item gray">
                            <img src="img/Frame 13.png" alt="клик для увеличения">
                        </div>
                        <!-- <div class="gallery_item gray">
                            <img src="img/Frame 411.png" alt="клик для увеличения">
                        </div> -->
                    </div>
                </div>

                <div id = "popup" class = "popup">
                    <div class="popup_body">
                        <div id = "popup_content" class="popup_content">
                            <!-- <a href="" class="popup_close close-popup">X</a> -->
                            <!-- <a href="https://www.instagram.com/intitaedu/"><img src="img/instagram (3) 1.svg" alt=""></a>
                            <a href="https://t.me/IT_Academy_Vinnytsia"><img src="img/telegram (2) 1.svg" alt=""></a>
                            <a href="https://www.facebook.com/intita.it"><img src="img/facebook 3.svg" alt=""></a>
                            <a href="https://www.youtube.com/c/ITAcademyVinnytsia"><img src="img/youtube 3.svg" alt=""></a> -->
                            <!-- <a href="https://twitter.com/INTITA_EDU"><img src="img/twitter (1) 3.svg" alt=""></a>  -->
                            <!-- <a href="viber://chat?number=+380631892256"><img src="img/viber 3.svg" alt=""></a>                        -->
                        </div>
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
                                <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
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
                            <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
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
                            <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
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
                            <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
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
                                <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
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
                                <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
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
                                <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
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
                                <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
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
                                <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
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