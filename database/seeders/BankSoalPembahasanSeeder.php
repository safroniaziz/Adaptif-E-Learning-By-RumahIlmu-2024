<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSoalPembahasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bankSoals = array(
            array('id' => '155','pertanyaan' => '<p>Diketahui nama identifier berikut:<br />
          <code>&nbsp; &nbsp;I.&nbsp; &nbsp;3nilai<br />
          &nbsp; &nbsp;II.&nbsp; INI_IDENTIFIER<br />
          &nbsp; &nbsp;III.&nbsp;a_b_<br />
          &nbsp; &nbsp;IV.&nbsp; identifier123empat</code><br />
          Pilihan penulisan identifier yang benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:22:50','updated_at' => '2022-08-09 11:43:49','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Penulisan identifier tidak memperbolehkan menggunakan angka di depan. Pilihan yang benar adalah pilihan II, III, dan IV dengan <code>INI_IDENTIFIER, a_b_, dan identifier123empat</code>.</p>'),
            array('id' => '156','pertanyaan' => '<p>Analisa<strong> </strong>pernyataan berikut mengenai variabel primitif<br />
          &nbsp; &nbsp; &nbsp;&nbsp;I.&nbsp; &nbsp;Variabel primitif mendekati kode mesin<br />
          &nbsp; &nbsp; &nbsp; II.&nbsp;&nbsp;Nilai yang disimpan dalam variabel primitif adalah nilai sebenarnya<br />
          &nbsp; &nbsp; &nbsp; III.&nbsp;Selama eksekusi program, akses variabel primitif lebih lambat daripada mengakses objek variabel non-primitif.<br />
          &nbsp; &nbsp; &nbsp; IV.&nbsp;Variabel primitif memiliki ukuran byte berbeda pada perangkat keras yang berbeda juga.<br />
          Seleksi pilihan yang benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:35:49','updated_at' => '2022-08-09 11:36:27','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pembahasan: Pilihan yang benar adalah I dan IV. Variabel primitif mendekati kode mesin, sehingga memiliki ukuran byte yang berbeda pada platform perangkat keras yang berbeda.</p>'),
            array('id' => '157','pertanyaan' => '<p>Diketahui deklarasi berikut</p>

          <p><code>int nilai = 8;</code></p>

          <p>Analisa kode berikut yang dapat mengubah nilai integer menjadi string dengan bilangan biner adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:43:26','updated_at' => '2022-08-22 15:40:02','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah <code>String str = Integer.toString(nilai, 2)</code>; karena perintah method <code>toString()</code> method akan mengembalikan nilai ke dalam tipe <code>String</code>.</p>'),
            array('id' => '158','pertanyaan' => '<p>Bila ingin mendefinisikan sebuah kelas untuk mewakili Balkon. Balkon tidak memiliki ketinggian karena berada di luar sehingga tingginya selalu sama (tak berhingga). Analisa jumlah minimum variabel/properti yang dapat Anda tentukan untuk mewakili dimensi Balkon.</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:46:36','updated_at' => '2022-08-09 11:46:36','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah lebar dan panjang. Karena balkon memiliki lebar dan panjang, dengan mengabaikan ketinggian yang tidak berhingga sehingga dua properti ini yang menjadi dimensi.</p>'),
            array('id' => '159','pertanyaan' => '<p>Perhatikan perintah berikut<br />
          <code>&nbsp; &nbsp; &nbsp;double x = (4.0f + (3.0)/(int)1.5) * (3/(int)4.0);</code></p>

          <p>Pilihlah hasil yang dihasilkan dari ekspresi Java tersebut!</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:49:47','updated_at' => '2022-08-09 11:49:47','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah 0.0 karena hasil perhitungan (3/(int)4.0) = 0 maka nilai yang dibagi dengan 0 akan menghasilkan nilai 0.0 dalam tipe data double.</p>'),
            array('id' => '160','pertanyaan' => '<p>Cermati pernyataan berikut:</p>

          <ol>
              <li>Konversi implisit mengkonversi secara otomatis tipe data kecil ke tipe data besar</li>
              <li>Konversi implisit mengkonversi secara otomatis tipe data besar ke tipe data kecil</li>
              <li>Konversi eksplisit menggunakan kata kunci cast untuk mengubah tipe data kecil ke tipe data besar</li>
              <li>Konversi eksplisit menggunakan kata kunci cast untuk mengubah data besar ke tipe data kecil</li>
          </ol>

          <p>Rekomendasi pilihan yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:51:50','updated_at' => '2022-08-09 11:51:50','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Jawaban yang benar adalah pernyataan 1 Konversi implisit mengkonversi secara otomatis tipe data kecil ke tipe data besar dan pernyataan 4 Konversi eksplisit menggunakan kata kunci cast untuk mengubah data besar ke tipe data kecil.</p>'),
            array('id' => '161','pertanyaan' => '<p>Perhatikan potongan kode berikut</p>

          <ol>
              <li><code>integer = (int) 3.5;</code></li>
              <li><code>byte = 129;</code></li>
              <li><code>char var1 = &#39;L&#39;;</code></li>
              <li><code>short = 123456;</code></li>
          </ol>

          <p>Evaluasi deklarasi tipe data yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 11:56:53','updated_at' => '2022-08-22 14:19:56','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Jawaban yang benar adalah pernyataan 1 <code>integer = (int) 3.5;</code> merupakan bentuk konversi eksplisit. Pilihan 3 <code>char var1 = &#39;\\u00B5&#39;;</code> benar menunjukkan karakter &micro;. Pilihan 2,&nbsp; <code>byte = 128</code>, salah karena maksimal tipe data byte adalah 127. Pilihan 4, <code>short = 123456</code>, salah karena maksimal tipe data <code>short </code>menyimpan data sampai 5 digit.</p>'),
            array('id' => '162','pertanyaan' => '<p>Perhatikan potongan kode berikut:<br />
          <code>&nbsp;&nbsp;I. (int) (5+ 5.0)<br />
          &nbsp;II. (double) 5+ 6</code></p>

          <p>Maka akan menghasilkan<br />
          &nbsp; &nbsp; A. Kode<code> I</code>&nbsp;menghasilkan 10.0 karena penjumlahan <code>INTEGER </code>dan <code>FLOAT</code><br />
          &nbsp; &nbsp; B. Kode&nbsp;<code>I</code> menghasilkan 10 karena penjumlahan dikonversi menjadi <code>INTEGER</code><br />
          &nbsp; &nbsp; C. Kode&nbsp;<code>II </code>menghasilkan 11.0 karena penjumlahan dikonversi menjadi <code>DOUBLE</code><br />
          &nbsp; &nbsp; D. Kode&nbsp;<code>II</code> menghasilkan &ldquo;5.06&rdquo; karena hasil dalam tipe <code>STRING</code></p>

          <p>Evaluasi hasil dari kode tersebut yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:03:49','updated_at' => '2022-08-22 13:44:01','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah B dan D. Kode&nbsp; <code>I</code> menghasilkan 10 karena penjumlahan dikonversi menjadi <code>INTEGER</code>. Kode <code>II</code> menghasilkan 11.0 karena hasil dalam tipe <code>DOUBLE</code></p>'),
            array('id' => '163','pertanyaan' => '<p>Bandingkan pernyataan berikut<br />
          &nbsp;<code>&nbsp; I. Nama kelas Java harus sama dengan nama file</code><br />
          <code>&nbsp; II. Setiap kelas harus memiliki method utama</code><br />
          &nbsp;<code>III. Nama method Java harus sama dengan nama kelas</code><br />
          &nbsp; &nbsp;<code>IV.&nbsp;</code>&nbsp;Setiap method harus memiliki variabel</p>

          <p>Simpulan pilihan yang paling akurat, adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:09:55','updated_at' => '2022-08-22 14:34:06','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah <code>I dan II&nbsp;Nama kelas Java harus sama dengan nama file dan&nbsp;Setiap kelas harus memiliki method utama. Nama method tidak harus sama dengan nama kelas, dan setiap method tidak harus memiliki variabel.</code></p>'),
            array('id' => '164','pertanyaan' => '<p>Bacalah pernyataan berikut:</p>

          <ol>
              <li>Nama kelas yang bersifat <code>public</code>, tidak dapat diakses langsung dari dalam kelas lainnya</li>
              <li>Nama kelas yang bersifat <code>public</code>, dapat diakses langsung di kelas lain</li>
              <li>Variabel yang bersifat <code>private</code>, tidak dapat diakses langsung dari kelas lain.</li>
              <li>Variabel yang bersifat <code>private</code>, dapat diakses langsung di kelas lain</li>
          </ol>

          <p>Simpulan pernyataan yang paling benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:17:57','updated_at' => '2022-08-09 12:19:53','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan 2 dan 3 yang benar karena nama kelas yang bersifat public, maka dapat mengaksesnya langsung di kelas lain. Pilihan yang salah adalah nama kelas yang bersifat <code>public</code>, maka dapat mengaksesnya langsung dari dalam kelas lainnya. Pilihan variabel yang bersifat <code>private</code>, maka tidak dapat mengaksesnya langsung dari kelas lain.</p>'),
            array('id' => '165','pertanyaan' => '<p>Cermati tipe data berikut:</p>

          <ol>
              <li><code>int&nbsp;w&nbsp;=&nbsp;(long)888.8;</code></li>
              <li><code>byte&nbsp;x&nbsp;=&nbsp;(int)100L;</code></li>
              <li><code>long&nbsp;y&nbsp;=&nbsp;(byte)100;</code></li>
              <li><code>byte&nbsp;z&nbsp;=&nbsp;(byte)100L;</code></li>
          </ol>

          <p>Kombinasi konversi tipe data yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:23:47','updated_at' => '2022-08-09 12:23:47','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pernyataan (3), dan (4) adalah pilihan yang tepat. Pernyataan (1) salah karena ketika angka <code>floating-point</code> (dalam kasus ini <code>double</code>) tidak dapat menggunakan <code>long</code>, akan menyederhanakan nilai setelah decimal. Pernyataan (3) dan (4) benar karena <code>long </code>dapat menjadi <code>byte</code>. Jika panjangnya melebihi 127, maka akan kehilangan bit yang paling signifikan (paling kiri). Pernyataan (2) tidak akan bekerja, karena dari <code>byte </code>yang lebih rendah tidak dapat menjadi <code>int</code>.</p>'),
            array('id' => '166','pertanyaan' => '<p>Cermati ekspresi tipe data berikut:<br />
          <code>&nbsp; I.&nbsp;int x = 3<br />
          &nbsp;II.&nbsp;double x = 4.66f;<br />
          III.&nbsp;long x = (byte) 4;<br />
          &nbsp;IV. float x = 3.5;</code></p>

          <p>Pilihan ekspresi yang tepat adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:27:36','updated_at' => '2022-08-09 12:27:36','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah <code>float x = 3.5</code> dan <code>int x = 3</code>. Tipe data <code>float </code>adalah a adalah 32-bit, angka <code>floating point </code>memiliki presisi tunggal.&nbsp;Nilai <code>float min = ~1.4E-45</code> dan&nbsp;Nilai<code> float max = ~3.4028235E38.</code></p>'),
            array('id' => '167','pertanyaan' => '<p>Perhatikan pernyataan berikut</p>

          <ol>
              <li>Ekspresi&nbsp;&nbsp;<code>(int) (5 + 5.0) </code>&nbsp;akan menghasilkan nilai 10 dengan tipe data <code>int</code></li>
              <li>Ekspresi<code> (7/2) </code>akan menghasilkan nilai 3 dengan tipe data <code>float</code></li>
              <li>Ekspresi<code> (2.5f +3.0 &ndash; 1.5f) </code>akan menghasilkan nilai 4.0 dengan tipe data <code>int</code></li>
              <li>Ekspresi&nbsp;&nbsp;<code>(9+ double(4)) </code>akan menghasilkan nilai 13.0 dengan tipe data <code>double</code></li>
          </ol>

          <p>Susunan pernyataan ekspresi dan alasan tipe data yang benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:32:41','updated_at' => '2022-08-09 12:32:41','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pernyataan 1 benar karena ekspresi <code>(int) (5 + 5.0) </code>&nbsp;akan menghasilkan nilai 10 dengan tipe data <code>int</code>. Pernyataan 2 salah, <code>(7/2) </code>akan menghasilkan nilai 3 dengan tipe data <code>float</code>. Pernyataan 3 salah karena <code>(2.5f +3.0 &ndash; 1.5f) </code>akan menghasilkan nilai 4.0 dengan tipe data double bukan&nbsp;<code>int</code>. Pernyataan 4 benar, karena <code>(9+ double(4)) </code>akan menghasilkan nilai 13.0 dengan tipe data <code>double</code></p>'),
            array('id' => '168','pertanyaan' => '<p>Perhatikan potongan kode berikut</p>

          <ol>
              <li><code>public static void main(String [] args) {</code></li>
              <li><code>public class data {</code></li>
              <li><code>System.out.println(s.charAt(2));</code></li>
              <li><code>System.out.println(s(2));</code></li>
              <li><code>System.out.println(s.indexOf(2));</code></li>
              <li><code>int s = 012345;</code></li>
              <li><code>String s = &ldquo;012345&rdquo;;</code></li>
              <li><code>} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</code></li>
          </ol>

          <p>Susunan kode untuk mengambil nilai angka 2 dari teks &ldquo;012345&rdquo; adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:35:28','updated_at' => '2022-08-09 12:35:28','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah</p>

          <p><code>public class data {<br />
          &nbsp; &nbsp;public static void main(String [] args) {<br />
          &nbsp; &nbsp; &nbsp;&nbsp;String s = &ldquo;012345&rdquo;;<br />
          &nbsp; &nbsp; &nbsp;&nbsp;System.out.println(s.charAt(2));<br />
          }&nbsp; &nbsp; }</code></p>

          <p>Karena karakter 2 pada teks berada pada indeks ke 2 maka outputnya adalah 2.</p>'),
            array('id' => '169','pertanyaan' => '<p>Cermati potongan kode berikut</p>

          <ol>
              <li><code>String S1 = &quot;universitas bengkulu&quot;; </code></li>
              <li><code>String S2 = &quot;oke&quot;;</code></li>
              <li><code>String Frasa1 = S1.substring(S1.indexOf(&quot;i&quot;), S1.indexOf(&quot;e&quot;));</code></li>
              <li><code>String Frasa1 = S1.substring(S1.indexOf(&quot;v&quot;), S1.indexOf(&quot;b&quot;));</code></li>
              <li><code>String Frasa2 = S2.substring(1);</code></li>
              <li><code>String Frasa2 = S2.substring(2);</code></li>
              <li><code>System.out.println(Frasa1 + Frasa2);</code></li>
          </ol>

          <p>Apabila ingin membuat luaran teks &ldquo;versitas ke&rdquo; maka susunan kode yang benar adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-09 12:37:36','updated_at' => '2022-08-09 12:37:36','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah I &ndash; II &ndash; III &ndash; IV &ndash; V &nbsp;karena</p>

          <p><code>S1.substring(S1.indexOf(&quot;v&quot;), S1.indexOf(&quot;b&quot;)) </code>= mengambil teks S1 dari indeks huruf v sampai dengan indeks huruf b = versitas</p>

          <p><code>S2.substring(1)</code> = mengambil teks S2 dari indeks ke 1 sampai akhir = ke<br />
          Sehingga hasil dari Frasa = &rdquo;versitas ke&rdquo;</p>'),
            array('id' => '170','pertanyaan' => '<p>Cermati pernyataan berikut:<br />
          <code>x = x + y;<br />
          y = x - y;<br />
          x = x - y;</code><br />
          Analisa pernyataan yang paling menggambarkan pengaruh pernyataan-pernyataan ini terhadap variabel <code>x</code> dan <code>y</code>!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 21:48:31','updated_at' => '2022-08-27 21:48:31','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang paling benar adalah nilai variabel dapat ditukar. Nilai <code>x</code> dan <code>y</code> tidak memiliki nilai awal sehingga dapat ditukar tanpa mempengaruhi variabel lainnya.&nbsp;</p>'),
            array('id' => '171','pertanyaan' => '<p>Cermati pernyataan berikut:<br />
          &nbsp; &nbsp;I.&nbsp;&nbsp; &nbsp;<code>x || !x</code><br />
          &nbsp; II.&nbsp;&nbsp; &nbsp;<code>x &amp;&amp; x</code><br />
          &nbsp;III.&nbsp;&nbsp; &nbsp;<code>x || x</code><br />
          &nbsp;IV.&nbsp;&nbsp;<code>&nbsp;x &amp;&amp; !x</code><br />
          Bila <code>x = true</code>, maka analisa ekspresi logika yang selalu menghasilkan nilai <code>true</code>, adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:29:37','updated_at' => '2022-08-27 22:29:37','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah II yaitu &nbsp;<code>x &amp;&amp; x</code> dan III pernyataan <code>x || x</code></p>'),
            array('id' => '172','pertanyaan' => '<p>Bila diketahui ekspresi berikut:<br />
          <code>I. &nbsp; &nbsp;0 &lt; 10 &nbsp; &amp;&amp; &nbsp; 20 &lt; 10<br />
          II. &nbsp; 50 &lt; 10 &nbsp; || &nbsp; 10 &lt; 20</code><br />
          &nbsp; &nbsp; Analisalah luaran dari ekspresi tersebut!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:32:15','updated_at' => '2022-08-29 16:54:42','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah Ekspresi I bernilai <code>false</code>, ekspresi II bernilai <code>true</code></p>'),
            array('id' => '173','pertanyaan' => '<p>Apabila diketahui ekspresi <code>A= 2*10-2/2+3.</code> Analisa urutan prioritas yang tepat dan hasil dari A!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:34:53','updated_at' => '2022-08-29 16:55:15','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang tepat adalah urutan prioritas ekspresi<code> A = ( (2*10) &ndash; (2/2) &nbsp;)+ 3</code> diperoleh hasil 22. Pada ekspresi <code>A= 2*10-2/2+3 </code>tidak memiliki tanda () maka urutan pengerjaan dimulai dari prioritas * dan / dimulai dari kiri, kemudian tanda &ndash; dan + dan dimulai dari kiri.&nbsp;</p>'),
            array('id' => '174','pertanyaan' => '<p>Evaluasi ekspresi Logika boolean berikut untuk menguji count adalah bilangan prima antara 1 dan 10<br />
          <code>count == 1 &amp;&amp; count == 2 &amp;&amp; count == 3 &amp;&amp; count == 5 &amp;&amp; count == 7</code><br />
          Pilihlah pernyataan berikut yang paling menggambarkan kode ini</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:38:41','updated_at' => '2022-08-27 22:38:41','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah hasilnya selalu salah, dan tanda <code>&amp;&amp;</code> harus diubah menjadi <code>||</code>. &nbsp;Ekspresi Boolean <code>||</code> bermakna atau&nbsp;</p>'),
            array('id' => '175','pertanyaan' => '<p>Evaluasi ekspresi Logika Boolean berikut yang selalu <code>true </code>yaitu</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:40:17','updated_at' => '2022-08-27 22:40:25','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar yaitu<code> 10 &lt;= x || !( x &gt;= 10 )</code> karena <code>!(x &gt;= 10)</code> maknanya sama dengan <code>&nbsp;10 &lt;= x.</code></p>'),
            array('id' => '176','pertanyaan' => '<p>Apabila diketahui ekspresi program <code>A &amp;&amp; !D || C</code> akan dievaluasi dengan cara<br />
          &nbsp; I.&nbsp;&nbsp; &nbsp;<code>A &amp;&amp; !D</code><br />
          &nbsp;II.&nbsp;&nbsp; <code>!D</code><br />
          III.&nbsp;&nbsp; <code>!D || C</code><br />
          &nbsp;&nbsp; &nbsp;Susunan urutan evaluasi berurutan dari pertama hingga terakhir adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:43:38','updated_at' => '2022-08-27 22:43:38','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah<code> II &ndash; I &ndash; III.&nbsp;</code><br />
          Urutan evaluasi dalam program Java yaitu &nbsp;<code>! , &amp;&amp;</code> dan kemudian<code> ||</code>&nbsp;<br />
          Apabila diketahui ekspresi program yaitu <code>&nbsp;A &amp;&amp; !D || C</code> maka pilihan !D adalah yang pertama dievaluasi dari ekspresi yang diberikan.</p>'),
            array('id' => '177','pertanyaan' => '<p>Evaluasi ekspresi Logika Boolean <code>! (A || B) </code>yang ekivalen dengan ekspresi berikut</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:45:33','updated_at' => '2022-08-27 22:45:33','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Jika kita memasukkan empat opsi untuk pasangan terurut (A, B) dari (Benar, Benar), (Benar, Salah), (Salah, Benar) dan (Salah, Salah), kita melihat bahwa ekspresi yang diberikan HANYA benar untuk (Salah, Salah). Dari yang diberikan, hanya pilihan<code> !A &amp;&amp; !B </code>yang HANYA benar untuk (Salah, Salah), karena ini adalah AND. Jadi, yang benar jawabannya adalah pilihan <code>!A &amp;&amp; !B</code>. (Catatan: Ini adalah aplikasi dari Hukum DeMorgan.)</p>'),
            array('id' => '178','pertanyaan' => '<p>Perhatikan ekspresi aritmatika berikut<br />
          (Asumsikan bahwa <code>x</code> dan <code>y</code> adalah bilangan bulat variabel yang telah diinisialisasi dengan nilai yang diinginkan.)<br />
          &nbsp; I.&nbsp; &nbsp;<code>((x &gt; 0) &amp;&amp; (y &gt; 0)) || ((x &gt; 0) &amp;&amp; (y &lt; 0))</code><br />
          &nbsp;II.&nbsp; &nbsp;&nbsp;<code>x != y</code><br />
          III.&nbsp;&nbsp; <code>(x &gt; 0) &amp;&amp; (y != 0)</code><br />
          IV.&nbsp; &nbsp;<code>(x &gt; 0) &amp;&amp; (x + y != x)</code><br />
          Evaluasi ekspresi Logika Boolean berikut yang bernilai ekivalen adalah</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:47:43','updated_at' => '2022-08-27 22:48:19','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Ketika kita melihat ekspresi pertama, kita melihat bahwa x &gt; 0 adalah persyaratan, karena ini pasti benar untuk memenuhi salah satu dari klausa yang lebih besar. Perhatikan bahwa setelah kita memaksa x &gt; 0, selama y bukan 0, yang pertama ekspresi benar, karena atau memungkinkan salah satu opsi. Setelah kita memilikinya, kita dapat melihat pilihan lain. Pilihan kedua tidak setara karena bisa saja menggunakan <code>x = -3, y = 4 </code>untuk menunjukkan bahwa (i) dan (ii) berbeda. Dalam hal ini, (i) adalah salah sedangkan (ii) benar. Perhatikan bahwa (iii) persis seperti yang kita tentukan (i). Terakhir, perhatikan bahwa <code>x + y != x</code> ekivalen dengan <code>y != 0</code>, yang dapat kita tunjukkan dengan mengurangkan x dari kedua sisi cek. Pilihan jawaban yang benar adalah i, iii, iv.<br />
          &nbsp;</p>'),
            array('id' => '179','pertanyaan' => '<p>Perhatikan ekspresi Logika Boolean berikut.<br />
          &nbsp;I.&nbsp; &nbsp;<code>A &amp;&amp; B</code><br />
          II.<code> !A &amp;&amp; !B</code><br />
          Evaluasilah pernyataan yang paling menggambarkan hubungan antara nilai yang dihasilkan ekspresi I dan ekspresi II!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:50:49','updated_at' => '2022-08-29 16:46:12','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah jika nilai A = true dan nilai B = true maka hasil ekspresi I = true dan hasil ekspresi II = false.</p>'),
            array('id' => '180','pertanyaan' => '<p>Diketahui variabel berikut<br />
          <code>int tahun &nbsp;= 2000:<br />
          int bulan = 11;<br />
          int hari &nbsp; = 1;</code><br />
          Susunlah kembali dari ekspresi Logika boolean berikut yang tidak menghasilkan pengembalian nilai karena ekspresi tidak lengkap?</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:53:42','updated_at' => '2022-08-27 22:53:42','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah <code>tahun == 2000 &amp;&amp; bulan == 11 &amp;&amp; hari == 22&nbsp;</code>karena kondisi ekspresi memiliki tiga bagian dan ketiga bagian benar berarti seluruh ekspresi benar. Pada pilihan <code>tahun == 1999 || tahun == 2000 || tahun == 2001, year==1999,</code> salah sehingga eksekusi lebih lanjut akan dihentikan dan akan mengembalikan <code>False</code>. Pilihan tahun &gt; 2001 &amp;&amp; tahun &lt; 2020, setengah dari ekspresi adalah Benar dan setengah lainnya adalah pernyataan atau. Pilihan <code>bulan == 11 &amp;&amp; hari == 1 || bulan == 12 &amp;&amp; hari == 1</code>, ekspresi memiliki tiga bagian yang digabungkan menggunakan <code>&amp;&amp;</code>. Namun bagian pertama benar dan bagian kedua salah sehingga tidak ada lagi eksekusi lebih lanjut sehingga ekspresi kembali salah.</p>'),
            array('id' => '181','pertanyaan' => '<p>Perhatikan ekspresi berikut:<br />
          !(n &gt; 11 &amp;&amp; n &lt;= 22)<br />
          Diketahui nilai n = 11.<br />
          Rancanglah ekspresi di bawah ini yang sama bernilai true dengan ekspresi di atas!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:55:39','updated_at' => '2022-08-29 16:24:38','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Ekspresi Boolean a &amp;&amp; b setara dengan ekspresi ! (!a || !b). Pilihan yang benar adalah <code>n &lt;= 11 || n &gt; 22</code></p>'),
            array('id' => '182','pertanyaan' => '<p>Desainlah pernyataan berikut ini yang akan bernilai <code>true </code>hanya jika ekspresi <code>boolean A, B, dan C</code> semuanya <code>false</code>!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 22:58:49','updated_at' => '2022-08-27 22:58:49','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah <code>!(A || B || C)</code>. Agar <code>!(A || B || C)</code> benar, <code>(A || B || C) </code>harus bernilai false. Hal ini hanya akan terjadi jika A, B, dan C semuanya false. Pilihan<code> !A &amp;&amp; !(B &amp;&amp; !C) </code>bernilai true jika A dan B true dan C true. Dalam pilihan<code> !A || !B || !C,</code> jika salah satu dari A, B, atau C salah, ekspresi boolean bernilai true. Dalam pilihan <code>!(A &amp;&amp; B &amp;&amp; C)</code>, jika salah satu dari A, B, atau C false, ekspresi boolean bernilai true karena kita memiliki <code>!(false)</code>. Semua yang diperlukan agar pilihan E bernilai true adalah agar A salah. Karena <code>true||(any)</code> bernilai benar, baik B dan C dapat bernilai true atau false.</p>'),
            array('id' => '183','pertanyaan' => '<p>Diketahui variabel berikut ini mewakili jam dan menit dalam jangkauan nilai yang valid:<br />
          <code>int jam; // jangkauan: 0 - 23<br />
          int menit; // jangkauan: 0 &ndash; 59</code><br />
          Rancanglah pernyataan dari berikut ini yang menyatakan interval dari pukul 7:15 hingga pukul 9:15!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 23:00:52','updated_at' => '2022-08-27 23:00:52','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah<code> jam == 7 &amp;&amp; menit &gt;= 15 || jam == 8 || jam == 9 &amp;&amp; menit &lt;= 15</code>. Ekspresi Boolean ini bermakna dimulai dari jam 7.15 sampai dengan jam 9.15 termasuk jam 8 didalamnya.</p>'),
            array('id' => '184','pertanyaan' => '<p>Diketahui bahwa variabel Logika <code>boolean a</code> dan <code>b</code> telah dideklarasikan dan diinisialisasi. Perhatikan ekspresi berikut.<br />
          <code>! (!(a &amp;&amp; b) || (c || !d) )</code><br />
          Rancanglah pernyataan ekspresi yang paling menggambarkan kondisi di mana ekspresi akan dievaluasi menjadi benar!</p>','kelas_id' => NULL,'created_at' => '2022-08-27 23:02:34','updated_at' => '2022-08-29 16:27:01','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah<code> ( a &amp;&amp; b) &amp;&amp; ( !c &amp;&amp; d )</code></p>'),
            array('id' => '185','pertanyaan' => '<p>Bacalah pernyataan berikut<br />
          &nbsp; I. &nbsp;Nama kelas yang <code>public</code>, dapat diakses langsung dari kelas lain<br />
          &nbsp;II.&nbsp; Nama kelas yang <code>public</code>, tidak dapat diakses langsung dari kelas lain<br />
          III.&nbsp; Nama kelas yang <code>private</code>, tidak dapat diakses langsung dari kelas lain.<br />
          Pernyataan berikut yang benar yakni</p>','kelas_id' => NULL,'created_at' => '2022-09-09 22:14:44','updated_at' => '2022-09-09 22:14:44','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah I, III semua yang bersifat public dapat diakses langsung dari kelas lain. Pilihan III benar, karena nama kelas yang bersifat private, tidak dapat diakses langsung dari kelas lain.</p>'),
            array('id' => '186','pertanyaan' => '<p>Bila diketahui potongan kode berikut:</p>

          <p><code>public class Kelas {<br />
          &nbsp; &nbsp;public static void main (String args []) {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; B objek = new B();<br />
          &nbsp;&nbsp; &nbsp; &nbsp; objek.i =1;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; objek.j =2;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; objek. tampil();<br />
          &nbsp; &nbsp;} &nbsp; }</code></p>

          <p><code>class A{&nbsp;<br />
          &nbsp;&nbsp; &nbsp;int i;<br />
          }</code></p>

          <p><code>class B extends A{<br />
          &nbsp;&nbsp; &nbsp;int j;<br />
          &nbsp;&nbsp; &nbsp;void tampil() {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;super.i = j+1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(j + &quot; &quot; +i);<br />
          } &nbsp; }</code><br />
          Analisis luaran dari potongan kode tersebut</p>','kelas_id' => NULL,'created_at' => '2022-09-09 22:17:13','updated_at' => '2022-09-09 22:17:13','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah 2 &nbsp;3. Karena class B akan mengambil objek 1 dan objek 2 dengan nilai j = 2 dan i = 3.&nbsp;</p>'),
            array('id' => '187','pertanyaan' => '<p>Cermati pernyataan berikut:<br />
          &nbsp; I.&nbsp;&nbsp; &nbsp;Setiap <code>class </code>hanya boleh memiliki satu <code>constructor</code><br />
          &nbsp;II.&nbsp;&nbsp; &nbsp;Setiap <code>class </code>boleh memiliki lebih dari satu <code>constructor</code><br />
          III.&nbsp;&nbsp; &nbsp;Konstuktor boleh memiliki nilai <code>return </code>maka tidak boleh menggunakan <code>void</code><br />
          IV.&nbsp;&nbsp; &nbsp;Konstruktor tidak memiliki nilai <code>return </code>maka boleh menggunakan <code>void</code><br />
          Analisis pernyataan <code>constructor </code>yang tepat dari sebuah <code>class </code>! &nbsp;</p>','kelas_id' => NULL,'created_at' => '2022-09-09 22:20:47','updated_at' => '2022-09-09 22:20:47','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah setiap kelas boleh memiliki lebih dari satu konstruktor dan konstruktor tidak memiliki nilai return maka boleh menggunakan void.&nbsp;</p>'),
            array('id' => '188','pertanyaan' => '<p>Bacalah potongan kode berikut ini</p>

          <p><code>public class MainClass<br />
          {<br />
          &nbsp; &nbsp;&nbsp;void hitung(int a)<br />
          &nbsp;&nbsp; &nbsp;{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(1);<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>&nbsp;&nbsp; &nbsp;void hitung(int a, int b)<br />
          &nbsp;&nbsp; &nbsp;{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(2);<br />
          &nbsp;&nbsp; &nbsp;}<br />
          }</code><br />
          Analisa kode tersebut termasuk dalam</p>','kelas_id' => '25','created_at' => '2022-09-09 22:22:51','updated_at' => '2022-09-17 23:27:25','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah method overloaded, karena memiliki nama method hitung yang sama. Namun dengan isi variabel yang berbeda sehingga overloaded. Sedangkan method duplicated memiliki nama method yang sama dan nama variabel yang sama juga seperti array.</p>'),
            array('id' => '189','pertanyaan' => '<p>Perhatikan kode Java berikut</p>

          <p><code>public class A{<br />
          &nbsp; private static int x = 0;<br />
          &nbsp; private static void ubah(int x) {<br />
          &nbsp; x = 3;<br />
          }<br />
          public static void main (String[] args) {<br />
          &nbsp; ubah(3);<br />
          &nbsp; System.out.println(x); &nbsp; }<br />
          }</code><br />
          Pilihlah nilai mana yang dicetak ketika metode main dijalankan?</p>','kelas_id' => '25','created_at' => '2022-09-09 22:25:07','updated_at' => '2022-09-17 23:27:07','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Jawaban yang benar adalah 0, karena program akan memanggil nilai x = 0 dengan bentuk variabel private static int x = 0;. Sedangkan private static void ubah(int x) tidak dapat mengembalikan luaran ubah karena berbentuk private method.&nbsp;<br />
          &nbsp;</p>'),
            array('id' => '190','pertanyaan' => '<p>Bila kelas A menjadi subkelas dari kelas B. A() dan B() adalah konstruktor untuk kelas-kelas.<br />
          Bila m() menjadi method <code>public </code>yang didefinisikan di kelas A dan m() menjadi method <code>public </code>yang didefinisikan di kelas B juga (jadi metode m() di kelas A menggantikan method m() di kelas B).<br />
          Perhatikan potongan kode berikut:<br />
          <code>A objekA = new A();<br />
          B objekB = (B) objekA;<br />
          objekB.m();</code><br />
          Kesimpulan pernyataan yang benar adalah&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-09 22:27:00','updated_at' => '2022-09-17 23:26:54','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah tidak ada kesalahan dan dalam pernyataan terakhir, metode m() dari kelas A dipanggil. Hal ini karena m() mengambil dari kelas A yang bersifat public.</p>'),
            array('id' => '191','pertanyaan' => '<p>Perhatikan potongan kode berikut</p>

          <p><code>public class A {<br />
          &nbsp; &nbsp; static void m1() { System.out.println(&quot;m1&quot;); }<br />
          &nbsp; &nbsp;static void m2() { System.out.println(&quot;m2&quot;); }<br />
          public static void main (String[] args) {<br />
          &nbsp; m1(); // Baris 1<br />
          &nbsp; m2(); // Baris 2<br />
          }&nbsp;&nbsp;}</code></p>

          <p>Evaluasi baris mana yang memiliki kesalahan ketika dikompilasi!</p>','kelas_id' => '25','created_at' => '2022-09-09 22:29:05','updated_at' => '2022-09-17 23:26:33','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah Baris 1 and Baris 2. Pemanggilan kompilasi sebaiknya memanggil kelasnya juga A.m1(); atau A.m2();</p>'),
            array('id' => '192','pertanyaan' => '<p>Perhatikan potongan kode berikut</p>

          <p><code>public class Kelas {<br />
          &nbsp;&nbsp; &nbsp; &nbsp; private void m1() { System.out.println(&quot;M1&quot;); &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp; public void m2() { System.out.println(&quot;M2&quot;); }<br />
          &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; public class A extends Kelas { }<br />
          &nbsp;&nbsp; &nbsp; &nbsp; public void A() {}<br />
          &nbsp;&nbsp; &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Kelas objekB = new Kelas();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;objekB.m1(); // Baris 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;objekB.m2(); // Baris 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          }</code></p>

          <p>Evaluasi baris mana yang memiliki kesalahan ketika dikompilasi!</p>','kelas_id' => '25','created_at' => '2022-09-09 22:31:29','updated_at' => '2022-09-17 23:26:25','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah baris 1 karena tipe variabel private sehingga tidak dapat diakses dari luar kelas.&nbsp;</p>'),
            array('id' => '193','pertanyaan' => '<p>Perhatikan kelas berikut</p>

          <p><code>public class Kelas<br />
          {<br />
          public void MethodSatu(int satu)<br />
          &nbsp; &nbsp; { / implementasi tidak ditampilkan / }<br />
          publics void MethodSatu (int satu, int dua)<br />
          &nbsp; &nbsp; &nbsp;{ / implementasi tidak ditampilkan / }<br />
          public void MethodSatu (int satu, String dua)<br />
          &nbsp; &nbsp; { / implementasi tidak ditampilkan / }<br />
          }</code></p>

          <p>Bila diketahui method berikut:<br />
          &nbsp; I. <code>public void MethodSatu (int nilai)</code><br />
          &nbsp;II. <code>public void MethodSatu (String satu, int dua)</code><br />
          III. <code>public void MethodSatu (int satu, int dua, int tiga)</code></p>

          <p>Rekomendasikan method yang dapat ditambahkan ke kelas MethodSatu tanpa menyebabkan kesalahan kompilasi!</p>','kelas_id' => '25','created_at' => '2022-09-09 22:34:58','updated_at' => '2022-09-17 23:26:18','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah II dan III saja. di kelas: MethodSatu {}. Informasi public void MethodSatu (int satu){} dan public void MethodSatu (int nilai){}. Kedua metode ini dikatakan duplikat dan akan menyebabkan kesalahan kompilasi. Jadi, void MethodSatu (int nilai){} tidak bisa menjadi bagian dari kelas SuatuMethod {}. Apabila seluruh method tidak duplikat maka public void MethodSatu (int satu, String dua){} dan public void MethodSatu (String satu, int dua){} &nbsp;hampir sama tetapi urutan parameternya berbeda sehingga tidak duplikat.</p>'),
            array('id' => '194','pertanyaan' => '<p>Apabila diketahui potongan kode berikut:</p>

          <p><code>class NPMMahasiswa {<br />
          private String id;<br />
          &nbsp; public NPMMahasiswa( String newid) {&nbsp;<br />
          &nbsp; &nbsp; id = newid;<br />
          &nbsp; }</code></p>

          <p><code>&nbsp; public String getID() { return id; }<br />
          &nbsp; public boolean equals(NPMMahasiswa otherid) {<br />
          &nbsp; &nbsp; &nbsp;return id.equals(otherid.getID());<br />
          }&nbsp;}</code></p>

          <p><code>Luaran dari kode:<br />
          NPMMahasiswa s1 = new NPMMahasiswa(&quot;G1A004003&quot;);<br />
          NPMMahasiswa s2 = new NPMMahasiswa(&quot;G1A004003&quot;);<br />
          boolean result1 = s1 == s2;<br />
          boolean result2 = s1.equals(s2);<br />
          System.out.println(result1);<br />
          System.out.println(result2);</code></p>

          <p>Evaluasi luaran kode yang benar adalah</p>','kelas_id' => '25','created_at' => '2022-09-09 22:37:55','updated_at' => '2022-09-17 23:26:11','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah false true. String s1.equals(s2) adalah fungsi yang mengembalikan nilai boolean (true atau false). Fungsi ini akan menghasilkan true jika s2 sama dengan s1, dan salah jika tidak. Kesamaan yang diuji adalah kesamaan persis baik kapitalnya maupun urutan huruf-hurufnya.&nbsp;<br />
          Operator == fungsinya untuk membandingkan nilai dua referensi objek untuk melihat apakah merujuk ke contoh String yang sama &nbsp;Jika nilai kedua referensi objek &quot;merujuk ke&quot; contoh String yang sama maka hasil dari ekspresi boolean akan menjadi true. Jika, di sisi lain, nilai dari kedua referensi objek &quot;merujuk ke&quot; instance String yang berbeda (meskipun kedua instance String memiliki &quot;nilai&quot; yang identik, yaitu, isi array karakter dari setiap instance String adalah sama) hasil dari ekspresi boolean akan menjadi false.&nbsp;<br />
          &nbsp;</p>'),
            array('id' => '195','pertanyaan' => '<p>Kendaraan memiliki beragam jenis, seperti kendaraan beroda dua (motor) dan beroda empat (mobil). Semua kendaraan dapat berjalan dan menggunakan bahan bakar bensin. Namun, kendaraan beroda dua hanya dapat mengangkut dua orang penumpang. Kendaraan beroda empat dapat mengangkut empat orang penumpang.&nbsp;</p>

          <p>Diketahui potongan kode berikut:<br />
          &nbsp; &nbsp; I.&nbsp;&nbsp; &nbsp;<code>class Kendaraan</code>&nbsp;<br />
          &nbsp; &nbsp;II.&nbsp;&nbsp; &nbsp;<code>class Motor</code> &nbsp;<br />
          &nbsp; III.&nbsp;&nbsp; &nbsp;<code>class Mobil</code> &nbsp;<br />
          &nbsp; IV.&nbsp; &nbsp;&nbsp;<code>class Kendaraan extends Motor</code><br />
          &nbsp; &nbsp;V.&nbsp;&nbsp; &nbsp;<code>class Motor extends Kendaraan</code><br />
          &nbsp; VI.&nbsp;&nbsp; &nbsp;<code>class Motor extends Mobil</code><br />
          &nbsp;VII.&nbsp;&nbsp; &nbsp;<code>void berjalan ()</code><br />
          VIII.&nbsp;&nbsp; &nbsp;<code>void penumpang()</code></p>

          <p>Desain kode yang tepat berdasarkan informasi yang diberikan adalah</p>','kelas_id' => '25','created_at' => '2022-09-10 08:57:18','updated_at' => '2022-09-17 23:26:05','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah I &ndash; VII &ndash; V &ndash; VIII. Karena kelas paling umum menjadi super class atau induk kelas yaitu class Kendaraan. Kelas yang lebih spesifik menjadi anak atau turunan dari kelas induk, sehingga kelas anak adalah class Motor dan class Mobil. Kelas induk memiliki method umum yang dapat diakses oleh seluruh kelas turunannya yaitu <code>void berjalan()</code>. Kelas anak memiliki method yang spesifik hanya dimiliki oleh objek itu sendiri yaitu <code>void penumpang() </code>dengan jumlah penumpang motor dan mobil yang berbeda.</p>'),
            array('id' => '196','pertanyaan' => '<p>Rekonstruksi deklarasi dari katakanHalo() dari kelas utama berikut ini tidak benar.&nbsp;</p>

          <p><code>public static void main (String[] args) {<br />
          &nbsp;&nbsp; &nbsp;katakanHalo();<br />
          }<br />
          private void katakanHalo(){<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&ldquo;Halo semua, semangat!&rdquo;);&nbsp;<br />
          }&nbsp;</code></p>

          <p>Pilih susunan deklarasi <code>katakanHalo() </code>yang benar dari potongan kode berikut:</p>','kelas_id' => '25','created_at' => '2022-09-10 08:59:21','updated_at' => '2022-09-17 23:25:59','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah <code>private void static katakanHalo()</code> karena method <code>static </code>hanya dapat memanggil method <code>static </code>lainnya</p>'),
            array('id' => '197','pertanyaan' => '<p>Cermati potongan kode method:<br />
          <code>public static void fun(String x)</code></p>

          <p>Apabila kita memiliki pilihan deklarasi pemanggilan method berikut<br />
          &nbsp; I. &nbsp; <code>fun((String)3);</code><br />
          &nbsp;II. &nbsp; <code>fun(3 + &quot;&quot;);</code><br />
          III. &nbsp;<code>fun(&quot;3&quot;);</code></p>

          <p>Desain kode yang tepat untuk memanggil method fun adalah&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-10 09:01:25','updated_at' => '2022-09-17 23:25:53','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah fun(3 + &quot;&quot;); dan fun(&quot;3&quot;);. Pemanggilan method secara legal disesuaikan dengan tipe data berupa String yaitu dengan tanda (&ldquo;&rdquo;)</p>'),
            array('id' => '198','pertanyaan' => '<p>Perhatikan kode berikut:</p>

          <p><code>public class Kelas {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;B ObjekB = new B();<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;ObjekB.nilai(5);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;Nilai = &quot; + ObjekB.i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} &nbsp; }</code></p>

          <p><code>class A {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int i;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public void nilai(int i) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;this.i = i;&nbsp;<br />
          }&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>

          <p><code>class B extends A {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public void nilai(String s) { }&nbsp;&nbsp; &nbsp;<br />
          }</code></p>

          <p>Hubungan yang tepat sesuai dengan potongan kode tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-10 09:03:33','updated_at' => '2022-09-17 23:25:38','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah Metode m tidak ditimpa di B. B mewarisi metode m dari A dan mendefinisikan metode kelebihan beban m di B. Kata kunci <code>extends </code>menunjukkan pembuatan kelas baru yang berasal dari kelas yang sudah ada. Arti &ldquo;<code>extends</code>&rdquo; adalah meningkatkan fungsionalitas. Dalam terminologi Java, kelas yang diwarisi disebut induk atau superclass, dan kelas baru disebut anak atau subkelas. Program ini menghasilkan luaran Nilai = 5.</p>'),
            array('id' => '199','pertanyaan' => '<p>Rancangan algoritma yang paling efisien untuk menentukan dan menampilkan penjumlahan dari dua angka (asumsi: mengambil nilai dari pengguna)</p>

          <p>&nbsp; &nbsp; I.&nbsp;&nbsp; &nbsp;Mulai<br />
          &nbsp; &nbsp;II.&nbsp;&nbsp; &nbsp;Deklarasikan dua variabel a dan b<br />
          &nbsp; III.&nbsp;&nbsp; &nbsp;Baca dua nilai dari pengguna<br />
          &nbsp; IV.&nbsp;&nbsp; &nbsp;Tentukan dua nilai<br />
          &nbsp; &nbsp;V.&nbsp;&nbsp; &nbsp;Hitung nilai (a + b)<br />
          &nbsp; VI.&nbsp;&nbsp; &nbsp;Tampilkan nilai a<br />
          &nbsp;VII.&nbsp;&nbsp; &nbsp;Tampilkan nilai b<br />
          VIII.&nbsp;&nbsp; &nbsp;Tampilkan nilai (a + b)<br />
          &nbsp; IX.&nbsp;&nbsp; &nbsp;Selesai</p>

          <p>Pilihan urutan yang tepat adalah&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-10 09:10:50','updated_at' => '2022-09-17 23:25:30','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah I &ndash; II &ndash; III &ndash; VIII &ndash; IX. Pilihan ini efisien karena telah sesuai dengan analisa pertanyaan dan tidak mengulangi langkah yang tidak diperlukan dengan urutan Mulai &ndash; Deklarasikan dua variabel a dan b &ndash; Baca dua nilai dari pengguna &ndash; Tampilkan nilai (a + b) &ndash; Selesai. Pilihan IV Tentukan dua nilai, kurang tepat karena dalam pertanyaan, nilai diambil dari input pengguna, bukan ditentukan dalam sistem. Pilihan V Hitung nilai (a + b) menjadi opsional namun memperpanjang alur program. Pilihan VI Tampilkan nilai a dan VII Tampilkan nilai b, periksa pertanyaan, perintah menampilkan nilai tidak diminta.</p>'),
            array('id' => '200','pertanyaan' => '<p>Rancangan satu baris kondisi perulangan untuk menggantikan kondisi perulangan bersarang berikut:<br />
          <code>if (a &gt; b){<br />
          &nbsp;&nbsp; &nbsp;if ( a &gt; c) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&ldquo;X&rdquo;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          } else {<br />
          &nbsp;&nbsp; &nbsp;System.out.println(&ldquo;Y&rdquo;);<br />
          }</code></p>','kelas_id' => '25','created_at' => '2022-09-17 23:31:03','updated_at' => '2022-09-17 23:31:03','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar yaitu <code>&nbsp;if (a &gt; b &amp;&amp; a &gt; c) </code>memiliki kondisi<code> if (a &gt; b){ if ( a &gt; c) { </code>memiliki makna <code>( a &gt; c) </code>akan dijalankan apabila<code> (a &gt; b)</code> bernilai benar, maka menggunakan operator <code>&amp;&amp;</code><br />
          &nbsp;</p>'),
            array('id' => '201','pertanyaan' => '<p>Diketahui:</p>

          <p><code>a = -1, b = -2, c = -4, d = 2, e = -1.&nbsp;</code></p>

          <p><code>if (a &lt; 0)<br />
          if (b &lt; 0)<br />
          if (c &lt; 0)<br />
          if (!(d &lt; 0 &amp;&amp; e &lt; 0 ) )<br />
          &nbsp; &nbsp;System.out.println(&quot;Satu&quot;);<br />
          else<br />
          &nbsp; &nbsp;System.out.println(&quot;Dua&quot;);<br />
          if (a == e)<br />
          &nbsp; &nbsp;System.out.println(&quot;Tiga&quot;);<br />
          else<br />
          &nbsp; &nbsp;System.out.println(&quot;Empat&quot;);</code></p>

          <p>Analisa yang menjadi luaran dari potongan kode tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-17 23:35:01','updated_at' => '2022-09-17 23:35:01','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar yaitu<br />
          Satu&nbsp;<br />
          Tiga<br />
          Memenuhi kondisi <code>if (!(d &lt; 0 &amp;&amp; e &lt; 0 )) </code>tanda ! sama dengan <code>(d &gt; 0 || e &gt; 0 )</code> maka <code>( 2 &gt; 0 || -1 &gt; 0)</code> terpenuhi dan<code> if (a == e)</code> terpenuhi<code> if (-1 == -1)</code></p>'),
            array('id' => '202','pertanyaan' => '<p>Jika kita ingin menulis pernyataan <code>if </code>yang dieksekusi setiap angka riil x antara 10.0 dan 20.0. Bagaimana seharusnya kondisi <code>IF </code>ditulis?</p>','kelas_id' => '25','created_at' => '2022-09-17 23:37:09','updated_at' => '2022-09-17 23:37:09','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah <code>10.0 &lt; x &amp;&amp; x &lt; 20.0.</code> Pilihan <code>10.0 &lt; x || x &gt; 20.0 </code>dan <code>10.0 &lt; x || x &lt; 20.0</code> salah karena operator || atau akan memilih salah satu bukan keduanya yang benar. Pilihan <code>10.0 &lt; x &amp;&amp; x &gt; 20.0 </code>salah karena operator <code>&amp;&amp; </code>akan memilih keduanya yang benar, namun nilai<code> x &gt; 20.0 </code>artinya lebih dari 20.0 bukan antara 10.0 dan 20.0. Pilihan &nbsp;<code>10.0 &lt; x &amp;&amp; x &lt; 20.0</code> benar karena seleksi operator tepat.&nbsp;</p>'),
            array('id' => '203','pertanyaan' => '<p>Cermati bagian program berikut:</p>

          <p><code>&nbsp; int kelasSI = 2;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(kelasSI) &nbsp;{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 1: System.out.print(&quot;Dua &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 2: System.out.print(&quot;Dua lagi &quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;default: System.out.print(&quot;Dua terus &quot;);&nbsp;&nbsp; &nbsp;}</code></p>

          <p>Analisa luaran dari program tersebut adalah&nbsp; &nbsp;&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-17 23:39:25','updated_at' => '2022-09-17 23:39:25','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah <code>Dua lagi &nbsp;Dua terus </code>karena memeriksa pilihan dari nomor kedua dan default.&nbsp;<br />
          &nbsp;</p>'),
            array('id' => '204','pertanyaan' => '<p>Cermati bagian program berikut:</p>

          <p><code>switch(15)&nbsp;&nbsp; &nbsp;{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 5*2: System.out.println(&quot;Satu &quot;);break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 5*4-5:System.out.println(&quot;Dua &quot;);<br />
          &nbsp;&nbsp; &nbsp;case 60/4+5: System.out.println(&quot;Tiga &quot;);&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;</code></p>

          <p>Analisa luaran dari program tersebut adalah&nbsp;&nbsp; &nbsp;}</p>','kelas_id' => '25','created_at' => '2022-09-17 23:41:50','updated_at' => '2022-09-17 23:41:50','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah <code>Dua Tiga,</code> karena hasil 5*4-5 adalah 15 maka eksekusi <code>Dua</code>, serta tidak ada <code>break </code>maka menampilkan <code>Tiga</code>.</p>'),
            array('id' => '205','pertanyaan' => '<p>Asumsikan <code>c1 </code>dan <code>c2 </code>adalah dua bentuk dari mobil di kelas java.</p>

          <p>&nbsp; &nbsp; <code>if (c1 == c2)</code></p>

          <p>Evaluasi apa yang akan terjadi ketika mengeksekusi kode tersebut (anggap tidak ada sintaks dan kesalahan kompilasi)</p>','kelas_id' => '25','created_at' => '2022-09-17 23:43:52','updated_at' => '2022-09-17 23:43:52','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah bernilai benar hanya jika c1 dan c2 menunjuk ke objek yang sama.&nbsp;</p>'),
            array('id' => '206','pertanyaan' => '<p>Pernyataan 1: <code>Switch </code>menggunakan satu ekspresi untuk beragam pilihan</p>

          <p>Pernyataan 2: <code>Switch </code>lebih stabil daripada <code>IF </code>bersarang untuk kondisi yang lebih dari 3 atau 4.</p>

          <p>Evaluasi kedua pernyataan tersebut&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-17 23:45:12','updated_at' => '2022-09-17 23:45:12','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah pernyataan 1 benar, pernyataan 2 benar, dan keduanya saling terkait.</p>'),
            array('id' => '207','pertanyaan' => '<p>Cermati pernyataan berikut:</p>

          <p>&nbsp; &nbsp;I.&nbsp; Deklarasi <code>if</code> akan dieksekusi jika memenuhi kondisional<br />
          &nbsp; II.&nbsp; Deklarasi <code>switch </code>akan dieksekusi jika memenuhi kondisional<br />
          &nbsp;III.&nbsp; Deklarasi <code>if </code>akan diekseskusi sesuai masukan dari pengguna.<br />
          IV.&nbsp; &nbsp;Deklarasi <code>switch </code>akan dieksekusi sesuai masukan dari pengguna<br />
          &nbsp;V.&nbsp; &nbsp;Jika kondisi tidak benar maka deklarasi <code>if </code>akan mengeksekusi else.<br />
          VI.&nbsp; &nbsp;Jika kondisi tidak benar maka deklarasi <code>switch </code>akan mengeksekusi default.<br />
          VII.&nbsp; Deklarasi <code>if </code>dapat mengevaluasi semua tipe data<br />
          VIII. Deklarasi <code>switch </code>dapat mengevaluasi semua tipe data</p>

          <p>Evaluasi pernyataan yang tepat mengenai <code>if </code>dan <code>switch </code>adalah</p>','kelas_id' => '25','created_at' => '2022-09-17 23:48:14','updated_at' => '2022-09-17 23:48:14','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah I &ndash; IV &ndash; V &ndash; VII</p>'),
            array('id' => '208','pertanyaan' => '<p>Pernyataan 1: <code>Switch </code>dengan variabel <code>boolean </code>menghasilkan <code>true</code>.</p>

          <p>Pernyataan 2: <code>Case </code>akan menjalankan perintah kondisi yang sudah terpenuhi.&nbsp;</p>

          <p>Evaluasi kedua pernyataan tersebut&nbsp;</p>','kelas_id' => '25','created_at' => '2022-09-17 23:49:43','updated_at' => '2022-09-17 23:49:43','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah Pernyataan 1 salah, pernyataan 2 benar, dan keduanya saling terkait sebab akibat. Namun, Switch tidak dapat melalukan pemeriksaan boolean.&nbsp;</p>'),
            array('id' => '209','pertanyaan' => '<p>Cermati bagian program berikut:</p>

          <p><code>int age = 8;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;switch(age){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 4: case 5:{<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String group = &quot;Sistem Informasi&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;case 6: case 7:case 8:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String group = &quot;Informatika&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(group);</code></p>

          <p>Ketika dieksekusi terjadi kesalahan kompilasi, rekomendasi perbaikan program yang tepat adalah</p>','kelas_id' => '25','created_at' => '2022-09-18 06:24:01','updated_at' => '2022-09-18 06:24:01','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah menambah deklarasi variabel group. Pesan kesalahan yang muncul adalah &ldquo;<code>group cannot be resolved to a variable</code>&rdquo;. Sehingga perlu mendeklarasikan variabel group ini.</p>'),
            array('id' => '210','pertanyaan' => '<p>Perhatikan potongan kode berikut<br />
          <code>switch( grade ) {<br />
          case 5:&nbsp;case 4:<br />
          &nbsp; &nbsp; a = 1;<br />
          &nbsp; &nbsp; b = 2;<br />
          &nbsp; &nbsp; break;<br />
          case 3:<br />
          &nbsp; &nbsp;a = 5;<br />
          &nbsp; &nbsp;break;<br />
          default:<br />
          &nbsp; &nbsp;a = 2;<br />
          &nbsp; &nbsp;break;<br />
          }</code><br />
          Rancangan program if yang ekuivalen dengan pernyataan switch tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-18 06:27:40','updated_at' => '2022-09-18 06:27:40','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar yaitu &nbsp;<br />
          if (grade == 4 || grade == 5 ) { //bermakna sama dengan case 4 dan case 5<br />
          a = 1;&nbsp;<br />
          b = 2;<br />
          } else if (grade == 3) { //bermakna sama dengan case 3<br />
          a = 5;<br />
          } else {&nbsp;<br />
          a = 2;<br />
          }</p>'),
            array('id' => '212','pertanyaan' => '<p>Cermati potongan kode berikut:</p>

          <p><code>class kampus {<br />
          &nbsp; &nbsp;public static void main(String args[]) {<br />
          &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;String string = &quot;UNIB&quot;;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//percabangan 1<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (string == &quot;UNIB&quot;) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;1. Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;1. Tidak Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//percabangan 2<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (&quot;UNIB&quot;.equals(&quot;UNIB&quot;)) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.print(&quot;2. Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;2. Tidak Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;//percabangan 3<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (&quot;UNIB&quot; == new String(&quot;UNIB&quot;)) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;3. Sama &quot;);&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;} else {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; System.out.print(&quot;3. Tidak Sama &quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;<br />
          &nbsp;&nbsp; &nbsp;}</code></p>

          <p>Susunlah luaran dari potongan kode tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-18 07:07:44','updated_at' => '2022-09-18 07:08:58','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah Sama, Sama, Tidak Sama. Perintah &quot;UNIB&quot; == new String(&quot;UNIB&quot;) adalah tidak sama.&nbsp;</p>'),
            array('id' => '213','pertanyaan' => '<p>Apabila diketahui usia lebih dari 6 tahun dapat masuk SD, dan usia lebih dari 12 tahun dapat masuk SMP. Susunlah program berdasarkan informasi tersebut!</p>','kelas_id' => '25','created_at' => '2022-09-18 07:09:54','updated_at' => '2022-09-18 07:09:54','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah&nbsp;<br />
          <code>switch (usia)<br />
          case (6): System.out.println(&ldquo;SD&rdquo;); break;<br />
          case (12): System.out.println(&ldquo;SMP&rdquo;); break; &nbsp;}</code><br />
          &nbsp;</p>'),
            array('id' => '214','pertanyaan' => '<p>Diketahui perulangan IF berikut:</p>

          <p><code>if (pilih == M)<br />
          &nbsp; &nbsp;System.out.println(&ldquo;Merah&rdquo;);<br />
          if(pilih == K)<br />
          &nbsp; &nbsp;System.out.println(&ldquo;Kuning&rdquo;);<br />
          else&nbsp;<br />
          &nbsp; &nbsp;System.out.println(&ldquo;Hijau&rdquo;);</code></p>

          <p>Apabila ingin diubah menjadi pernyataan Switch dengan pernyataan berikut<br />
          [1]&nbsp;&nbsp; &nbsp;<code>char pilih;</code><br />
          [2]&nbsp;&nbsp; &nbsp;<code>String pilih;</code><br />
          [3]&nbsp;&nbsp; &nbsp;<code>switch (pilih) {</code><br />
          [4]&nbsp;&nbsp; &nbsp;<code>case M: System.out.println(&ldquo;Merah&rdquo;);</code><br />
          [5]&nbsp;&nbsp;<code>&nbsp;case K: System.out.println(&ldquo;Kuning&rdquo;);</code><br />
          [6]&nbsp;&nbsp; &nbsp;<code>default: System.out.println(&ldquo;Hijau&rdquo;);</code><br />
          [7]&nbsp;&nbsp; &nbsp;<code>break;</code><br />
          [8]&nbsp;&nbsp; <code>&nbsp;}</code></p>

          <p>Susunan program yang tepat adalah</p>','kelas_id' => '25','created_at' => '2022-09-18 07:14:29','updated_at' => '2022-09-18 07:14:29','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah pernyataan 1 &ndash; 3 &ndash; 4 &ndash; 7 &ndash; 5 &ndash; 7 &ndash; 6 &ndash; 8</p>'),
            array('id' => '215','pertanyaan' => '<p>Mahasiswa bidang komputer, pada semester satu akan belajar Java. Sedangkan pada semester dua ada pilihan kelas Phyton dan PHP.&nbsp;</p>

          <p>Apabila terdapat pilihan pernyataan program berikut:</p>

          <p>[1]&nbsp; <code>switch (kelas) {</code><br />
          [2]&nbsp; <code>switch (semester) {</code><br />
          [3]&nbsp; <code>break;</code><br />
          [4]&nbsp; <code>case 1:</code><br />
          [5]&nbsp; <code>case 2:</code><br />
          [6]&nbsp; <code>System.out.println(&ldquo;Java&rdquo;);</code><br />
          [7]&nbsp; <code>System.out.println(&ldquo;Phyton&rdquo;);</code><br />
          [8]&nbsp; <code>System.out.println(&ldquo;PHP&rdquo;);</code><br />
          [9]&nbsp; &nbsp;} &nbsp;}</p>

          <p>Susunlah program yang tepat berdasarkan informasi yang diberikan, yaitu</p>','kelas_id' => '25','created_at' => '2022-09-18 07:17:24','updated_at' => '2022-12-05 10:49:25','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar 2 &ndash; 4 &ndash; 6 &ndash; 3 &ndash; 5 &ndash; 1 &ndash; 4 &ndash; 7 &ndash; 3 &ndash; 5 &ndash; 8 - 9</p>

          <p>[2]&nbsp;&nbsp;<code>switch (semester) {</code><br />
          [4]&nbsp;&nbsp;<code>case 1:</code><br />
          [6]&nbsp;&nbsp;<code>System.out.println(&ldquo;Java&rdquo;);</code><br />
          [3]&nbsp;&nbsp;<code>break;</code><br />
          [5]&nbsp;&nbsp;<code>case 2:</code><br />
          [1]&nbsp;&nbsp;<code>switch (kelas) {</code><br />
          [4]&nbsp;&nbsp;<code>case 1:</code><br />
          [7]&nbsp;&nbsp;<code>System.out.println(&ldquo;Phyton&rdquo;);</code><br />
          [3]&nbsp;&nbsp;<code>break;</code><br />
          [5]&nbsp;&nbsp;<code>case 2:</code><br />
          [8]&nbsp;&nbsp;<code>System.out.println(&ldquo;PHP&rdquo;);</code><br />
          [9]&nbsp; &nbsp;} &nbsp;}</p>'),
            array('id' => '216','pertanyaan' => '<p>Diketahui potongan kode berikut:&nbsp;<br />
          <code>public static int forloop(int b) &nbsp;{<br />
          for (int a = 10; a &gt; -10; a = a - 5)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (a % 2 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;b = b + a;<br />
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; else b = b * 2;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;return b;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int x;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;x = forloop(2);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(x);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code><br />
          Analisa nilai yang dikembalikan oleh <code>forloop(2) </code>adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:08:54','updated_at' => '2022-09-23 23:08:54','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Jawaban yang benar adalah 48&nbsp;<br />
          <code>public class operator {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static int forloop(int b) &nbsp;{<br />
          for (int a = 10; a &gt; -10; a = a - 5)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; if (a % 2 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; b = b + a;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; else b = b * 2;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;return b;<br />
          &nbsp;&nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int x;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;x = forloop(2);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; System.out.println(x);<br />
          }&nbsp;&nbsp; &nbsp;}</code></p>'),
            array('id' => '217','pertanyaan' => '<p>Cermati kode program berikut:<br />
          <code>public class Main {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for (int y = 0; y &lt; 10; ++y) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (y % 2 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;continue;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else if (y == 8)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;else<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(y + &quot; &quot;);<br />
          }&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>

          <p>Analisa luaran program tersebut</p>','kelas_id' => '25','created_at' => '2022-09-23 23:11:09','updated_at' => '2022-09-23 23:11:09','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah 1 &nbsp;3 &nbsp;5 &nbsp;7 &nbsp;9. Program dimulai dari 1 karena 0/2 = 0 maka dilewati. Kemudian angka 4 6 8 juga dilewati karena habis dibagi dengan 2. Perintah else if ( y==8) tidak dieksekusi sehingga program berjalan sampai angka 9</p>'),
            array('id' => '218','pertanyaan' => '<p>Cermati potongan program berikut:<br />
          &nbsp;<code>&nbsp; &nbsp;int count = 0;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while (count &lt; 3) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; System.out.println(&quot;UNIB&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; count++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code><br />
          Simpulkan luaran dari program tersebut</p>','kelas_id' => '25','created_at' => '2022-09-23 23:12:26','updated_at' => '2022-09-23 23:12:26','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah UNIB &nbsp; UNIB &nbsp; UNIB</p>'),
            array('id' => '219','pertanyaan' => '<p>Perhatikan potongan kode berikut:<br />
          &nbsp;&nbsp; &nbsp;<code>int i=1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i&lt;=6){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;i++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(i==4){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;break;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code><br />
          Analisa luaran dari potongan kode ini ketika dieksekusi yaitu</p>','kelas_id' => '25','created_at' => '2022-09-23 23:13:45','updated_at' => '2022-09-23 23:13:45','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pilihan yang benar adalah 1 &ndash; 2 &ndash; 3. Perintah break menghentikan perulangan pada i = 4.<br />
          &nbsp;</p>'),
            array('id' => '220','pertanyaan' => '<p>Cermati potongan program berikut:<br />
          <code>int p=0;<br />
          while (p&lt;2)<br />
          &nbsp; &nbsp;{<br />
          &nbsp; &nbsp;System.out.println(&ldquo;Universitas&rdquo;);<br />
          &nbsp; &nbsp;p++;<br />
          &nbsp; &nbsp;}<br />
          System.out.print(&ldquo;Bengkulu&rdquo;);</code><br />
          Analisa luaran dari program tersebut adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:15:12','updated_at' => '2022-09-23 23:15:12','level_berfikir' => 'Menganalisis','pembahasan' => '<p>&nbsp;Pilihan yang benar adalah Universitas &nbsp;Universitas &nbsp;Bengkulu. String yang berada dalam perulangan adalah kata Universitas, sedangkan Bengkulu ada di luar perulangan.</p>'),
            array('id' => '221','pertanyaan' => '<p>Cermati potongan kode berikut:<br />
          <code>public class main {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; pertama:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for( int i = 1; i &lt; 5; i++) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;kedua:<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;for(int j = 1; j &lt; 3; j ++ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;System.out.println(&quot;i = &quot; + i + &quot;; j = &quot; +j);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if ( i == 2) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // kode yang hilang &nbsp; }&nbsp;&nbsp; &nbsp;<br />
          } &nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code><br />
          Apabila ingin menghasilkan luaran berikut:<br />
          <code>i = 1; j = 1<br />
          i = 1; j = 2<br />
          i = 2; j = 1<br />
          i = 2; j = 2</code><br />
          Berikan rekomendasi perintah yang tepat untuk kode yang hilang</p>','kelas_id' => '25','created_at' => '2022-09-23 23:16:52','updated_at' => '2022-09-23 23:16:52','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah pernyataan break pertama. Program akan menghentikan perulangan yang pertama.</p>'),
            array('id' => '222','pertanyaan' => '<p>Apabila diketahui potongan kode berikut:<br />
          <code>public class mainFor {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int[] numbers = {10, 20, 30, 40, 50, 60, 70, 80, 90};<br />
          &nbsp; &nbsp; &nbsp; &nbsp; for (int x : numbers){ &nbsp; &nbsp; &nbsp;<br />
          if (x == 30 || x == 60 || x == 90 || x == 120) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue; // baris 1<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } &nbsp;System.out.print(x + &quot; &quot;);<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue; &nbsp; &nbsp;// baris 2<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; break; &nbsp; &nbsp; &nbsp; &nbsp;// baris 3<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue; &nbsp; &nbsp;// baris 4<br />
          }&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code><br />
          Simpulkan luaran dari kode tersebut</p>','kelas_id' => '25','created_at' => '2022-09-23 23:18:14','updated_at' => '2022-09-23 23:18:14','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah pernyataan Kesalahan kompilasi pada baris 3 dan baris 4. Setelah perintah continue, tidak boleh menggunakan break dan continue maka terjadi kesalahan kompilasi. Sedangkan continue pada baris 1 benar karena berada dalam perulangan if, setiap perulangan sebaiknya memiliki satu perintah continue atau break.</p>'),
            array('id' => '223','pertanyaan' => '<p>Diketahui potongan program berikut:<br />
          <code>[1] &nbsp;&nbsp; &nbsp;int a = 1;<br />
          [2]&nbsp;&nbsp; &nbsp;while ( a &lt; 3);<br />
          [3]&nbsp;&nbsp; &nbsp;{<br />
          [4]&nbsp;&nbsp; &nbsp;System.out.println(&#39;UB&#39;);<br />
          [5]&nbsp;&nbsp; &nbsp;a+=1;</code><br />
          &nbsp;&nbsp; &nbsp;Apabila dieksekusi menghasilkan luaran:<br />
          &nbsp;&nbsp;<code> &nbsp;Invalid character constant<br />
          &nbsp;&nbsp; &nbsp;Syntax error, insert &quot;}&quot;</code><br />
          &nbsp;&nbsp; &nbsp;Baca pernyataan dibawah ini:<br />
          a.&nbsp;&nbsp; &nbsp;baris [2] tanda titik koma dihapus&nbsp;<br />
          b.&nbsp;&nbsp; &nbsp;baris [2] ubah while menjadi do<br />
          c.&nbsp;&nbsp; &nbsp;baris [3] ditambah a++;<br />
          d.&nbsp;&nbsp; &nbsp;baris [4] ubah tanda &lsquo;UB&rsquo; menjadi &ldquo;UB&rdquo;<br />
          e.&nbsp;&nbsp; &nbsp;baris [4] tambahkan tanda } setelah System.out.println(&#39;UB&#39;);<br />
          f.&nbsp;&nbsp; &nbsp;baris [5] ubah operator a +=1; menjadi a++;<br />
          g.&nbsp;&nbsp; &nbsp;baris [5] tambahkan tanda } setelah a+=1;<br />
          &nbsp;&nbsp; &nbsp;Rekomendasikan perbaikan yang tepat untuk potongan kode ini adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:19:49','updated_at' => '2022-09-23 23:19:49','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah a &ndash; d &ndash; g. Pernyataan a yaitu baris [2] tanda titik koma dihapus. Pilihan d yaitu baris [4] ubah tanda &lsquo;UB&rsquo; menjadi &ldquo;UB&rdquo;. Pernyataan g.&nbsp;&nbsp; &nbsp;baris [5] tambahkan tanda } setelah a+=1. Apabila penyataan e yaitu baris [4] tambahkan tanda } setelah System.out.println(&#39;UB&#39;); dipilih maka perulangan akan berlanjut tanpa henti karena tidak ada Batasan.<br />
          &nbsp;&nbsp; <code>&nbsp;int a = 1;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while ( a &lt; 3)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;{ &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(&quot;UB&quot;);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; a+=1; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>'),
            array('id' => '224','pertanyaan' => '<p>Diketahui kedua potongan program berikut:<br />
          [1]&nbsp;&nbsp; &nbsp;<code>int i=1;</code><br />
          [2]&nbsp;&nbsp; <code>&nbsp;do</code><br />
          [3]&nbsp;&nbsp; &nbsp;<code>{</code><br />
          [4]&nbsp;&nbsp; <code>&nbsp;System.out.println(i);</code><br />
          [5]&nbsp;&nbsp; &nbsp;<code>}&nbsp;</code><br />
          [6]&nbsp;&nbsp; &nbsp;<code>while(i&lt;= 3);&nbsp;</code><br />
          Evaluasi peletakkan kode <code>(i++ )</code> untuk menghasilkan luaran 2 dan 3 yaitu</p>','kelas_id' => '25','created_at' => '2022-09-23 23:21:25','updated_at' => '2022-09-23 23:21:25','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah Kode i++ diletakkan pada baris ke-3 setelah {. Kode ini akan menambahkan i = 1 + 1 = 2 kemudian melakukan iterasi menghasilkan 2 dan 3. Pilihan Kode i++ diletakkan pada baris ke-1 &nbsp;setelah int i =1; dan Kode i++ diletakkan pada baris ke-6 sebelum while(i&lt;= 3); akan menyebabkan infinite loop atau perulangan tak berhingga. Pilihan Kode i++ diletakkan pada baris ke-5 sebelum } akan menghasilkan perulangan 1 dan 2</p>'),
            array('id' => '225','pertanyaan' => '<p>Pernyataan 1: Perulangan tidak terbatas merupakan kondisi ketika perulangan tidak bisa berhenti<br />
          Pernyataan 2: Kondisi perulangan dapat bernilai true dan false<br />
          Evaluasi kedua pernyataan tersebut:</p>','kelas_id' => '25','created_at' => '2022-09-23 23:22:43','updated_at' => '2022-09-23 23:22:43','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Pilihan yang benar adalah Pernyataan 1 benar, pernyataan 2 benar, dan keduanya tidak saling terkait. Kesalahan pemrograman yang umum terjadi adalah loop tidak bisa berhenti atau yang biasa disebut dengan infinite loop. Yaitu kesalahan yang mengakibatkan program tidak bisa menghentikan loop karena kondisi loop selalu bernilai true.</p>'),
            array('id' => '226','pertanyaan' => '<p>Cermati kode berikut:<br />
          &nbsp;&nbsp;<code> &nbsp;for (int a = 2; a &lt;=30; ++a){<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (a % 7! = 0)<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;/* Masukkan kode disini */<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if(a % 14 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(a)<br />
          &nbsp;&nbsp; &nbsp;}</code><br />
          Buat kode yang perlu dimasukkan ke dalam baris tersebut, agar menampilkan angka yang habis dibagi 14!</p>','kelas_id' => '25','created_at' => '2022-09-23 23:24:08','updated_at' => '2022-09-23 23:24:08','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Jawaban yang benar adalah pilihan continue. Perintah continue perulangan hanya melewati 1 kali proses iterasi saja.</p>'),
            array('id' => '227','pertanyaan' => '<p>Cermati baris kode berikut:<br />
          <code>[1]&nbsp;&nbsp; &nbsp;public class main {<br />
          [2]&nbsp;&nbsp; &nbsp;public static void main(String [] args) {<br />
          [3]&nbsp;&nbsp; &nbsp;for (int i =1; i &lt;=10; i++) {<br />
          [4]&nbsp;&nbsp; &nbsp;for (int i = 1; i &lt; 11; ++i) &nbsp;{ &nbsp;<br />
          [5]&nbsp;&nbsp; &nbsp;if (i == 6)<br />
          [6]&nbsp;&nbsp; &nbsp;if (i % 6)<br />
          [7]&nbsp;&nbsp; &nbsp;continue;<br />
          [8]&nbsp;&nbsp; &nbsp;break;<br />
          [9]&nbsp;&nbsp; &nbsp;else<br />
          [10]&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          [11]&nbsp;&nbsp; &nbsp;} &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code><br />
          Susun kembali kode tersebut untuk menampilkan angka dari 1 sampai 10 namun melewatkan angka 6!</p>','kelas_id' => '25','created_at' => '2022-09-23 23:25:32','updated_at' => '2022-09-23 23:25:32','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Jawaban yang benar adalah urutan 1 &ndash; 2 &ndash; 3 &ndash; 5 &ndash; 7 &ndash; &nbsp;9 &ndash; 10 &ndash; 11.&nbsp;<br />
          <code>public class Main {<br />
          &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; public static void main(String[] args) {<br />
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; for (int i=1;i&lt;=10;i++) //iterate loop from 1 to 10 {<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;if (i==6)<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;continue; &nbsp; &nbsp;//if i is 6 skip the iteration<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;else<br />
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; System.out.println(i); &nbsp;//print the i value<br />
          } &nbsp;&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code></p>'),
            array('id' => '228','pertanyaan' => '<p>Perhatikan potongan kode berikut<br />
          <code>public class kode1 {<br />
          &nbsp;&nbsp; &nbsp;public static void main(String[] args) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;for( /* kode A */ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; if (/* kode B */ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;continue; }<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; else if (/* kode C */ ) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;break; }<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;System.out.println(i);<br />
          }&nbsp;&nbsp; &nbsp;}&nbsp;&nbsp; &nbsp;}</code><br />
          Apabila ingin menghasilkan luaran&nbsp;<br />
          <code>0<br />
          1<br />
          2<br />
          4</code><br />
          Maka susunan kode untuk mengisi Kode A, Kode B, dan Kode C adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:26:57','updated_at' => '2022-09-23 23:26:57','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Jawaban yang benar adalah pilihan &nbsp;(kode A : &nbsp;int i=0;i&lt;6;i++), (kode B : i == 3), &nbsp;(kode C : i == 5) karena perintah continue berarti melanjutkan dengan melewatkan angka 3, dan perintah break berarti berhenti di nilai =5 tidak dilanjutkan.</p>'),
            array('id' => '229','pertanyaan' => '<p>Diketahui potongan program dengan for untuk menampilkan angka dari 0 sampai 9 berikut:<br />
          <code>for(int i=0; i&lt;10; i++) {<br />
          &nbsp; &nbsp;System.out.println(i);<br />
          }</code><br />
          Apabila ingin diubah menjadi while loop<br />
          <code>1)&nbsp;&nbsp; &nbsp;int i = 0;<br />
          2)&nbsp;&nbsp; &nbsp;while (i &lt; 10)&nbsp;<br />
          3)&nbsp;&nbsp; &nbsp;{<br />
          4)&nbsp;&nbsp; &nbsp;do {<br />
          5)&nbsp;&nbsp; &nbsp;i++;<br />
          6)&nbsp;&nbsp; &nbsp;System.out.println(i)<br />
          7)&nbsp;&nbsp; &nbsp;}</code><br />
          Susunan kode yang tepat adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:28:47','updated_at' => '2022-09-23 23:28:47','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah1 &ndash; 2 &ndash; 3 &ndash; 6 &ndash; 5 &ndash; 7. Apabila dituliskan menjadi&nbsp;<br />
          &nbsp;<code>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;int i=0;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while(i!&lt;10)&nbsp;&nbsp; &nbsp;{&nbsp;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(i);<br />
          i++; &nbsp; }&nbsp;&nbsp; &nbsp;</code><br />
          &nbsp;</p>'),
            array('id' => '230','pertanyaan' => '<p>Cermati potongan program berikut:<br />
          <code>[1]&nbsp;&nbsp; &nbsp;int count = 0;<br />
          [2]&nbsp;&nbsp; &nbsp;while (count &lt; 20)&nbsp;<br />
          [3]&nbsp;&nbsp; &nbsp;if (count % 5 == 0)<br />
          [4]&nbsp;&nbsp; &nbsp;{<br />
          [5]&nbsp;&nbsp; &nbsp;count++;<br />
          [6]&nbsp;&nbsp; &nbsp;System.out.println(count);<br />
          [7]&nbsp;&nbsp; &nbsp;}</code><br />
          Apabila ingin menghasilkan luaran&nbsp;<br />
          <code>0<br />
          5<br />
          10<br />
          15</code><br />
          Susunan rangkaian kode yang benar adalah</p>','kelas_id' => '25','created_at' => '2022-09-23 23:30:33','updated_at' => '2022-09-23 23:30:33','level_berfikir' => 'Menciptakan','pembahasan' => '<p>Pilihan yang benar adalah 1 &ndash; 2 &ndash; 4 &ndash; 3 &ndash; 6 &ndash; 5 &ndash; 7, dengan program<br />
          <code>int count = 0;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;while (count &lt; 20) {<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;if (count % 5 == 0)<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;System.out.println(count);<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;count++;<br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;}</code></p>'),

          array('id' => '232','pertanyaan' => '<p>Apa bentuk logika dari Fuzzy?</p>','kelas_id' => '32','created_at' => '2024-08-25 16:39:58','updated_at' => '2024-08-25 16:39:58','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Dengan logika fuzzy, keanggotaan himpunan ditentukan oleh nilai tertentu, sehingga memungkinkan adanya banyak nilai dalam himpunan tersebut.</p>'),
  array('id' => '233','pertanyaan' => '<p>Teori tradisional juga dikenal sebagai teori himpunan tegas</p>','kelas_id' => '32','created_at' => '2024-08-25 16:42:55','updated_at' => '2024-08-25 16:42:55','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Dalam teori himpunan tradisional, keanggotaan himpunan bersifat tetap atau pasti&mdash;entah anggota tersebut ada dalam himpunan atau tidak. Hanya ada dua nilai yang jelas: benar atau salah. Dalam logika fuzzy, ada banyak nilai, dengan penyertaan anggota dalam himpunan ditentukan oleh bobot, misalnya x.</p>'),
  array('id' => '234','pertanyaan' => '<p>Pernyataan 1: Nilai kebenaran pada teori tradisional / klasik adalah salah satu nilai dari 0 atau 1</p>

<p>Pernyataan 2: Nilai kebenaran pada teori Fuzzy adalah nilai diantara 0 dan 1</p>','kelas_id' => '32','created_at' => '2024-08-25 16:47:40','updated_at' => '2024-08-25 16:47:40','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Di mana&nbsp;logika klasik&nbsp;menyatakan bahwa segala hal dapat diekspresikan dalam istilah binary (0 atau 1, hitam atau putih, ya atau tidak) yaitu salah satu nilai dari 0 atau 1,&nbsp;<strong>logika fuzzy</strong>&nbsp;menggantikan kebenaran boolean dengan tingkat kebenaran yaitu nilai diantara 0 dan 1.</p>'),
  array('id' => '235','pertanyaan' => '<p>Pernyataan berikut:</p>

<p>Suhu ruangannya panas.</p>

<p>Istilah &ldquo;panas&rdquo; (penggunaan variabel bahasa) dapat direpresentasikan menjadi</p>','kelas_id' => '32','created_at' => '2024-08-25 16:50:15','updated_at' => '2024-08-25 16:50:15','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Logika fuzzy berurusan dengan variabel linguistik atau bahasa.</p>'),
  array('id' => '236','pertanyaan' => '<p>Nilai keanggotaan himpunan direpresentasikan oleh</p>','kelas_id' => '32','created_at' => '2024-08-25 16:51:23','updated_at' => '2024-08-25 16:51:23','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Dalam logika fuzzy, suatu elemen termasuk dalam suatu himpunan dengan derajat tertentu, yang mewakili derajat kebenaran. Konsep keanggotaan tidak memiliki nilai benar atau salah (1 atau 0) tetapi berkisar antara 0 &ndash; 1.</p>'),
  array('id' => '237','pertanyaan' => '<p>Teori Fuzzy Set mendefinisikan operator fuzzy. Pilih operator fuzzy dari yang berikut ini</p>','kelas_id' => '32','created_at' => '2024-08-25 16:53:20','updated_at' => '2024-08-25 16:53:20','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Operator AND, OR, dan NOT dari logika Boolean ada dalam logika fuzzy, biasanya didefinisikan sebagai minimum, maksimum, dan komplemen. Semua jawaban benar.</p>'),
  array('id' => '238','pertanyaan' => '<p>Aturan logika fuzzy biasanya dapat dituliskan dengan alur berikut</p>','kelas_id' => '32','created_at' => '2024-08-25 16:54:57','updated_at' => '2024-08-25 16:54:57','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Teori himpunan fuzzy mendefinisikan operator fuzzy pada himpunan fuzzy. Masalah dalam penerapannya adalah operator fuzzy yang tepat mungkin tidak diketahui. Karena alasan ini, logika fuzzy biasanya menggunakan aturan IF-THEN atau konstruksi yang ekuivalen, seperti matriks asosiatif fuzzy. Aturan biasanya dinyatakan dalam bentuk: IF variabel IS properti THEN tindakan</p>'),
  array('id' => '239','pertanyaan' => '<p>Kita dapat menggunakan fungsi keanggotaan untuk memecahkan masalah empiris berdasarkan</p>','kelas_id' => '32','created_at' => '2024-08-25 16:57:33','updated_at' => '2024-08-25 16:57:33','level_berfikir' => 'Menganalisis','pembahasan' => '<p>Pengalaman</p>'),
  array('id' => '240','pertanyaan' => '<p>Operasi fuzzy &quot;Union&quot; dalam himpunan fuzzy setara dengan operasi mana dalam logika klasik</p>','kelas_id' => '32','created_at' => '2024-08-25 16:58:36','updated_at' => '2024-08-25 16:58:36','level_berfikir' => 'Mengevaluasi','pembahasan' => '<p>Dalam logika fuzzy, operasi &quot;Union&quot; setara dengan operasi &quot;OR&quot; dalam logika klasik, di mana elemen termasuk dalam himpunan fuzzy jika termasuk dalam salah satu dari dua himpunan fuzzy yang diunion.</p>')
        );

        foreach ($bankSoals as $bankSoal) {
            DB::table('bank_soal_pembahasans')->insert($bankSoal);
        }
    }
}
