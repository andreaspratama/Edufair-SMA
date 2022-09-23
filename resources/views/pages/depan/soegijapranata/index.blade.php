<html>
<head>
    <title>Edufair SMA Kristen YSKI</title>
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
        .gambar img {
            width: 700px;
            height: 200px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-bottom: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 gambar align-self-center">
                <img src="{{url('/gambar/logo_putih.png')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form style="background-color: #fff; padding: 40px; border-radius: 10px" method="POST" action="{{ route('soegijapranataDaftar') }}" enctype="multipart/form-data">
                    <h3 style="font-size: 20px">Edufair SMA Kristen YSKI - UNIKA SOEGIJAPRANATA</h3>
                    @csrf
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama...">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="kelas">Pilih Kelas</label>
                    <select class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas">
                                  <option>-- Pilih Kelas --</option>
                                  <option value="X 1">X 1</option>
                                  <option value="X 2">X 2</option>
                                  <option value="X 3">X 3</option>
                                  <option value="X 4">X 4</option>
                                  <option value="X 5">X 5</option>
                                  <option value="X 6">X 6</option>
                                  <option value="X 7">X 7</option>
                                  <option value="XI MIPA 1">XI MIPA 1</option>
                                  <option value="XI MIPA 2">XI MIPA 2</option>
                                  <option value="XI IPS 1">XI IPS 1</option>
                                  <option value="XI IPS 2">XI IPS 2</option>
                                  <option value="XI IPS 3">XI IPS 3</option>
                                  <option value="XI BB">XI BB</option>
                                  <option value="XII MIPA 1">XII MIPA 1</option>
                                  <option value="XII MIPA 2">XII MIPA 2</option>
                                  <option value="XII MIPA 3">XII MIPA 3</option>
                                  <option value="XII IPS 1">XII IPS 1</option>
                                  <option value="XII IPS 2">XII IPS 2</option>
                                  <option value="XII IPS 3">XII IPS 3</option>
                                  <option value="XII BB">XII BB</option>
                                </select>
                        @error('kelas')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="kelas">Pilih Kelas</label>
                    <input type="text" class="form-control @error('noabsen') is-invalid @enderror" id="noabsen" name="noabsen" placeholder="No Absen...">
                        @error('noabsen')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                  </div>
                  <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto</label>
                            <input type="file" class="form-control-file @error('signed') is-invalid @enderror" id="exampleFormControlFile1" name="signed">
                            @error('signed')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                  <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center mt-3">
            <p1 style="color: #fff; font-size: 18px">&copy; Pusat Pengembangan Akademik & Teknologi 2022</p1>
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