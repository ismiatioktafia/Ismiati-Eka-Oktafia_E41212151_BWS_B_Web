<html>
    <head>
        <title>Upload File Dengan Laravel</title>
        <link rel="stylesheet" href=
        "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="container">
                <h2 class="text-center my-5">Upload File Dengan Laravel</h2>
                <div class="col-lg-8 mx-auto my-5">
                    {{-- Peringatan Jika error --}}
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $errror }} <br/>
                        @endforeach
                    </div>
                    @endif
                    <form action="{{ route('upload.resize') }}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="from-group">
                        <b>File Gambar</b><br/>

                        {{-- Pesan jika succes --}}
                        @if (session('succes'))
                        <div class="alert alert-succes alert-dismissible">
                            <a href="#" class="close text-deroration-none"
                            data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('success') }}
                        </div>
                        @endif

                        {{-- Peringatan Jika error --}}
                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" aria-label="close">&times;</a>
                            {{ session('error') }}
                        </div>
                        @endif
                        <input type="file">
                    </div>
                    <div class="from-group">
                        <b>Keterangan</b>
                        <textarea class="from-control" name="keterangan">

                        </textarea>
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>