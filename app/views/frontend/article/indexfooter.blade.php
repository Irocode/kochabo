

  <div class="col-md-4 md-margin-bottom-40">
                <div class="posts">
                    <div class="headline"><h2>Frisch aus dem Blog </h2></div>
  @foreach( $articles as $article )


                    <dl class="dl-horizontal">
                    

                        <dt><a href="#"><img src="{{URL::to('assets/img/sliders/elastislide/6.jpg')}}" alt="" /></a></dt>
                        <dd>

                        

                            <p><a href="{{URL::to('article')}}/{{ $article->id }}/{{ $article->title }}">{{{ mb_substr(strip_tags($article->content),0,170) }}}</a></p> 
                        </dd>
                    </dl>
                   
                   @endforeach  
                </div>
            </div><!--/col-md-4-->

 
 