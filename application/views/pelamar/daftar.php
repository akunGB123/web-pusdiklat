<main id="main">
    <section>
        <div class="container" data-aos="fade-up" style="margin-top: 6%;">

            <div class="section-title">
                <h2>Pendaftaran Magang@perpusnas</h2>
                <p><?= $unit_kerja['nama']; ?></p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-9 ">

                    <!-- <?php if ($this->session->flashdata('flash_khs')) : ?>
                        <div class="alert alert-<?= $this->session->flashdata('flash_khs')['type']; ?>" role="alert">
                            <?= $this->session->flashdata('flash_khs')['text']; ?>
                        </div>
                    <?php unset($_SESSION['flash_khs']);
                            endif; ?>

                    <?php if ($this->session->flashdata('flash_cv')) : ?>
                        <div class="alert alert-<?= $this->session->flashdata('flash_cv')['type']; ?>" role="alert">
                            <?= $this->session->flashdata('flash_cv')['text']; ?>
                        </div>
                    <?php unset($_SESSION['flash_cv']);
                    endif; ?>

                    <?php if ($this->session->flashdata('flash_surat')) : ?>
                        <div class="alert alert-<?= $this->session->flashdata('flash_surat')['type']; ?>" role="alert">
                            <?= $this->session->flashdata('flash_surat')['text']; ?>
                        </div>
                    <?php unset($_SESSION['flash_surat']);
                    endif; ?> -->

                    <?= form_open_multipart('pelamar/daftar/' . $unit_kerja['id']) ?>
                    <div class="row justify-content-around">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="label" for="nama">Nama Lengkap</label>
                                <input class="form-control" type="text" id="nama" name="nama" value="<?= form_error('nama') || set_value('nama') ? set_value('nama') : $user['nama']; ?>">
                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="label" for="universitas">Universitas</label>
                                <input class="form-control" type="text" id="universitas" name="universitas" value="<?= form_error('universitas') || set_value('universitas') ? set_value('universitas') : $user['universitas']; ?>">
                                <?= form_error('universitas', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="label" for="nim">Nomor Induk Mahasiswa</label>
                                <input class="form-control" type="text" id="nim" name="nim" value="<?= form_error('nim') || set_value('nim') ? set_value('nim') : $user['nim']; ?>">
                                <?= form_error('nim', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="label" for="semester">Semester</label>
                                <select class="form-control" id="semester" name="semester">
                                    <option disabled selected>--PILIH--</option>
                                    <?php for ($i = 1; $i <= 14; $i++) : ?>
                                        <?php if ((set_value('semester') != null && set_value('semester') == $i) || (set_value('semester') == null && $user['semester'] == $i)) : ?>
                                            <option value="<?= $i; ?>" selected><?= $i; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $i; ?>"><?= $i; ?></option>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </select>
                                <?= form_error('semester', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="label" for="fakultas">Fakultas</label>
                                <input class="form-control" type="text" id="fakultas" name="fakultas" value="<?= form_error('fakultas') || set_value('fakultas') ? set_value('fakultas') : $user['fakultas']; ?>">
                                <?= form_error('fakultas', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="label" for="prodi">Program Studi</label>
                                <input class="form-control" type="text" id="prodi" name="prodi" value="<?= form_error('prodi') || set_value('prodi') ? set_value('prodi') : $user['prodi']; ?>">
                                <?= form_error('prodi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="label" for="no_telp">No.Telp/WhatsApp</label>
                                <input class="form-control" type="text" id="no_telp" name="no_telp" value="<?= form_error('no_telp') || set_value('no_telp') ? set_value('no_telp') : $user['no_telpon']; ?>">
                                <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="label" for="email">Email</label>
                                <input class="form-control" type="text" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label" for="unit_kerja">Unit Kerja</label>
                        <input class="form-control" type="text" id="unit_kerja" name="unit_kerja" value="<?= $unit_kerja['nama']; ?>" readonly>
                        <input type="hidden" id="id_unit" name="id_unit" value="<?= $unit_kerja['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="label" for="no_surat">Nomor Surat Permohonan Magang</label>
                        <input class="form-control" type="text" id="no_surat" name="no_surat" value="<?= set_value('no_surat'); ?>">
                        <!-- <input class="form-control" type="text" id="no_surat" name="no_surat" value="<?= form_error('no_surat') || set_value('no_surat') ? set_value('no_surat') : $user['no_surat_permohonan']; ?>"> -->
                        <?= form_error('no_surat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="label" for="surat_permohonan">Surat Permohonan Magang</label>
                        <div style="border-style: dotted; height: fit-content; padding: 10px;">
                            <p class="text-muted">Unggah berkas Surat Permohonan Magang anda disini. Berkas harus bertipe PDF dan berukuran kurang dari 2 MB</p>
                            <input class="form-control-file" type="file" id="surat_permohonan" name="surat_permohonan">
                            <?= form_error('surat_permohonan', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="row justify-content-around mb-3">
                        <div class="col-lg-6">
                            <label class="label">Kartu Hasil Studi</label>
                            <div class="container" style="border-style: dotted; height: fit-content;">
                                <p class="mt-3 text-muted"><?= $user['nama_file_khs']; ?></p>
                                <a class="btn btn-primary btn-sm mb-3 mr-2" href="<?= base_url('pelamar/download/') . 'khs/' . $user['id']; ?>">Unduh berkas</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="label">Curriculum Vitae</label>
                            <div class="container" style="border-style: dotted; height: fit-content;">
                                <p class="mt-3 text-muted"><?= $user['nama_file_cv']; ?></p>
                                <a class="btn btn-primary btn-sm mb-3 mr-2" href="<?= base_url('pelamar/download/') . 'cv/' . $user['id']; ?>">Unduh berkas</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="pernyataan" name="pernyataan">
                        <label class="form-check-label" for="pernyataan">
                            Saya menyatakan bahwa data yang saya masukan merupakan data yang faktual dan saya akan bertanggung jawab apabila terjadi ketidaksesuaian pada data saya
                        </label>
                        <?= form_error('pernyataan', '<small class="text-danger">', '</small>'); ?>

                    </div>
                    <div class="row justify-content-end mt-2">
                        <a class="btn btn-light ml-2" href="<?= base_url('pelamar/index') . "#specials"; ?>">Pilih Unit Kerja Lain</a>
                        <button class="btn btn-primary ml-2" name="submitDaftar" value="submit" type="submit">Kirim Lamaran</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
