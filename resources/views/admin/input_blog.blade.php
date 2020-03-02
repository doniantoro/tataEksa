@extends('layouts/master_admin')
    @section('aditional_js2')
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/js/froala_editor.pkgd.min.js"></script>
    @endsection

    @section('content')
    <div class="container">
        <center><h1 style="margin-bottom:70px;">Input Artikel</h1></center>
        <form action="" method="post">
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Input</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Judul</th>
                        <td>
                            <div class="input-group mb-1 col-lg-5">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Background</th>
                        <td>
                            <div class="input-group mb-1 col-lg-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <trheight="400px">
                        <th scope="row">isi text</th>
                        <td><textarea  id="froala-editor">
                                <div style="height: 700px;">
                                </div>
                            </textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <center>
            <button type="button" class="btn btn-outline-danger px-2"><h3>submit</h3></button>
        </center>
    </div>

    @endsection

    @section('additional_js')


    <script>
  FroalaEditor.DefineIcon('imageInfo', {NAME: 'info', SVG_KEY: 'help'});
  FroalaEditor.RegisterCommand('imageInfo', {
    title: 'Info',
    focus: false,
    undo: false,
    refreshAfterCallback: false,
    callback: function () {
      var $img = this.image.get();
      alert($img.attr('src'));
    }
  });

  new FroalaEditor('textarea#froala-editor', {
    // Set image buttons, including the name
    // of the buttons defined in customImageButtons.
    imageEditButtons: ['imageDisplay', 'imageAlign', 'imageInfo', 'imageRemove']
  })
</script>

    @endsection