<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul;?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post" action="<?= base_url()?>anggota/save" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ID Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_anggota" value="<?= $id_anggota;?>" class="form-control" readonly>
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                        <select name= gender class="form-control" required>
                            <option value="">Pilih gender anda</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" cols="30" rows="5" required></textarea>
                </div>
                    </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">No. HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_hp" class="form-control" placeholder="No. HP" required>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <a href="<?= base_url()?>anggota" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>

    </div>
</div>