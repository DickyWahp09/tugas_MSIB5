// Data biodata yang akan ditampilkan
var biodata = {
  nama: "Dicky Wahyu Pratama",
  nomor_hp: "085230921101",
  alamat: "Ds.Woro, Kec.Kepohbaru, Kab.Bojonegoro, Jawa Timur",
  jenis_kelamin: "Laki-laki",
  umur: 19,
  keahlian: "Web Development",
  email: "dickywahyu358@gmail.com.com",
};

// Mengisi data ke elemen HTML
document.getElementById("nama").textContent = biodata.nama;
document.getElementById("nomor-hp").textContent = biodata.nomor_hp;
document.getElementById("alamat").textContent = biodata.alamat;
document.getElementById("jenis-kelamin").textContent = biodata.jenis_kelamin;
document.getElementById("umur").textContent = biodata.umur;
document.getElementById("keahlian").textContent = biodata.keahlian;
document.getElementById("email").textContent = biodata.email;
