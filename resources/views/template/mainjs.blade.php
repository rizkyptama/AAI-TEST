  <!-- Core -->
  <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{asset('vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('js/argon.min9f1e.js?v=1.1.0')}}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{asset('js/demo.min.js')}}"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  <script type="text/javascript">
    function list() {
      $('#tmdb tbody tr').remove();
      $('#tv tbody tr').remove();
      if ($('#list').val() == "toprated") {
        $('#title').text("Top Rated Movies")
        $.ajax({
           type: 'POST',
           url: 'https://api.themoviedb.org/3/movie/top_rated?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US',
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
                 tbl += '<td>' + data.results[i].release_date + '</td>';
                 tbl += '<td>' + data.results[i].popularity + '</td>';
                 tbl += '</tr>';
               }
               $('#tmdb tbody').append(tbl);
             } else {
               var tbl = '<tr><td colspan="5">NO DATA AVAILABLE IN TABLE</td></tr>';
               $('#tmdb tbody').append(tbl);
             }
           }
         });
      } else if ($('#list').val() == "upcoming") {
        $('#title').text("Upcoming Movies")
        $.ajax({
           type: 'POST',
           url: 'https://api.themoviedb.org/3/movie/upcoming?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US',
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
                 tbl += '<td>' + data.results[i].release_date + '</td>';
                 tbl += '<td>' + data.results[i].popularity + '</td>';
                 tbl += '</tr>';
               }
               $('#tmdb tbody').append(tbl);
             } else {
               var tbl = '<tr><td colspan="5">NO DATA AVAILABLE IN TABLE</td></tr>';
               $('#tmdb tbody').append(tbl);
             }
           }
         });
      } else if ($('#list').val() == "nowplay") {
        $('#title').text("Now Playing Movies")
        $.ajax({
           type: 'POST',
           url: 'https://api.themoviedb.org/3/movie/now_playing?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US',
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
                 tbl += '<td>' + data.results[i].release_date + '</td>';
                 tbl += '<td>' + data.results[i].popularity + '</td>';
                 tbl += '</tr>';
               }
               $('#tmdb tbody').append(tbl);
             } else {
               var tbl = '<tr><td colspan="5">NO DATA AVAILABLE IN TABLE</td></tr>';
               $('#tmdb tbody').append(tbl);
             }
           }
         });
      } else if ($('#list').val() == "popular") {
        $('#title').text("Popular Movies")
        $.ajax({
           type: 'POST',
           url: 'https://api.themoviedb.org/3/movie/popular?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US',
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
                 tbl += '<td>' + data.results[i].release_date + '</td>';
                 tbl += '<td>' + data.results[i].popularity + '</td>';
                 tbl += '</tr>';
               }
               $('#tmdb tbody').append(tbl);
             } else {
               var tbl = '<tr><td colspan="5">NO DATA AVAILABLE IN TABLE</td></tr>';
               $('#tmdb tbody').append(tbl);
             }
           }
         });
      } else if ($('#list').val() == "toptv") {
        $('#title').text("Top Rated Tv Shows")
        $.ajax({
           type: 'POST',
           url: 'https://api.themoviedb.org/3/tv/popular?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US',
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
                 tbl += '<td>' + data.results[i].name + '</td>';
                 tbl += '<td>' + data.results[i].first_air_date + '</td>';
                 tbl += '<td>' + data.results[i].popularity + '</td>';
                 tbl += '</tr>';
               }
               $('#tv tbody').append(tbl);
             } else {
               var tbl = '<tr><td colspan="5">NO DATA AVAILABLE IN TABLE</td></tr>';
               $('#tv tbody').append(tbl);
             }
           }
         });
      } else if ($('#list').val() == "ontheair") {
        $('#title').text("On the air Tv Shows")
        $.ajax({
           type: 'POST',
           url: 'https://api.themoviedb.org/3/tv/on_the_air?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US',
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
                 tbl += '<td>' + data.results[i].name + '</td>';
                 tbl += '<td>' + data.results[i].first_air_date + '</td>';
                 tbl += '<td>' + data.results[i].popularity + '</td>';
                 tbl += '</tr>';
               }
               $('#tv tbody').append(tbl);
             } else {
               var tbl = '<tr><td colspan="5">NO DATA AVAILABLE IN TABLE</td></tr>';
               $('#tv tbody').append(tbl);
             }
           }
         });
      } else if ($('#list').val() == "airing") {
        $('#title').text("Airing Today Tv Shows")
        $.ajax({
           type: 'POST',
           url: 'https://api.themoviedb.org/3/tv/airing_today?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US',
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
                 tbl += '<td>' + data.results[i].name + '</td>';
                 tbl += '<td>' + data.results[i].first_air_date + '</td>';
                 tbl += '<td>' + data.results[i].popularity + '</td>';
                 tbl += '</tr>';
               }
               $('#tv tbody').append(tbl);
             } else {
               var tbl = '<tr><td colspan="5">NO DATA AVAILABLE IN TABLE</td></tr>';
               $('#tv tbody').append(tbl);
             }
           }
         });
      } else if ($('#list').val() == "populartv") {
        $('#title').text("Popular Tv Shows")
        $.ajax({
           type: 'POST',
           url: 'https://api.themoviedb.org/3/tv/popular?api_key=3f4f7e2e5a89f98c35e6b5e6433466b6&language=en-US',
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
                 tbl += '<td>' + data.results[i].name + '</td>';
                 tbl += '<td>' + data.results[i].first_air_date + '</td>';
                 tbl += '<td>' + data.results[i].popularity + '</td>';
                 tbl += '</tr>';
               }
               $('#tv tbody').append(tbl);
             } else {
               var tbl = '<tr><td colspan="5">NO DATA AVAILABLE IN TABLE</td></tr>';
               $('#tv tbody').append(tbl);
             }
           }
         });
      }
    }
    
</script>