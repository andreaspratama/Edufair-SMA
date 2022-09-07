<html>
<head>
    <title>Laravel Signature Pad Example - MyNotePaper.com</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }
        .card-header h5 {
            font-family: 'Poppins', sans-serif;
        }
        form {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-3 mt-5 mb-5 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Edufair SMA Kristen YSKI - UNIVERSITAS PRASETIYA MULYA</h5>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('prasetiyamulyaDaftar') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama...">
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas...">
                            </div>
                            <div class="form-group">
                                <label for="noabsen">No Absen</label>
                                <input type="text" class="form-control" id="noabsen" name="noabsen" placeholder="No Absen...">
                            </div>
                            <div class="form-group">
                                <label>Digital Signature</label>
                                <br/>
                                <div id="sig"></div>
                                <br/><br/>
                                <button id="clear" class="btn btn-danger btn-sm">Hapus</button>
                                <textarea id="signature" name="signed" style="display: none"></textarea>
                            </div>
                            <button class="btn btn-primary w-100">Simpan</button>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
        $('#clear').click(function (e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
    <script>
        var serverClock = jQuery("#jamServer");
        if (serverClock.length &gt; 0) {
            showServerTime(serverClock, serverClock.text());
        }
        
        function showServerTime(obj, time) {
            var parts   = time.split(":"),
                newTime = new Date();
        
            newTime.setHours(parseInt(parts[0], 10));
            newTime.setMinutes(parseInt(parts[1], 10));
            newTime.setSeconds(parseInt(parts[2], 10));
        
            var timeDifference  = new Date().getTime() - newTime.getTime();
        
            var methods = { 
                displayTime: function () {
                    var now = new Date(new Date().getTime() - timeDifference);
                    obj.text([
                        methods.leadZeros(now.getHours(), 2),
                        methods.leadZeros(now.getMinutes(), 2),
                        methods.leadZeros(now.getSeconds(), 2)
                    ].join(":"));
                    setTimeout(methods.displayTime, 500);
                },
        
                leadZeros: function (time, width) {
                    while (String(time).length &lt; width) {
                        time = "0" + time;
                    }
                    return time;
                }
            }
            methods.displayTime();
        }
    </script>
</body>
</html>

{{-- <html>
<head>
    <title>Laravel Signature Pad Tutorial Example - Medikre.com </title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
  
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
  
    <style>
        .kbw-signature { width: 100%; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>
  
</head>
<body class="bg-dark">
<div class="container">
   <div class="row">
       <div class="col-md-8 offset-md-3 mt-5 ml-auto mr-auto">
           <div class="card">
               <div class="card-header">
                   <h5>Absensi Universitas Semarang</h5>
               </div>
               <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form method="POST" action="{{route('usm.store')}}">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama...">
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas...">
                            </div>
                            <div class="form-group">
                                <label for="noabsen">No Absen</label>
                                <input type="text" class="form-control" id="noabsen" name="noabsen" placeholder="No Absen...">
                            </div>
                            <label class="" for="">Tanda Tangan</label>
                            <br/>
                            <div id="sig" ></div>
                            <br/>
                            <button id="clear" class="btn btn-danger btn-sm">Hapus</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                            <br>
                            <button class="btn btn-primary mt-2 w-100">Daftar</button>
                        </div>
                    </form>
               </div>
           </div>
       </div>
   </div>
</div>
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
</body>
</html> --}}