@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Form</title>
    </head>

    <body>

        <div class="container mt-5">
            <h2>Edit form</h2>
            <form>
                <div class="form-group">
                    <label for="nomor">Nomor:</label>
                    <input type="text" class="form-control" id="nomor" placeholder="1" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kategori:</label>
                    <input type="text" class="form-control" id="nama" placeholder="Shandy Fakhri" readonly>
                </div>
                <div class="d-flex justify-content-end">
                <a href="/kategori.edit">
                    <button type="button" class="btn btn-danger">Simpan</button>
                </a>
            </div>
            </form>
        </div>
    </body>

    </html>
@endsection
