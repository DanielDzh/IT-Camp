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