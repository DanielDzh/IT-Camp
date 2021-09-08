@extends('layouts._layout')

@section('content')
<div class="content">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

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
                    @if (Route::has('login'))
                    @auth
                    @else
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                    @endif
                        <button type="button" class="block_reg_submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                                Зареєструватись
                              </button>
                              @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible mt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ $message }}
        </div>
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





                                        <!-- <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                            <div class="mb-3">
                                             
                                              <input type="email" class="form_control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                              
                                            </div>
                                            <div class="mb-3">
                                              <input type="password" class="form_control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3">
                                                <input type="phone" class="form_control" id="exampleInputPhone1">
                                              </div>
                                          </form> -->


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

                    <!-- <div class = "acq">
                        <img src="img/Frame (2).svg" alt="">
                        <span>Знайомство<br>
                            (ігри та творчі завдання)
                        </span>
                    </div> -->
                    <!-- <div class = "Capture">
                        <img src="img/Frame (3).svg" alt="">
                        <span>Capture the flag<br>
                            (командні ігри на природі)
                        </span>
                    </div> -->
                </div>

                <div class = "Enter_second_line">
                    <!-- <div class = "Puzzle_me">
                        <img src="img/Frame (4).svg" alt="">
                        <span>Квест<br>
                            “Puzzle me”
                        </span>
                    </div>  -->
                    @foreach($entertaiments as $entertaiment )


                    <div class = "visiting">
                        
                        <img src="{{ $entertaiment['url'] }}" alt="">
                        <span>{{ $entertaiment['description'] }}<br>
                            
                        </span>
                    </div>


                @endforeach
                    
                </div>
            </div>
            <div class="teachers">


                <div class="teachers_text">
                    Викладачі
                </div>

                <div class="teachers_iniz">
                @foreach($teachers as $teacher )

        <div class="Troxumchuk">
                <div>
                    <img src="{{ $teacher['url'] }}" alt="">
                </div>
                <div style="font-weight: bold;font-size: 14px;line-height: 140.4%;text-align: center;color: #0D3C61; padding: 20px 0px;">
                    {{ $teacher['name'] }}  {{ $teacher['lastname'] }}
                </div>
                <div style="font-weight: 600;font-size: 14px;line-height: 140.4%;text-align: center;color: #0D3C61; padding-bottom: 20px;">
                    {{ $teacher['profession'] }} 
                </div>
                <div style="font-weight: 600;font-size: 9px;line-height: 11px;color: #2D5772; text-align: start;">
                    {{ $teacher['description'] }} 
                </div>
            </div>


        @endforeach
   


                    
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

                   
                    
 @foreach($posts as $post )
            

            <div class="slide">
                <div class="reviews_block_first">
                    <img style = "position: absolute; top: -110px; right: 300px;" src="#" alt="">
                    <div class = "kavuchka">
                    <img src="img/“.svg" alt="">
                    </div>
                    <div class="reviews_block_first_img">
                        <img src="{{ $post['url'] }}" alt="">
                    </div>
                    <div class = "Balats">
                        {{ $post['name'] }}  {{ $post['lastname'] }}
                    </div>
                    <div class = "reviews_block_first_text">
                        {{ $post['description'] }} </div>
                    <div class = "reviews_block_first_date">
                        {{ $post['publishdate'] }}
                    </div>
                </div>
            </div>
        @endforeach
                   

                     

                    </div> 
                </div>
            </div>
        </div>

@stop