<div class="services_section layout_padding" id="recipes">
    <div class="container">
       <h1 class="services_taital">Begginer Recipes</h1>
       <p class="services_text">New in cooking? Try these easy recipes first...</p>
       <div class="services_section_2">
          <div class="row">
             
            @foreach ($recipe as $recipe)

            <div class="col-md-4">
               <div class="image-container" style="height: 300px; width:300px"><img  src="/recipeimage/{{$recipe->image}}" class="services_img" height="100px" width="300px"></div><br><br>
               <br><h3 style="font-size: 1.5rem; font-weight: bold;">{{$recipe->title}}</h3>

               
               

              <!-- 
               <h3>2 Minute Maggie</h3>
               <p>Maggi 2-Minute Noodles is a popular instant noodle snack by Nestlé, loved for its quick preparation time and versatile masala flavor. It's a comfort food in many households and is often customized with vegetables, eggs, or cheese. Despite its "2-minute" claim, it's cherished for convenience and taste, making it a favorite across all age groups.</p>
               
               <p><b style="color: black">Ingredients:  </b>Noodles, Water, Oil, Tastemaker.</p>
               <p><b style="color: black">Process:  </b>Boil the noodles cake in water for 2-3 minutes. Then in a pan, warm up some oil and fry the boiled noodles adding the tastemaker for another 2 minutes in a medium high flame.</p>
            -->

               <h5>Posted by <i><b>{{$recipe->name}} , {{$recipe->uploadertype}}</b></i>.</h5>
               <div class="btn_main active" style="padding-bottom: 50px"><a href="{{url('recipe_details',$recipe->id)}}">Read More</a></div><br><br><br><br><br>
            </div>
               
            @endforeach

          </div>
       </div>
    </div>
 </div>