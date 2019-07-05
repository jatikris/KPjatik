<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
        <!-- As a link -->
        <nav class="navbar navbar-dark bg-dark">
           <a class="navbar-brand" href="#">Navbar</a>
        </nav>
        
        <div class="container">
        <br>
        <br>
        
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Task</button>
            <br>

            <!-- Modal -->
            <br>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <form method="post" action="<?php echo site_url('CRUDcontroller/create')?>">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="jenis_task" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Jenis Task
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Task 1</a>
                                    <a class="dropdown-item" href="#">Task 2</a>
                                    <a class="dropdown-item" href="#">Task 3</a>
                                </div>
                            </div>
                            <br>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="pilih_site" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pilih Site
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Site 1</a>
                                    <a class="dropdown-item" href="#">Site 2</a>
                                    <a class="dropdown-item" href="#">Site 3</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tgl Mulai</label>
                                <input type="date" class="form-control" id="tgl_mulai" aria-describedby="emailHelp" placeholder="Tgl Mulai">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tgl Selesai</label>
                                <input type="date" class="form-control" id="tgl_selesai" aria-describedby="emailHelp" placeholder="Tgl Selesai">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Project</label>
                                <input type="text" class="form-control" id="nama_project" aria-describedby="emailHelp" placeholder="Nama Project">
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="operator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Operator
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">OP 1</a>
                                    <a class="dropdown-item" href="#">OP 2</a>
                                    <a class="dropdown-item" href="#">OP 3</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" aria-describedby="emailHelp" placeholder="">
                            </div>

                            <button type="submit" class="btn btn-primary" value="save">Submit</button>
                        </form>

                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Task</th>
                    <th scope="col">Nama Site</th>
                    <th scope="col">Tgl Mulai</th>
                    <th scope="col">Tgl Selesai</th>
                    <th scope="col">Nama Project</th>
                    <th scope="col">Operator</th>               
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $row) {?>
                    <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->jenis_task; ?></td>
                    <td><?php echo $row->pilih_site; ?></td>
                    <td><?php echo $row->tgl_mulai; ?></td>
                    <td><?php echo $row->tgl_selesai; ?></td>
                    <td><?php echo $row->nama_project; ?></td>
                    <td><?php echo $row->operator; ?></td>
                    <td><?php echo $row->keterangan; ?></td>
                    <th>Status</th>
                    </tr>
                    <?php }?> 
                </tbody>
            </table>

        </div>

    </body>
</html>