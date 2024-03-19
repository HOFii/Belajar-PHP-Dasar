# PHP Dasar

## Pengenalan PHP

**PHP** singkatan dari **PHP**: _Hypertext Preprosessor_. PHP
adalah bahasa pemograman yang dikhususkan untuk
membuat website. **PHP** pertama kali dibuat oleh **_Rasmus Lerdorf_** pada tahun _1995_.

## Proses Development PHP

Proses Development PHP cukup mudah.

1. Buat file dengan nama bebas, contoh `index.php`
2. File yang sudah di buat nanti hasilnya akan di Load oleh PHP Compiler.
3. Hasil akan tampil sesuai dengan apa yang anda kamu tulis, bisa di terminal atau di web browser.

![alt text](<pic/dev php.png>)

---

### 1. Program "Hello World!" di PHP

- File kode program PHP diakhiri dengan _ekstention_
  `.php`.

- Diawal kode program PHP wajib menambahkan `<?php` dan diakhir kode program juga perlu menambahkan `?>`.

- Dalam penulisan nama file PHP, sangat direkomendasikan tidak menggunakan _spasi_.

- Untuk menampilkan tulisan di PHP, cukup menggunakan perintah `echo`. Dan wajib diakhiri `;` jika tidak kode program akan _error_.

- Kamu bisa melihat hasilnya dengan membuka terminal lalu mengetikkan nama filenya `php namafile.php`.

Contohnya:

```PHP
<?php
echo "Hello World!";

?>
```

---

### 2. Tipe Data Number

Terdapat 2 jenis tipe data di PHP.

- `(int)` Bilangan bulat, punya beberapa basis:

        1. Decimal (base 10),
        2. Hexadecimal (base 16),
        3. Octa (base 8),
        4. Binary (base 2).

- `(float)` Bilangan pecahan.

- Di PHP juga kita bisa menambahkan `_`(garis bawah) untuk mempermudah membahaca angka. namun saat program di eksekusi `_`(garis bawah) tersebut akan di _ignore_ atau dihiraukan. Dan untuk angka negatif bisa menggunakan `-`(tanda minus) didepan angka.

- Kita bisa menggunakan perintah `var_dump` untuk debugging variable.

        1. Tipe data Number:

  ```PHP
  <?php

  echo "Decimal : ";
  var_dump(1234);

  echo "Octal : ";
  var_dump(01234);

  echo "Hexadecimal : ";
  var_dump(0x1A);

  echo "Binary : ";
  var_dump(0b111111);

  echo "Underscore in number : ";
  var_dump(1_241_241_241);
  ```

  Output:

  ```PHP
  Decimal : int(1234)
  Octal : int(01234)
  Hexadecimal : int(26)
  Binary : int(63)
  Underscore in number : int(1241241241)
  ```

        2. Tipe Data Float(Pecahan):

  ```PHP
  echo "Floating Point : ";
  var_dump(1.234);

  echo "Floating Point dengan E notation Plus (1.7 x 1000) : ";
  var_dump(1.2e4);

  echo "Floating Point dengan E notation Minus (1.7 x 0.001) : ";
  var_dump(7e-3);

  echo "Underscore di Floating Point : ";
  var_dump(1_123.123);
  ```

  Output:

  ```PHP
  Floating Point : float(1.234)
  Floating Point dengan E notation Plus : (1.7 x 1000) : float(1700)
  Floating Point dengan E notation Minus : (1.7 x 0.001) : float(0.0017)
  Underscore di Floating Point : float(1123.123)

  ```

  ***

### 3. Integer Overflow

- Secara default, kapasitas integer di PHP ada batasnya, `2147483647` (2 miliyar kurang lebih) untuk sistem operasi _32_ bit,
  dan `9223372036854775807` untuk sistem operasi _64_ bit.

- Jika kita membuat number _integer_ melebihi batas nilai tersebut maka akan secara otomastis tipe numbernya berubah menjadi _floating point_.

  ```PHP
  //sebelum melebihi batas
  echo "Integer Overflow : ";
  var_dump(9223372036854775807);

  //Output:
  Integer Overflow : int(9223372036854775807)


  //setelah melebihi batas
  echo "Integer Overflow : ";
  var_dump(9223372036854775808);

  //Output:
  Integer Overflow : float(9.2233720368547758E+18)
  ```

---

### 4. Tipe Data Boolean

- Tipe data _boolean_ adalah tipe data yang paling sederhana di PHP, tipe data _boolean_ adalah tipe data dengan nilai kebenaran `(benar atau salah)`.

- Nilai benar di presentasikan dengan true (case insensitive)

- Nilai salah di presentasikan dengan false (case insensitive)

- case insensitive artinya bebas cara penulisannya baik `true` huruf kecil semua atau `TRUE` kapital semua.

  ```PHP
  echo "Benar : ";
  var_dump(true);

  echo "Salah : ";
  var_dump(false);
  ```

  Output:

  ```PHP
  Benar : bool(true)
  Salah : bool(false)
  ```

---

### 5. Tipe Data String

- Tipe data _string_ adalah tipe data representasi teks, _string_ bisa kosong atau mengandung banyak karakter.

- Untuk membuat _string_ bisa menggunakan single quote `''` (kutip satu).

- Bisa juga menggunakan double quote `""` (kutip dua), kelebihannya bisa menggunakan _escape sequence_ seperti `\n` untuk "ENTER" dan `\t` untuk TAB, dll.

  ```PHP
  //Single Quote:
  echo 'Nama : ';
  echo 'Gusti Alifiraqsha Akbar';

  //Output:
  Nama : Gusti Alifuraqsha Akbar


  //Double Quote:
  echo "Nama : ";
  echo "Gusti\t Alifiraqsha\t Akbar\n";

  //Output:
  Nama : Gusti    Alifiraqsha     Akbar
  ```

- Ada juga _Multiline String_ bisa digunakan untuk membuat data _string_ lebih dari satu baris. Dan di PHP memiliki fitur bernama _Heredoc_ dan _Nowdoc_

  - _Heredoc_ adalah fitur untuk membuat _string_ panjang tanpa harus "ENTER dan TAB" secara manual.

  1. Heredoc:

  ```PHP
  echo <<<GUSTI
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam.
  GUSTI;

  //Output:
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam.
  ```

  2. Nowdoc:

  ```PHP
  echo <<<'GUSTI'
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam.
  GUSTI;

  //Output:
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam.
  ```

---

### 6. Variable

- _Variable_ adalaha tempat untuk menyimpan data yang nantinya bisa di gunakan untuk kode program kita.

- Di PHP _variable_ bisa menampung berbagai jenis tipe data dan datanya bisa juga diubah-ubah.

- Cara membuat _variable_ di PHP bisa menggunakan tanda `$` (dolar), lalu nama _variable_ nya perlu di ingat membuat variable tidak boleh menggunakan spasi.

  ```PHP
  $nama = "Gusti";
  $umur = "17";

  echo "Nama :";
  echo $nama;
  echo "\n";

  echo "Umur: ";
  echo $umur;
  echo "\n";

  //Output:
  Nama : Gusti
  Umur : 17
  ```

---

### 7. Contant

- Karena _variable_ di PHP itu 'mutable' yang artinya bisa dirubah. Maka jika ingin membuat _variable_ yang tidak bisa dirubah bisa menggunakan fitur _constant_.

- _Constant_ adalah tempat untuk menyimpan data yang tidak dapat dirubah lagi ketika sudah dideklarasikan.

- Cara membuat _constant_ kita bisa menggunakan perintah `define()`. Lalu disana bisa memasukan 2 parameter, yaitu nama _constant_ nya dan nama _value_ nya.

- Cara terbaik membuat _contant_ adalah menggunakan `UPPER_CASE`.

- Dan ketika ingin mengakases _constant_ nya kita tinggal memanggil nama _contant_ nya.

  ```PHP
  define("AUTHOR", "Gusti Alifiraqsha Akbar");
  define("APP_VERSION", 1.0.0);

  echo "Author : ";
  echo AUTHOR;
  echo "\n";

  echo "App Version : ";
  echo APP_VERSION;
  echo "\n";

  //Output:
  Author : Gusti Alifiraqsha Akbar
  App Version : 1.0.0
  ```

  ***

### 8. Data NULL

- Nilai _NULL_ merepresentasikan _variable_ tanpa nilai, jadi saat ingin mengosongkan nilai _variable_ kita bisa menggunakan _NULL_.

- Kita bisa menggunakan kata kunci _NULL_ untuk membuat data _NULL_ dan sifat nya (case insensitive).

  ```PHP
  $nama = "Gusti";
  $name = null;

  //Output:
  //kosong karena kita mengset nya null.
  ```

- Mengecek apakah data NULL

  - Cara mengetahui sebuah data bernilai _NULL_ atau tidak bisa menggunakan perintah `is_null($variable)`.
  - Hasil dari perintah `is_null` adalah _boolean_.

  ```PHP
    $nama = "Gusti";
    $name = null;

    echo "Apakah nama null? : ";
    var_dump(is_null($nama));

    //Output;
    Apakah nama null? : bool(true)
  ```

- Selain mengubah _NULL_ di PHP kita juga bisa menghapus _variable_, dengan menggunaka perintah `unset($variable)`.

- Namun jika menggunakan perintah `unset` variable yang sudah di hapus tidak akan bisa digunakan lagi.

- Jadi agar lebih aman lebih baik menggunakan perintah `isset($variable)`, ini digunakan untuk mengecek apakah sebuah _variable_ nilainya ada atau _NULL_.

  ```PHP
  $contoh = "Gusti";
  var_dump(isset($contoh));

  //Output:
  bool(true)
  //bernilai 'true' Karena variable contoh ada nilainya, jika tidak ada atau null maka 'false'.
  ```

---

### 9. Tipe Data Array

- _Array_ adalah tipe data yang bisa berisikan banyak data atau kosong, _Array_ di PHP itu dinamis artinya kita bisa memasukan data sebanyak-banyaknya.

- _Array_ di PHP juga bisa berisikan berbagai jenis data baik itu _integer_, _string_ dll.

#### Cara kerja Array

![array](pic/array1.png)

- Jadi _array_ di PHP di mulai dari index 0.

- Contohnya, jika ingin mengambil nilai _array_ yang ke 9 maka kita harus memangil index ke 8. Karena _array_ di PHP dimulai dari 0, atau dikurangi kurangin 1 angka.

- Ada 2 cara pembuatan array:

  ```PHP
  //cara pertama:
  $values = array(1, 2, 3, 4, 7.5);
  var_dump($values);

  //cara kedua:
  $names = ["Elaina", "Kiana", "Asuna"];
  var_dump($names);


  //Output pertama:
  array(5){
    [0]=> int(1)
    [1]=> int(2)
    [2]=> int(3)
    [3]=> int(4)
    [4]=> float(7.5)
  }

  //Output kedua:
  array(3){
    [0]=> string(6) "Elaina"
    [1]=> string(5) "Kiana"
    [2]=> string(5) "Asunaa"
  }
  ```

- Operasi Array
  ![oparry](pic/array2.png)

- Array sebagai Map

  - Di PHP kita bisa menggunakan _array_ sebagai map.

  - Secara default _array_ akan menggunakan _index_(number) sebagai _key value_ nya, nah kita bisa bebas memasukan data ke dalam _array_.

  - Dan kita juga bisa mengganti _index_ nya menjadi tipe data lain, _string_ contohnya.

    ```PHP
    $nama = array(
        "id" => 01,
        "nama" => "Kiana Kaslana",
        "umur" => 18
    );
    var_dump(nama);

    //Outputnya:
    array(3){
        ["id"]=> int(01)
        ["nama"]=> string(12)"Kiana Kaslana"
        ["umur"]=>  int(18)
    }
    ```

- Array dalam Array

  ```PHP
  $nama = array(
      "id" => 01,
      "nama" => "Kiana Kaslana",
      "umur" => 18,
      "asal" => array[
          "kota" => "Bogor",
          "Negara" => "Indonesia"
      ]
  );
  var_dump($nama["asal"]["kota"]);

  //Output:
  String(5) "Bogor"
  ```

---

### 10. Operator Aritmatika

- Operasi Aritmatik1 1
  ![arima1](pic/aritma1.png)

- Operasi Aritmatika 1
  ![aritma2](pic/aritma2.png)

- Kode Operasi Aritmatik
  !
