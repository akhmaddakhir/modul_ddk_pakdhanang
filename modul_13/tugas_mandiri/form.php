<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Pendaftaran Ekstrakurikuler</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 40px auto;
        max-width: 600px;
        padding: 20px;
      }

      .form-box {
        border: 1px solid #999;
        padding: 20px 30px;
      }

      .form-box h2 {
        text-align: center;
        color: #7b00cc;
        font-size: 18px;
        margin-bottom: 6px;
      }

      hr {
        border: none;
        border-top: 1px solid #ccc;
        margin-bottom: 16px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      td {
        padding: 5px 4px;
        font-size: 14px;
        vertical-align: top;
      }

      td:first-child {
        width: 120px;
        white-space: nowrap;
      }

      td:nth-child(2) {
        width: 14px;
        text-align: center;
      }

      input[type="text"],
      input[type="date"] {
        border: 1px solid #999;
        padding: 2px 5px;
        font-size: 13px;
      }

      .tgl-input {
        display: flex;
        gap: 4px;
        align-items: center;
      }

      .tgl-input input {
        width: 50px;
      }

      .tgl-input input:last-child {
        width: 60px;
      }

      textarea {
        border: 1px solid #999;
        padding: 3px 5px;
        font-size: 13px;
        width: 280px;
        height: 50px;
        resize: vertical;
      }

      select {
        font-size: 13px;
        padding: 2px;
      }

      .radio-group label,
      .checkbox-group label {
        display: block;
        font-size: 13px;
        margin-bottom: 2px;
      }

      .radio-group {
        display: flex;
        gap: 12px;
      }

      .required {
        color: red;
        margin-left: 4px;
      }

      .btn-row {
        margin-top: 14px;
        display: flex;
        gap: 8px;
      }

      .btn-row input {
        padding: 4px 14px;
        font-size: 13px;
        cursor: pointer;
      }

      .note {
        font-size: 12px;
        color: red;
        margin-top: 8px;
      }
    </style>
  </head>
  <body>
    <div class="form-box">
      <h2>Pendaftaran Ekstrakurikuler</h2>
      <hr />

      <form method="POST" action="hasil.php">
        <table>
          <tr>
            <td>NIS</td>
            <td>:</td>
            <td>
              <input type="text" name="nis" required />
              <span class="required">*</span>
            </td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" style="width:220px;" /></td>
          </tr>
          <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
              <select name="kelas">
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Tgl Lahir</td>
            <td>:</td>
            <td>
              <div class="tgl-input">
                <input type="text" name="tgl" placeholder="DD" maxlength="2" />
                /
                <input type="text" name="bln" placeholder="MM" maxlength="2" />
                /
                <input type="text" name="thn" placeholder="YYYY" maxlength="4" style="width:60px;" />
              </div>
            </td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
          </tr>
          <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type="text" name="kota" style="width:180px;" /></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
              <div class="radio-group">
                <label><input type="radio" name="jk" value="Laki-Laki" /> Laki-Laki</label>
                <label><input type="radio" name="jk" value="Perempuan" /> Perempuan</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>Hobby</td>
            <td>:</td>
            <td>
              <div class="checkbox-group">
                <label><input type="checkbox" name="hobby[]" value="Membaca" /> Membaca</label>
                <label><input type="checkbox" name="hobby[]" value="Olahraga" /> Olahraga</label>
                <label><input type="checkbox" name="hobby[]" value="Menyanyi" /> Menyanyi</label>
                <label><input type="checkbox" name="hobby[]" value="Menari" /> Menari</label>
                <label><input type="checkbox" name="hobby[]" value="Traveling" /> Traveling</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>Pilihan Ekskul</td>
            <td>:</td>
            <td>
              <select name="ekskul[]" multiple size="8" style="width:140px;">
                <option value="Pramuka">Pramuka</option>
                <option value="Basket">Basket</option>
                <option value="Volly">Volly</option>
                <option value="Band">Band</option>
                <option value="Seni Tari">Seni Tari</option>
                <option value="Robotic">Robotic</option>
                <option value="Bulu Tangkis">Bulu Tangkis</option>
                <option value="Renang">Renang</option>
              </select>
            </td>
          </tr>
        </table>

        <div class="btn-row">
          <input type="submit" value="Kirim" />
          <input type="reset" value="Cancel" />
        </div>
        <p class="note">* Harus Di isi</p>
      </form>
    </div>
  </body>
</html>