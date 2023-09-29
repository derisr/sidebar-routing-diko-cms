@extends('layout.app')
@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Motto - landing Page</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="#" class="btn btn-primary">Tambah Data</a>
                                <a href="#" class="btn btn-primary">Lihat</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Icon</th>
                                            <th>Nama Fitur</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Icon 1</td>
                                            <td>Nama Fitur 1</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td>
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Icon 1</td>
                                            <td>Nama Fitur 2</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td>
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Icon 1</td>
                                            <td>Nama Fitur 3</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td>
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Icon 1</td>
                                            <td>Nama Fitur 4</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td>
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Icon 1</td>
                                            <td>Nama Fitur 5</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                            <td>
                                                {{-- <i href="#" class="fas fa-eye btn-primary"></i> --}}
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="form-group col mb-4">
                                <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Text Jumlah Pengguna</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple" style="display: none;"></textarea>
                                    <div class="note-editor note-frame card">
                                        <div class="note-dropzone">
                                            <div class="note-dropzone-message"></div>
                                        </div>
                                        <div class="note-toolbar-wrapper" style="height: 71.4182px;">
                                            <div class="note-toolbar card-header" style="position: relative; top: 0px; width: 100%;">
                                                <div class="note-btn-group btn-group note-style"><button type="button" class="note-btn btn btn-light btn-sm note-btn-bold" tabindex="-1" aria-label="Bold (CTRL+B)" data-bs-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-italic" tabindex="-1" aria-label="Italic (CTRL+I)" data-bs-original-title="Italic (CTRL+I)"><i class="note-icon-italic"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-underline" tabindex="-1" aria-label="Underline (CTRL+U)" data-bs-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" aria-label="Remove Font Style (CTRL+\)" data-bs-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div>
                                                <div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-light btn-sm note-btn-strikethrough" tabindex="-1" aria-label="Strikethrough (CTRL+SHIFT+S)" data-bs-original-title="Strikethrough (CTRL+SHIFT+S)"><i class="note-icon-strikethrough"></i></button></div>
                                                <div class="note-btn-group btn-group note-para">
                                                    <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" aria-label="Paragraph" data-bs-original-title="Paragraph"><i class="note-icon-align-left"></i></button>
                                                        <div class="dropdown-menu">
                                                            <div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" aria-label="Align left (CTRL+SHIFT+L)" data-bs-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" aria-label="Align center (CTRL+SHIFT+E)" data-bs-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" aria-label="Align right (CTRL+SHIFT+R)" data-bs-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" aria-label="Justify full (CTRL+SHIFT+J)" data-bs-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div>
                                                            <div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" aria-label="Outdent (CTRL+[)" data-bs-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" aria-label="Indent (CTRL+])" data-bs-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-editing-area">
                                            <div class="note-handle">
                                                <div class="note-control-selection" style="display: none;">
                                                    <div class="note-control-selection-bg"></div>
                                                    <div class="note-control-holder note-control-nw"></div>
                                                    <div class="note-control-holder note-control-ne"></div>
                                                    <div class="note-control-holder note-control-sw"></div>
                                                    <div class="note-control-sizing note-control-se"></div>
                                                    <div class="note-control-selection-info"></div>
                                                </div>
                                            </div><textarea class="note-codable"></textarea>
                                            <div class="note-editable card-block" contenteditable="true" style="min-height: 150px; height: 84.9591px;">
                                                <p><br></p>
                                            </div>
                                        </div>
                                        <div class="note-statusbar">
                                            <div class="note-resizebar">
                                                <div class="note-icon-bar">
                                                    <div class="note-icon-bar">
                                                        <div class="note-icon-bar"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection