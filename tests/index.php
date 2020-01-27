<!DOCTYPE html>
<html>
<head>
   <meta name="author" content="Ben Howdle and Dan Matthew">
   <meta name="description" content="A responsive movie poster grabber">
   <title>Front Row by Ben Howdle</title>
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
   <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.2.min.js"></script>
        <!--jQuery, linked from a CDN-->
   <script type="text/javascript" src="http://use.typekit.com/oya4cmx.js"></script>
   <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
<div class="container">
   <header>
      <h1>Front Row</h1>
   </header>
   <section id="fetch">
      <input type="text" placeholder="Enter a movie title" id="term" />
      <button id="search">Find me a poster</button>
   </section>
   <table id="upcoming">
      <thead>
      <tr>
         <th>No. </th>
         <th>Title</th>
      </tr>
      </thead>
      <tbody>

      </tbody>
   </table>
</div>
<script type="text/javascript">
   document.getElementById("search").onclick = function() {
      $.ajax({
           type: 'POST',
           url: 'https://api.themoviedb.org/3/movie/upcoming?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US&page=1',
           data: {
             "_token" : "{{ csrf_token() }}"
           },
           dataType: 'json',
           success: function (data) {
             if (data != 'fail') {
               console.log(data);
               var tbl = '';
               for (var i = 0; i < data.results.length; i++) {
                 var no = i + 1;
                 tbl += '<tr>';
                 tbl += '<td>' + no + '</td>';
                 tbl += '<td>' + data.results[i].title + '</td>';
                 tbl += '</tr>';
               }
               $('#upcoming tbody').append(tbl);
             } else {
               var tbl = '<tr><td colspan="2">NO DATA AVAILABLE IN TABLE</td></tr>';
               $('#upcoming tbody').append(tbl);
             }
           }
         });
   };

   $(document).ready(function(){

   $('#term').focus(function(){
      var full = $("#poster").has("img").length ? true : false;
      if(full == false){
         $('#poster').empty();
      }
   });

   var getPoster = function(){

        var film = $('#term').val();

         if(film == ''){

            $('#poster').html("<h2 class='loading'>Ha! We haven't forgotten to validate the form! Please enter something.</h2>");

         } else {

            $('#poster').html("<h2 class='loading'>Your poster is on its way!</h2>");

            $.getJSON("https://api.themoviedb.org/3/movie/upcoming?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US&page=1", function(json) {
               if (json != "Nothing found."){
                     $('#poster').html('<h2 class="loading">Well, gee whiz! We found you a poster, skip!</h2><img id="thePoster" src=' + json[0].posters[0].image.url + ' />');
                  } else {
                     $.getJSON("http://api.themoviedb.org/2.1/Movie.search/en/json/3f4f7e2e5a89f98c35e6b5e6433466b6/goonies?callback=?", function(json) {
                        console.log(json);
                        $('#poster').html('<h2 class="loading">We are afraid nothing was found for that search. Perhaps you were looking for The Goonies?</h2><img id="thePoster" src=' + json[0].posters[0].image.url + ' />');
                     });
                  }
             });

          }

        return false;
   }

   $('#search').click(getPoster);
   $('#term').keyup(function(event){
       if(event.keyCode == 13){
           getPoster();
       }
   });

});

</script>
</body>
</html>
